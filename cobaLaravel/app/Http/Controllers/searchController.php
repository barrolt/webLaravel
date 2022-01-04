<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;

class searchController extends Controller
{
	public function search(Request $request)
	{
		$q = $request->search;
		$blog = project::where('title', 'like', "%".$q."%")->get();

		return view('search.result', ['blog' => $blog]);
	}
}
