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

// Página Inicial
Route::get('/', function () {
    return view('homepage');
});

// Faz com que a rota 'register' seja acessada somente se autenticado
Auth::routes(['register' => true]);

Auth::routes();

Route::group(['prefix' => 'Painel', 'prefix' => 'painel'], function () {
    Route::get('/', 'HomeController@index')->name('painel');
    Route::get('/controlefuncionarios', 'FuncionarioController@index')->name('controlfuncionarios');
});
