@extends('layouts.main')
@section('title', 'Revdev - Jobs')

    <!-- Bootstrap core CSS -->
@section('content')
 <div class="container-fluid jobss">
<div class="fulljobs col-md-12" style="height: 50px;">
<div class="findblock col-md-6">
	<a href=""><span class="findlink TxtHola6">Find</span></a>
</div>
<div class="findblock col-md-6">
	<div><a href=""><span class="findlink2 TxtHola6">Post</span></a></div>
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
                <option value="">Choose a size</option>
                <option value="s">Small (S)</option>
                <option value="m">Medium (M)</option>
                <option value="l">Large (L)</option>
                <option value="xl">Extra large (XL)</option>
            </select>
            <input type="text" class="form-control location2 " name="lastName" placeholder="Last name" />
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
                <option value="">Choose a size</option>
                <option value="s">Small (S)</option>
                <option value="m">Medium (M)</option>
                <option value="l">Large (L)</option>
                <option value="xl">Extra large (XL)</option>
            </select>
        </div>
       
        </form>
   </div>
 	</div>
 </div>
 <div class="col-md-7">
 	<div class="row col-md-6 TxtHola4">
 		Hola
 </div>
		<div class="col-md-6 TxtHola4">
 		amigos
</div>
	<div class="row col-md-6 TxtHola3">
 		<a href=""><span>COMO</span></a>
 </div>
		<div class="col-md-6 TxtHola4">
 		estais
</div>
<div class="col-md-12"><hr></div>


 
 </div>

 <div class="col-md-7">
 	<div class="row col-md-6 TxtHola4">
 		Hola
 </div>
		<div class="col-md-6 TxtHola4">
 		amigos
</div>
	<div class="row col-md-6 TxtHola3">
 		<a href=""><span>COMO</span></a>
 </div>
		<div class="col-md-6 TxtHola4">
 		estais
</div>
<div class="col-md-12"><hr></div>


 
 </div>
</div>	
@endsection

