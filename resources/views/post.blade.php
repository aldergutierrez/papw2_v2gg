@extends('layouts.main')
@section('title', 'Revdev')

    <!-- Bootstrap core CSS -->
@section('content')
 <div class="container">

              <div class="post-image" >
              <img src="../img/image.jpg">
              </div>
              <div class="post-comment">
                <ul class="info">
                  <li class="post-title">id->title </li>
                  <li class="post-account">aldergutierrez</li>
                  <li class="post-category">creativeField </li>
                </ul>
                <img src="../img/Pic1.jpg">
                <div class="btn-follow btn">Follow</div>
                <ul class="likes">
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>likes </li>
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>{{comments</li>
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>views</li>
                </ul>
              <div class="date">Published: created_at </div>
              <div class="border"></div>
              <span class="TxtHola4">Fellas n Tools</span>
              <img class="tool" src="../img/Pic1.jpg">
              <div class="border"></div>

              <div class="btn btn-like">Like project</div>

              <div class="date">Comments(20)</div>
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

              
              <textarea class="txt-comment"></textarea>
              <div class="btn btn-like">Post comment</div>

              
        </div>
          @endsection

