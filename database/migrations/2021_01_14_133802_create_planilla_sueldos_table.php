<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanillaSueldosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planilla_sueldos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('descuento');
            $table->string('mes', 100);
            $table->integer('pago');
            $table->string('tipo', 100);
            $table->integer('total');
            $table->unsignedBigInteger('personal_id');
            $table->timestamps();

            $table->foreign('personal_id')->references('id')->on('personals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planilla_sueldos');
    }
}
