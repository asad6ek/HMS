<?php

namespace App;


use App\Models\Role;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;


    protected $fillable =
        [
            'name',
            'fname',
            'img',
            'email',
            'password',
        ];



    protected $hidden =
        [
            'password',
            'remember_token',
        ];


    protected $casts =
        [
            'email_verified_at' => 'datetime',
        ];


    public function roles(){
        return $this->belongsToMany(Role::class,'user_roles');
    }
    public function isAdmin(){
        return $this->roles()->where('name','admin')->exists();
    }
    public function isUser()
    {
        $user = $this->roles()->where('name','user')->exists();
        if($user) return $user;
    }
}

