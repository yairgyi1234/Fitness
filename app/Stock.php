<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
      public function categories(){
    	return $this -> hasMany("App/Category");
	  }
	   public function items(){
    	return $this -> hasMany("App/Item");
    }
}