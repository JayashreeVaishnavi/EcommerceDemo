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

Route::get('', 'HomeController@index')->name('home');
Route::get('index', 'CarController@index');
Route::post('view', 'CarController@getCarView');
Route::get('cars/{model}', 'CarController@show')->name('car_show');
Route::get('years', 'CarController@getYears');
Route::get('companies', 'CarController@getCompanies');
Route::get('cars', 'CarController@getCars');
Route::get('payment', 'PaymentController@show')->name('payment');
Route::post('payment', 'PaymentController@pay')->name('stripe.post');
