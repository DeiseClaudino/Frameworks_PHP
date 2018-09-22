<?php namespace App\Http\Controllers;

use App\Livro;
use App\Categoria;
use Illuminate\Support\Facades\DB;
// use App\Http\Requests;
use Request;

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

        return view('alteraLivros', ['produto' => $lista, 'categorias' => $categorias] );
    }


    public function alteraProduto(LivrosRequest $request)
    {
      $livro = Livro::find($id);

      $livro->nome = $request->nome;
      $livro->preco = $request->preco;
      $livro->descricao = $request->descricao;
      $livro->categoria_id = $request->categoria->id;
      $livro->tipoLivro = $request->tipoLivro;
      $livro->isbn = $request->isbn;
      $livro->taxaImpressao = $request->taxaImpressao;
      $livro->waterMark = $request->waterMark;

      $livro->save();
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

    public function adicionaProduto(){

      $nome = Request::input('nome');
      $preco = Request::input('preco');
      $descricao = Request::input('descricao');
      $categoria_id = Request::input('categoria_id');
      $tipoLivro = Request::input('tipoLivro');
      $isbn = Request::input('isbn');
      $taxaImpressao = Request::input('taxaImpressao');
      $waterMark = Request::input('waterMark');

      DB::insert('INSERT INTO livros(nome, preco,
        descricao, categoria_id,
       tipoLivro, isbn,
       taxaImpressao, waterMark)
       VALUES(?, ?, ?, ?, ?, ?, ?, ?)',
        array($nome, $preco, $descricao, $categoria_id,
      $tipoLivro, $isbn, $taxaImpressao, $waterMark));

      return view('alerta')->with('nome', $nome);

      // Livro::create($request->all());
      //
      // return redirect()
      //     ->action('LivroController@lista')
      //     ->withInput(Request::only('nome'));
  }


}
