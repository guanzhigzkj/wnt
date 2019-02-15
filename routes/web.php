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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/login', 'AuthingController@login')->name('login');
Route::post('/dologin', 'AuthingController@dologin')->name('dologin');
Route::get('/signup', 'AuthingController@signup')->name('signup');
Route::post('/dosignup', 'AuthingController@dosignup')->name('dosignup');
Route::get('/{user?}', 'IndexController@index')->name('index');