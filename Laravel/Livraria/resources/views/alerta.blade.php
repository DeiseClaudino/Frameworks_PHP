@extends('cabecalho')

@section('conteudo')
<div class="alert alert-success">
  O produto {{$produto->nome}} foi adicionado com sucesso!
</div>

@stop
