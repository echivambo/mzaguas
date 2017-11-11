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

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/empresa', 'Painel\EmpresaController');
Route::resource('/fontenaria', 'Painel\FontenariaController');
Route::resource('/painel/cliente', 'Painel\ClienteController');
Route::resource('/painel/distrito', 'Painel\DistritoController');
Route::resource('/painel/contrato', 'Painel\ContratoController');
Route::resource('/painel/taxa', 'Painel\TaxaPorMetroController');
