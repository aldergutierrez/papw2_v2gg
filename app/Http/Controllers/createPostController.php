<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;

class createPostController extends Controller
{


    
        public function index()
    {
    	$posts = Posts::orderBy('id', 'desc')->get();

        return view('/landing')->with(['posts' => $posts]);
    }

    
      public function show(Posts $idPost)
    {
        return view('post')->with(['post' => $idPost]);
    }


          public function store(CreatePostRequest $request)
    {

        $post = new Posts;
        $post->fill($request->only('title', 'description', 'image' ,'creativeField','toolsUsed','fellasTag'));
        $post->idUsers = $request->user()->id;
        $post->save();
        session()->flash('message', 'Post Created!');
        return redirect()->route('landing');


    }


      public function edit(Posts $idPost)
    {
       // if($post->user_id != \Auth::user()->id) {
          //  return redirect()->route('landing');
       // }
        
        return view('post')->with(['post' => $idPost]);
    }

     public function update(Posts $idPost, UpdatePostRequest $request)
    {
        $idPost->update(
           $request->only('title', 'description', 'creativeField','toolsUsed','fellasTag'));
        session()->flash('message', 'Post Updated!');
       return view('post')->with(['post' => $idPost]);
    }
}
