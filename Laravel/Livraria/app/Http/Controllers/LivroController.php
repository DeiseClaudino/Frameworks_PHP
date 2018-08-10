<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;
use App\Categoria;

class LivroController extends Controller {

  public function lista()
  {

    $livros = DB::select("SELECT p.*, c.nome AS categoria_nome FROM livros AS p JOIN categorias AS c ON c.id = p.categoria_id");

     return view('listaLivros')->withLivros($livros);
  }

  public function buscaProduto()
    {
        $id = Request::route('id');

        $lista =  DB::select("SELECT * FROM livros WHERE id = ?", [$id]);

        if(empty($lista)) {
          return "Esse produto não existe";
        }
        return view('alteraLivros')->withProduto($lista[0]);
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
        $id = Request::route('id');
       $query = DB::delete("DELETE FROM livros WHERE id = ?", [$id]);

       return view('listaLivros');
    }

    public function abreFormulario()
    {
      return view('adiciona-livro');
    }


    public function adicionaProduto()
    {

        $produto->nome = Request::input('nome');
        $produto->preco = Request::input('preco');
        $produto->descricao = Request::input('descricao');
        $produto->categoria_id = Request::input('categoria_id');
        $produto->isbn = Request::input('isbn');
        $produto->tipoLivro = Request::input('tipoLivro');
        $produto->taxaImpressao = Request::input('taxaImpressao');
        $produto->waterMark = Request::input('waterMark');

        DB::insert('INSERT INTO produtos VALUES (null, ?, ?, ?, ?, ?, ?, ?, ?)',
        array($produto->nome, $produto->preco, $produto->descricao, $produto->categoria_id, $produto->isbn, $produto->tipoLivro, $produto->taxaImpressao, $produto->waterMark));

        return view('alerta')->with('produto->nome', $produto->nome);
      }

}
