@extends('layouts.main')
@section('title', 'RevDev')

    <!-- Bootstrap core CSS -->
@section('content')
 <div class="container">

              <div class="post-image" >
              <img src="../img/{{ $post->image}}">
              </div>
              <div class="post-comment">
                <ul class="info">
                  <li class="post-title">{{ $post->title }}</li>
                  <li class="post-account">aldergutierrez**</li>
                  <li class="post-category">{{ $post->creativeField }}</li>
                </ul>
                <img src="../img/Pic1.jpg">
                <div class="btn-follow btn">Follow</div>
                <ul class="likes">
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>likes </li>
                  <li><span class="glyphicon glyphicon-eye-open"></span></li>
                  <li>views</li>
                  <li><span class="glyphicon glyphicon-comment"></span></li>
                  <li>comments</li>
                </ul>
              <div class="date">Published: {{ $post->created_at }}</div>
              <div class="border"></div>
              <!--<img class="tool" src="../img/Pic1.jpg">-->
              <p class="TxtHola7">{{ $post->description }}</p>

              <div class="border"></div>
              <span class="TxtHola4">Fellas</span>
              <!--<img class="tool" src="../img/Pic1.jpg">-->
              <p class="TxtHola7">{{ $post->fellasTag }}</p>

              <div class="border"></div>

              <span class="TxtHola4">Tools Used</span>
              <p class="TxtHola7">{{ $post->toolsUsed }}</p>
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



@if (Auth::check())
      <div class="panel panel-default" style="margin: 0; border-radius: 0;">
        <div class="panel-body">
            <form action="{{ url('/comment') }}" method="POST" style="display: flex;">
                {{ csrf_field() }}
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <input type="text" name="comment" placeholder="Enter your Comment" class="form-control" style="border-radius: 0;">
                <input type="submit" value="Comment" class="btn btn-primary" style="border-radius: 0;">
            </form>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <ul>
                        @foreach ($errors->all() as $error)
                            {{ $error }}
                        @endforeach
                    </ul>
                </div>
            @endif
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ Session::get('success') }}
                </div>
            @endif
        </div>
      </div>
@endif

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
               <option value="None"selected>Tools Used - None</option>
               <option value="3DsMax">3DsMax</option>
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
               <option value="Other"selected>Category - Other</option>
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
      </div>
    </div>
  </div>
</div>
@endsection

