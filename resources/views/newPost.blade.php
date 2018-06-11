 <div class="modal fade" id="Mpostear" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
            
            
             <form action=" {{ route('newpost') }} " method="POST" id="new-Post">

             {{ csrf_field() }}

              <div class="form-group">
                <input type="text" name="title" class="form-control" id="recipient-name" placeholder="Title" value="{{ old('title') }}"/>
              </div>

              <div class="form-group"> 
              <input name="input-file-1" id="input-file-1" style="width: 600px;" value="{{ old('image') }}"/>
              </div>
 
              <div class="form-group">
                <input  type="text" name="description" class="form-control " style="height: 60px; " placeholder="Description" value="{{ old('description') }}"/>
              </div>
            
              <div class="form-group">
              <input  type="text" name="fellasTag" class="form-control " placeholder="Tag ur Fellas" value="{{ old('fellasTag') }}"/>
              </div>

              <div class="form-group">
               <select name="toolsUsed" id="inputCategory" class="form-control" value="{{ old('toolsUsed') }}"">
               <option value="None"selected>tools Used</option>
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
              <!--<input  type="text" name="creativeField" class="form-control " placeholder="Category" value="{{ old('creativeField') }}"/>-->
              <select name="creativeField" id="inputCategory" class="form-control" value="{{ old('creativeField') }}">
               <option value="Other"selected>Category</option>
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
                <button type="submit" class='btn btn-primary'>Post<span class="glyphicon glyphicon-chevron-right"></span></button>

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
