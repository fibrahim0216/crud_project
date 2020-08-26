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



Route::get('/','countryController@index')->name('country');
Route::get('/create','countryController@create')->name('create');
Route::post('/create','countryController@store')->name('store');
Route::get('/update','countryController@update')->name('update');
Route::get('/details','countryController@details')->name('details');