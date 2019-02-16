<?php

Route::get('/listaLivros', 'LivroController@lista');

Route::get('/listaLivros/alterar/{id}', 'LivroController@buscaProduto');

Route::get('/listaLivros/alterado/{id}', 'LivroController@alteraProduto');

Route::get('/listaLivros/remove/{id}', 'LivroController@removeProduto');

Route::get('/formulario', 'LivroController@abreFormulario');

Route::post('/adicionarnovo', 'LivroController@adicionaProduto');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
