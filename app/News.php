<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    //display post which is releated to particular user only
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
