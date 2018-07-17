<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function filterTags(){
    	return $this->morphToMany('App\FilterTag','filterable','filterable_filter_tag', 'filterable_id','filter_tag_id');
    }
}
