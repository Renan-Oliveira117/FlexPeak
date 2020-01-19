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

//Route::resource('contatos','ContatosController');

Route::get('/contatos','ContatosController@index');
Route::get('/contatos/create','ContatosController@create');
Route::post('/contatos/create','ContatosController@store');
Route::get ('/contatos/edit/{id}','ContatosController@edit');
Route::put ('/contatos/edit/{id}','ContatosController@update');
Route::delete ('/contato/{id}','ContatosController@destroy');