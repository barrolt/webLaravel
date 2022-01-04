<?php

namespace App\Http\Controllers;

use App\alumni;
use App\prodi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class oprec2sController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
	    //
	    $alm = alumni::all();
	    $pro = prodi::all();
	return view('alumni1', compact('alm'), compact('pro'));
    }

    public function index2018()
    {
	    //
	//$alm = alumni::all();
	//return view('alumni2', ['alm'=>$alm]);
	    $alm = DB::table('alumni')
		    ->where('angkatan', '=', '2018')->get();
	    return view('alumni2', ['alm'=>$alm]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
	//
	//return view ('');
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
	//
	    $validatedData = $request->validate([
		    'nim' => 'bail|required|max:3',
		    'nama' => 'required',
		    'angkatan' => 'required',
		    'tempat_lahir' => 'required',
		    'tanggal_lahir' => 'required',
		    'email' => 'required',
		    'prodi_id' => 'required'
	    ]);

	    /*$alm = new alumni;

	    $alm->nim = $request->input('nim');
	    $alm->nama = $request->input('nama');
	    $alm->angkatan = $request->input('angkatan');
	    $alm->tempat_lahir = $request->input('tempat_lahir');
	    $alm->tanggal_lahir = $request->input('tanggal_lahir');
	    $alm->email = $request->input('email');

	    $alm->save();*/
	    alumni::create($request->all());

	    return redirect('/alumni1')->with('success', 'Data Tersimpan');


	//return $request;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function show(alumni $alumni)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function edit(alumni $alumni)
    {
        //
	    $pro = prodi::all();
	    return view('/edit', compact('alumni', 'pro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alumni $alumni)
    {
	    //i

		$validatedData = $request->validate([
		    'nim' => 'bail|required|max:3',
		    'nama' => 'required',
		    'angkatan' => 'required',
		    'tempat_lahir' => 'required',
		    'tanggal_lahir' => 'required',
		    'email' => 'required',
		    'prodi_id' => 'required'
	    ]);

	    alumni::where('id', $alumni->id)
		    ->update([
			    'nim' => $request->nim,//cd
			    'nama' => $request->nama,
			    'angkatan' => $request->angkatan,
 			    'tempat_lahir' => $request->tempat_lahir,
    			    'tanggal_lahir' => $request->tanggal_lahir,
			    'email' => $request->email,
			    'prodi_id' => $request->prodi_id
		    ]);
	
		//return $request;
	    return redirect('/alumni1')->with('success', 'Data diupdate');    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\alumni  $alumni
     * @return \Illuminate\Http\Response
     */
    public function destroy(alumni $alumni)
    {
	    //
	    //$alumni->delete();
		alumni::destroy($alumni->id);
		return redirect('/alumni1')->with('success', 'Data Dihapus');
    }
    public function messages()
	{
	    return [
	        'title.required' => 'A title is required',
	        'body.required' => 'A message is required',
	    ];
	}
}
