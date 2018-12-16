<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable =['name'];

    public static $rules =['name' =>'required|min:3'];

}
