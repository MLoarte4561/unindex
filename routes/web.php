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
Route::post('/sugerencia','universidadesController@crearsugerencia')->name('sugerencia');

Route::get('/universidades','universidadesController@universidad')->name('universidad');
Route::any('/universidad/{nombre}','universidadesController@getUniversidad')->name('uni');

Route::post('/universidades/{nombre}','universidadesController@valoracion')->name('valoracion');


Route::get('/ranking', 'universidadesController@ranking')->name('ranking');

Route::any('/perfil','usuarioController@datos')->name('perfil');

Route::get('/{id}/editar_perfil', 'usuarioController@edit')->name('editar');
Route::post('/{id}/editar_perfil','usuarioController@editar_datos')->name('new');


Route::get('/nosotros', function(){
	return view('content.nosotros');
})->name('nosotros');

Route::get('/test', function(){
	return view('content.test');
})->name('test');

Route::post('/test','usuarioController@enviarTest')->name('enviarTest');

Route::get('/login','usuarioController@index')->name('login');

Route::post('/login','usuarioController@login')->name('loginuser');

Route::get('/registrar','usuarioController@index_registro')->name('registrar');

Route::post('/registrar','usuarioController@registrar');



/* --------------------- Administrador ------------------------*/


Route::get('admin/home','adminController@index')->name('admin');

Route::get('admin/usuarios','adminController@getUsuarios')->name('usuarios');

Route::get('admin/sugerencias','adminController@getSugerencias')->name('sugerencias');

Route::get('admin/listado','adminController@getUniversidades')->name('listUni');
Route::post('admin/listado/delete/{id}','adminController@eliminarUni')->name('listUniDelete');
Route::post('admin/listado/{id}','adminController@updateUniversidades')->name('listUniUp');

Route::get('admin/carreras','adminController@carreras')->name('carreras');

Route::post('admin/carreras/{nombre}','adminController@getCarreras')->name('carreras_get');
Route::post('admin/carreras/insert/{nombre}','adminController@insertCarreras')->name('carreras_insert');
Route::post('admin/carreras/delete/{nombre}','adminController@deleteCarrera')->name('carreras_delete');
Route::post('admin/carreras/update/{nombre}','adminController@updateCarrera')->name('carreras_update');


Route::get('admin/universidades',function(){
	return view('admin_content.universidades_admin');
})->name('universidades');

Route::post('admin/universidades','adminController@insertUniversidad')->name('insert_universidad');

Route::get('/logout','usuarioController@logout')->name('logout');










