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

Route::get('/', function () {
    return view('home');
});

Route::get('/users/resistration', 'UsersController@resistration')->name('resistration');
Route::post('/users/resistration', 'UsersController@signup')->name('signup');
Route::get('/users/session', 'UsersController@session')->name('session');
Route::post('/users/session', 'UsersController@login')->name('login');
