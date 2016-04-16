
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="CSS/Dashboard.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

   <?php include "header.php" ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-3 sidebar">
        <ul class="media-list">
                <li class="media">
                  <div class="media-left">
                    <a href="profil.php">
                      <img class="media-object" src="image/devil.jpg" width="100" height="100"alt="...">
                    </a>
                  </div>
                  <div class="media-body">
                    <span class="media-heading" >Hi, Selamat Datang Kembali</span>
                    <span href="#" class="media-heading" >@Username</span>
                    <hr><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                    <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                  </div>
                </li>
              </ul>
          <ul class="nav nav-sidebar">
          <div style="margin-left: 17px" aria-expanded="false" id="navbar" class="navbar-collapse collapse">
          </div>
            <li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Reports</a></li>
            <li><a href="#">Analytics</a></li>
            <li><a href="#">Export</a></li>
          </ul> 
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-0 main">
          <h1 class="page-header">News Feed</h1>
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-0 main">
           <div class="media">
            <div class="media-left media-right">
              <a href="#">
                <img class="media-object" src="image/devil.jpg" width="64" height="64" alt="">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">10 new articles published on Part Timer</h4>
              Part Timer Community is the place for you to hang out between projects, learn top tips to improve your career, share your freelancing experiences, and learn from your peers.
            </div>
          </div>
          <div class="media">
            <div class="media-left media-right">
              <a href="#">
                <img class="media-object" src="image/devil.jpg" width="64" height="64" alt="">
              </a>
            </div>
            <div class="media-body">
              <h4 class="media-heading">10 new articles published on Part Timer</h4>
              Part Timer Community is the place for you to hang out between projects, learn top tips to improve your career, share your freelancing experiences, and learn from your peers.
            </div>
          </div>
          </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
