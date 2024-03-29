<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFamiliasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core.familia', function (Blueprint $table) {
            $table->bigIncrements('id_familia');
            $table->bigInteger('id_barrio');
            $table->bigInteger('id_tipo_habitacion');
            $table->string('nombre', 200);
            $table->string('direccion', 150);
            $table->string('telefono', 20);
            $table->decimal('ingreso', 15,2);
            $table->timestamps();

            $table->foreign('id_barrio')->references('id_barrio')->on('core.barrio');
            $table->foreign('id_tipo_habitacion')->references('id_tipo_habitacion')->on('core.tipo_habitacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core.familia');
    }
}
