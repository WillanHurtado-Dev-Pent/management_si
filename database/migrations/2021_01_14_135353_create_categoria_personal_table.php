<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoriaPersonalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categoria_personal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('personal_id');
            $table->unsignedBigInteger('categoria_id');
            $table->timestamps();

            $table->foreign('personal_id')->references('id')->on('personals');
            $table->foreign('categoria_id')->references('id')->on('categorias');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('categoria_personal');
    }
}
