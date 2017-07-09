<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagGroup extends Model
{
	protected $table = 'taggroups';
    public function tags()
    {
        return $this->hasMany('App\Tag','taggroup_id');
    }
}
