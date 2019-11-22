<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;

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


        User::create([
          'name' => 'Marco Reinoso',
          'email' => 'marcoreinoso19@hotmail.com',
          'password' => bcrypt('123')
        ]);

        User::create([
          'name' => 'Mateo Reinoso',
          'email' => 'mateoreinoso@gmail.com',
          'password' => bcrypt('1234')
        ]);

        User::create([
          'name' => 'Juan Reinoso',
          'email' => 'juanreinoso17@hotmail.com',
          'password' => bcrypt('abc')
        ]);
    }
}
