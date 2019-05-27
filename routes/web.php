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
    return view('welcome');
});

Auth::routes();
Route::get('/mas-informacion','PaginaController@masInformacion')->name('masInformacion');
Route::get('/home', 'HomeController@index')->name('home');
Route::resource('licores', 'LicorController');
Route::resource('clientes', 'ClienteController');
Route::resource('reportes', 'ReporteController');

Route::get('seguimiento/envia-correo/{user}', 'MailSeguimientoController@enviaCorreo');
Route::resource('archivo', 'ArchivoController', ['except' => ['create', 'edit', 'update']]);
