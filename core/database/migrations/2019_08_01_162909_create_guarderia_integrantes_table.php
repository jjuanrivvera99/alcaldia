<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGuarderiaIntegrantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core.guarderia_integrante', function (Blueprint $table) {
            $table->bigIncrements('id_guarderia_integrante');
            $table->bigInteger('id_guarderia');
            $table->bigInteger('id_integrante');
            $table->date('fecha');
            $table->timestamps();

            $table->foreign('id_guarderia')->references('id_guarderia')->on('core.guarderia');
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
        Schema::dropIfExists('core.guarderia_integrante');
    }
}
