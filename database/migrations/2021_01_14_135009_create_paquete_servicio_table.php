<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePaqueteServicioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paquete_servicio', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('paquete_id');
            $table->unsignedBigInteger('servicio_id');
            $table->timestamps();

            $table->foreign('paquete_id')->references('id')->on('paquetes');
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
        Schema::dropIfExists('paquete_servicio');
    }
}
