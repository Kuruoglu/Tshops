<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'HomeController@index');
Route::get('/profile/{id}', 'Profile\ProfileController@index');
Route::get('/organize/create/order', 'OrderController@create')->middleware('auth');
Route::post('/organize/create/store', 'OrderController@store')->middleware('auth');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
