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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/clientes', 'App\Http\Controllers\ClientesController@index')
	->name('clientes.index');
Route::get('/encomendas', 'App\Http\Controllers\EncomendasController@index')
	->name('encomendas.index');	
Route::get('/produtos', 'App\Http\Controllers\ProdutosController@index')
	->name('produtos.index');	
Route::get('/vendedores', 'App\Http\Controllers\VendedoresController@index')
	->name('vendedores.index');