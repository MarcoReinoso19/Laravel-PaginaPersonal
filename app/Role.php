<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=["name"];

    public function roles()
   {
       return $this->belongsToMany('App\User','users_roles') ->withPivot('id', 'user_id', 'role_id') ->withTimestamps();
   }
}
