<?php

namespace App\Produto;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  protected $table = 'livros';
  private $id;
  private $nome;
  private $preco;
  private $descricao;
  private $categoria;
  private $isbn;

    public function __construct()
    {
    }
    public function getId()
    {
      return $this->id;
    }
    public function setId($id)
    {
      $this->id = $id;
    }
    public function getNome()
    {
      return $this->nome;
    }
    public function getPreco()
    {
      return $this->preco;
    }
    public function getDescricao()
    {
      return $this->descricao;
    }
    public function getCategoria()
    {
      return $this->categoria;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }
    public function setIsbn($isbn)
    {
        return $this->isbn = $isbn;
    }

      public function temIsbn()
     {
         return $this instanceof Ebook;
     }

    public function temTaxaImpressao()
    {
      return $this instanceof LivroFisico;
    }
    public function temWaterMark()
    {
      return $this instanceof Ebook;
    }

    // abstract public function atualizaBaseadoEm($params);

    public function __toString()
    {
      return $this->nome.": R$ ".$this->preco;
    }
}
