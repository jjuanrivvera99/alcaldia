<?php

use Illuminate\Database\Seeder;

class TipoIdentificacionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_identificacion')->delete();
        // DB::table('tipo_identificacion')->truncate();

        DB::table('tipo_identificacion')->insert([
            [
                'nombre' => "C.C",
                'descripcion' => "Cédula ciudadanía",
                'created_at' => DB::raw('GETDATE( )'),
                'updated_at' => DB::raw('GETDATE( )'),
            ],
            [
                'nombre' => "T.I",
                'descripcion' => "Tarjeta Identidad",
                'created_at' => DB::raw('GETDATE( )'),
                'updated_at' => DB::raw('GETDATE( )'),
            ],
            [
                'nombre' => "C.E",
                'descripcion' => "Cédula Extranjería",
                'created_at' => DB::raw('GETDATE( )'),
                'updated_at' => DB::raw('GETDATE( )'),
            ],
            [
                'nombre' => "P.A",
                'descripcion' => "Pasaporte",
                'created_at' => DB::raw('GETDATE( )'),
                'updated_at' => DB::raw('GETDATE( )'),
            ],
        ]);

    }
}
