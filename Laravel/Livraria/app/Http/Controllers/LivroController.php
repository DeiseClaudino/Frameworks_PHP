<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LivroController extends Controller {

  public function lista()
  {
    $livros = DB::select("select * from livros");
    dd($livros);
     return "<h1>Aqui tem uma lista<h1>";
  }

}
