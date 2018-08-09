@extends('produto-formulario-base')
@section('outros')
  <h1>Alterando: {{$produto->nome}} </h1>


      <tr>
        <td>
          <button class="btn btn-primary" type="submit">Alterar</button>
        </td>
      </tr>
  </table>
@stop
@extends('rodape')
@section('rodape')
@stop
