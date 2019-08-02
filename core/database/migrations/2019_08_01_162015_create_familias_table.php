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
        Schema::create('familia', function (Blueprint $table) {
            $table->bigIncrements('id_familia');
            $table->bigInteger('id_barrio');
            $table->bigInteger('id_tipo_habitacion');
            $table->string('nombre', 200);
            $table->string('direccion', 150);
            $table->string('telefono', 20);
            $table->decimal('ingreso');
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
        Schema::dropIfExists('familia');
    }
}
