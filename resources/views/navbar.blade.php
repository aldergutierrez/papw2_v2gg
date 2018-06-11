  @include('newpost')
 
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
        <img  alt="DevRev" src="{{ asset('Brand/revdev_logo2.png') }}" width="50px" >
      </a>
   </div>
    <div class="collapse navbar-collapse" id="navbar-1"> 
        
        <ul class="nav navbar-nav">
           
        <li><a href="{{ url('/') }}" >Discover</a></li>
        <li><a href="{{ url('/teams') }}">Teams</a></li>
        <li><a href="{{ url('/jobs') }}">Jobs</a></li>  
      </ul>

 <form id="formSearch" method="post" action="/search" class="navbar-form navbar-right " role="search">
        <div class="form-group">
          {{ csrf_field() }}
        <input name="buscar" type="text" id="sss" style=" width: 0px">
        <button class="btn btn-primary" id="btnSearch" type="button"><span class="glyphicon glyphicon-search" style="font-style: 50px;"></span></button>
   </form>

                @if (Route::has('login'))
                    @auth
                           <button class="btn btn-primary" id="btnPostear" type="button" data-toggle="modal" data-target="#myModal">Post</button>
<div class="input-group">

  <a href="{{ url('/profile') }}"><img id="profileNavbar" src="../img/Pic1.jpg"></a>
  <div class="dropdown" style="display: inline-block;">
    <button class="btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-chevron-down"></span></button>
     <ul class="dropdown-menu">
    <li> <a href="{{ url('/profile') }}" style="float:right;">{{ Auth::user()->userName }} </a></li>
    <li><a href="{{ url('/edit') }}">Edit Profile</a></li>
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

                    @else
                        <div class="form-group" id="login-registro" style="display: inline-block;">
                        <a class="btn btn-default" href="{{ route('login') }}" style="background-color: #424242bd; color: #fff; "><span class=" glyphicon glyphicon-log-in" style="font-style: 50px;"></span> Login</a>
                        <a class="btn btn-default" href="{{ route('register') }}" style="background-color: #65d35e; color: 
                        #fff; "><span class=" glyphicon glyphicon-user" style="font-style: 50px;"></span> Register</a>
                      </div>
                    @endauth
            @endif
</div>
   
        
    
     

     </div><!-- /.navbar-collapse -->
</div>
    </nav>

     








