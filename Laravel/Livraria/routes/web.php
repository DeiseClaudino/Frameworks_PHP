<?php

Route::get('/', 'LoginController@login/{email}/{senha}');

Route::get('/listaLivros', 'LivroController@lista');

Route::get('/listaLivros/alterar/{id}', 'LivroController@buscaProduto')->where('id', '[0-9]+');

Route::get('/listaLivros/remove/{id}', 'LivroController@removeProduto')->where('id', '[0-9]+');
