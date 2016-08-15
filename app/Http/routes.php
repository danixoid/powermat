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

Route::get('/', function () {
    return view('home');
});

Route::get('/products', function () {
    return view('products');
});

Route::get('/business', function () {
    return view('business');
});

Route::get('/map', function () {
    return view('map');
});


Route::resource('news','PageController');


Route::controllers([
    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController',
//    'admin' => 'AdminController',
]);