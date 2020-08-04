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
Route::get('/login/PropertySystem', 'LoginController@PropertySystem');
Route::get('/login/logout', 'LoginController@logout');
Route::get('/login/PropertySystem', 'MYSQLAPIController@index');
Route::post('/login/PropertySystem', 'MYSQLAPIController@store');
route::put('/login/PropertySystem/{id}', 'MYSQLAPIController@update');
route::delete('/login/PropertySystem/{id}', 'MYSQLAPIController@delete');

