<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class userController extends Controller
{


    
       public function index()
    {

      $user= \Auth::user()->id;
      $posts = Posts::where('idUsers', $user)->orderBy('id', 'desc')->get();

        return view('/profile')->with(['posts' => $posts]);

    }

    
      public function show(Posts $idPost)
    {

 
    }


      public function store(CreatePostRequest $request)
    {

        

        


    }


      public function edit(User $user)
    {
         $user = Auth::user();
        return view('/editProfile', compact('user'));
    }

       public function update(User $user)
    { 
       

        $user->update();

        return back();
    }

     public function delete(Posts $idPost)
    {
        
    }
}
