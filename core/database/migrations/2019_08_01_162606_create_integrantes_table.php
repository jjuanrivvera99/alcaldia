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
        Schema::create('core.integrante', function (Blueprint $table) {
            $table->bigIncrements('id_integrante');
            $table->bigInteger('id_tipo_identificacion');
            $table->integer('numero_identificacion');
            $table->bigInteger('id_ciudad');
            $table->bigInteger('id_familia');
            $table->string('primer_nombre', 100);
            $table->string('segundo_nombre', 100)->nullable();
            $table->string('primer_apellido', 100);
            $table->string('segundo_apellido', 100)->nullable();
            $table->dateTime('fecha_nacimiento');
            $table->string('email', 100);
            $table->timestamps();

            $table->foreign('id_tipo_identificacion')->references('id_tipo_identificacion')->on('core.tipo_identificacion');
            $table->foreign('id_ciudad')->references('id_ciudad')->on('core.ciudad');
            $table->foreign('id_familia')->references('id_familia')->on('core.familia');
        });

        DB::statement("ALTER TABLE core.integrante ALTER COLUMN numero_identificacion ADD MASKED WITH (FUNCTION ='Random(1,4)')");
        DB::statement("ALTER TABLE core.integrante ALTER COLUMN primer_nombre ADD MASKED WITH (FUNCTION = 'partial(2,\"XXXXXXX\",0)')");
        DB::statement("ALTER TABLE core.integrante ALTER COLUMN primer_apellido ADD MASKED WITH (FUNCTION = 'partial(2,\"XXXXXXX\",0)')");
        DB::statement("ALTER TABLE core.integrante ALTER COLUMN email ADD MASKED WITH (FUNCTION = 'email()')");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('core.integrante');
    }
}
