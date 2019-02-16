<?php

namespace App;

use Jenssegers\Mongodb\Eloquent\Model;

class Categoria extends Model
{
  public function livros()
  {
    return $this->hasMany('App\Livro');
  }
}
