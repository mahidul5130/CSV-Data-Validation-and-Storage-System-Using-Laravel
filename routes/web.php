<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\UserController@index')->name('home');
Route::post('/upload', 'App\Http\Controllers\UserController@upload')->name('upload');
Route::get('/list', 'App\Http\Controllers\UserController@userList')->name('list');