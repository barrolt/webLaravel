<?php

namespace App\Http\Controllers;

use App\comment;
use App\project;
use Illuminate\Http\Request;
use Illmuniate\Support\Facades\DB;

class commentController extends Controller
{
	public function komentar(Request $request, project $blog)
	{
		$comment = New comment;
		$comment->comment = $request->comment;

		$blog->comments()->save($comment);

		return back()->withInfo('Comment added');
	}
}
