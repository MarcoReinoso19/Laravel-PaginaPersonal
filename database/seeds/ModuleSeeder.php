<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('modules')->truncate();

        DB::table('modules')->insert([
         'name'=>'Contact',
         'route'=>'Home/Contact/',
        ]);

        DB::table('modules')->insert([
         'name'=>'About Us',
         'route'=>'Home/About Us/',
        ]);
    }
}
