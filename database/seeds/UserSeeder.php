<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Role;

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


        $user = User::create([
          'name' => 'Marco Reinoso',
          'email' => 'marcoreinoso19@hotmail.com',
          'password' => bcrypt('123')
        ]);
        $user->roles()->attach('1');
        $user->roles()->attach('2');

        $user = User::create([
          'name' => 'Mateo Reinoso',
          'email' => 'mateoreinoso@gmail.com',
          'password' => bcrypt('1234')
        ]);
        $user->roles()->attach('2');

        $user = User::create([
          'name' => 'Juan Reinoso',
          'email' => 'juanreinoso17@hotmail.com',
          'password' => bcrypt('abc')

        ]);
        $user->roles()->attach('3');
    }
}
