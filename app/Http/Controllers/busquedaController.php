<?php

namespace App\Http\Controllers;

use App\User;
use App\Posts;
use App\Jobs;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\Controller;

class busquedaController extends Controller{

    public function index(){
    	return "Jeje estas en el index del busquedaController";
    }

    
    public function show( $id){
       
    }


    public function store(Request $request){    //Se muestran los primeros 10 resultados que coinciden
        //return "hola";
        $resultadousers = User::where('userName', $request->buscar)->orWhere('userName', 'like', '%'.$request->buscar.'%')->take(10)->get();
       

       $resultadoposts = Posts::where('title', $request->buscar)->orWhere('title', 'like', '%'.$request->buscar.'%')->take(10)->get();
       

       $resultadojobs = Jobs::where('creativeField', $request->buscar)->orWhere('creativeField', 'like', '%'.$request->buscar.'%')->take(10)->get();

       return view('resultados', compact('resultadousers', 'resultadoposts', 'resultadojobs'));

       //return $resultadopost;
    }

    public function edit( $idPost){ 
    }

    public function update( $idPost,  $request){
    }

    public function delete( $idPost){ 
    }
}