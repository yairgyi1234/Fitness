<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
      public function items(){
    	return $this -> hasMany("App/Item");
    }
     public function customers(){
    	return $this -> belongsTo("App/Customer");
    }
}
