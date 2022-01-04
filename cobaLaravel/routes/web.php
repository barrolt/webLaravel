<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$blog = App\project::orderBy('created_at', 'desc')->paginate(3);
    return view('welcome', compact('blog'));
});

//Route::get('/challenge', function () {
//	return view('challengeSI');
//});

/*Route::get('/challenge', 'SI@cek');
Route::get('/cek2', 'SI@getResult');

Route::get('/oprec', 'oprecsController@first');
Route::get('/testimoni', 'oprecsController@second');
Route::get('/testimoni2', 'oprecsController@fourth');

Route::get('/oprec2', 'oprecsController@third');
Route::get('/getListTestimoni', 'oprecsController@fifth');

Route::get('/alumni1', 'oprec2sController@index');
Route::get('/alumni2/{alumni}', 'oprec2sController@index2018')->name('alumni.2018');

//Route::get('/alumni1/create', 'oprec2sController@create');
Route::post('/alumni1', 'oprec2sController@store');
Route::delete('/alumni1/{alumni}', 'oprec2sController@destroy')->name('alumni.destroy');
Route::get('/alumni/{alumni}/edit', 'oprec2sController@edit')->name('alumni.edit');
Route::put('/alumni1/{alumni}', 'oprec2sController@update')->name('alumni.update');

Route::resource('/lecture', 'lecturesController');
 */

Auth::routes();
Route::resource('/blog', 'projectController');
Route::get('/kuliah', 'projectController@first');
Route::get('/kuliah/hapus/{id}', 'projectController@hapus');
Route::get('/kuliah/showSoft', 'projectController@showSoft');
Route::get('/kuliah/restore/{id}', 'projectController@restore');
Route::get('/kuliah/{blog}/editImage', 'projectController@editImg');
Route::patch('/kuliah/{blog}/updateImg', 'projectController@updateImg');
Route::post('/comment/create/{blog}', 'commentController@komentar')->name('comment.store');
Route::get('/search', 'searchController@search')->name('search');



