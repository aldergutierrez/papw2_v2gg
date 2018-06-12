@extends('layouts.main')
@section('title', 'RevDev')

    <!-- Bootstrap core CSS -->
@section('content')

          <div id="headerwrap" style="background: linear-gradient(
                     rgba(20,20,20, .7), 
                     rgba(20,20,20, .7)),
                     url(../img/image.jpg);
                    background-color: black; 
                    margin-top: -10px;
                    padding-top:20px;
                    text-align:center;
                    background-position: center center;
                    min-height: 740px;
                    width: 100%;
                      background-size: cover;;">
                              <div class="container">
              <a href="#"><span class="glyphicon glyphicon-option-horizontal" style="color:white" aria-hidden="true"></span></a>
              
              <div class="pictureProfile">
                <img src="../img/{{ Auth::user()->image }}" class="center-cropped2" style="height: 180px">
              </div>

              <h2>{{ Auth::user()->name }} {{ Auth::user()->lastName }}</h2>
              <h4>@ {{ Auth::user()->userName }}</h4>
              <h4>{{ Auth::user()->country }} {{ Auth::user()->city }}</h4>
              <a class="btn btn-default btn-outline">Follow</a>
              <br>
              <hr class="style1">
                <div class="followers">
                  <div class="content">
                  <span class="numbers">75</span>
                    <span class="letters">Posts</span>
                    </div>
                    <div class="content">
                  <span class="numbers">{{ Auth::user()->followers }}</span>
                    <span class="letters">Followers</span>
                    </div>
                    <div class="content">
                  <span class="numbers">{{ Auth::user()->follows }}</span>
                    <span class="letters">Following</span>
                    </div>
                </div>
                <hr class="style1">
                <div class="text">
                {{ Auth::user()->description }}
                </div>
                <hr class="style1">
                <div>
                 <a href="#"><i class="fa iconSocial">&#xf082;</i></a>
                 <a href="#"><i class="fa iconSocial">&#xf16d;</i></a>
                 <a href="#"><i class="fa iconSocial">&#xf194;</i></a>
                 <a href="#"><i class="fa iconSocial">&#xf099;</i></a>
                </div>
              </div>
              <a id="downarrow" href="#section1"><img src="../img/downarrow.png" class="arrowdown" ></a>
  
          </div><!-- /headerwrap -->     
     

      <div id="section1" class="container">
        <!-- Example row of columns -->
        <div class="row">

           @foreach ($posts as $post)
          
          <div class="col-md-3 post">

            <a href="{{ route('post', ['id' => $post->id]) }}"  id="id-post" class="postimage" value="{{ $post->id }}"><img class="center-cropped img-responsive"  src="img/{{ $post->image}}"></a>
            <p class="noteTitle row">{{ $post->title }}</p>
            <p class="noteSub row">{{ $post->creativeField }}</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">{{ $post->likes }} <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">{{ $post->views }} <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#">{{ $post->comments }} <span class=" glyphicon glyphicon-comment"></span></a>
         </div>
          </div>
           @endforeach





        </div>
      </div> <!-- /container -->

@endsection