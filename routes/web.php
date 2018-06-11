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

use App\Posts;
use Illuminate\Http\Request;



Route::get("/", "PagesController@landing");


Route::get("/sesion", function (){
	return view("login");
});

Route::get("/registrar", function (){
	return view("registrar");
});

Route::get("/registrar2", function (){
	return view("registrar2");
});

Route::get("/jobs", function (){
	return view("jobs");
});

Route::get("/postear", function (){
	return view("postear");
});

Route::get("/profile", function (){
	return view("profile");
});

Route::get("/navbar", function (){
	return view("navbar");
});

Route::get("/app", function (){
	return view("app");
});


Route::get("/child", function (){
	return view("child");
});

Route::get("/edit", function (){
	return view("editProfile");
});

Route::get("/teams", function (){
	return view("teams");
});

Route::get("/post", function (){
	return view("post");
});


Auth::routes();


Route::get('/', 'createPostController@index')->name('landing');

Route::name('newpost')->post('/newPost', 'createPostController@store');
Route::name('editpost')->get('/post/{idPost}/edit', 'createPostController@edit');
Route::name('updatepost')->put('/post/{idPost}', 'createPostController@update');
Route::name('post')->get('/post/{idPost}', 'createPostController@show');
Route::name('deletepost')->delete('/post/{idPost}', 'createPostController@delete');

 Route::get('/jobs', 'jobsController@index')->name('jobs');
Route::name('newJob')->post('/newJob', 'jobsController@store');


//Route::name('search')->post('/search', 'busquedaController@store');
//Route::resource('/search', 'busquedaController');
Route::resource('/search', 'busquedaController');
/*
Route::post("/search", function(){
	$busqueda = Request::input('Busqueda'); 
	return $busqueda;
});
*/