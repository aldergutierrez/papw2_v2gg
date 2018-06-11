<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Database\Eloquent\SoftDeletes;

class userController extends Controller
{


    
        public function index()
    {
    	
    }

    
      public function show(Posts $idPost)
    {
        
    }


      public function store(CreatePostRequest $request)
    {

        


    }


      public function edit(Posts $idPost)
    {
       
    }

     public function update(Posts $idPost, UpdatePostRequest $request)
    {
       
    }

     public function delete(Posts $idPost)
    {
        
    }
}
