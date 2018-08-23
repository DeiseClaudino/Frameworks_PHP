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
              <td>{{ $produto->categoria }}</td>
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
                <form>
                  <a href="/listaLivros/deletar/{{$produto->id}}">
                  <input type="hidden" name="id" value="">
                  <button class="btn btn-danger">Excluir</button>
                </form>
              </td>
            </tr>

          @endforeach
        </table>
        @if (old('nome')):
            <div class="alert alert-success">
              <strong>Sucesso!</strong>
                Produto {{old('nome')}} adicionado com sucesso!
            </div>
        @endif;
@stop
@extends('rodape')
@section('rodape')
@stop
