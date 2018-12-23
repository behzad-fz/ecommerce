<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $guarded =['id'];
    public static $rules = [
    	'category_id'	=> 'required|integer',
    	'title'			=> 'required|min:2',
    	'description'	=> 'required|min:10',
    	'price'			=> 'required|numeric',
    	'availablity'	=> 'integer',
    	'image'			=>'required|image|mimes:jpeg,jpg,png,bmp,gif'
    ];
}
