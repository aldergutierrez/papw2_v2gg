<?php

namespace App\Http\Controllers;

use App\User;
use App\Posts;
use App\Jobs;
use App\Comment;
use Auth;
use Session;
use Input;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Http\Controllers\Controller;

class CommentController extends Controller{
    
    public function index(Request $request) {
        $likes = Like::all()->where('user_id', '=', Auth::user()->id)->where('post_id', '=', $request->post_id)->first();
        if ($likes == null) {
            $like = new Like;
            $like->idUser = Auth::user()->id;
            $like->idPost = $request->post_id;
            $like->like = $request->isLike;
            $like->save();
        }
        else {
            $likes->like = $request->isLike;
            $likes->save();
        }
        return [
            'post_id' => $request->post_id
        ];
    }

    public function show( $id){
       
    }


    public function store(Request $request){    //Se muestran los primeros 25 resultados que coinciden
        //return "hola";
      /*
        $resultadousers = User::where('userName', $request->buscar)->orWhere('userName', 'like', '%'.$request->buscar.'%')->take(25)->get();
       

       $resultadoposts = Posts::where('title', $request->buscar)->orWhere('title', 'like', '%'.$request->buscar.'%')->take(25)->get();

       $resultadopostsFecs = Posts::where('created_at', $request->buscar)->orWhere('created_at', 'like', '%'.$request->buscar.'%')->take(25)->get();

       $resultadopostsXcc = Posts::where('creativeField', $request->buscar)->orWhere('creativeField', 'like', '%'.$request->buscar.'%')->take(25)->get();
       

       $resultadojobs = Jobs::where('creativeField', $request->buscar)->orWhere('creativeField', 'like', '%'.$request->buscar.'%')->take(25)->get();

       $resultadojobsEmps = Jobs::where('employment', $request->buscar)->orWhere('employment', 'like', '%'.$request->buscar.'%')->take(25)->get();

       return view('resultados', compact('resultadousers', 'resultadoposts', 'resultadojobs', 'resultadopostsXcc', 'resultadojobsEmps', 'resultadopostsFecs'));
       */
       //return $resultadopost;
    }

    public function edit( $idPost){ 
    }

    public function update( $idPost,  $request){
    }

    public function delete( $idPost){ 
    }

    public function postCreatecomment() {
       
       $input = Input::all();
       $comment = new Comment();
       $comment->idUser = $input['user'];
       $comment->comment = $input['comment'];
       $comment->idPost = $input['post_id'];
       $comment->save();
       return 'Comentario creado!';
    }

    
}