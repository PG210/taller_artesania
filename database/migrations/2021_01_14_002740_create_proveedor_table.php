<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProveedorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proveedores', function (Blueprint $table) {
            $table->bigIncrements('idprov');
            $table->string('nomProv', 50);
            $table->string('dirProv', 50);
            $table->string('telProv', 12);
            $table->unsignedBigInteger('idProd');//atributo para referenciar a categoria
            $table->foreign('idProd')->references('referencia')->on('productos');//llave foranea para referenciar a la tabla categorias
            $table->float('preCompra');
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
        Schema::dropIfExists('proveedores');
    }
}
