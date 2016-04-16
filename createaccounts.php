
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

    <title>Create Accounts</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="CSS/CreateAccounts.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top ">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">ParTimer</a>
    </nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
      <form class="form-signin">
        <h2 class="form-signin-heading">Be great at what you do</h2>
         <h3><font size="3">Buat Akun</font></h3>
          <div class="input-group input-group-lg">
            <div class="input-group-addon">
            <span  class="glyphicon glyphicon-envelope"></span>
              </div>
                <label for="inputEmail" class="sr-only">Email address</label>
                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            </div>
            <div class="input-group input-group-lg">
            <div class="input-group-addon">
            <span  class="glyphicon glyphicon-user"></span>
              </div>
          <label for="inputEmail" class="sr-only">Username</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="Username" required autofocus>
          </div>
          <div class="input-group input-group-lg">
            <div class="input-group-addon">
            <span  class="glyphicon glyphicon-phone-alt"></span>
              </div>
          <label for="inputEmail" class="sr-only">No Handphone</label>
          <input type="email" id="inputEmail" class="form-control" placeholder="No Handphone" required >
          </div>
          <div class="input-group input-group-lg">
            <div class="input-group-addon">
            <span  class="glyphicon glyphicon-lock"></span>
              </div>
          <label for="inputPassword" class="sr-only">Password</label>
          <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
          </div>
          <h3><font size="3">Saya Ingin</font></h3>
            <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Bekerja
          </label>
          <label>
            <input type="checkbox" value="remember-me"> Memperkerjakan
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Buat Akun</button>
      </form>
    </div>
      </div>
    </div>
      <hr>

      <footer>
        <p>&copy; 2015 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
