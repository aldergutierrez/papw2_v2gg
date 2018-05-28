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
            <img id="post-id" class="card-img-top" src="img/image.jpg" src="holder.js/500x225" alt="Card image cap">
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


       <div class="modal fade" id="posts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <!--<div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Title</h4>
            </div>   -->
            <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
            <div>
              <div class="post-image" >
              <img src="../img/image.jpg">
              </div>
              <div class="post-comment">
                <ul class="info">
                  <li class="post-title">EYE CONTACT</li>
                  <li class="post-account">aldergutierrez</li>
                  <li class="post-category">Category 1</li>
                </ul>
                <img src="../img/Pic1.jpg">
                <div class="btn-follow btn">Follow</div>
                <ul class="likes">
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>22</li>
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>100</li>
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>40</li>
                </ul>
              <div class="date">Published: 05/05/2018</div>
              <div class="border"></div>
              <img class="tool" src="../img/Pic1.jpg">
              <div class="border"></div>
              <div class="btn btn-like">Like project</div>
              <div class="date">Comments(20)</div>
              <textarea class="txt-comment"></textarea>
              <div class="btn btn-like">Post comment</div>
              <div class="comments">
              <img class="img-comment" src="../img/Pic1.jpg">
              <div class="txt-date">12:34am</div>
              <div class="comment">
                <div class="txt-name">Alder</div>
                <div class="txt-comm">Buen trabajo!</div>
                
              </div>
              <img class="img-comment" src="../img/Pic1.jpg">
              <div class="txt-date">12:34am</div>
              <div class="comment">
                <div class="txt-name">Alder</div>
                <div class="txt-comm">Buen trabajo!</div>
  
              </div>
              <img class="img-comment" src="../img/Pic1.jpg">
              <div class="txt-date">12:34am</div>
              <div class="comment">
                <div class="txt-name">Alder</div>
                <div class="txt-comm">Buen trabajo!</div>
 
              </div>
              </div>
              </div>
            </div>
                </div>
              
            </div>
            </div>
          </div>

