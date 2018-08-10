@extends('produto-formulario-base')
@section('outros')
      <h1>Adicionar Livros</h1>
      <form action="/adicionarNovo" method="post">
            <tr>
              <td>
                <button class="btn btn-primary" type="submit">Cadastrar</button>
              </td>
            </tr>
        @stop
      </form>
@extends('rodape')
@section('rodape')
@stop
