<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('roles')->truncate();

        Role::create([
          'name' =>'administrator'
        ]);

        Role::create([
          'name' =>'user'
        ]);

        Role::create([
          'name' =>'spectator'
        ]);

    }
}
