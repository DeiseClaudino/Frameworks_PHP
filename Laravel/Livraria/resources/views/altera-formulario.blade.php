@extends('cabecalho')
@section('conteudo')
<form action="/listaLivros/alterado/{{$produto->id}}" method="get">
  <table class="table table-striped table-bordered table-hover">
    <tr>
        <th>Nome</th>
        <td>

              <input class="form-control" type="text" name="nome"
                value="{{$produto->nome}}">

        </td>
    </tr>
    <tr>
        <th>Preço</th>
        <td>

            <input  class="form-control" type="number" step="0.01" name="preco"
                value="{{$produto->preco}}">
        </td>

    </tr>
    <tr>
        <th>Descrição</th>
          <td>

            <textarea class="form-control" name="descricao">{{$produto->descricao}}</textarea>
          </td>
      </tr>
      <tr>
        <th>Categoria</th>
        <td>
          <select name="categoria_id" class="form-control">
            @foreach ($categorias as $categoria):

              <option value="{{$categoria->id}}" {{$produto->categoria_id == $categoria->id ? "selected='selected'" : ""}}>
                {{$categoria->nome}}
              </option>

            @endforeach
          </select>

      </td>
    </tr>
    <tr>
        <th>Tipo do produto</th>
        <td>
            <select name="tipoLivro" class="form-control">
              <optgroup label="Livros">
                <?php
                $tipos = array("Livro Fisico", "Ebook");
                foreach ($tipos as $tipo) :
                  $tipoSemEspaco = str_replace(" ", "", $tipo);
                    $esseEhOTipo = $produto->tipoLivro == $tipoSemEspaco;
                    $selecao = $esseEhOTipo ? "selected='selected'" : "";
                ?>
                    <option value="<?=$tipoSemEspaco?>" <?=$selecao?>>
                        <?=$tipo?>
                    </option>

                <?php
                endforeach
                ?>
              </optgroup>
            </select>
        </td>
    </tr>
    <tr>
        <th>ISBN</th>
        <td>

          <input type="text" name="isbn" class="form-control"
          value="{{$produto->isbn}}">

      </td>
    <tr>
    </tr>
      <th>Taxa de Impressão (caso seja um Livro Físico)</th>
        <td>

          <input type="text" name="taxaImpressao" class="form-control"
          value="{{$produto->taxaImpressao}}" >

        </td>

    </tr>
    <tr>
      <th>WaterMark (caso seja um Ebook)</th>
      <td>
        <input type="text" name="WaterMark" class="form-control"
        value="{{$produto->waterMark}}" >
      </td>
    </tr>
      @yield('outros')
</form>
  @stop
