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

//Homepage
Route::get('/', function () {
    return view('start');
});

//Auth routes
//Register
Route::get('auth/register', function () {
    return view('auth/register');
});

Route::post('auth/register', 'Auth\AuthController@postRegister');

//Login
Route::get('auth/login', 'Auth\AuthController@getLogin');

Route::post('auth/login', 'Auth\AuthController@postLogin');

// Not sure whether this one needs a page...
// Route::get('/logout', function () {
//     return view('logout');
// });

Route::get('auth/logout', 'Auth\AuthController@getLogout');

//Routes only available when loged in: protection required!
// Deze moet beveiligd worden
Route::get('members', function () {
    return view('members');
});

//Controllers
Route::controllers([
   'password' => 'Auth\PasswordController',
]);
