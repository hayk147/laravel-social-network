<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [
        'role','name', 'email', 'password','avatar','gender','provider','api_info','access_token','provider_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     * @var array
     */

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function galleries()
    {
        return $this->hasMany('App\Gallery');
    }

    public function posts()
    {
        return $this->hasMany('App\Post');
    }

    public function comments(){

        return $this->hasMany('App\Comment', 'from_user');
    }

}
