<?php

use Illuminate\Database\Seeder;

class AllDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('EXEC dbo.INSERTDATA');
    }
}
