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
    return view('start');
});

// Deze moet beveiligd worden
Route::get('/members', function () {
    return view('members');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/login', function () {
    return view('login');
});

// Not sure whether this one needs a page...
Route::get('/logout', function () {
    return view('logout');
});

Route::get('/home', function () {
    return view('home');
});
// Example 2
// login url http://www.example.com/login
// logout url http://www.example.com/logout
// registration url http://www.example.com/register
Route::controllers([
    '' => 'Auth\AuthController', 
    'password' => 'Auth\PasswordController',
]);