<html>
  <body>
  <h1>Listagem de Livros</h1>
    <table>
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

  </body>
</html>
