<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarrioRutasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barrio_ruta', function (Blueprint $table) {
            $table->bigIncrements('id_barrio_ruta');
            $table->bigInteger('id_barrio');
            $table->bigInteger('id_ruta');
            $table->timestamps();

            $table->foreign('id_barrio')->references('id_barrio')->on('barrio');
            $table->foreign('id_ruta')->references('id_ruta')->on('ruta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barrio_ruta');
    }
}
