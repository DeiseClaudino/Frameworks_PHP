<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Produto;

class LivroController extends Controller {

  public function lista()
  {

    $livros = DB::select("select * from livros");

     return view('listaLivros')->withLivros($livros);
  }

  public function buscaProduto($id)
    {

        $lista =  DB::select("SELECT * FROM livros WHERE id = ?", [$id]);

        $produto_buscado = App\Produto::all();
        // $produto_buscado = $this->conexao->prepare($lista);
        // $produto_buscado->bindValue(':id', $id);
        // $produto_buscado->execute();
        // foreach ($produto_buscado as $produto_buscado) {
        //     $tipoLivro = $produto_buscado['tipoLivro'];
        //     $factory = new LivroFactory();
        //     $produto = $factory->criaPor($tipoLivro, $produto_buscado);
        //     $produto->atualizaBaseadoEm($produto_buscado);
        //     $produto->setId($produto_buscado['id']);
        // }
        // return $produto;

        if(empty($lista)) {
          return "Esse produto não existe";
        }
        return view('alteraLivros')->withProduto($lista[0]);
    }

    public function alteraProduto(Produto $produto)
    {
        // $isbn = "";
        // if ($produto->temIsbn()) {
        //     $isbn = $produto->getIsbn();
        // }
        // $waterMark = "";
        // if ($produto->temWaterMark()) {
        //     $waterMark = $produto->getWaterMark();
        // }
        // $taxaImpressao = "";
        // if ($produto->temTaxaImpressao()) {
        //     $taxaImpressao = $produto->getTaxaImpressao();
        // }
        // $tipoLivro = get_class($produto);
        $query = DB::update("UPDATE livros SET
        nome = :nome,
        preco = :preco,
        descricao = :descricao,
        categoria_id = :categoria_id,
        isbn = :isbn,
        tipoLivro = :tipoLivro
         WHERE id = :id");
        $stmt = $this->conexao->prepare($query);
        // $stmt->bindValue(':nome', $produto->getNome());
        // $stmt->bindValue(':preco', $produto->getPreco());
        // $stmt->bindValue(':descricao', $produto->getDescricao());
        // $stmt->bindValue(':categoria_id', $produto->getCategoria()->getId());
        // $stmt->bindValue(':isbn', $isbn);
        // $stmt->bindValue(':tipoLivro', $tipoLivro);
        // $stmt->bindValue(':id', $produto->getId());
        return $stmt->execute();
    }


    public function removeProduto($id)
    {
       $query = DB::delete("DELETE FROM livros WHERE id = ?", [$id]);
       // $stmt = $this->conexao->prepare($query);
       // $stmt->bindValue(':id', $id);
       return $stmt->execute();
    }
}
