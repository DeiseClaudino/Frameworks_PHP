@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p><strong>Bem Vindo!</strong></p>
                    <p>Esse site tem como objetivo armazenar informações dos seus livros e E-books de forma simples e prática.
                    Com ele você pode: Incluir, alterar, excluir e visualizar informações dos seus livros!</p>
                    <a href="/listaLivros" class="alert-link">Click aqui para visualizar seus livros já cadastrados</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
