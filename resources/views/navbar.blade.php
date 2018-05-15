<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Sign in - DEVREV</title>

    <!-- Bootstrap core CSS -->
    <link href="css/boostrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
  </head>

  <body>
    <style type="text/css">
      

    </style>


   <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
         <a class="navbar-brand  " href="#">
        <img  alt="DevRev" src="Brand/revdev_logo2.png" width="50px" >
      </a>
    </div>
    <div class="collapse navbar-collapse" id="navbar-1"> 
        <ul class="nav navbar-nav">
           <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Discover <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
             </li>
        <li><a href="#">Jobs</a></li>
        <li><a href="#">Teams</a></li>
       
      </ul>
 <form class="navbar-form navbar-right " role="search">
        <div class="form-group">
          <input type="text" id="sss" style=" width: 0px">
        <button class="btn btn-primary" id="btnSearch" type="button"><span class="glyphicon glyphicon-search" style="font-style: 50px;"></span></button>
         <button class="btn btn-primary" id="btnPostear" type="button">Post</button>
        <img id="profileNavbar" src="../img/Pic1.jpg">
        </div>
        </form>

     </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>


  <script src="jquery/jquery-3.3.1.min.js"></script> 


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
</script>

  </body>
</html>
