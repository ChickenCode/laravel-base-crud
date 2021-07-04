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

// Route::get('/comics', 'ComicsController@index')->name('comics.index');

// Route::get('/comics/create', 'ComicsController@create')->name('comics.create');

// Route::get('/comics/{comic}', 'ComicsController@show')->name('comics.show');

// Route::post('/comics/store', 'ComicsController@store')->name('comics.store');

Route::resource("/comics", "ComicsController");