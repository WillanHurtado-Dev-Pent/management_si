<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_ventas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('descuento');
            $table->string('fecha', 100)->default('23/02/2021');
            $table->integer('monto');
            $table->integer('tipo');
            $table->integer('total');
            /* $table->unsignedBigInteger('persona_id'); */
            $table->unsignedBigInteger('paquete_id');
            $table->unsignedBigInteger('bitacora_id');
            $table->timestamps();

            /* $table->foreign('persona_id')->references('id')->on('personas'); */
            $table->foreign('paquete_id')->references('id')->on('paquetes');
            $table->foreign('bitacora_id')->references('id')->on('bitacoras');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nota_ventas');
    }
}
