<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlantelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core.plantel', function (Blueprint $table) {
            $table->bigIncrements('id_plantel');
            $table->bigInteger('id_tipo_plantel');
            $table->bigInteger('id_localidad');
            $table->string('nombre', 100);
            $table->timestamps();

            $table->foreign('id_tipo_plantel')->references('id_tipo_plantel')->on('core.tipo_plantel');
            $table->foreign('id_localidad')->references('id_localidad')->on('core.localidad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core.plantel');
    }
}
