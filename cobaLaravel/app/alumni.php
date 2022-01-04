<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class alumni extends Model
{
	//
	protected $table = 'alumni';
	protected $fillable = [ 'nim', 'nama', 'angkatan', 'tempat_lahir', 
				'tanggal_lahir', 'email', 'prodi_id'];

	public function Prodi() {
		return $this->belongsTo(prodi::class, 'prodi_id', 'detail_id');
	}
}
