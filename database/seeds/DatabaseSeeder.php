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
        // $this->call(UsersTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');

        $this->call('UserSeeder');
        $this->call('RoleSeeder');
        $this->call('CompanySeeder');
        $this->call('ModuleSeeder');
        $this->call('User_RoleSeeder');
        $this->call('Role_ModuleSeeder');
        $this->call('Company_UserSeeder');

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
