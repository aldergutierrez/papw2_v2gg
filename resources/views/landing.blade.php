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
    <link href="css/style.css" rel="stylesheet">
    <style>
    .post-image{
       width:70%;
         display: inline-block;

    }
    .comments{
      
    }
    .post-image img{
      width:100%;
    }
  .post-comment{
    width: 25% !important;
    display: inline-block;
    position: absolute;
    }
    .post-comment img{
          position: absolute;
    width: 50px;
    border-radius: 50%;
    margin-left: 200px;
    margin-top: -70px;
}

.btn-follow{
    background: #3196ae;
    color: white;
    margin-left: 200px;
    padding: 4px 10px !important;
    margin-top: -30px;
    font-size: 10px !important;
}
.btn-like{
    background: #3196ae;
    color: white;
    margin-left: 10px;
    padding: 4px 10px !important;
    margin-top: 0px;
    width: 100%;
    font-size: 10px !important;
    margin-bottom: 10px;
}
.likes{
  list-style: none;
}

.likes li{
  float: left;
  margin: 5px;
}
  .border{
    border: 1px solid black;
    margin: 10px;
    width: 100%;
  }
  .tool{
    width: 100px;
    border-radius: 0 !important;
    position: relative !important;
    margin-left: 10px !important;
    margin-top: 0 !important;
  }
  .info{
    list-style: none;
    margin-left: -25px;
  }
  .date{
        margin-left: 10px;
    font-size: 12px;
    color:darkgrey;
  }
  .txt-comment{
    width: 100%;
    margin-left: 10px;
  height: 100px;
}

.comment{
        margin-left: 60px;
    margin-top: 5px;
    font-size: 10px;
    margin-bottom: 20px;
}
.modal-content{
height: 650px;
}
.img-comment{
  border-radius: 50%;
  display: inline-block;
  margin-top: 0px !important;
  margin-left: 10px !important;
  width: 40px !important;
}
.txt-name{
display: inline-block;
font-weight: bold;

}
.txt-comm{
  /*display: inline-block;*/
}
.txt-date{
  display: inline-block;
  float: right;
  font-size: 10px;
  margin-top: 6px;
}
.post-title{
  font-weight: bold;

}
.post-account{
      font-size: 13px;
    color: darkgrey;
    font-weight: bold;
}

.post-category{
      color: darkgray;
      font-size: 13px;
}
</style>
  </head>

  <body>
<div>                                                    
 
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
        <input type="text" class="form-control " placeholder="Search">
        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-search"></span></button>
        </div>
        </form>
        <ul class="nav navbar-nav navbar-right ">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li> 
           
      </ul> 


     </div><!-- /.navbar-collapse -->




      </div><!-- /.container-fluid -->
    </nav>

    <main role="main">
      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container-fluid">
          
          <h1 class="banner">Showcase n Dev Videogames</h1>
          <span class="subbanner">GameDev Community</span>
        </div>
     
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-3 post">
            <img id="post-id" class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>
            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>

            <div class="col-md-3 post">
            <img class="card-img-top" data-src="holder.js/100px160?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
            <p class="noteTitle row">Donec id elit</p>
            <p class="noteSub row">gravida at eget metus. Fusce dapibus, tellus ac cursus commodo</p>
            <div class="interaction btn-group center-block row ">
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-heart"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-eye-open"></span></a>
           <a class="btn btn-secondary col-md-4" href="#" style="background-color: #424242">0 <span class="glyphicon glyphicon-align-left"></span></a>
         </div>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

 <div class="modal fade" id="posts" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
            <div>
              <div class="post-image" >
              <img src="../img/image.jpg">
              </div>
              <div class="post-comment">
                <ul class="info">
                  <li class="post-title">EYE CONTACT</li>
                  <li class="post-account">aldergutierrez</li>
                  <li class="post-category">Category 1</li>
                </ul>
                <img src="../img/Pic1.jpg">
                <div class="btn-follow btn">Follow</div>
                <ul class="likes">
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>22</li>
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>100</li>
                  <li><span class="glyphicon glyphicon-heart"></span></li>
                  <li>40</li>
                </ul>
              <div class="date">Published: 05/05/2018</div>
              <div class="border"></div>
              <img class="tool" src="../img/Pic1.jpg">
              <div class="border"></div>
              <div class="btn btn-like">Like project</div>
              <div class="date">Comments(20)</div>
              <textarea class="txt-comment"></textarea>
              <div class="btn btn-like">Post comment</div>
              <div class="comments">
              <img class="img-comment" src="../img/Pic1.jpg">
              <div class="txt-date">12:34am</div>
              <div class="comment">
                <div class="txt-name">Alder</div>
                <div class="txt-comm">Buen trabajo!</div>
                
              </div>
              <img class="img-comment" src="../img/Pic1.jpg">
              <div class="txt-date">12:34am</div>
              <div class="comment">
                <div class="txt-name">Alder</div>
                <div class="txt-comm">Buen trabajo!</div>
  
              </div>
              <img class="img-comment" src="../img/Pic1.jpg">
              <div class="txt-date">12:34am</div>
              <div class="comment">
                <div class="txt-name">Alder</div>
                <div class="txt-comm">Buen trabajo!</div>
 
              </div>
              </div>
              </div>
            </div>

              </div>
              
            </div>
            </div>
          </div>
        </div>
      </div>
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
    <script>
  $(document).ready(function(){
      $("#post-id").click(function(){
          $("#posts").modal();
      });  

  });
</script>

  </body>
</html>