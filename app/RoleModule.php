<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoleModule extends Model
{
    protected $table = 'roles_modules';
    protected $fillable=["role_id", "module_id"];
}
