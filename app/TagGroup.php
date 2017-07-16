<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TagGroup extends Model
{
    public function tags()
    {
        return $this->hasMany('App\Tag','taggroup_id');
    }
    public function scopeIsRegional($query)
    {
        return $query->whereName('regional');
    }
    public function scopeIsArea($query)
    {
        return $query->whereName('area');
    }
}
