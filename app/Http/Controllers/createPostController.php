<?php

namespace App\Http\Controllers;
use App\Posts;

use Illuminate\Http\Request;

class createPostController extends Controller
{
    
        public function index()
    {
    	$posts = Posts::all();

        return view('/landing')->with(['posts' => $posts]);
    }
}
