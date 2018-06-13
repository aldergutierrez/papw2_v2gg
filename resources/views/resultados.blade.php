@extends('layouts.main')
@section('title', 'Revdev - Jobs')
@include('newJob')
    <!-- Bootstrap core CSS -->
@section('content')


 <div class="leftjobs col-md-12">
 	<div class="jobs1 row">
 		<span class="TxtHola5">Users</span>
    </div>
    <div class="jobs2 row">
        @foreach ($resultadousers as $resultadouser)
          
          <div class="col-md-2 post">

            <a href="{{ route('post', ['id' => $resultadouser->id]) }}"  id="id-post" class="postimage" value="{{ $resultadouser->id }}"><img class="center-cropped img-responsive"  src="img/{{ $resultadouser->image}}"></a>
            <p class="noteTitle row">{{ $resultadouser->userName }}</p>
            <p class="noteSub row">{{ $resultadouser->description }}</p>
            <p class="noteSub row">{{ $resultadouser->followers }} Followers</p>
            <div class="btn-followThumn btn">Follow</div>

          </div>
           @endforeach
    </div>
 </div>
  <div class="leftjobs col-md-12">
    <div class="jobs1 row">
        <span class="TxtHola5">Posts</span>
    </div>
    <div class="jobs2 row">
        @foreach ($resultadoposts as $resultadopost)
          
          <div class="col-md-2 post">

            <a href="{{ route('post', ['id' => $resultadopost->id]) }}"  id="id-post" class="postimage" value="{{ $resultadopost->id }}"><img class="center-cropped img-responsive"  src="img/{{ $resultadopost->image}}"></a>
            <p class="noteTitle row">{{ $resultadopost->title }}</p>
            <p class="noteSub row">{{ $resultadopost->creativeField }}</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">{{ $resultadopost->likes }} <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">{{ $resultadopost->views }} <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#">{{ $resultadopost->comments }} <span class=" glyphicon glyphicon-comment"></span></a>
         </div>
          </div>
           @endforeach
        @foreach ($resultadopostsXcc as $resultadopostXcc)
          
          <div class="col-md-2 post">

            <a href="{{ route('post', ['id' => $resultadopostXcc->id]) }}"  id="id-post" class="postimage" value="{{ $resultadopostXcc->id }}"><img class="center-cropped img-responsive"  src="img/{{ $resultadopostXcc->image}}"></a>
            <p class="noteTitle row">{{ $resultadopostXcc->title }}</p>
            <p class="noteSub row">{{ $resultadopostXcc->creativeField }}</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">{{ $resultadopostXcc->likes }} <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">{{ $resultadopostXcc->views }} <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#">{{ $resultadopostXcc->comments }} <span class=" glyphicon glyphicon-comment"></span></a>
         </div>
          </div>
           @endforeach
        @foreach ($resultadopostsFecs as $resultadopostsFec)
          
          <div class="col-md-2 post">

            <a href="{{ route('post', ['id' => $resultadopostsFec->id]) }}"  id="id-post" class="postimage" value="{{ $resultadopostsFec->id }}"><img class="center-cropped img-responsive"  src="img/{{ $resultadopostsFec->image}}"></a>
            <p class="noteTitle row">{{ $resultadopostsFec->title }}</p>
            <p class="noteSub row">{{ $resultadopostsFec->creativeField }}</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">{{ $resultadopostsFec->likes }} <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">{{ $resultadopostsFec->views }} <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#">{{ $resultadopostsFec->comments }} <span class=" glyphicon glyphicon-comment"></span></a>
         </div>
          </div>
           @endforeach
    </div>
 </div>

 <div class="leftjobs col-md-12">
    <div class="jobs1 row">
        <span class="TxtHola5">Jobs</span>
    </div>
    <div class="jobs2 row">
        @foreach ($resultadojobs as $resultadojob)
         <div class="col-md-12"><hr class="style2"></div>
        </div>
         <div class="col-md-12">
             <div class="row col-md-9 TxtHola4">
                    {{ $resultadojob->employment }}
             </div>
                    <div class="col-md-3 TxtHola4">
                     {{ $resultadojob->city }},     {{ $resultadojob->country }}
            </div>
                <div class="row col-md-10">
                    <a href="" class="TxtHola3"><span>{{ $resultadojob->description }}</span></a>
             </div>
                    <div class="col-md-2 TxtHola4">
                    {{ $resultadojob->hours }}
            </div>

     @endforeach

     @foreach ($resultadojobsEmps as $resultadojobsEmp)
         <div class="col-md-12"><hr class="style2"></div>
        </div>
         <div class="col-md-12">
             <div class="row col-md-9 TxtHola4">
                    {{ $resultadojobsEmp->employment }}
             </div>
                    <div class="col-md-3 TxtHola4">
                     {{ $resultadojobsEmp->city }},     {{ $resultadojobsEmp->country }}
            </div>
                <div class="row col-md-10">
                    <a href="" class="TxtHola3"><span>{{ $resultadojobsEmp->description }}</span></a>
             </div>
                    <div class="col-md-2 TxtHola4">
                    {{ $resultadojobsEmp->hours }}
            </div>

     @endforeach
    </div>
 </div>




 <!--mitad-->




<script>
     $( document ).ready(function() {
  $("#btnPostearJob").click(function(){
          $("#MpostearJob").modal();
      });  
 });

</script>

@endsection

