<?php

namespace App\Http\Controllers\Admin;

use App\Registration;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

    public function addAdmin(Request $request)
    {
        $details = $request->all();
        $admin = false;
        $this->validateAdmin($details)->validate();
        $level = $details['level'] % 17;

        if (Auth::user()->access_level <= $level + 1) {
            $admin = User::create([
                'first_name'     => $details['first_name'],
                'last_name'      => $details['last_name'],
                'wallet_id'      => md5($details['email'] . date('YmdHis')),
                'name'           => $details['name'],
                'email'          => $details['email'],
                'password'       => bcrypt(md5($details['email'])),
                'private_key'    => md5($details['email']),
                'type'           => 'admin',
                'status'         => 'active',
                'access_level'   => "$level",
            ]);
        }

        if ($admin) {
            $data['alert'] = 'success';
            $data['message'] = "New Admin was created successfully";

        } else {
            $data['alert'] = 'danger';
            $data['message'] = "There was an error in creating the admin";

        }
        $data['action'] = 'new admin';

        return redirect('admin/create/admin')->with('data', $data);

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

    public function validateAdmin(array $data)
    {
        return Validator::make($data, [
            'name'  => 'required|string|unique:users|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'level' => 'required'
        ]);
    }

    public function viewAdmins()
    {
        $data['action'] = 'admin';
        $data['type'] = 'admin';
        $data['users'] = User::where('type', 'admin')
            ->where('access_level', '<', Auth::user()->access_level)->get();
        return view('admin.users', $data);
    }

    public function viewCreateAdmin()
    {
        $data['action'] = 'new admin';
        return view('admin.newAdmin', $data);
    }
}
