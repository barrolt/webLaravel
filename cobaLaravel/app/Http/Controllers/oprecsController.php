<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\testimoni;

class oprecsController extends Controller
{
	public function first(){
		return view ('oprec');
	}

	public function second(){
		return view ('testimoni');
	}

	public function third(){
		return view ('oprec2');
	}

	public function fourth(){
		$opr = testimoni::all();
		return view('testimoni2', ['opr'=>$opr]);

	}

	public function fifth(){
		$oprr = testimoni::all();
		echo json_encode($oprr);
		//dump($opr);
		//return view('testimoni2', ['opr'=>$opr]);
	}

	public function sixth(){
		//echo "hasillll";
		//return view ('testimoni2');
	}

	public function seventh(){
		$alm = alumni::all();
		echo json_encode($alm);
	}


	public function getResult(){
		echo url()->current();
	}

}

