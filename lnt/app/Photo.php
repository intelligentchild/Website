<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Relation;

Relation::morphMap([
    'Post' => 'App\Post',
    'Gallery' => 'App\Gallery',
]);


class Photo extends Model
{
    //
    protected $fillable = [ 'file_name', 'file_size', 'file_mime', 'file_path','user_id'];

    // public funtion gallery(){
    // 	return $this->belongsTo('App\Gellary');
    // }
    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function photoable(){
    	return $this->morphTo();
    }

    public function gallery(){
    	return $this->morphMany('App\Gallery','photoable','photoable_type', 'photoable_id');
    }

    public function posts()	{
		return $this->morphMany('App\Post','photoable','photoable_type', 'photoable_id');

    }
}
