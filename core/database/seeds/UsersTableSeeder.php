<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->truncate();

        DB::table('users')->insert([
            [
                'name' => "Juan Felipe Rivera",
                'email' => 'jjuanrivvera@gmail.com',
                'password' => bcrypt('password'),
                'created_at' => DB::raw('GETDATE( )'),
                'updated_at' => DB::raw('GETDATE( )'),
            ],
            [
                'name' => Str::random(10),
                'email' => Str::random(10).'@gmail.com',
                'password' => bcrypt('password'),
                'created_at' => DB::raw('GETDATE( )'),
                'updated_at' => DB::raw('GETDATE( )'),
            ]
        ]);
    }
}
