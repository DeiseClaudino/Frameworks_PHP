<?php

Route::get('/', function ()
{
  return "<h1>Listagem de Livros</h1>";
});

Route::get('/listaLivros', 'LivroController@lista');

Route::get('/listaLivros/alterar/{id}', 'LivroController@alteraProduto');

Route::get('/listaLivros/remove/{id}', 'LivroController@removeProduto');
