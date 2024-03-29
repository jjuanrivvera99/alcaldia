<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBarriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('core.barrio', function (Blueprint $table) {
            $table->bigIncrements('id_barrio');
            $table->bigInteger('id_localidad');
            $table->string('nombre', 50);
            $table->string('area', 100);
            $table->integer('estrato');
            $table->timestamps();

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
        Schema::dropIfExists('core.barrio');
    }
}
