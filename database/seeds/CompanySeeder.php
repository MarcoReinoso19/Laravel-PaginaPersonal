<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Company;

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

        Company::create([
          'name'=> 'Reinosoft',
          'nit' => 'N001',
          'email' => 'soporte@reinosoft.com',
        ]);

        /* Creacion de semillas sin Eloquent
        DB::table('companies')->insert([
          'name'=> 'Reinosoft',
          'nit' => 'N001',
          'email' => 'soporte@reinosoft.com',
        ]);*/
    }
}
