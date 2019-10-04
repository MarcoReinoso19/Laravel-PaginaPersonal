<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
          'name' => 'Marco Reinoso',
          'email' => 'marcoreinoso19@hotmail.com',
          'password' => '123',
        ]);

        DB::table('users')->insert([
          'name' => 'Mateo Reinoso',
          'email' => 'mateoreinoso@gmail.com',
          'password' => '1234',
        ]);

        DB::table('users')->insert([
          'name' => 'Juan Reinoso',
          'email' => 'juanreinoso17@hotmail.com',
          'password' => 'abc',
        ]);
    }
}
