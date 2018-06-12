<?php

namespace App\Http\Controllers;
use DB;
use App\Posts;
use App\User;
use App\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Database\Eloquent\SoftDeletes;

class createPostController extends Controller
{


    
        public function index()
    {
    	$posts = Posts::orderBy('id', 'desc')->get();

        return view('/landing')->with(['posts' => $posts]);
    }

    
      public function show(Posts $idPost)
    {

   $posts = DB::table('posts')->where('posts.id', $idPost->id)->get();

      $users = DB::table('users')->select('users.id', 'users.userName', 'users.image')->leftJoin('posts', 'posts.idUsers', '=', 'users.id')->where('users.id', $idPost->idUsers)->get();

      $comments = DB::table('comments')->select('users.image', 'users.userName', 'comments.comment', 'comments.created_at')->leftJoin('users', 'users.id', '=', 'comments.idUser')->where('comments.idPost', $idPost->id)->get();

      $commentscounts =  Comment::where('idPost', '=',  $idPost->id)->count();

        return view('post', compact('posts', 'users', 'comments', 'idPost', 'commentscounts'));
         
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

     public function delete(Posts $idPost)
    {
        if($idPost->idUsers != \Auth::user()->id) {
            return view('post')->with(['post' => $idPost]);
        }
         $post=Posts::find($idPost);
        $idPost->delete();
        session()->flash('message', 'Post Deleted!');
        return redirect()->route('landing');
    }
}
