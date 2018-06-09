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
                  <li>comments</li>
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
                <div class="txt-comm">Buen trabajo!!</div>
 
              </div>
              </div>

              
              <textarea class="txt-comment"></textarea>
              <div class="btn btn-like">Post comment</div>


  @if($post->wasCreatedBy( Auth::user() ))
                    
                         <button class="btn btn-editpost" id="btnEditar" type="button" data-toggle="modal" data-target="#myModal">Edit</button>
                        <form action="{{ route('deletepost', ['idPost' => $post->id]) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <button type="submit" class='btn btn-deletepost'>Delete</button>
                        </form>
                    
                    @endif
              
        </div>


        <div class="modal fade" id="Meditar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">

            <div class="modal-body">

            @if(count($errors) > 0)

<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li> {{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
            
            
             
             <form action="{{ route('updatepost', ['post' => $post->id]) }}" method="POST">
            {{ method_field('PUT') }}

             {{ csrf_field() }}

              <div class="form-group">
                <input type="text" name="title" class="form-control" id="recipient-name" placeholder="Title" value="{{ $post->title }}"/>
              </div>

              <div class="form-group">
                <input  type="text" name="description" class="form-control " style="height: 60px; " placeholder="Description" value="{{ $post->description }}"/>
              </div>


              <div class="form-group">
              <input  type="text" name="fellasTag" class="form-control " placeholder="Tag ur Fellas" value="{{ $post->fellasTag }}"/>
              </div>

              <div class="form-group">
              <select name="toolsUsed" id="inputCategory" class="form-control" value="{{  $post->toolsUsed }}"">
               <option value="3DsMax"selected>tools Used</option>
               <option value="Animation">3DsMax</option>
               <option value="After Effects">After Effects</option>
               <option value="Blender">Blender</option>
               <option value="GameMaker">GameMaker</option>
               <option value="Illustrator">Illustrator</option>
               <option value="Krita">Krita</option>
               <option value="Maya">Maya</option>
               <option value="Photoshop">Photoshop</option>
               <option value="ToonBoom">ToonBoom</option>
               <option value="Unreal Engine">Unreal Engine</option>
               <option value="Unity">Unity</option>
               <option value="Visual Studio">Visual Studio</option>
               <option value="ZBrush">ZBrush</option>
             </select>
              </div>

              <div class="form-group">
              
              <select name="creativeField" id="inputCategory" class="form-control" value="{{ $post->creativeField }}">
               <option value="Category"selected>Category</option>
               <option value="Animation">Animation</option>
               <option value="Art Direction">Art Direction</option>
               <option value="Branding">Branding</option>
               <option value="Code">Code</option>
               <option value="Character Design">Character Design</option>
               <option value="Concept Art">Concept Art</option>
               <option value="Film">Film</option>
               <option value="Game Design">Game Design</option>
               <option value="Gameplay">Gameplay</option>
               <option value="Graphic Design">Graphic Design</option>
               <option value="Illustration">Illustration</option>
               <option value="Low Poly">Low Poly</option>
               <option value="Music">Music</option>
               <option value="MDA">MDA</option>
               <option value="Photography">Photography</option>
               <option value="Programming">Programming</option>
               <option value="Script">Script</option>
               <option value="Sculpting">Sculpting</option>
               <option value="Tutorial">Tutorial</option>
               <option value="UI/UX">UI/UX</option>
               <option value="VR/AR">VR/AR</option>
               <option value="Visual Effects">Visual Effects</option>
               <option value="Web Design">Web Design</option>
               <option value="Sculpting">Writting</option>
              
             </select>
              </div>
                   <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" class='btn btn-primary'>Save<span class="glyphicon glyphicon-chevron-right"></span></button>

                </form>
              <!--
              <div class="form-group">
              <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Tool Used
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">3DsMax</a></li>
                    <li><a href="#">Photoshop</a></li>
                    <li><a href="#">Krita</a></li>
                    <li><a href="#">Maya 3D</a></li>
                    <li><a href="#">ToonBoom</a></li>
                    <li><a href="#">Moho</a></li>
                    <li><a href="#">Blender</a></li>
                    <li><a href="#">Unity</a></li>
                    <li><a href="#">Unreal Engine</a></li>
                    <li><a href="#">ZBrush</a></li>
                    <li><a href="#">MagicalVoxel</a></li>
                    <li><a href="#">Paint</a></li>
                    <li><a href="#">GameMaker</a></li>
                    <li><a href="#">Illustrator</a></li>
                    <li><a href="#">After Effects</a></li>
                    <li><a href="#">Visual Studio</a></li>
                  </ul>
                </div>
                </div>
                <div class="form-group">
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Choose Category
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Animation</a></li>
                    <li><a href="#">Art Direction</a></li>
                    <li><a href="#">Branding</a></li>
                    <li><a href="#">Code</a></li>
                    <li><a href="#">Character Design</a></li>
                    <li><a href="#">Concept Art</a></li>
                    <li><a href="#">Film</a></li>
                    <li><a href="#">Game Design</a></li>
                    <li><a href="#">Gameplay</a></li>
                    <li><a href="#">Graphic Design</a></li>
                    <li><a href="#">Illustration</a></li>
                    <li><a href="#">Low Poly</a></li>
                    <li><a href="#">Music</a></li>
                    <li><a href="#">Photography</a></li>
                    <li><a href="#">Programming</a></li>
                    <li><a href="#">Script</a></li>
                    <li><a href="#">Sculpting</a></li>
                    <li><a href="#">Web Design</a></li>
                    <li><a href="#">UI/UX </a></li>
                    <li><a href="#">VR/AR</a></li>
                    <li><a href="#">Visual Effects</a></li>
                    <li><a href="#">Writting</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Videogame</a></li>
                  </ul>
                </div>
                </div>-->
            </div>
          </div>
        </div>
      </div>

          @endsection

