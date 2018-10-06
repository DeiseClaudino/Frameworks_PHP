<?php namespace App\Http\Controllers;

use App\Livro;
use App\Categoria;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LivrosRequest;
use Illuminate\Support\Facades\Request;

class LivroController extends Controller {

  public function __construct()
  {
    $this->middleware('auth');
  }

  public function lista()
  {
    $produto = Livro::all();
    return view('listaLivros')->withProduto($produto);
}

  public function buscaProduto($id)
    {
        $lista = Livro::find($id);
        $categorias = Categoria::all();

        return view('alteraLivros', ['produto' => $lista, 'categorias' => $categorias]);
    }


    public function alteraProduto(LivrosRequest $request)
    {
      Livro::find($request->id)->update($request->all());

      return redirect()
          ->action('LivroController@lista')
          ->withInput(Request::only('nome'));
      }

    public function removeProduto($id)
    {
      $produto = Livro::find($id);
      $produto->delete();
      return redirect('/listaLivros');
    }

    public function abreFormulario()
    {
      return view('adiciona-livro')->with('categorias', Categoria::all());
    }

    public function adicionaProduto(LivrosRequest $request){

      Livro::create($request->all());
      return redirect()
          ->action('LivroController@lista')
          ->withInput(Request::only('nome'));
        }
}
