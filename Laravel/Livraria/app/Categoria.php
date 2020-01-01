<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  public $timestamps = false;

  protected $fillable = [
    'nome'
  ];

  public function livros()
  {
    return $this->hasMany('App\Livro');
  }
}
