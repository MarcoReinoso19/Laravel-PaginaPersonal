<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\UserRole;

class User_RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      DB::table('users_roles')->truncate();

      UserRole::create([
        'user_id' =>'1',
        'role_id' =>'1'
      ]);

      UserRole::create([
        'user_id' =>'3',
        'role_id' =>'2'
      ]);

      UserRole::create([
        'user_id' =>'2',
        'role_id' =>'3'
      ]);
    }
}
