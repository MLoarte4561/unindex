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

Route::get('/', function () {
    return view('content.inicio');
})->name('inicio');


Route::get('/universidades', function(){
	return view('content.universidades');
})->name('universidad');

Route::get('/ranking', function(){
	return view('content.ranking');
})->name('ranking');

Route::get('/nosotros', function(){
	return view('content.nosotros');
})->name('nosotros');

