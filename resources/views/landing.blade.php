@extends('layouts.main')
@section('title', 'Revdev')

    <!-- Bootstrap core CSS -->
@section('content')

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container-fluid">
          
          <h1 class="banner">Showcase n Dev Videogames</h1>
          <span class="subbanner">GameDev Community</span>
        </div>
     
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">

          @foreach ($posts as $post)
          
          <div class="col-md-3 post">
            <img id="post-id" class="card-img-top" src="" src="holder.js/500x225" alt="Card image cap">
            <p class="noteTitle row">{{ $post->title }}</p>
            <p class="noteSub row">{{ $post->description }}</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>
           @endforeach

        </div>
      </div> <!-- /container -->
@endsection 



