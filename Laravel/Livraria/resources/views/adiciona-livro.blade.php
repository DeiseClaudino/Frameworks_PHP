@extends('produto-formulario-base')
@section('outros')
      <h1>Adicionar Livros</h1>
      <form method="post" action="/adicionarNovo">
            <tr>
              <td>
                <button type="submit" class="btn btn-primary">Adicionar</button>
              </td>
            </tr>
        @stop
      </form>
@extends('rodape')
@section('rodape')
@stop
