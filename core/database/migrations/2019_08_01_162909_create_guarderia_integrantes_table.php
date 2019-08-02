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
        Schema::create('guarderia_integrante', function (Blueprint $table) {
            $table->bigIncrements('id_guarderia_integrante');
            $table->bigInteger('id_guarderia');
            $table->bigInteger('id_integrante');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guarderia_integrante');
    }
}
