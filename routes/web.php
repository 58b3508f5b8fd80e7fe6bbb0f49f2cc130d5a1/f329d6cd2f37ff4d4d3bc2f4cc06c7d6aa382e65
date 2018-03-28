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
    Route::middleware(['auth', 'isAdmin', 'isVerified'])->group(function () {
        Route::namespace('Admin')->group(function () {
            Route::prefix('/admin')->group(function () {
                Route::get('/', 'AdminController@index');
                Route::post('/settings/password',
                    'AdminController@changePassword');
                Route::middleware(['adminLevel'])
                    ->group(function () {
                        //

                        Route::middleware(['seniorAdminLevel'])
                            ->group(function () {
                                //
                                // drg >> route for centres
                                Route::get('/view/centre',
                                    'AdminController@viewCentres');

                                Route::middleware(['superAdminLevel'])
                                    ->group(function () {

                                        // drg >> route for users
                                        Route::get('/user/view',
                                            'AdminController@viewUsers');
                                        Route::get('/user/create',
                                            'AdminController@viewCreateUser');
                                        Route::post('/user/create',
                                            'AdminController@addUser');

                                        // drg >> route for centres
                                        Route::get('/centre/view',
                                            'AdminController@viewCentres');
                                        Route::get('/centre/create',
                                            'AdminController@viewAddCentre');
                                        Route::post('/centre/create',
                                            'AdminController@addCentre');
                                        Route::post('/centre/viewCentre',
                                            function (
                                                \Illuminate\Http\Request $request
                                            ) {
                                            $id = (int)$request->input('id',null) - 9407;
                                                return \App\Centre::where('id', $id)
                                                    ->first();
                                            });

                                        // drg >> route for assign centre
                                        Route::get('/centre/assign',
                                            'AdminController@viewAssignCentre');
                                        Route::get('/centre/coordinator',
                                            function (
                                                \Illuminate\Http\Request $request
                                            ) {
                                                $user = $request->input('q',
                                                    null);
                                                return \App\User::where('type',
                                                    'admin')
                                                    ->where('status', 'active')
                                                    ->where(function ($query
                                                    ) use ($user) {
                                                        $query->where('first_name',
                                                            'like', "%$user%")
                                                            ->orWhere('last_name',
                                                                'like',
                                                                "%$user%")
                                                            ->orWhere('email',
                                                                'like',
                                                                "%$user%")
                                                            ->orWhere('access_level',
                                                                'like',
                                                                "%$user%")
                                                            ->orWhere('name',
                                                                'like',
                                                                "%$user%");
                                                    })
                                                    ->select('first_name',
                                                        'last_name', 'name',
                                                        'access_level')
                                                    ->get();
                                            });
                                        Route::post('centre/assign',
                                            'AdminController@assignCentre');

                                        Route::post('/centre/verify',
                                            'AdminController@verifyCentre');
                                    });

                            });
                    });
            });
        });
    });
    Route::get('/', function () {
        return view('home');
    });
    Route::get('/register', function () {
        return redirect('/join');
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
        Route::get('/charge', 'JoinController@charge');
        Route::get('/confirm', 'JoinController@confirm');
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
        Route::post('/getlgas', 'JoinController@getLGAs');
        Route::post('/authorize',
            'JoinController@authorizeTransaction');
        Route::post('/register', 'JoinController@register');
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
