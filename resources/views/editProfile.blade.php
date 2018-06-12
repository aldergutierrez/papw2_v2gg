@extends('layouts.main')
@section('title', 'RevDev - Registro')

    <!-- Bootstrap core CSS -->
@section('content')
<div class="fondosesion">
        <section id="home" name="home"></section>

          <div id="editSection">
              <a href="#"><span class="glyphicon glyphicon-option-horizontal" style="color:white" aria-hidden="true"></span></a>
              
              <div class="pictureProfile" style="margin-left: 33%; margin-bottom: 20px;" >
             <form action="{{ route('updateperfil', ['name' =>  Auth::user()->userName  ] ) }}" method="POST">
            {{ method_field('PUT') }}

             {{ csrf_field() }}    
              <div class="input-group">
           <img src="../img/Pic1.jpg" class="img-circle" style="height: 180px">
                <input type="file" class="form-control" id="profile_pic" name="image"
                      accept=".jpg, .jpeg, .png" value="{{ $user->image }}"/>
           </div></div>
              <input type="hidden" name="userName" class="form-control" id="exampleFormControlInput1" placeholder="Name" value="{{ $user->userName }}" />

            <input type="name" name="name" class="form-control" id="exampleFormControlInput1" placeholder="Name" value="{{ $user->name }}" />

            <input type="name" name="lastName" class="form-control" id="exampleFormControlInput1" placeholder="Last name" value="{{ $user->lastName }}" />

             <select name="country" id="inputCountry" class="form-control" value="{{ $user->country }}"/>
               <option selected>Country</option>
               <option value="Mexico" >Mexico</option>
               <option value="EE. UU.">EE. UU.</option>
               <option value="Japan">Japan</option>
               <option value="Canada">Canada</option>
               <option value="Argentina">Argentina</option>
               <option value="Spain">Spain</option>
               <option value="China">China</option>
             </select>

             <input type="name" name="city" class="form-control" id="exampleFormControlInput1" placeholder="City" value="{{ $user->city }}" />

             <input type="name" name="description" class="form-control" id="exampleFormControlInput1" placeholder="Description" value="{{ $user->description }}" />

                <button type="submit" class='btn btn-primary'>Aceptar</button>

                </form>
          </div><!-- /headerwrap -->    
          </div>


@endsection