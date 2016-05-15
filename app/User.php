<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function teachers(){
        return $this->belongsTo('App\Teacher','email','email');
    }

    public function students(){
        return $this->belongsTo('App\Student','email','email');
    }

    public function admins(){
        return $this->belongsTo('App\Admin','email','email');
    }

}
