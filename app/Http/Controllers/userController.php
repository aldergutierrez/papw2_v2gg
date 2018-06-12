<?php

namespace App\Http\Controllers;

use App\User;
use App\Posts;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUser;
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

       public function update(User $user,  UpdateUser $request)
    { 

      $user = Auth::user();

          $user->update(
           $request->only('userName' ,'name', 'lastName', 'country','city','image', 'description'));

               return redirect()->route('profile');
    }

     public function delete(Posts $idPost)
    {
        
    }
}
