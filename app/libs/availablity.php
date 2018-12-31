<?php

namespace App\libs;

class Availablity {
	public function __construct(){


	}

	public static function display($Availablity){
	if($Availablity==1){
		echo "موجود";
	}else{
		echo "ناموجود";
	}


	}

		public static function displayclass($Availablity){
	if($Availablity==1){
		echo "instock";
	}else{
		echo "outofstock";
	}


	}
}