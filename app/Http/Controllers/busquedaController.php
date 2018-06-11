<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\Controller;

class busquedaController extends Controller{

    public function index(){
    	return "Si";
    }

    
    public function show( $id){
       
    }


    public function store(Request $request){    //Se muestran los primeros 10 resultados que coinciden
       // return "hola";
        $resultado = user::where('userName', $request->buscar)->orWhere('userName', 'like', '%'.$request->buscar.'%')->take(10)->get();
       return $resultado;
    }

    public function edit( $idPost){ 
    }

    public function update( $idPost,  $request){
    }

    public function delete( $idPost){ 
    }
}