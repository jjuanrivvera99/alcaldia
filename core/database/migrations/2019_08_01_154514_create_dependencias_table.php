<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDependenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nocore.dependencia', function (Blueprint $table) {
            $table->bigIncrements('id_dependencia');
            $table->bigInteger('id_alcaldia');
            $table->string('nombre', 100);
            $table->timestamps();

            $table->foreign('id_alcaldia')->references('id_alcaldia')->on('nocore.alcaldia');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nocore.dependencia');
    }
}
