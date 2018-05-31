<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;

class createPostController extends Controller
{


    
        public function index()
    {
    	$posts = Posts::orderBy('id', 'desc')->get();

        return view('/landing')->with(['posts' => $posts]);
    }

    
      public function show(Posts $post)
    {
        return view('post')->with(['post' => $post]);
    }


          public function store(CreatePostRequest $request)
    {

        $post = new Posts;
        $post->fill($request->only('title', 'description', 'image' ,'creativeField','toolsUsed','fellasTag'));
        $post->idUsers = $request->user()->id;
        $post->save();
        session()->flash('message', 'Post Created!');
        return $this->index();


    }


      public function edit(Posts $post)
    {
        if($post->user_id != \Auth::user()->id) {
            return redirect()->route('landing');
        }
        
        return view('editPost')->with(['post' => $post]);
    }
}
