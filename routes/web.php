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

Route::get('/registrar','MasterController@index')->name('registar');

Route::get('/crear','MasterController@create')->name('crear');

Route::get('/crear/{fila}/editar','MasterController@edit')->name('edit');

Route::patch('/crear/{fila}','MasterController@update')->name('update');

Route::delete('crear/{fila}','MasterController@destroy')->name('destroy');

Route::post('/crear','MasterController@store')->name('store');

//Route::resource('/registrar','MasterController');
