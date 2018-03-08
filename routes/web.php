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
});
Route::get('/maintenance', function () {
    if (config('app.maintenance') == true) {
        return view('errors.503');
    } else {
        return redirect('/');
    }
});
Route::post('/subscribe', 'GuestController@subscribe');
Route::prefix('/join')->group(function () {
    Route::get('', function () {
        return view('auth.join');
    });
    Route::post('/', function (\Illuminate\Http\Request $request) {
        $request->session()->put('action', 'begin');
        $query = http_build_query([
            'client_id'     => 5,
            'redirect_uri'  => 'http://tlskills.dev:8000/join/confirm',
            'response_type' => 'code',
            'scope'         => 'details transactions registrations',
        ]);

        return redirect('http://tlsavings.dev:8000/oauth/authorize?' . $query);
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
    Route::post('/registrations', function (\Illuminate\Http\Request $request) {
        $request->session()->put('action', 'continue');
        $query = http_build_query([
            'client_id'     => 5,
            'redirect_uri'  => 'http://tlskills.dev:8000/join/confirm',
            'response_type' => 'code',
            'scope'         => 'details transactions registrations',
        ]);

        return redirect('http://tlsavings.dev:8000/oauth/authorize?' . $query);
    });
});