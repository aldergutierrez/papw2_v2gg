<?php

namespace App\Http\Controllers;
use App\Jobs;
use Illuminate\Http\Request;
use App\Http\Requests\CreateJobRequest;

class jobsController extends Controller
{
  
 
        public function index()
    {
    	$jobs = Jobs::orderBy('id', 'desc')->get();

        return view('/jobs')->with(['jobs' => $jobs]);
    }


          public function store(CreateJobRequest $request)
    {
        $job = new Jobs;
        $job->fill($request->only( 'employment', 'description','creativeField','hours','country','city'));
        $job->idUsers = $request->user()->id;
        $job->save();
        session()->flash('message', 'job Created!');
        return redirect()->route('jobs');

    }

         public function delete(Jobs $idJob)
    {
        if($idJob->idUsers != \Auth::user()->id) {
            return redirect()->route('jobs');
        }
         $job=Jobs::find($idJob);
        $idJob->delete();
        session()->flash('message', 'Job Deleted!');
        return redirect()->route('jobs');
    }

}
