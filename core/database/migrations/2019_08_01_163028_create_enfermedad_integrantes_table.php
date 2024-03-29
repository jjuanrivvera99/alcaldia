<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnfermedadIntegrantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core.enfermedad_integrante', function (Blueprint $table) {
            $table->bigIncrements('id_enfermedad_integrante');
            $table->bigInteger('id_enfermedad');
            $table->bigInteger('id_integrante');
            $table->date('fecha');
            $table->tinyInteger('estado');
            $table->timestamps();

            $table->foreign('id_enfermedad')->references('id_enfermedad')->on('core.enfermedad');
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
        Schema::dropIfExists('core.enfermedad_integrante');
    }
}
