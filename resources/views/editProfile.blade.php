@extends('layouts.main')
@section('title', 'RevDev - Registro')

    <!-- Bootstrap core CSS -->
@section('content')
<div class="fondosesion">
        <section id="home" name="home"></section>
          <div id="editSection">
              <a href="#"><span class="glyphicon glyphicon-option-horizontal" style="color:white" aria-hidden="true"></span></a>
              
              <div class="pictureProfile">
                <img src="../img/Pic1.jpg" class="img-circle" style="height: 180px">
              </div>

            
            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Name">

            <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Last name">

             <select id="inputCountry" class="form-control">
               <option selected>Country</option>
               <option>Mexico</option>
               <option>United States of America</option>
               <option>Japan</option>
               <option>Canada</option>
               <option>Chile</option>
               <option>Argentina</option>
               <option>Spain</option>
               <option>China</option>
             </select>

             <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="City">

             <input type="name" class="form-control" id="exampleFormControlInput1" placeholder="Description">

             <button id="btn-registro" class="btn btn-lg btn-primary btn-block" type="submit">Aceptar</button>
          </div><!-- /headerwrap -->    
          </div>


@endsection