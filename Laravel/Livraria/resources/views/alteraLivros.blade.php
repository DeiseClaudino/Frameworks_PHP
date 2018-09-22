@extends('altera-formulario')
@section('outros')
  <h1>Alterando: {{$produto->nome}} </h1>
  <form method="get" href="/listaLivros/alterado">

      <tr>
        <td>
          <button class="btn btn-primary">Alterar</button>
        </td>
      </tr>
  </table>
  @stop
</form>
@extends('rodape')
@section('rodape')
@stop
