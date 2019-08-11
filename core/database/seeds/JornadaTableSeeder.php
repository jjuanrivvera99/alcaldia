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
                "created_at" => DB::raw('GETDATE()'),
                "updated_at" => DB::raw('GETDATE()'),
            ],
            [
                "nombre" => 'Nocturna',
                "created_at" => DB::raw('GETDATE()'),
                "updated_at" => DB::raw('GETDATE()'),
            ],
            [
                "nombre" => 'Mixto',
                "created_at" => DB::raw('GETDATE()'),
                "updated_at" => DB::raw('GETDATE()'),
            ],
            [
                "nombre" => 'Vespertino',
                "created_at" => DB::raw('GETDATE()'),
                "updated_at" => DB::raw('GETDATE()'),
            ],
        ]);
    }
}
