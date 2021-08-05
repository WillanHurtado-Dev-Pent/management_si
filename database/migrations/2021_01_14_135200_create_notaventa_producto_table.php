<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaventaProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaventa_producto', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nota_venta_id');
            $table->unsignedBigInteger('producto_id');
            $table->timestamps();

            $table->foreign('nota_venta_id')->references('id')->on('nota_ventas');
            $table->foreign('producto_id')->references('id')->on('productos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notaventa_producto');
    }
}
