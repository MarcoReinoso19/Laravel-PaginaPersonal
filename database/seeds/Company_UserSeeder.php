<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\CompanyUser;

class Company_UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('companies_users')->truncate();



      CompanyUser::create([
        'company_id' =>'1',
        'user_id' =>'1'
      ]);

      CompanyUser::create([
        'company_id' =>'1',
        'user_id' =>'2'
      ]);

      CompanyUser::create([
        'company_id' =>'1',
        'user_id' =>'3'
      ]);
    }
}
