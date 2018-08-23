<?php

namespace App\Ebook;

use Illuminate\Database\Eloquent\Model;
use App\Produto;

class Ebook extends Model
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
