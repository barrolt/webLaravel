<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prodi extends Model
{
	//
	protected $table = 'prodi';
	protected $fillable = ['id', 'prodi', 'detail_id'];

	public function alumni() {
		return $this->hasMany(alumni::class, 'detail_id', 'prodi_id');
	}
}
