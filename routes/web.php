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
Route::get('/countries','countryController@index')->name('country');
Route::get('/countries/create','countryController@create')->name('create');
Route::post('/countries/create','countryController@store')->name('store');
Route::get('/countries/{id}','countryController@detail')->name('detail');
//Route::get('/countries/{id}/edit','countryController@edit')->name('edit');
Route::get('/countries/{country}/edit','countryController@edit')->name('edit');
Route::patch('/countries/{id}/edit','countryController@update')->name('update');
Route::get('/countries/{id}/delete','countryController@destroy')->name('delete');