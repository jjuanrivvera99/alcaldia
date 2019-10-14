<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscolaridadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core.escolaridad', function (Blueprint $table) {
            $table->bigIncrements('id_escolaridad');
            $table->bigInteger('id_jornada');
            $table->bigInteger('id_plantel_educativo');
            $table->bigInteger('id_modalidad');
            $table->bigInteger('id_integrante');
            $table->dateTime('fecha');
            $table->timestamps();

            $table->foreign('id_jornada')->references('id_jornada')->on('core.jornada');
            $table->foreign('id_plantel_educativo')->references('id_plantel_educativo')->on('core.plantel_educativo');
            $table->foreign('id_modalidad')->references('id_modalidad')->on('core.modalidad');
            $table->foreign('id_integrante')->references('id_integrante')->on('core.integrante');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core.escolaridad');
    }
}
