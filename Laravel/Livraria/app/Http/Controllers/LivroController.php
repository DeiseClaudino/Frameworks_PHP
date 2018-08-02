<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LivroController extends Controller {

  public function lista()
  {
    $html = '<h1>Listagem de Produtos</h1>';

    $livros = DB::select("select * from livros");

    foreach ($livros as $livro) {

      $html .= "<br/> Nome: ".$livro->nome;

    }

     return $html;
  }

}
