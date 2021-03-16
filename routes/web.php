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
Route::get('/foundations/create', 'App\Http\Controllers\FoundationsController@create')->name("foundations.create");
Route::get('/foundations/list', 'App\Http\Controllers\FoundationsController@list')->name("foundations.list");
Route::post('/foundations/save', 'App\Http\Controllers\FoundationsController@save')->name("foundations.save");
Route::get('/foundations/show/{id}', 'App\Http\Controllers\FoundationsController@show')->name("foundations.show");
Route::get('/foundations/delete/{id}', 'App\Http\Controllers\FoundationsController@delete')->name("foundations.delete");