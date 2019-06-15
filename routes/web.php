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
Route::any('/universidades/{nombre}','universidadesController@getUniversidad')->name('uni');

Route::post('/universidades/{nombre}','universidadesController@valoracion')->name('valoracion');


Route::get('/ranking', 'universidadesController@ranking')->name('ranking');

Route::get('/perfil','usuarioController@datos')->name('perfil');

Route::get('/{id}/editar_perfil', 'usuarioController@edit')->name('editar');
Route::post('/{id}/editar_perfil','usuarioController@editar_datos')->name('new');


Route::get('/nosotros', function(){
	return view('content.nosotros');
})->name('nosotros');

Route::get('/login','usuarioController@index')->name('login');

Route::post('/login','usuarioController@login')->name('loginuser');

Route::get('/registrar','usuarioController@index_registro')->name('registrar');

Route::post('/registrar','usuarioController@registrar');


/* --------------------- Administrador ------------------------*/
Route::get('admin',function(){
	return view('admin_content.login_admin');
})->name('login_admin');

Route::post('admin','adminController@loginAdm')->name('log');


Route::get('admin/home','adminController@index')->name('admin');

Route::get('admin/usuarios','adminController@getUsuarios')->name('usuarios');

Route::get('admin/sugerencias','adminController@getSugerencias')->name('sugerencias');


Route::get('admin/universidades',function(){
	return view('admin_content.universidades_admin');
})->name('universidades');

Route::get('admin/noticias',function(){
	return view('admin_content.noticias_admin');
})->name('noticias');

Route::get('/logout','usuarioController@logout')->name('logout');










