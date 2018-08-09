@extends('cabecalho')
@section('conteudo')
      <h1>Listagem de Livros</h1>

        <table class="table table-striped table-bordered table-hover">

            <tr>
              <th>Nome</th>
              <th>Preco</th>
              <th>Descricao</th>
              <th>Categoria</th>
              <th>Isbn</th>
              <th>TipoLivro</th>
              <th>TaxaImpressao</th>
              <th>WaterMark</th>
              <th colspan="2">Ações</th>
            </tr>

          <?php foreach ($livros as $livro) : ?>
            <tr>
              <td><?= $livro->nome ?></td>
              <td><?= $livro->preco ?></td>
              <td><?= $livro->descricao ?></td>
              <td>
              </td>
              <td><?= $livro->isbn ?></td>
              <td><?= $livro->tipoLivro ?></td>
              <td><?= $livro->taxaImpressao ?></td>
              <td><?= $livro->waterMark ?></td>

              <td>
                <a class="btn btn-primary"
                href="/listaLivros/alterar/<?= $livro->id ?>">
                Alterar
                </a>
              </td>
              <td>
                <form>
                  <a href="/listaLivros/remove?id=<?= $livro->id ?>">
                  <input type="hidden" name="id" value="">
                  <button class="btn btn-danger">Excluir</button>
                </form>
              </td>
            </tr>

          <?php endforeach ?>
        </table>
@stop
@extends('rodape')
@section('rodape')
@stop
