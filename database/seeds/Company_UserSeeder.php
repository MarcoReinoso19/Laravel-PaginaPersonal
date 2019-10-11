<?php

use Illuminate\Database\Seeder;

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

      DB::table('companies_users')->insert([
        'company_id' =>'1',
        'user_id' =>'1',
      ]);

      DB::table('companies_users')->insert([
        'company_id' =>'1',
        'user_id' =>'2',
      ]);

      DB::table('companies_users')->insert([
        'company_id' =>'1',
        'user_id' =>'3',
      ]);
    }
}
