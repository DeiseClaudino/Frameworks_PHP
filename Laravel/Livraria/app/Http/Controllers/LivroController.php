<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;
use App\Produto;
use App\Categoria;

class LivroController extends Controller {

  public function lista()
  {

    $livros = DB::select("select * from livros");

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
       $query = DB::delete("DELETE FROM livros WHERE id = ?", [$id]);
       // $stmt = $this->conexao->prepare($query);
       // $stmt->bindValue(':id', $id);
       return $stmt->execute();
    }
}
