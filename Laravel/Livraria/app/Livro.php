<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;
    protected $fillable = array('nome', 'preco', 'descricao', 'categoria',
      'isbn', 'tipoLivro', 'taxaImpressao', 'waterMark');

}
