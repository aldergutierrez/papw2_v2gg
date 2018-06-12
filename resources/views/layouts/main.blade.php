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
    <link rel="shortcut icon" href="Brand/revdev_logo2.png" />
       
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
      }  else {
        $("#sss").animate({
            width: "0px"
        }, "slow").fadeTo(100, 0);
      }
    }else{

      $( "#formSearch" ).submit();
    }
  });
  });

  $( document ).ready(function() {
  
  $("#btnSearch2").click(function() {

      $( "#formSearch2" ).submit();
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

 $(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: "#headerwrap", offset: 50});   

  // Add smooth scrolling on all links inside the navbar
  $("#downarrow").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
});

</script>
