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

// Home route
Route::get('/', 'App\Http\Controllers\UserController@index')->name('home');

// Upload route
Route::post('/upload', 'App\Http\Controllers\UserController@upload')->name('upload');

// User list route
Route::get('/list', 'App\Http\Controllers\UserController@userList')->name('list');