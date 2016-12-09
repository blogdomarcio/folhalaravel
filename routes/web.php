<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');


Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('/empresa', ['uses'=>'EmpresaController@index','as'=>'empresa.index']);
Route::get('/empresa/adicionar', ['uses'=>'EmpresaController@adicionar','as'=>'empresa.adicionar']);
Route::get('/empresa/editar/{id}', ['uses'=>'EmpresaController@editar','as'=>'empresa.editar']);
Route::put('/empresa/atualizar/{id}', ['uses'=>'EmpresaController@atualizar','as'=>'empresa.atualizar']);
Route::get('/empresa/deletar/{id}', ['uses'=>'EmpresaController@deletar','as'=>'empresa.deletar']);
Route::get('/empresa/detalhe/{id}', ['uses'=>'EmpresaController@detalhe','as'=>'empresa.detalhe']);
Route::post('/empresa/salvar', ['uses'=>'EmpresaController@salvar','as'=>'empresa.salvar']);





Route::get('/funcionario', ['uses'=>'FuncionarioController@index','as'=>'funcionario.index']);

Route::get('/periodo', ['uses'=>'PeriodoController@index','as'=>'periodo.index']);

Route::get('/folha', ['uses'=>'FolhaController@index','as'=>'folha.index']);


Route::get('/', function () {
    return view('portal/index');
});