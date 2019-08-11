<?php

use Illuminate\Database\Seeder;

class JornadaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jornada')->delete();
        DB::table('jornada')->insert([
            [
                "nombre" => 'Diurna',
                "created_at" => DB::raw('SYSDATE'),
                "updated_at" => DB::raw('SYSDATE'),
            ],
            [
                "nombre" => 'Nocturna',
                "created_at" => DB::raw('SYSDATE'),
                "updated_at" => DB::raw('SYSDATE'),
            ],
            [
                "nombre" => 'Mixto',
                "created_at" => DB::raw('SYSDATE'),
                "updated_at" => DB::raw('SYSDATE'),
            ],
            [
                "nombre" => 'Vespertino',
                "created_at" => DB::raw('SYSDATE'),
                "updated_at" => DB::raw('SYSDATE'),
            ],
        ]);
    }
}
