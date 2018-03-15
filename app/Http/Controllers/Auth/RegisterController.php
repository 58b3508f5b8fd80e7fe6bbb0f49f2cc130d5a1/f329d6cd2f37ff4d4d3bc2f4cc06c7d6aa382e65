<?php

namespace App\Http\Controllers\Auth;

use App\Registration;
use App\Setting;
use App\User;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\BadResponseException;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     *
     * @return \App\User
     */

    protected function create(array $data)
    {
        return User::create([
            'name'     => $data['name'],
            'email'    => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function authorizeTransaction(Request $request)
    {
        $client = new Client;

        try {
            if ($request->session()->has('user')) {
                $request->session()->reflash();
            }
            $pin = $request->input('pin', null);
            $response = $client->post('http://tlsavings.dev:8000/oauth/token',
                [
                    'form_params' => [
                        'grant_type'    => 'password',
                        'client_id'     => '7',
                        'client_secret' => '7W7uKJjP8z2MOHi56dnteYI4nLx2AxpwDbocSBwE',
                        'username'      => session('user')->wallet_id,
                        'password'      => $pin,
                        'scope'         => 'transactions registrations'
                    ]
                ]);
            // You'd typically save this payload in the session
            $auth = json_decode((string)$response->getBody());
            $client = new Client;

            $response = $client->request('put',
                'http://tlsavings.dev:8000/api/regcharge', [
                    'headers' => [
                        'Accept'        => 'application/json',
                        'Authorization' => 'Bearer '
                            . $auth->access_token,
                    ],
                ]);
            $details = json_decode((string)$response->getBody());

            $request->session()->flash('user', $details->user);
            $request->session()->flash('amount', $details->amount);

            if ($details->status) {
                $registration = new Registration;
                $registration->wallet_id = $details->user->wallet_id;
                $registration->reg_id = $details->transaction_id;
                $registration->status = 'pending';
                $registration->save();
            }
            $data['status'] = $details->data;

            return redirect('join/registrations')->with('status',
                $details->data);

        } catch (BadResponseException $e) {
            echo "Unable to retrieve access token. " . $e->getMessage();
        }
        return redirect('/');
    }

    public function getRegistrations()
    {
        $data['registrations'] = Registration::where('wallet_id',
            session('user')->wallet_id)->get();
        return view('auth', $data);
    }

    function confirm(Request $request)
    {
        $client = new Client;

        //var_dump($request);

        try {
            if ($request->session()->has('reg_action')) {
                $action = session('reg_action');

                $response
                    = $client->post('http://tlsavings.dev:8000/oauth/token',
                    [
                        'form_params' => [
                            'grant_type'    => 'authorization_code',
                            'client_id'     => '5',
                            'client_secret' => 'AM1zeu7c4xduh2i6tLAF6qEaA1qZiQTVKJgzGH22',
                            'redirect_uri'  => 'http://tlskills.dev:8000/join/confirm',
                            'code'          => $request->code,
                        ],
                    ]);

                // You'd typically save this payload in the session
                $auth = json_decode((string)$response->getBody());
                $client = new Client;

                $response = $client->request('get',
                    'http://tlsavings.dev:8000/api/confirm', [
                        'headers' => [
                            'Accept'        => 'application/json',
                            'Authorization' => 'Bearer '
                                . $auth->access_token,
                        ],
                    ]);

                $details = json_decode((string)$response->getBody());

                $request->session()->flash('user', $details->user);
                $request->session()->flash('amount', $details->amount);

                switch ($action) {
                    case 'begin':
                        return redirect('/join/authorize');
                        break;
                    case 'continue':
                        return redirect('/join/registrations');
                        break;
                    case 'join':
                        return redirect('join');
                        break;
                }
            }
            return redirect('/');

        } catch
        (BadResponseException $e) {
            echo "Unable to retrieve access token. " . $e->getMessage();
        }
    }

    public function join(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    public function register(Request $request)
    {
        try {
            $details = $request->all();

            //$this->validateUser($details)->validate();
            $details['updated_at'] = now();
            $details['status'] = 'registered';
            array_splice($details, 0, 1);
            $register = Registration::where('reg_id', $request->reg_id)
                ->update($details);
            if ($register) {
                $data['alert'] = 'success';
                $data['message'] = $details['first_name'] . " "
                    . $details['last_name']
                    . " has been registered successfully";
            } else {
                $data['alert'] = 'danger';
                $data['message'] = 'Your registration was not successful';
            }
            $request->session()->reflash();

            return redirect('join/registrations')->with('status', (object) $data);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
        return redirect('/');
    }
}
