<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class project extends Model
{
	//
	use SoftDeletes;
	protected $fillable = [ 'name', 'title', 'slug', 'content', 'image'];
	protected $dates = ['deleted_at'];

	public function comments()
	{
        	return $this->morphMany(comment::class, 'commentable');
	}
}
