<?php namespace App\Http\Controllers;

use App\Livro;

use Illuminate\Support\Facades\DB;
use Request;


class LivroController extends Controller {

  public function lista()
  {
    $produto = Livro::all();
    return view('listaLivros')->withProduto($produto);
}

  public function buscaProduto($id)
    {
        $lista = Livro::find($id);

        if(empty($lista)) {
          return "Esse produto não existe";
        }
        return view('alteraLivros')->withProduto($lista);
    }

  //   public function alteraProduto(Produto $produto)
  //   {
  //
  //       $id = Request::input('id');
  //
  //       $isbn = $isbn = $produto->getIsbn();
  //
  //       $waterMark = "";
  //       if ($produto->temWaterMark()) {
  //           $waterMark = $produto->getWaterMark();
  //       }
  //       $taxaImpressao = "";
  //       if ($produto->temTaxaImpressao()) {
  //           $taxaImpressao = $produto->getTaxaImpressao();
  //       }
  //       $tipoLivro = get_class($produto);
  //       $query = DB::update(" UPDATE
  //       livros
  //   SET
  //       nome = '{$produto->getNome()}',
  //       preco = {$produto->getPreco()},
  //       descricao = '{$produto->getDescricao()}',
  //       categoria_id = {$produto->getCategoria()->getId()},
  //       isbn = '{$isbn}',
  //       tipoProduto = '{$tipoProduto}'
  //   WHERE
  //       id = '{$produto->getId()}'");
  // }


    public function removeProduto($id)
    {
      $produto = Livro::find($id);
      $produto->delete();
      return redirect()
          ->action('LivroController@lista');
    }

    public function abreFormulario()
    {
      return view('adiciona-livro');
    }


    public function adicionaProduto()
    {
      $validator = Validator::make(
      ['nome' => Request::input('nome')],
      ['nome' => 'required|min:5']
      );

      if ($validator->fails())
     {
       return redirect()
         ->action('LivroController@novo');
     }
      Livro::create(Request::all());

      return redirect()
          ->action('ProdutoController@lista')
          ->withInput(Request::only('nome'));


      }

}
