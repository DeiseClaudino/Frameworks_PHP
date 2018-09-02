@extends('cabecalho')
@section('conteudo')
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
                    $essaEhACategoria = $produto->categoria_id == $categoria->id;
                    $selecao = $essaEhACategoria ? "selected='selected'" : "";

                    <option value="{{$categoria->id}}" {{$selecao}} >{{$categoria->nome}}</option>
                  @endforeach;

                </select>

            </td>
          </tr>
          <tr>
              <th>Tipo do produto</th>
              <td>
                 <select name="tipoProduto" class="form-control">
                   <optgroup label="Livros">
                     <?php
                      $tipos = array("Livro Fisico", "Ebook");
                      foreach ($tipos as $tipo) :
                        $tipoSemEspaco = str_replace(" ", "", $tipo);
                          $esseEhOTipo = get_class($produto) == $tipoSemEspaco;
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
              <th>ISBN (caso seja um Livro)</th>
              <td>

            </td>
          <tr>
          </tr>
            <th>Taxa de Impressão (caso seja um Livro Físico)</th>
              <td>

              </td>

          </tr>
          <tr>
              <th>WaterMark (caso seja um Ebook)</th>
              <td>

              </td>
            </tr>
            @yield('outros')

  @stop
