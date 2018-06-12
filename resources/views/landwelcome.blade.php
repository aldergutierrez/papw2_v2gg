@extends('layouts.main')
@section('title', 'Revdev')

    <!-- Bootstrap core CSS -->
@section('content')

      <!-- Main jumbotron for a primary marketing message or call to action 
      

<div class="parallax"></div>


<div class="jumbotron">
        <div class="container-fluid">
          
          <h1 class="banner">Showcase n Dev Videogames</h1>
          <span class="subbanner">GameDev Community</span>
        </div>
     
      </div>


<div class="parallax"></div>-->

<!--Main Navigation-->
<!--parallax 1 -->
<section class="bg-1 text-center">
     <h1 class="">REVDEV</h1>

    <p class="lead">Be part of a GameDev Community</p>
<div class="form-group" id="login-registro" style="display: inline-block;">
                        <a class="btn " href="{{ route('register') }}" style="background-color: #65d35e; color: 
                        #fff; "><span class="glyphicon glyphicon-fire" style="font-style: 60px;"></span> Start</a>
                      </div>

</section>
<!--/parallax 1-->
<div class="container">
    <hr class="">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <h3 class="">Share your work</h3>

                </div>
                <div class="panel-body">"Gracias a RevDev he dado a conocer mi trabajo y poder llegar a mas gente, es una buena herramienta y una excelente plataforma!" -Alder Gutierrez, el mismisimo.</div>
                <div class="panel-footer text-right"><a href="#" class="btn btn-default"></a>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <h3 class="">Get job</h3>

                </div>
                <div class="panel-body">"He tenido gran exito laboral gracias a que pude encontrar la oferta perfecta en la seccion de empleos, gran herramienta, deberian utilizarla todos ahora" -Carlos Lira Jr.</div>
                <div class="panel-footer text-right"><a href="#" class="btn btn-default"></a>

                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <h3 class="">Meet people</h3>

                </div>
                <div class="panel-body">"Nuestro equipo se conocio dentro de RevDev, teneniamos gustos en comun y gran talento para compartir, asi que decidimos empezar a trabajar juntos, ahora tenemos un excelente equipo" -Notch, el de minecra</div>
                <div class="panel-footer text-right"><a href="#" class="btn btn-default"></a>

                </div>
            </div>
        </div>
    </div>
    <!--/row-->
    <hr class="">
</div>
<!--/container-->
<div class="divider"></div>
<section class="bg-2">
    <div class="col-sm-10 col-sm-offset-1 text-center">
         <h1 class="">Artist of month</h1>
         <p class="lead">Siouxsie</p>

    </div>
</section>
<div class="divider"></div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                     <h3 class="">RevDev it's for everyone creative.</h3>

                </div>
                <div class="panel-body"><div class="form-group" id="login-registro" style="display: inline-block;">
                        <a class="btn " href="{{ route('register') }}" style="background-color: #65d35e; color: 
                        #fff; "><span class="glyphicon glyphicon-fire" style="font-style: 60px;"></span> Start</a>
                      </div></div>
                
            </div>
        </div>
        
    </div>
</div>
<!--/container-->
<div class="divider"></div>
<!--parallax 2 -->
<section class="bg-3 text-center">

     <img  alt="DevRev" src="{{ asset('Brand/revdev_logo2.png') }}" width="50px" >

    <p class="lead"></p>
</section>
<!--/parallax 2-->

<!--Main Navigation-->
@endsection 





