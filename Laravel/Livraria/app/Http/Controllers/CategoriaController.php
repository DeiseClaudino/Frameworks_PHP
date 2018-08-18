<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Categoria;


class CategoriaController extends Controller
{
   public function listaCategorias()
   {
     $categorias = Categoria::all();
     return view('alteraLivros')->withCategorias($categorias);
  }
}
