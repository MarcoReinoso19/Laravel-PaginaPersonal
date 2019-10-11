<?php

use Illuminate\Database\Seeder;

class Role_ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles_modules')->truncate();

      DB::table('roles_modules')->insert([
        'role_id' =>'1',
        'module_id' =>'1',
      ]);

      DB::table('roles_modules')->insert([
        'role_id' =>'1',
        'module_id' =>'2',
      ]);

      DB::table('roles_modules')->insert([
        'role_id' =>'2',
        'module_id' =>'1',
      ]);

      DB::table('roles_modules')->insert([
        'role_id' =>'3',
        'module_id' =>'2',
      ]);


    }
}
