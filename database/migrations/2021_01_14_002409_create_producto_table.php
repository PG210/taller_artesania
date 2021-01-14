<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->bigIncrements('referencia');
            $table->string('nombreProducto', 45);
            $table->integer('cantidadProducto');//tipo entero
            $table->float('precioProducto');//tipo flotante
            $table->string('fotoProducto', 100);//guardar el nombre de la foto
            $table->unsignedBigInteger('categoria');//atributo para referenciar a categoria
            $table->foreign('categoria')->references('id')->on('categorias');//llave foranea para referenciar a la tabla categorias
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
        Schema::dropIfExists('productos');
    }
}
