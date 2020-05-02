<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class  user_roles extends Model
{
    protected $fillable=[
      'user_id',
      'role_id'
    ];

}
