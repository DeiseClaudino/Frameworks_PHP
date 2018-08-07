<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ebook extends Model, Produto
{
    private $waterMark;
  public function getWatermark()
  {
    return $this->waterMark;
  }
  public function setWatermark($waterMark)
  {
    return $this->waterMark = $waterMark;
  }
  public function atualizaBaseadoEm($params)
  {
    $this->setIsbn($params["isbn"]);
    $this->setWaterMark($params["waterMark"]);
  }

}
