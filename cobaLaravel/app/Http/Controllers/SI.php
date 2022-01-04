<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SI extends Controller
{
	public function cek(){
		return view ('challengeSI');
	}

	public function getResult(){
		echo url()->current();
	}

}

