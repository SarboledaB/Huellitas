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

Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");
Route::get('/index', 'App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/user/show/{id}', 'App\Http\Controllers\UserController@show')->name("user.show");
Route::get('/user/list', 'App\Http\Controllers\UserController@list')->name("user.list");
Route::get('/user/create', 'App\Http\Controllers\UserController@create')->name("user.create");
Route::post('/user/save', 'App\Http\Controllers\UserController@save')->name("user.save");
Route::get('/user/delete/{id}', 'App\Http\Controllers\UserController@delete')->name("user.delete");