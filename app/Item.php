<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
     public function stocks(){
    	return $this -> hasMany("App/Stock");
    }
}
