<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="{{ asset('css/boostrap/bootstrap-3.3.7-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
      <link href="{{ asset('css/jquery.Jcrop.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/custominputfile.min.css') }}" rel="stylesheet">
       
    </head>
    <body>
@include('navbar')
@yield('content')


<script src="{{ asset('jquery/jquery-3.3.1.min.js') }}"></script> 
<script src="{{ asset('css/boostrap/bootstrap-3.3.7-dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/custominputfile.min.js') }}"></script> 
<script src="{{ asset('js/jquery.Jcrop.min.js') }}"></script> 
<script src="{{ asset('js/holder.min.js') }}"></script> 

 </body>
</html>
 <script>
 $( document ).ready(function() {
  $("#sss").hide();
  
  $("#btnSearch").click(function() {
    if($("#sss").val().length == 0){

    if ($("#sss").width() <= 0) {

        $("#sss").fadeTo(100, 1).animate({
          width: "160px"
      }, "slow");

    } 
    else {
      $("#sss").animate({
          width: "0px"
      }, "slow").fadeTo(100, 0);
    }


    }
  });
  });

$( document ).ready(function() {
  $("#btnPostear").click(function(){
          $("#Mpostear").modal();
          $('#input-file-1').customFile();
      });  
 });


     $( document ).ready(function() {
  $("#btnPostearJob").click(function(){
          $("#MpostearJob").modal();
      });  
 });

          $( document ).ready(function() {
  $("#btnEditar").click(function(){
          $("#Meditar").modal();
      });  
 });

</script>
