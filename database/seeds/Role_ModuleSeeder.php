<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\RoleModule;

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

      RoleModule::create([
        'role_id' =>'1',
        'module_id' =>'1'
      ]);

      RoleModule::create([
        'role_id' =>'1',
        'module_id' =>'2'
      ]);

      RoleModule::create([
        'role_id' =>'2',
        'module_id' =>'1'
      ]);

      RoleModule::create([
        'role_id' =>'3',
        'module_id' =>'2'
      ]);


    }
}
