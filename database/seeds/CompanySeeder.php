<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('companies')->truncate();

        DB::table('companies')->insert([
          'name'=> 'Reinosoft',
          'nit' => 'N001',
          'email' => 'soporte@reinosoft.com',
        ]);
    }
}
