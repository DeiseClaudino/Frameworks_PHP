<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  public function livros()
  {
    $this->hasMany('App\Livro');
  }
}
