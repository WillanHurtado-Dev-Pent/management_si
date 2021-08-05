<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotaventaServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notaventa_servicio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('nota_venta_id');
            $table->unsignedBigInteger('servicio_id');
            $table->timestamps();

            $table->foreign('nota_venta_id')->references('id')->on('nota_ventas');
            $table->foreign('servicio_id')->references('id')->on('servicios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('notaventa_servicio');
    }
}
