@extends('layouts.main')
@section('title', 'RevDev - Registro')

    <!-- Bootstrap core CSS -->
@section('content')
    
    <div class="fondosesion">
    <main id="registro1" role="main">
    <form class="form-signin">
      <h1 id="text1registro" class="TxtHola">Ready for the best GameDev experience?</h1>
      <h1 id="text2registro" class="h6 mb-3 font-weight-normal">Be part of bigest community of game develorers, testers, gamers, teach and creative people.</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
      <button id="btn-registro" class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      <p class="mt-5 mb-3 text-muted"> Already have an account?</p>
    </form>
     </main>
     </div>
@endsection