<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComentarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cedCli');//atributo para referenciar a categoria
            $table->foreign('cedCli')->references('id')->on('users');//llave foranea para referenciar a la tabla categorias
            $table->unsignedBigInteger('id_Prod');//atributo para referenciar a categoria
            $table->foreign('id_Prod')->references('referencia')->on('productos');//llave foranea para referenciar a la tabla categorias
            $table->string('comentario', 200);
            $table->dateTime('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}
