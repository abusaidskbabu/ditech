<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class faq extends Sximo  {
	
	protected $table = 'faqs';
	protected $primaryKey = 'id';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT faqs.* FROM faqs  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE faqs.id IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
