<!DOCTYPE html>
<html>
  <head>
      <link rel="shortcut icon" type="image/png" href="/icon.png"/>
      <link href="/css/app.css" rel="stylesheet">
      <title>Minha Livraria</title>
  </head>
  <body>
    <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar bg-primary text-white">
      <img class="mb-4" src="/livro.png" alt="" width="52" height="52">
      <div class="navbar-nav-scroll">
        <ul class="navbar-nav bd-navbar-nav flex-row">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{action('LivroController@lista')}}">Lista</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{action('LivroController@abreFormulario')}}">Inserir +</a>
          </li>
        </ul>
      </div>
    </header>

  <body>

    <div class="container">
        @yield('conteudo')
