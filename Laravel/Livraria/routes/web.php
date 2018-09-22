<?php

Route::get('/listaLivros', 'LivroController@lista');

Route::get('/listaLivros/alterar/{id}', 'LivroController@buscaProduto')->where('id', '[0-9]+');

Route::get('/listaLivros/alterado', 'LivroController@alteraProduto');

Route::get('/listaLivros/remove/{id}', 'LivroController@removeProduto');

Route::get('/formulario', 'LivroController@abreFormulario');

Route::get('/adicionarnovo', 'LivroController@adicionaProduto');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
