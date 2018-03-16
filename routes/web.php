<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::middleware(['checkMaintenance'])->group(function () {
    Auth::routes();
    Route::get('/', function () {
        return view('home');
    });
    //Route::post('/subscribe', 'GuestController@subscribe');
    Route::post('/contact', function (\Illuminate\Http\Request $request) {
        $message = new \App\Email;
        $message->name = $request->input('name', '');
        $message->email = $request->input('email', '');
        $message->subject = $request->input('subject', '');
        $message->message = $request->input('message', '');

        if ($message->save()) {
            return response()->json([
                'message' =>
                    'Your message has been sent'
            ]);
            /*return redirect('/')->with('status',
                'Thanks for contacting us, your  message has been received.');*/
        } else {
            return response()->json([
                'message',
                'Sorry, an error occurred. Your message was not sent.'
            ]);
            /*return redirect('/')->with('status',
                'Sorry, an error occurred. Your message was not sent');*/
        }

    });
    Route::prefix('/join')->group(function () {
        Route::get('/', function (\Illuminate\Http\Request $request) {
//            echo config('app.tlsavings_id1') . '<br>';
//            echo config('app.tlsavings_id2') . '<br>';
//            echo config('app.tlsavings_secret1') . '<br>';
//            echo config('app.tlsavings_secret2') . '<br>';
//            echo config('app.tlsavings_url') . '<br>';
//            echo config('app.tlsavings_redirect') . '<br>';

            return view('auth.join');
        });
        Route::post('/', function (\Illuminate\Http\Request $request) {
            $request->session()->put('reg_action', 'begin');
            $query = http_build_query([
                'client_id'     => config('app.tlsavings_id1'),
                'redirect_uri'  => config('app.tlsavings_redirect'),
                'response_type' => 'code',
                'scope'         => 'details',
            ]);

            return redirect(config('app.tlsavings_url') . '/oauth/authorize?'
                . $query);
        });
        Route::get('/charge', 'Auth\RegisterController@charge');
        Route::get('/confirm', 'Auth\RegisterController@confirm');
        Route::get('/authorize', function (\Illuminate\Http\Request $request) {
            if ($request->session()->has('user')) {
                $request->session()->reflash();
                return view('auth.confirm');
            }
            return redirect('/');
        });
        Route::get('/register', function (\Illuminate\Http\Request $request) {
            $request->session()->reflash();
            $data['registration'] = \App\Registration::where('reg_id',
                $request->input('reg_id', ''))->first();
            $html
                = \Illuminate\Support\Facades\View::make('auth.partials.register',
                $data);
            $html = $html->render();
            return response()->json([
                'html' => $html
            ]);
        });
        Route::post('/authorize',
            'Auth\RegisterController@authorizeTransaction');
        Route::post('/register', 'Auth\RegisterController@register');
        Route::get('/registrations',
            function (\Illuminate\Http\Request $request) {
                if ($request->session()->has('user')) {
                    $request->session()->keep(['user']);
                    $data['registrations']
                        = \App\Registration::where('wallet_id',
                        session('user')->wallet_id)
                        ->orderBy('created_at', 'desc')
                        ->get();
                    return view('auth.registrations', $data);
                }
                return redirect('/');
            });
        Route::get('/continue', function (\Illuminate\Http\Request $request) {
            $request->session()->put('reg_action', 'continue');
            $query = http_build_query([
                'client_id'     => config('app.tlsavings_id1'),
                'redirect_uri'  => config('app.tlsavings_redirect'),
                'response_type' => 'code',
                'scope'         => 'details',
            ]);

            return redirect(config('app.tlsavings_url') . '/oauth/authorize?'
                . $query);

        });
    });
});
Route::get('/maintenance', function () {
    if (config('app.maintenance') == true) {
        return view('errors.503');
    } else {
        return redirect('/');
    }
});
