<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;


Relation::morphMap([
    'Post' => 'App\Post',
    'Event' => 'App\Event',
]);


class FilterTag extends Model
{
	protected $fillable = ['tag_name'];
	
    public function filterable(){
    	return $this->morphTo();
    }

    /**
     * Get all of the posts that are assigned this tag.
     */
    public function posts()
    {
        // return $this->morphedByMany('App\Post', 'taggable');        
        return $this->morphedByMany('App\Post','filterable','filterable_filter_tag','filter_tag_id', 'filterable_id');

    }
    public function events()
    {      
        return $this->morphedByMany('App\Event','filterable','filterable_filter_tag','filter_tag_id', 'filterable_id');

    }
}
