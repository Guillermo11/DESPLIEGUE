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

Route::get('/', function () {
    return view('welcome');
});

*/
Route::get('/', 'MenuController@index');
Route::get('servicios', 'MenuController@servicios');
Route::get('galeri', 'MenuController@galeri');
Route::get('Formulario', 'MenuController@Formulario');

Auth::routes();

Route::resource('/home', 'HomeController');

Route::resource('admin', 'AdminController');
Route::resource('usuario', 'UsuarioController');
Route::resource('publicaciones', 'EventoController');
Route::resource('Empleo', 'EmpleoController');
