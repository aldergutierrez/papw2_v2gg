<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DevRev</title>

    <!-- Bootstrap core CSS -->
    <link href="css/boostrap/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/style_alder.css" rel="stylesheet">
  </head>

  <body>
                                                    
  <main id="main">

</div> 
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
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
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
      </ul>
 <form class="navbar-form navbar-right " role="search">
        <div class="form-group">
        <button id="myBtn" class="btn btn-primary" type="submit">Post  <span class="glyphicon glyphicon-upload"></span></button>
        <input  type="text" class="form-control " placeholder="Search">
        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
        </div>
        </form>
        <ul class="nav navbar-nav navbar-right ">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
           
      </ul> 


     </div><!-- /.navbar-collapse -->


     <!-- Modal -->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <!--<div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title" id="myModalLabel">Title</h4>
            </div>   -->
            <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
              <form>
                <div class="form-group">
                  <input type="text" class="form-control" id="recipient-name" placeholder="Title">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="message-text" > Images, Gif, ZIP </textarea>
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="message-text" > Description </textarea>
                </div>
              </form>
              <input  type="text" class="form-control " placeholder="Tag ur Fellas">
              <div class="form-group">
              <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Tool Used
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                </div>
                <div class="form-group">
                <div class="dropdown">
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Choose Category
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                </div>
                </div>
            </div>

            <div class="modal-footer">
                
                  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Dropdown
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                  </ul>
                
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Post<span class="glyphicon glyphicon-chevron-right"></span></button>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal 2 -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">New message</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Recipient:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Message:</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

      </div><!-- /.container-fluid -->
    </nav>

    <main role="main">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      
        

        <section id="home" name="home"></section>
          <div id="headerwrap">
            <div class="container">
              <a href="#"><span class="glyphicon glyphicon-option-horizontal" style="color:white" aria-hidden="true"></span></a>
              
              <div class="pictureProfile">
                <img src="../img/Pic1.jpg" class="img-circle" style="height: 180px">
              </div>

              <h2>Alder Gutierrez</h2>
              <h4>@aldergutierrez</h4>
              <a class="btn btn-default btn-outline">Follow</a>
              <br>
              <hr class="style1">
                <div class="followers">
                  <div class="content">
                  <span class="numbers">75</span>
                    <span class="letters">Posts</span>
                    </div>
                    <div class="content">
                  <span class="numbers">980</span>
                    <span class="letters">Followers</span>
                    </div>
                    <div class="content">
                  <span class="numbers">403</span>
                    <span class="letters">Following</span>
                    </div>
                </div>
                <hr class="style1">
                <div class="text">
                Freelancer, illustrator, animator and Chipotle Lover.
                </div>
                <hr class="style1">
                <div>
                 <a href="#"><i class="fa iconSocial">&#xf082;</i></a>
                 <a href="#"><i class="fa iconSocial">&#xf16d;</i></a>
                 <a href="#"><i class="fa iconSocial">&#xf194;</i></a>
                 <a href="#"><i class="fa iconSocial">&#xf099;</i></a>
                </div>
              </div>
              <a href="#"><img src="../img/downarrow.png" class="arrowdown" ></a>
            </div><!-- /container -->
          </div><!-- /headerwrap -->     
     

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction input-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
         </div>
          </div>
          <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction input-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
         </div>
          </div>

          <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction input-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
         </div>
          </div>

          <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction input-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">AAA</a>
         </div>
          </div>

          

          
        </div>

        <hr>

      </div> <!-- /container -->

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Open modal for @mdo</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Open modal for @fat</button>
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Open modal for @getbootstrap</button>
...more buttons...

      

    </main>

    <footer class="container">
   
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
 <!--    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>-->
    </div>
     <script src="jquery/jquery-3.3.1.min.js"></script> 
    <script src="js/holder.min.js"></script> 
    <script src="css/boostrap/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
  </body>

<script>
  $(document).ready(function(){
      $("#myBtn").click(function(){
          $("#myModal").modal();
      });  

      $('#myModal2').on('shown.bs.modal', function () {
        $('#myInput').focus()
      });
              $('#exampleModal').on('show.bs.modal', function (event) {
          var button = $(event.relatedTarget) // Button that triggered the modal
          var recipient = button.data('whatever') // Extract info from data-* attributes
          // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
          // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
          var modal = $(this)
          modal.find('.modal-title').text('New message to ' + recipient)
          modal.find('.modal-body input').val(recipient)
        })
  });
</script>
</html>