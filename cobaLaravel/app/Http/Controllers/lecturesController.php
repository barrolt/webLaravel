<?php

namespace App\Http\Controllers;

use App\lecture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class lecturesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    //
	    $lecture= lecture::all();
	    return view ('/lecture', ['lecture'=>$lecture]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
		    'id_dosen'=> 'bail|required|max:4',
		    'nidn'=>'required',
		    'nama'=>'required',
		    'gender'=>'required',
		    'program_studi'=>'required',
		    'alamat'=>'required',
		    'email'=>'required'
	    ]);

	    lecture::create($request->all());

	    return redirect('/lecture')->with('success', 'Data Tersimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(lecture $lecture)
    {
	    //
	    //return $id;
	    return view('editLecture', compact('lecture'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, lecture $lecture)
    {
	    //
	    $validatedData = $request->validate([
		    'id_dosen'=> 'bail|required|max:4',
		    'nidn'=>'required',
		    'nama'=>'required',
		    'gender'=>'required',
		    'program_studi'=>'required',
		    'alamat'=>'required',
		    'email'=>'required'
	    ]);

	    lecture::where('id', $lecture->id)
		    ->update([
			    'id_dosen'=> $request->id_dosen,
			    'nidn'=> $request->nidn,
			    'nama'=> $request->nama,
			    'gender'=> $request->gender,
			    'program_studi'=> $request->program_studi,
			    'alamat'=> $request->alamat,
			    'email'=> $request->email
		    ]);
	    return redirect('/lecture')->with('success', 'Data di update');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(lecture $lecture)
    {
	    //
	    lecture::destroy($lecture->id);
	    return redirect('/lecture')->with('success', 'Data Dihapus');
    }
}
