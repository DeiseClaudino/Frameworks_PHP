<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
  private $id;
  private $nome;
  private $preco;
  private $descricao;
  private $categoria;
  private $isbn;

public function __construct($nome, $preco, $descricao, Categoria $categoria, $isbn)
{
      $this->nome = $nome;
      $this->preco = $preco;
      $this->descricao = $descricao;
      $this->categoria = $categoria;
      $this->isbn = $isbn;
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
      return $this instanceof Livro;
    }
    public function temTaxaImpressao()
    {
      return $this instanceof LivroFisico;
    }
    public function temWaterMark()
    {
      return $this instanceof Ebook;
    }

    //abstract public function atualizaBaseadoEm($params);

    public function __toString()
    {
      return $this->nome.": R$ ".$this->preco;
    }
}
