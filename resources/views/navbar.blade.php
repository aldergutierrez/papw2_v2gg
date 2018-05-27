
   <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
         <a class="navbar-brand  " href="{{ url('/') }}">
        <img  alt="DevRev" src="Brand/revdev_logo2.png" width="50px" >
      </a>
    </div>
    <div class="col-md-2">
    </div>
    <div class="collapse navbar-collapse" id="navbar-1"> 
        
        <ul class="nav navbar-nav">
           
        <li><a href="{{ url('/') }}" >Discover</a></li>
        <li><a href="{{ url('/') }}">Teams</a></li>
        <li><a href="{{ url('/jobs') }}">Jobs</a></li>  
      </ul>

 <form class="navbar-form navbar-right " role="search">
        <div class="form-group">
          <input type="text" id="sss" style=" width: 0px">
        <button class="btn btn-primary" id="btnSearch" type="button"><span class="glyphicon glyphicon-search" style="font-style: 50px;"></span></button>
   </form>
                @if (Route::has('login'))
                    @auth
                           <button class="btn btn-primary" id="btnPostear" type="button" data-toggle="modal" data-target="#myModal">Post</button>
<div class="input-group">
  <a href="{{ url('/profile') }}"><img id="profileNavbar" src="../img/Pic1.jpg"></a>
    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-chevron-down"></span></button>
     <ul class="dropdown-menu">
    <li> <li><a href="#" style="float:right;">{{ Auth::user()->userName }} </a></li>
    <li><a href="#">Edit Profile</a></li>
    <li>     <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form></li>
  </ul>
    </div>

</div>
     
            
          
                    @else
                        <div class="form-group" id="login-registro">
                        <a class="btn btn-default" href="{{ route('login') }}" style="background-color: #424242bd; color: #fff; "><span class=" glyphicon glyphicon-log-in" style="font-style: 50px;"></span> Login</a>
                        <a class="btn btn-default" href="{{ route('register') }}" style="background-color: #65d35e; color: 
                        #fff; "><span class=" glyphicon glyphicon-user" style="font-style: 50px;"></span> Register</a>
                      </div>
                    @endauth
            @endif

   
        
    
     

     </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


<!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            
            
            <div class="modal-body">
             
              <div class="form-group">
                <input type="text" class="form-control" id="recipient-name" placeholder="Title">
              </div>

              <div class="form-group"> 
              <input type="file" name="input-file-1" id="input-file-1" style="width: 600px;">
              </div>

              <div class="form-group">
                <input  type="text" class="form-control " style="height: 60px; " placeholder="Description">
              </div>
            
              <div class="form-group">
              <input  type="text" class="form-control " placeholder="Tag ur Fellas">
              </div>

              <div class="form-group">
              <input  type="text" class="form-control " placeholder="Tool Used">
              </div>

              <div class="form-group">
              <input  type="text" class="form-control " placeholder="Category">
              </div>
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

            <div class="modal-footer">
                
                  
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post<span class="glyphicon glyphicon-chevron-right"></span></button>
            </div>
          </div>
        </div>
      </div>



