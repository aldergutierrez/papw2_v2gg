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
            <select class="form-control location2" name="size">
                <option value="">All Creative Fields</option>
                <option value="">Artist</option>
                <option value="">Programmer</option>
                <option value="">Animator</option>
                <option value="">Illustrator</option>
            </select>
        </div>
       
        </form>
   </div>
 	</div>
 </div>
<div class="col-md-7">

           
 <div class="col-md-12"><hr class="style2"></div>
</div>
 <div class="col-md-7">
     <div class="row col-md-9 TxtHola4">
     		
     </div>
    		<div class="col-md-3 TxtHola4">
     		 
    </div>
    	<div class="row col-md-10">
     		<a href="" class="TxtHola3"><span></span></a>
     </div>
    		<div class="col-md-2 TxtHola4">
     		
    </div>

    
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

