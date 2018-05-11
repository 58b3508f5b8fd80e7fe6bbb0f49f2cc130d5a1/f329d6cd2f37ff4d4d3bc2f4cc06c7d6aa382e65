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
Route::middleware(['checkMaintenance'])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
});
Route::get('/maintenance', function () {
    if (config('app.maintenance') == true) {
        return view('errors.503');
    } else {
        return redirect('/');
    }
});
Route::get('/debug', function () {
    try {
        Mail::raw('Sending emails with Mailgun and Laravel is easy!',
            function ($message) {
                $message->subject('Mailgun and Laravel are awesome!');
                $message->from('noreply@touchinglivesskills.xyz', 'TLSkills');
                $message->to('nduovictor@gmail.com');
            });
    } catch (Exception $e) {
        echo $e->getMessage();
    }
});
