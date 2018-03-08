<?php

namespace App\Http\Controllers\Auth;

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

    public function beginRegistration(Request $request, $auth){
        $client = new Client;
        $response = $client->request('get',
            'http://tlsavings.dev:8000/api/confirm', [
                'headers' => [
                    'Accept'        => 'application/json',
                    'Authorization' => 'Bearer ' . $auth->access_token,
                ],
            ]);

        $details = json_decode((string)$response->getBody());

        $request->session()->flash('user', $details->data);
        $request->session()->flash('amount', $details->amount);
        return redirect('/join/authorize');//view('auth.confirm', $data);

    }
    public function continueRegistration(Request $request, $auth){
        $client = new Client;
        $response = $client->request('get',
            'http://tlsavings.dev:8000/api/getTransactions', [
                'headers' => [
                    'Accept'        => 'application/json',
                    'Authorization' => 'Bearer ' . $auth->access_token,
                ],
            ]);

        $details = json_decode((string)$response->getBody());

        $request->session()->flash('user', $details->data);
        $request->session()->flash('amount', $details->amount);
        return ;
    }
    public function charge(Request $request)
    {
        $client = new Client;

        try {
            $response = $client->post('http://tlsavings.dev:8000/oauth/token', [
                'form_params' => [
                    'grant_type'    => 'authorization_code',
                    'client_id'     => '5',
                    'client_secret' => 'AM1zeu7c4xduh2i6tLAF6qEaA1qZiQTVKJgzGH22',
                    'redirect_uri'  => 'http://tlskills.dev:8000/charge',
                    'code'          => $request->code,
                ]
            ]);

            // You'd typically save this payload in the session
            $auth = json_decode((string)$response->getBody());

            $response = $client->request('POST',
                'http://tlsavings.dev:8000/api/charge', [
                    'headers' => [
                        'Accept'        => 'application/json',
                        'Authorization' => 'Bearer ' . $auth->access_token,
                    ],
                    'pin'     => $request->pin,
                    'amount'  => $request->amount
                ]);

            $todos = json_decode((string)$response->getBody());

            var_dump($todos);
            /*$todoList = "";
            foreach ($todos as $todo) {
                $todoList .= "<li>{$todo->transaction_id} ".($todo->done ? '' : '✅')."</li>";
            }

            echo "<ul>{$todoList}</ul>";*/

        } catch (BadResponseException $e) {
            echo "Unable to retrieve access token. " . $e->getMessage();
        }

    }

    function confirm(Request $request)
    {
        $client = new Client;

        try {
            $response = $client->post('http://tlsavings.dev:8000/oauth/token', [
                'form_params' => [
                    'grant_type'    => 'authorization_code',
                    'client_id'     => '5',
                    'client_secret' => 'AM1zeu7c4xduh2i6tLAF6qEaA1qZiQTVKJgzGH22',
                    'redirect_uri'  => 'http://tlskills.dev:8000/join/confirm',
                    'code'          => $request->code,
                ]
            ]);

            // You'd typically save this payload in the session
            $auth = json_decode((string)$response->getBody());
            if($request->session()->has('action')){
                switch(session('reg_action')){
                    case 'continue':
                        $this->continueRegistration($request,$auth);
                        break;
                    case 'begin':
                        $this->beginRegistration($request,$auth);
                        break;
                    default:
                        return redirect('/');
                }
            }

        } catch (BadResponseException $e) {
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
}
