<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAreaDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nocore.area_dependencia', function (Blueprint $table) {
            $table->bigIncrements('id_area_dependencia');
            $table->bigInteger('id_area');
            $table->bigInteger('id_dependencia');
            $table->timestamps();

            $table->foreign('id_area')->references('id_area')->on('nocore.area');
            $table->foreign('id_dependencia')->references('id_dependencia')->on('nocore.dependencia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nocore.area_dependencia');
    }
}
