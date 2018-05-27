<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
          <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="css/boostrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
      <link href="css/jquery.Jcrop.min.css" rel="stylesheet">
        <link href="css/custominputfile.min.css" rel="stylesheet">
    
    
    </head>
    <body>
 @include('navbar')
@yield('content')
  <script src="jquery/jquery-3.3.1.min.js"></script> 
<script src="js/custominputfile.min.js"></script> 
<script src="js/jquery.Jcrop.min.js"></script> 
  <script src="js/holder.min.js"></script> 
  <script src="css/boostrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

  
    </body>
</html>

    <script>
 $( document ).ready(function() {


  $('#myModal').on('shown.bs.modal', function () {
$('#input-file-1').customFile();
    $('#myInput').focus()
  });

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

</script>

    
    <script>
  $(document).ready(function(){
      $("#post-id").click(function(){
          $("#posts").modal();
                
      });  

  });
</script>
