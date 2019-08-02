<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegranteEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrante_empresa', function (Blueprint $table) {
            $table->bigIncrements('id_integrante_empresa');
            $table->bigInteger('id_empresa');
            $table->bigInteger('id_cargo');
            $table->bigInteger('id_integrante');
            $table->date('fecha_inicio');
            $table->tinyInteger('estado');
            $table->integer('sueldo');
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
        Schema::dropIfExists('integrante_empresa');
    }
}
