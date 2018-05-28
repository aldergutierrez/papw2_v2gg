@extends('layouts.main')
@section('title', 'Revdev')

    <!-- Bootstrap core CSS -->
@section('content')
    <div class="fondosesion">
        <main id="registro1" role="main">
            <form class="form-signin">
             <h1 class="TxtHola">Konnichiwa.</h1>
              <label for="inputEmail" class="sr-only">Email address</label>
              <input type="email" id="inputEmail" class="form-control" placeholder="Enter your username or email" required autofocus    >
              <input type="password" id="inputEmail" class="form-control" placeholder="Enter your password" required autofocus>
              <button id="btn-registro" class="btn btn-lg btn-primary btn-block" type="submit">Log in</button>
              <a href="#"><p class="mt-5 mb-3 text-muted"> Forgot password?</p></a>
            </form>
         </main>
     </div>
@endsection