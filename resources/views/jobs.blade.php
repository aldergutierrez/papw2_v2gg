@extends('layouts.main')
@section('title', 'Revdev - Jobs')
@include('newJob')
    <!-- Bootstrap core CSS -->
@section('content')
 <div class="container-fluid jobss">
<div class="fulljobs col-md-12" style="height: 50px;">
<div class="findblock col-md-6">
	<a href=""><span class="findlink TxtHola6">Find</span></a>
</div>
<div class="findblock col-md-6">
	<a href="{{ url('/newJob') }}" id="btnPostearJob" data-toggle="modal" data-target="#myModal"><span class="findlink2 TxtHola6">Post</span></a>
</div>
</div>

<div class="leftjobs col-md-5">
 	<div class="jobs1 row">
 		<span class="TxtHola5">FILTER JOBS BY:</span>
 </div>
    <div class="jobs2 row">
	<span class="location TxtHola2">LOCATION</span>
	<form>
	 <div class="form-group">
<div class="col-md-10 selectContainer">
            <select class="form-control location2" name="size">
                <option value="">Country/Region</option>
                <option value="USA">United States of America</option>
                <option value="MEX">Mexico</option>
                <option value="CAN">Canada</option>
                <option value="JPN">Japan</option>
            </select>
            <input type="text" class="form-control location2 " name="lastName" placeholder="City" />
        </div>
         </form>
        <div class="location3 col-md-12"> <button type="button" class=" btn btn-azul">Apply</button></div>	
       
    </div>
      </div>

 <!--mitad-->
<div class=" jobs2 row">
 	<span class="location TxtHola2">CREATIVE FIELD</span>
 	<form>
 		 <div class="form-group">
        <div class="col-md-10 selectContainer">
            <form id="formSearch2" method="post" action="/search" role="search">
                  {{ csrf_field() }}
                <input name="buscar" placeholder="Creative Field" type="text" id="sss2" style=" width: 450px">
                <button class="btn btn-primary" id="btnSearch2" type="button"><span class="glyphicon glyphicon-search" style="font-style: 50px;"></span></button>
            </form>
        </div>
        </form>
   </div>
 	</div>
    @foreach ($jobs as $job)
    <div class=" jobs2 row">
    </div>
    @endforeach
 </div>
<div class="col-md-7">

           @foreach ($jobs as $job)
                 <div class="col-md-12"><hr class="style2"></div>
                </div>
                 <div class="col-md-7">
                     <div class="row col-md-9 TxtHola4">
                     		{{ $job->employment }}
                     </div>
                    		<div class="col-md-3 TxtHola4">
                     		 {{ $job->city }},     {{ $job->country }}
                    </div>
                    	<div class="row col-md-10">
                     		<a href="" class="TxtHola3"><span>{{ $job->description }}</span></a>
                     </div>
                    		<div class="col-md-2 TxtHola4">
                     		{{ $job->hours }}
                    </div>
                  @if($job->wasCreatedBy( Auth::user() ) or Auth::user()->typeUser==1)
                                    
                                        
                    <form action="{{ route('deletejob', ['idJob' => $job->id]) }}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <button type="submit" class='btn btn-deletepost'>Close</button>
                    </form>
                                    
                @endif
     @endforeach
<div class="col-md-12"><hr class="style2"></div>
 </div>


    <div class="col-md-12"><hr class="style2"></div>


 </div>


<script>
     $( document ).ready(function() {
  $("#btnPostearJob").click(function(){
          $("#MpostearJob").modal();
      });  
 });

</script>

@endsection

