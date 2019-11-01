<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CompanyUser extends Model
{
    protected $table = 'companies_users';
    protected $fillable=["company_id", "user_id"];
}
