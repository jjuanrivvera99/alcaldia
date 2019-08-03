<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIntegrantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('integrante', function (Blueprint $table) {
            $table->bigIncrements('id_integrante');
            $table->bigInteger('id_tipo_identificacion');
            $table->bigInteger('id_ciudad');
            $table->bigInteger('id_familia');
            $table->string('primer_nombre', 100);
            $table->string('segundo_nombre', 100)->nullable();
            $table->string('primer_apellido', 100);
            $table->string('segundo_apellido', 100)->nullable();
            $table->dateTime('fecha_nacimiento');
            $table->timestamps();

            $table->foreign('id_tipo_identificacion')->references('id_tipo_identificacion')->on('tipo_identificacion');
            $table->foreign('id_ciudad')->references('id_ciudad')->on('ciudad');
            $table->foreign('id_familia')->references('id_familia')->on('familia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('integrante');
    }
}
