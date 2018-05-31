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

            <button type="submit" id="id-post" value="{{ $post->id }}"><img class="center-cropped img-responsive"  src="img/{{ $post->image}}"></button>
            <p class="noteTitle row">{{ $post->title }}</p>
            <p class="noteSub row">{{ $post->description }}</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">{{ $post->likes }} <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">{{ $post->views }} <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#">{{ $post->comments }}<span class=" glyphicon glyphicon-comment"></span></a>
         </div>
          </div>
           @endforeach

<script>
$('#id-post').onClick(function() {
   $id = $('#id-post').val();
   $id= {{$post->id}};
    var ajaxurl = '{{route('post', ['post' => '$id'])}}';
    $.ajax({
        url: ajaxurl,
        type: "GET",
        success: function(data){
            $data = $(data); // the HTML content that controller has produced
            $(".container").html(data);
        }
    });
});
</script>



        </div>
      </div> <!-- /container -->
@endsection 





