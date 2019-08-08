<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('EXEC sp_msforeachtable "ALTER TABLE ? NOCHECK CONSTRAINT all"');

        $this->call(UsersTableSeeder::class);
        $this->call(TipoIdentificacionTableSeeder::class);
        $this->call(JornadaTableSeeder::class);
        $this->call(ModalidadTableSeeder::class);
        $this->call(PaisTableSeeder::class);
        $this->call(CiudadTableSeeder::class);

        DB::statement('EXEC sp_msforeachtable "ALTER TABLE ? WITH CHECK CHECK CONSTRAINT all"');
    }
}
