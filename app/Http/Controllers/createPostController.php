<?php

namespace App\Http\Controllers;

use App\Posts;
use App\Http\Requests;
use Illuminate\Http\Request;

class createPostController extends Controller
{
    
        public function index()
    {
    	$posts = Posts::all();

        return view('/landing')->with(['posts' => $posts]);
    }


          public function store(Request $request)
    {

    	$this->validate($request,['title' => 'required',
    		'description' => 'required',
'image' => 'required',
'creativeField' => 'required',
'fellasTag' => 'required',
'toolsUsed' => 'required',
'idUsers' => 'required'
]);

    	dd($request->all());


    }
}
