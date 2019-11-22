<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable=["name", "email", "password"];

    public function roles()
   {
       return $this->belongsToMany('App\Role','users_roles') ->withPivot('id', 'user_id', 'role_id') ->withTimestamps();
   }
}
