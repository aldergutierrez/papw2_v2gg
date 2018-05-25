@extends('layouts.main')
@section('title', 'RevDev - Registro')

    <!-- Bootstrap core CSS -->
@section('content')
   
    <div class="fondosesion">
    <main id="registro1" role="main">
   <form class="form-signin">
      <h1 id="text1registro" class="TxtHola">:O</h1>
    <div class="CreateAccont">
      <div class="form-group">
        <div class="input-group">
        <input class="form-control" type="text" placeholder="Default input">
        <span class="input-group-addon glyphicon glyphicon-ok"></span> </div>
        <div class="input-group">
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"><span class="input-group-addon glyphicon glyphicon-ok"></span></div>
        <button id="btn-registro" class="btn btn-lg btn-primary btn-block" type="submit">
         Create Account</button>
       </div>
        <p class="mt-5 mb-3 text-muted"> Already have an account?</p>
    </div>
    </form> 


     </main>
     </div>
@endsection