<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function posts(){
    	return $this->hasMany('App\Posts');//use of hasmany because of onetomany
    }
}
