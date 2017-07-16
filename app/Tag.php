<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
	public $timestamps = false;
    public function posts(){
    	return $this->belongsToMany('App\Post', 'posttags', 'tag_id', 'post_id');
    }
    public function taggroup()
    {
        return $this->belongsTo('App\TagGroup');
    }
}
