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

Route::get('/', 'HomeController@index');
Route::get('/product', 'ProductController@index');
Route::get('/product/{id}', 'ProductController@show');
Route::get('/booking', 'BookingController@create');
Route::get('/category/{id}', 'CategoryController@show');
Route::get('/test', 'BookingController@index');
Route::post('','BookingController@store')->name('Booking.store');
Auth::routes();


