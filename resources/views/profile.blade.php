@extends('layouts.main')
@section('title', 'RevDev')

    <!-- Bootstrap core CSS -->
@section('content')
        <section id="home" name="home"></section>
          <div id="headerwrap" style="background: linear-gradient(
                     rgba(20,20,20, .7), 
                     rgba(20,20,20, .7)),
                     url(../img/image.jpg);
                    background-color: black; 
                    margin-top: -10px;
                    padding-top:20px;
                    text-align:center;
                    background-attachment: relative;
                    background-position: center center;
                    min-height: 740px;
                    width: 100%;
                    
                      -webkit-background-size: 100%;
                      -moz-background-size: 100%;
                      -o-background-size: 100%;
                      background-size: 100%;

                      -webkit-background-size: cover;
                      -moz-background-size: cover;
                      -o-background-size: cover;
                      background-size: cover;;">
                              <div class="container">
              <a href="#"><span class="glyphicon glyphicon-option-horizontal" style="color:white" aria-hidden="true"></span></a>
              
              <div class="pictureProfile">
                <img src="../img/Pic1.jpg" class="img-circle" style="height: 180px">
              </div>

              <h2>{{ Auth::user()->userName }}</h2>
              <h4>{{ Auth::user()->email }}</h4>
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
              <a href="#"><img src="../img/downarrow.png" class="arrowdown" ></a>
  
          </div><!-- /headerwrap -->     
     

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction input-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
         </div>
          </div>
          <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction input-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
         </div>
          </div>

          <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction input-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
         </div>
          </div>

          <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction input-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
         </div>
          </div>

          

          
        </div>

        <hr>

      </div> <!-- /container -->

@endsection