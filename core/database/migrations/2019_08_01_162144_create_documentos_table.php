<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento', function (Blueprint $table) {
            $table->bigIncrements('id_documento');
            $table->bigInteger('id_estado_documento');
            $table->bigInteger('id_dependencia');
            $table->string('nombre', 100);
            $table->string('descripcion');
            $table->string('ruta');
            $table->timestamps();

            $table->foreign('id_estado_documento')->references('id_estado_documento')->on('estado_documento');
            $table->foreign('id_dependencia')->references('id_dependencia')->on('dependencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documento');
    }
}
