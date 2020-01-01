<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
      'nome', 
      'preco', 
      'descricao',
      'isbn', 
      'tipoLivro', 
      'taxaImpressao', 
      'waterMark', 
      'categoria_id'
    ];

      public function categoria()
      {
        return $this->belongsTo('App\Categoria');
      }

}
