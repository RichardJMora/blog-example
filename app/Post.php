<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
	//protected $hidden = ['category_id', 'slug', 'updated_at'];
	//protected $visible = ['user'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function comments()
	{
		return $this->hasMany('App\Comment');
	} 
}
