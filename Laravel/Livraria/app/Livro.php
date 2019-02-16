<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;
    protected $fillable = array('nome', 'preco', 'descricao',
      'isbn', 'tipoLivro', 'taxaImpressao', 'waterMark', 'categoria_id');

      public function categoria()
      {
        return $this->belongsTo('App\Categoria');
      }

}
