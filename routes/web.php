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

Route::get('/painel', 'HomeController@index')->name('painel');

Route::resource('/empresa', 'Painel\EmpresaController');
Route::resource('/fontenaria', 'Painel\FontenariaController');

Route::resource('/painel/cliente', 'Painel\ClienteController');
Route::resource('/painel/distrito', 'Painel\DistritoController');
Route::resource('/painel/contrato', 'Painel\ContratoController');
Route::resource('/painel/taxa', 'Painel\TaxaPorMetroController');
Route::resource('/painel/fatura', 'Painel\FaturaController');
Route::resource('/painel/pagamento', 'Painel\PagamentoController');
Route::resource('/painel/data-limite', 'Painel\DataLimiteController');
Route::resource('/painel/valor-multa', 'Painel\ValorMultaController');
Route::resource('/painel/user', 'Painel\userController');
