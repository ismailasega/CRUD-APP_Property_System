<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/login', 'LoginController@index');
Route::post('/login/checklogin', 'LoginController@checklogin');
Route::get('/login/DataCMS', 'LoginController@successlogin');
Route::get('/login/logout', 'LoginController@logout');
Route::get('/PropertySystem', 'MYSQLAPIController@index');
Route::post('/PropertySystem', 'MYSQLAPIController@insert');


