<?php

namespace App\Http\Controllers\Admin;

use App\Centre;
use App\Registration;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    //
    public function index(Request $request)
    {
        $data = [];
        if (Auth::user()->access_level >= 4) {
            $data = $this->getAllStudents($request);
        } elseif (Auth::user()->access_level == 3) {
            $data = $this->getAllStudents($request);
        }
        return view('admin.dashboard', $data);
    }

    public function addCentre(Request $request)
    {
        $details = $request->all();
        $centre = false;
        $this->validateCentre($details)->validate();

        if (Auth::user()->access_level >= 4) {
            $centre = Centre::create([
                'zone'        => $details['zone'],
                'centre'      => $details['centre'],
                'coordinator' => $details['coordinator'],
                'status'      => $details['status'],
            ]);
        }

        if ($centre) {
            $data['alert'] = 'success';
            $request->session()
                ->flash('message', 'New Centre was created successfully');

        } else {
            $data['alert'] = 'danger';
            $request->session()
                ->flash('message', 'There was an error in creating the centre');

        }
        $data['action'] = 'new centre';

        return redirect('/admin/centre/view')->with('data', $data);

    }

    public function addUser(Request $request)
    {
        $details = $request->all();
        $admin = false;
        $this->validateUsers($details)->validate();
        $level = $details['level'] % 17;

        if (Auth::user()->access_level >= $level + 1) {
            $admin = User::create([
                'first_name'   => $details['first_name'],
                'last_name'    => $details['last_name'],
                'wallet_id'    => md5($details['email'] . date('YmdHis')),
                'name'         => $details['name'],
                'email'        => $details['email'],
                'password'     => bcrypt(md5($details['email'])),
                'private_key'  => md5($details['email']),
                'type'         => 'admin',
                'status'       => 'active',
                'access_level' => "$level",
            ]);
        }

        if ($admin) {
            $data['alert'] = 'success';
            $request->session()
                ->flash('message', 'New Admin was created successfully');

        } else {
            $data['alert'] = 'danger';
            $request->session()
                ->flash('message', 'There was an error in creating the admin');

        }
        $data['action'] = 'new admin';

        return redirect('admin/user/create')->with('data', $data);

        // return view('admin.newAdmin', $data);
    }

    public function getAllStudents($request)
    {
        $data['centres'] = Registration::where('status', '<>', 'pending')
            ->select('zone', 'centre', DB::raw('count("*") as amount'))
            ->groupBy('zone', 'centre')->orderBy('zone', 'centre')
            ->get();
        $data['students'] = Registration::where('status', '<>', 'pending')
            ->orderBy('zone')->orderBy('centre')->orderBy('programme')
            ->orderBy('updated_at')
            ->orderBy('first_name')->get();
        return $data;
    }

    public function changePassword(Request $request)
    {
        $currentPassword = $request->input('current_password');
        $password = $request->input('password');
        $validator = Validator::make($request->all(), [
            'password' => 'required|string|min:6|confirmed'
        ]);
        if (Hash::check($currentPassword, Auth::user()->password)) {
            $changed = $request->user()->fill([
                'password' => Hash::make($password)
            ])->save();
            if (!$changed) {
                $request->session()
                    ->flash('message', 'Your password could not be changed.');
                return redirect('/admin')->withInput();
            }
            return redirect('/admin')->with('message',
                'Your password was changed succefully.');
        } else {
            $validator->errors()
                ->add('current', 'Your current password is incorrect');
            return redirect('/admin')->withErrors($validator);
        }
    }

    public function updateCentre(Request $request){
        $id = $request->input('id');
        $centre = Centre::find($id - 1107);

        $centre->zone = $request->input('zone');
        $centre->centre = $request->input('centre');

        if ($centre->save()) {
            $message = "Centre was edited successfully";
            $data['action'] = 'centres';
            $data['centres'] = Centre::orderBy('zone', 'asc')
                ->orderBy('centre', 'asc')->orderBy('coordinator', 'asc')
                ->orderBy('status', 'asc')->get();

            $html = View::make('admin.partials.centres', $data);
            $html = $html->render();

            return response()->json([
                'status'  => 'success',
                'message' => $message,
                'html'    => $html
            ]);
        } else {
            $message = "There was an error in editing the centre";
            return response()->json([
                'status'  => 'failed',
                'message' => $message
            ]);
        }
    }
    public function validateCentre(array $data)
    {
        return Validator::make($data, [
            'zone'        => 'required|string|max:255',
            'centre'      => 'required|string|max:255',
            'coordinator' => 'required|string|max:255',
            'status'      => 'required|string|in:active,inactive',
        ]);
    }

    public function validateUsers(array $data)
    {
        return Validator::make($data, [
            'name'  => 'required|string|unique:users|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'level' => 'required'
        ]);
    }

    public function verifyCentre(Request $request)
    {
        $id = $request->input('id');
        $action = $request->input('action');
        $for = $request->input('for');
        $centre = Centre::find($id - 1107);
        $message = '';

        switch ($action) {
            case('activate'):
                $centre->status = 'active';
                $message = 'Admin has been activated successully';
                break;
            case('deactivate'):
                $centre->status = 'inactive';
                $message = 'The admin has been deactivated';
                break;
        }

        if ($centre->save()) {
            $data['action'] = 'centres';
            $data['centres'] = Centre::orderBy('zone', 'asc')
                ->orderBy('centre', 'asc')->orderBy('coordinator', 'asc')
                ->orderBy('status', 'asc')->get();

            $html = View::make('admin.partials.centres', $data);
            $html = $html->render();

            return response()->json([
                'status'  => 'success',
                'message' => $message,
                'html'    => $html
            ]);
        }


        return response()->json([
            'status'  => 'failed',
            'message' => 'Sorry, an error occurred.'
        ]);
    }

    public function viewCentres()
    {
        $data['action'] = 'centres';
        $data['centres'] = Centre::leftJoin('users', 'users.name', '=',
            'centres.coordinator')->orderBy('centres.zone', 'asc')
            ->orderBy('centres.centre', 'asc')->orderBy('centres.coordinator', 'asc')
            ->orderBy('centres.status', 'asc')->select('centres.*','users.first_name',
                'users.last_name', 'users.name',
                'users.access_level')->get();
        return view('admin.centres', $data);
    }

    public function viewUsers()
    {
        $data['action'] = 'admin';
        $data['type'] = 'admin';
        $data['users'] = User::where('type', 'admin')
            ->where('access_level', '<', Auth::user()->access_level)->get();
        return view('admin.users', $data);
    }

    public function viewCreateUser()
    {
        $data['action'] = 'new admin';
        return view('admin.newAdmin', $data);
    }
}
