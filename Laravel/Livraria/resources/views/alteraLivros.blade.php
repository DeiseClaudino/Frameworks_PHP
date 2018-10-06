@extends('altera-formulario')
@section('outros')
  <h1>Alterando: {{$produto->nome}} </h1>
      <tr>
        <td>
          <button type="submit" class="btn btn-primary">Alterar</button>
        </td>
      </tr>
  </table>
  @stop
@extends('rodape')
@section('rodape')
@stop
