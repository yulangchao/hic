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

Route::get('/', 'FrontController@getIndex');
Route::get('/login', 'UserController@Login');
Route::get('auth/register', 'UserController@getRegister');
Route::post('auth/register', 'UserController@postRegister');
Route::get('auth/login', 'UserController@getLogin');
Route::post('auth/login', 'UserController@postLogin');
Route::get('auth/logout', 'UserController@getLogout');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
