<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleWare group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Route::get('register','RegisterController@getRegisterView');

Route::post('doRegister','RegisterController@validateRegister');

Route::get('login','LoginController@getLoginView');

Route::post('validateLogin','ValidationController@validateLogin');
