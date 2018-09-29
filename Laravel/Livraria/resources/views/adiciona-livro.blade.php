@extends('produto-formulario-base')
@section('outros')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <h1>Adicionar Livros</h1>
            <tr>
              <td>
                <button type="submit" class="btn btn-primary">Adicionar</button>
              </td>
            </tr>
        @stop
@extends('rodape')
@section('rodape')
@stop
