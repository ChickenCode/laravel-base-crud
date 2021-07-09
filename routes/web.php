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
//mostra tutti i fumetti
Route::get('/', 'ComicsController@index')->name('comics.index');

//salva i fumetti
Route::post('/comics/store', 'ComicsController@store')->name('comics.store');

//Form per un nuovo fumetto
Route::get('/comics/create', 'ComicsController@create')->name('comics.create');

//Usa gli input per filtrare tra i risultati
Route::post('/comics/filter', 'ComicsController@filter')->name('comics.filter');

//Mostra un solo fumetto
Route::get('/comics/{comic}', 'ComicsController@show')->name('comics.show');

//updata un fumetto. Questa è la parte che salva i dati
Route::match(['PUT', 'PATCH'], '/comics/{comic}', 'ComicsController@update')->name('comics.update');

//cancella i dati di un fumetto
Route::delete('/comics/{comic}', 'ComicsController@destroy')->name('comics.destroy');

//form che serve accoppiato con l'update
Route::get('/comics/{comic}/edit', 'ComicsController@edit')->name('comics.edit');
// Route::resource("/comics", "ComicsController");

