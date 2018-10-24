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

          @foreach ($produto as $produto)
            <tr>
              <td>{{ $produto->nome }}</td>
              <td>{{ $produto->preco }}</td>
              <td>{{ $produto->descricao }}</td>
              <td>{{ $produto->categoria->nome}}</td>
              <td>{{ $produto->isbn }}</td>
              <td>{{ $produto->tipoLivro }}</td>
              <td>{{ $produto->taxaImpressao }}</td>
              <td>{{ $produto->waterMark }}</td>

              <td>
                <a class="btn btn-primary"
                href="/listaLivros/alterar/{{$produto->id}}">
                Alterar
                </a>
              </td>

              <td>
                  <a class="btn btn-danger"
                    href="/listaLivros/remove/{{$produto->id}}">
                  Excluir
                </a>
              </td>
            </tr>

          @endforeach
        </table>
@stop
@extends('rodape')
@section('rodape')
@stop
