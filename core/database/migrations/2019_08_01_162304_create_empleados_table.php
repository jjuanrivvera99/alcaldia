<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nocore.empleado', function (Blueprint $table) {
            $table->bigIncrements('id_empleado');
            $table->bigInteger('id_area_dependencia');
            $table->string('primer_nombre', 100);
            $table->string('segundo_nombre', 100)->nullable();
            $table->string('primer_apellido', 100);
            $table->string('segundo_apellido', 100)->nullable();
            $table->string('telefono', 20);
            $table->string('direccion');
            $table->string('email', 150);
            $table->timestamps();

            $table->foreign('id_area_dependencia')->references('id_area_dependencia')->on('nocore.area_dependencia');
        });

        DB::statement("ALTER TABLE nocore.empleado ALTER COLUMN primer_nombre ADD MASKED WITH (FUNCTION = 'partial(2,\"XXXXXXX\",0)')");
        DB::statement("ALTER TABLE nocore.empleado ALTER COLUMN primer_apellido ADD MASKED WITH (FUNCTION = 'partial(2,\"XXXXXXX\",0)')");
        DB::statement("ALTER TABLE nocore.empleado ALTER COLUMN direccion ADD MASKED WITH (FUNCTION = 'partial(2,\"XXXXXXX\",0)')");
        DB::statement("ALTER TABLE nocore.empleado ALTER COLUMN email ADD MASKED WITH (FUNCTION = 'email()')");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('nocore.empleado');
    }
}
