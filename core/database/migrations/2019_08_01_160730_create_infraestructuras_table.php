<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInfraestructurasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('infraestructura', function (Blueprint $table) {
            $table->bigIncrements('id_infraestructura');
            $table->bigInteger('id_area_dependencia');
            $table->bigInteger('id_tipo_infraestructura');
            $table->string('nombre');
            $table->string('especificaciones');
            $table->integer('codigo');
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
        Schema::dropIfExists('infraestructura');
    }
}
