<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    public function tags(){
    	return $this->belongsToMany('App\Tag', 'posttags', 'post_id', 'tag_id');
    }
}
