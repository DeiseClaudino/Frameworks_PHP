<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Categoria;


class CategoriaController extends Controller
{
   public function listaCategorias()
   {
       $categorias = array();
       $resultado= DB::select(
         "SELECT * FROM categorias",
         PDO::FETCH_ASSOC
       );
       foreach ($resultado as $linha) {
           $categoria = new Categoria();
           $categoria->setId($linha['id']);
           $categoria->setNome($linha['nome']);
           array_push($categorias, $categoria);
       }
       return $categorias;

  }
}
