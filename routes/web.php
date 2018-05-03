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

Route::get("/", function () {
    return view("welcome");
});

Route::get("/prueba", function () {
    return view("landing");
});

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


