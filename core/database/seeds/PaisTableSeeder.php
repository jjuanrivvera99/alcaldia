<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pais')->delete();

        DB::table('pais')->insert([
            [
                'nombre' => "Colombia",
                'created_at' => DB::raw('SYSDATE'),
                'updated_at' => DB::raw('SYSDATE'),
            ],
            [
                'nombre' => "Venezuela", //Trigueros insistió
                'created_at' => DB::raw('SYSDATE'),
                'updated_at' => DB::raw('SYSDATE'),
            ],
        ]);
    }
}
