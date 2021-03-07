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

/*
|--------------------------------------------------------------------------
| Author: Sebastian Arboleda Botero
| Email:  sarboledab@eafit.edu.co
|--------------------------------------------------------------------------
*/




Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");

//PetItem Routes
Route::get('/petItem/show/{id}', 'App\Http\Controllers\PetItemController@show')->name("petItem.show");
Route::get('/petItem/create', 'App\Http\Controllers\PetItemController@create')->name("petItem.create");
Route::get('/petItem/list', 'App\Http\Controllers\PetItemController@list')->name("petItem.list");
Route::post('/petItem/save', 'App\Http\Controllers\PetItemController@save')->name("petItem.save");
Route::delete('/petItem/delete/{id}', 'App\Http\Controllers\PetItemController@delete')->name("petItem.delete");
