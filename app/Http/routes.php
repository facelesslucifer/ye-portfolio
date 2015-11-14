<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'HomeController@index');

Route::post('/contact/submit', 'HomeController@submit');

Route::get('/test', function() {
    $data = array(
        'name' => "Learning Laravel",
        'email' => 'facelesslucifer@gmail.com',
        'message' => 'hello'
    );

    return view('emails.welcome', $data);
});