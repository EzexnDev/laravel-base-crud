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

// Route::get('/', 'BookingController@index')->name('home');

// Route::get('/{id}', 'BookingController@show')->name('guestdetails');

// // CONTROLLA CHE LA ROTTA /CREATE SIA CORRETTA PRIMA DI DICHIARARE LA FUNCTION
// Route::post('/create', 'BookingController@create')->name('');

Route::resource('/category', 'CategoryController');

Route::resource('/post', 'PostController');

Route::resource('/postinformation/{id}', 'PostInformation');
