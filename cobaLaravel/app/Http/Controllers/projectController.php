<?php

namespace App\Http\Controllers;

use App\project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class projectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
	    $this->middleware('auth', ["except"=>["index", "show"]] );
    }

	public function first(){
		//return view('welcome');
	    $blog = project::orderBy('created_at', 'desc')->paginate(4);
	    return view ('blog.base', compact('blog'));

	}

    public function index()
    {
	    //
	    $blog = project::orderBy('created_at', 'desc')->paginate(4);
	   return view ('blog.index', compact('blog'));
    }
    
/*    public function search(Request $request)
    {
	$q = $request->search;
	$blog = project::where('title', 'like', "%".$q."%")->get();

	$blog = project::find('id', 8);
	return $blog;
	return view('search.result', compact('blog'));
    }*/

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	    //
	    return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
	    //
	    $validatedData = $request->validate([

		    'name' => 'required',
		    'title' => 'bail|required|min:3',
		    'content' => 'required|min:20',
		    'image' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
	    ]);

	    $file = $request->file('image');
	    $nama_file = time().".".$file->getClientOriginalExtension();
	    $tujuan_upload = public_path('/image');
	    $file->move($tujuan_upload, $nama_file);

	    project::create([
	    	'name' => $request->name, 
		'title' => $request->title, 
		'slug' => str_slug($request->title), 
		'content' => $request->content,
		'image' => $nama_file,
		]);

	    return redirect('/kuliah')->withInfo('Data Saved');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function show($blog)
    {
	    //
	    $blog = project::where('slug', '=', $blog)->first();
	    //return $blog;
	    return view ('blog.shows', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(project $blog)
    {
	    //
	    return view ('blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, project $blog)
    {
	    //
	    $validatedData = $request->validate([

		    'name' => 'required',
		    'title' => 'bail|required|min:3',
		    'content' => 'required|min:20',
	    ]);

	    project::where('id', $blog->id)
		    ->update([
			    'name'=> $request->name,
			    'title'=> $request->title,
			    'slug' => str_slug($request->title), 
			    'content'=> $request->content,
		    ]);

	    return redirect('/kuliah')->withInfo('Data Updated');
	    //return $request;


    }

    public function editImg(project $blog)
    {
	    //
	    return view ('blog.editImage', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function updateImg(Request $request, project $blog)
    {
	    //
	    $validatedData = $request->validate([
		    'image' => 'required|file|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
	    ]);

	    $file = $request->file('image');
	    $nama_file = time().".".$file->getClientOriginalExtension();
	    $tujuan_upload = public_path('/image');
	    $file->move($tujuan_upload, $nama_file);
	    $oldName = $blog->image;
	    \Storage::delete($oldName);

	    project::where('id', $blog->id)
		    ->update([
			    'image' => $nama_file
		    ]);

	    return redirect('/kuliah')->withInfo('Image Updated');
	    //return $request;


    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog)
    {
	    //
	    $blog2 = project::onlyTrashed()->where('id', $blog);
	    //$tmptImg = public_path('/image');
	    //if(\Storage::exists($tmptImg, $blog2->image)){
		    //\Storage::delete($tmptImg, $blog2->image);
	    //}
	    //DB::delete('/image', $blog2->image);
	    //$blog3 = project::where('id', $blog)->get();
	    //$Img = $blog2->image;
	    //\Storage::delete($Img);
	    $blog2->forceDelete();
	    //project::where('id', $project->id);
	    //return $blog;
	    return back()->withInfo('Data Deleted Permanent');
    }

    //softdelete
    public function hapus($id)
	{
	    	$blog = project::find($id);
	    	$blog->delete();
	 
	    	return back()->withInfo('Data Deleted');
    }
    
    public function showSoft()
    {
	    //
	    $blog = project::onlyTrashed()->get();
	    return view('blog.showTrash', compact('blog'));
    }

    public function restore($id)
    {
	    $blog = project::onlyTrashed()->where('id', $id);
	    $blog->restore();
	    return back()->withInfo('Data Restored');
    }

}
