<?php

namespace App\Categoria;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    private $id;
    private $nome;
    public function getId()
    {
      return $this->id;
    }
    public function setId($id)
    {
      return $this->id = $id;
    }
    public function getNome()
    {
      return $this->nome;
    }
    public function setNome($nome)
    {
      return $this->nome = $nome;
    }
}
