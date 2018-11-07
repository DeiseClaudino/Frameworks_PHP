<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Livro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('livros', function(Blueprint $table)
      {
          $table->increments('id');
          $table->string('nome', 255);
          $table->double('preco');
          $table->string('descricao', 500)->nullable();
          $table->string('isbn', 50);
          $table->string('tipoLivro', 50);
          $table->string('taxaImpressao', 50)->nullable();
          $table->string('waterMark', 50)->nullable();
          $table->unsignedInteger('categoria_id');
          $table->foreign('categoria_id')->references('id')->on('categorias');


      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('livros');
    }
}
