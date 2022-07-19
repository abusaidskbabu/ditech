<?php

namespace App\Helpers;
use DB;
use Illuminate\Database\Eloquent\Model;

class Helper{

}

function genarateSlug($string){
	$string = $string;
	$slug = str_replace(' ', '-', $string);
	return $slug;
}

