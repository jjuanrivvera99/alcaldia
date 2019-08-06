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
                "created_at" => DB::raw('GETDATE()'),
                "updated_at" => DB::raw('GETDATE()'),
            ],
            [
                "nombre" => 'Presencial',
                "created_at" => DB::raw('GETDATE()'),
                "updated_at" => DB::raw('GETDATE()'),
            ],
            [
                "nombre" => 'Virtual',
                "created_at" => DB::raw('GETDATE()'),
                "updated_at" => DB::raw('GETDATE()'),
            ],
        ]);
    }
}
