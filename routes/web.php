<?php



Route::get('/', function () {
    return view('welcome');
});


// Criação de rotas 

Route::get('/contatos','ContatosController@index');
Route::get('/contatos/create','ContatosController@create');
Route::post('/contatos/create','ContatosController@store');
Route::get ('/contatos/edit/{id}','ContatosController@edit');
Route::put ('/contatos/edit/{id}','ContatosController@update');
Route::delete ('/contato/{id}','ContatosController@destroy');