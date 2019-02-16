@extends('cabecalho')
@section('conteudo')
<form action="/adicionarnovo" method="post">
  <table class="table table-striped table-bordered table-hover">
    <input type="hidden"
       name="_token" value="{{ csrf_token() }}" />
          <tr>
              <th>Nome</th>
              <td>
                   <input class="form-control" type="text" name="nome">
              </td>
          </tr>
          <tr>
              <th>Preço</th>
              <td>
                  <input  class="form-control" type="number" step="0.01" name="preco">
              </td>
          </tr>
          <tr>
              <th>Descrição</th>
                <td>
                  <textarea class="form-control" name="descricao"></textarea>
                </td>
            </tr>
            <tr>
              <th>Categoria</th>
              <td>
                <select name="categoria_id" class="form-control">
                  <option value="Biografia">Biografia</option>
                  <option value="Comedia">Comedia</option>
                  <option value="Didatico">Didatico</option>
                  <option value="HQs/Mangas">HQs/Mangas</option>
                  <option value="Infanto/Juvenil">Infanto/Juvenil</option>
                  <option value="Literatura">Literatura</option>
                  <option value="Romance">Romance</option>
                  <option value="Suspense">Suspense</option>
                  <option value="Terror">Terror</option>
                </select>
            </td>
          </tr>
          <tr>
              <th>Tipo do produto</th>
              <td>
                 <select name="tipoLivro" class="form-control">
                   <optgroup label="Livros">
                     <option value="LivroFisico">Livro Fisico</option>
                     <option value="Ebook">Ebook</option>
                   </optgroup>
                  </select>
             </td>
          <tr>
              <th>ISBN</th>
              <td>
                <input type="text" class="form-control" name="isbn">
            </td>
          <tr>
          </tr>
            <th>Taxa de Impressão (caso seja um Livro Físico)</th>
              <td>
                  <input type="text" class="form-control" name="taxaImpressao">
              </td>
          </tr>
          <tr>
              <th>WaterMark (caso seja um Ebook)</th>
              <td>
                <input type="text" class="form-control" name="waterMark">
              </td>
            </tr>
            @yield('outros')
  @stop
</form>
