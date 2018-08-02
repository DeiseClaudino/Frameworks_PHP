<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class LivroController extends Controller {

  public function lista()
  {

    $livros = DB::select("select * from livros");

     return view('listaLivros')->with('livros', $livros);
  }

}
