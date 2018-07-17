<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    
    protected $table = 'posts';
    

    public $primaryKey = 'id';
    
    public function user(){
        return $this->belongsTo('App\User');
    }
    public function filterTags(){
    	return $this->morphToMany('App\FilterTag','filterable','filterable_filter_tag', 'filterable_id','filter_tag_id');
    	// return $this->belongsToMany('App\FilterTag','post__filter_tag', 'post_id', 'filter_tag_id');
    }

  public function photos(){
   	return $this->morphMany('App\Photo','photoable','photoable_type', 'photoable_id');
   }

}
