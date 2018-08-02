<html>
  <head>
      <link href="/css/app.css" rel="stylesheet">
      <title>Controle de estoque</title>
  </head>
  <body>
    <div class="container">
      <h1>Listagem de Livros</h1>
      <table class="table table-striped table-bordered table-hover">

          <tr>
            <th>nome</th>
            <th>preco</th>
            <th>descricao</th>
            <th>isbn</th>
            <th>tipoLivro</th>
            <th>taxaImpressao</th>
            <th>waterMark</th>
          </tr>

        <?php foreach ($livros as $livro) : ?>
          <tr>
            <td><?= $livro->nome ?></td>
            <td><?= $livro->preco ?></td>
            <td><?= $livro->descricao ?></td>
            <td><?= $livro->isbn ?></td>
            <td><?= $livro->tipoLivro ?></td>
            <td><?= $livro->taxaImpressao ?></td>
            <td><?= $livro->waterMark ?></td>
          </tr>
        <?php endforeach ?>
      </table>
    </div>

  </body>
</html>
