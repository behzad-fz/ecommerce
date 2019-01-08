<?php

namespace App\models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

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
    protected $guarded=['id','admin','remember_token'];

    public static $rules=[
        'firstname'              => 'required|alpha|min:3' ,
        'lastname'               => 'required|alpha|min:3' ,
        'email'                  => 'required|email|unique:users' ,
        'password'               => 'required|alpha_num|between:6,12|confirmed',
        'password_confirmation'  => 'required|alpha_num|between:6,12',
        'telephone'              => 'required|between:6,10' ,
        'admin'                  => 'integer'
    ];
}
