<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Module;

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

        Module::create([
          'name'=>'Contact',
          'route'=>'Home/Contact/'
        ]);

        Module::create([
          'name'=>'About Us',
          'route'=>'Home/About Us/'
        ]);

    }
}
