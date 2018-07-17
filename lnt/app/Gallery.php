<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
   
   protected $table = 'galleries';

    public function user(){
    	return $this->belongsTo('App\User');
    }
    
   public function photos(){
   		// return $this->hasMany('App\Photo' );
   	return $this->morphMany('App\Photo','photoable','photoable_type', 'photoable_id');
   }

}
