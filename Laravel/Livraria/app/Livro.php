<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;
    protected $fillable = array('nome', 'preco', 'descricao',
      'isbn', 'tipoLivro', 'taxaImpressao', 'waterMark', 'categoria_id');

      public function categoria()
      {
        $this->belongsTo('App\Categoria');
      }

}
