@extends('altera-formulario')
@section('outros')
  <h1>Alterando: {{$produto->nome}} </h1>
  <form method="post>

      <tr>
        <td>
          <a class="btn btn-primary" href="/listaLivros/alterado">Alterar</a>
        </td>
      </tr>
  </table>
  @stop
</form>
@extends('rodape')
@section('rodape')
@stop
