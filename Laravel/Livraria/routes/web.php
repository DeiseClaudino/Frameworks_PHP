<?php

Route::get('/', 'LoginController@login');

Route::get('/listaLivros', 'LivroController@lista');

Route::get('/listaLivros/alterar/{id}', 'LivroController@alteraProduto')->where('id', '[0-9]+');

Route::get('/listaLivros/remove/{id}', 'LivroController@removeProduto')->where('id', '[0-9]+');
