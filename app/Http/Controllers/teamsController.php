<?php

namespace App\Http\Controllers;

use App\User;
use App\Posts;
use App\Jobs;
use Illuminate\Http\Request;
use App\Http\Requests\CreatePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Illuminate\Database\Eloquent\SoftDeletes;

class teamsController extends Controller
{


    
        public function index()
    {
    	//return "index del teamsController";
       $teams = Posts::orderBy('id', 'desc')->get();
       return view('teams', compact('teams'));
    }

    
      public function show(Posts $id)
    {
        return "show del teamsController";
    }

      public function store(CreatePostRequest $request)
    {
        return "store del teamsController";
    }

      public function edit(Posts $idPost)
    {
        return "edit del teamsController";
    }

     public function update(Posts $idPost, UpdatePostRequest $request)
    {
        return "update del teamsController";
    }

     public function delete(Posts $idPost)
    {
        return "delete del teamsController";
    }
}
