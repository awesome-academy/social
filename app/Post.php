<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function tags()
    {
    	return $this->belongsToMany('App\Tag', 'post_tag');
    }

    public function topic()
    {
    	return $this->belongsTo('App\Topic');
    }

    public function reports()
    {
        return $this->morphMany('App\Report', 'reportable');
    }

    public function comments()
    {
    	return $this->hasMany('App\Comment');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
