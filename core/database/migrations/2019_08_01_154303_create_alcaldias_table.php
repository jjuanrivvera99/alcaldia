<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlcaldiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nocore.alcaldia', function (Blueprint $table) {
            $table->bigIncrements('id_alcaldia');
            $table->bigInteger('id_alcalde');
            $table->string('nombre', 100);
            $table->timestamps();

            $table->foreign('id_alcalde')->references('id_alcalde')->on('nocore.alcalde');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nocore.alcaldia');
    }
}
