<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cod_personal');
            $table->integer('cod_reserva');
            $table->unsignedBigInteger('persona_id');
            $table->unsignedBigInteger('paquete_id');
            $table->unsignedBigInteger('servicio_id');
            $table->timestamps();

            $table->foreign('persona_id')->references('id')->on('personas');
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
        Schema::dropIfExists('reservas');
    }
}
