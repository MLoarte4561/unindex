<?php

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

Route::get('/', 'universidadesController@distritos')->name('inicio');

Route::get('/universidades','universidadesController@universidad')->name('universidad');
Route::get('/universidades/{nombre}','universidadesController@getUniversidad')->name('uni');
Route::post('/universidades/{nombre}','universidadesController@crearsugerencia')->name('sugerencia');


Route::get('/ranking', 'universidadesController@ranking')->name('ranking');

Route::get('/nosotros', function(){
	return view('content.nosotros');
})->name('nosotros');

Route::get('/login','usuarioController@index')->name('login');

Route::post('/login','usuarioController@login')->name('loginuser');

Route::get('/registrar','usuarioController@index_registro')->name('registrar');

Route::post('/registrar','usuarioController@registrar');

