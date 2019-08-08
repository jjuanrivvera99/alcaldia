<?php

use Illuminate\Database\Seeder;

class ModalidadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modalidad')->delete();
        DB::table('modalidad')->insert([
            [
                "nombre" => 'Mixta',
                "created_at" => DB::raw('SYSDATE'),
                "updated_at" => DB::raw('SYSDATE'),
            ],
            [
                "nombre" => 'Presencial',
                "created_at" => DB::raw('SYSDATE'),
                "updated_at" => DB::raw('SYSDATE'),
            ],
            [
                "nombre" => 'Virtual',
                "created_at" => DB::raw('SYSDATE'),
                "updated_at" => DB::raw('SYSDATE'),
            ],
        ]);
    }
}
