<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->bigIncrements('numfac');
            $table->dateTime('fecha');
            $table->unsignedBigInteger('idprod');//atributo para referenciar a categoria
            $table->foreign('idprod')->references('referencia')->on('productos');//llave foranea para referenciar a la tabla categorias
            $table->unsignedBigInteger('cedula');//atributo para referenciar a categoria
            $table->foreign('cedula')->references('id')->on('users');//llave foranea para referenciar a la tabla categorias
            $table->integer('cantidad');
            $table->unsignedBigInteger('pago');//atributo para referenciar a categoria
            $table->foreign('pago')->references('id')->on('forma_pago');//llave foranea para referenciar
            $table->float('iva');//tipo flotante
            $table->float('subtotal');//guardar el nombre de la foto
            $table->float('total');//guardar el nombre de la foto
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
        Schema::dropIfExists('facturas');
    }
}
