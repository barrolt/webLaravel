<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lecture extends Model
{
	//
	protected $table = 'lectures';
	protected $fillable = ['id_dosen', 'nidn', 'nama', 'gender',
				'program_studi', 'alamat', 'email'];
}
