
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

    <title>Pencarian</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="CSS/jumbotron.css" rel="stylesheet">
    <link href="CSS/CreateAccounts.css" rel="stylesheet">
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>
  </head>

  <body>

   <?php include "header.php"?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1 style="font-size: 40px;">Cari pekerjaan</h1>
        <div class="row">
          <div class="col-lg-6">
            <div class="input-group">
              <input type="text" class="form-control"  placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-default" type="button">Go!</button>
              </span>
            </div>

              <select class="form-control" >
                <option value="volvo">Design</option>
                <option value="saab">Programming</option>
                <option value="mercedes">Bangunan</option>
                <option value="audi">Input Data</option>
                <option value="audi">Jaga Toko</option>
              </select> 
            <!-- /input-group -->
            <center>
              <p>Jenis Pekerjaan</p>
            <label class="checkbox-inline">
              <input type="checkbox" value="">Partime
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" value="">Projek
            </label>
          </center>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
      </div>
    </div>


    <div class="container">
      <h2>Table</h2>
                                                                                          
      <div class="table-responsive">          
      <table class="table" style="background-color:white">
        <thead>
          <tr>
            <th>#</th>
            <th>Pekerjaan/Projek</th>
            <th>Tanggal Mulai</th>
            <th>Upah (Rp)</th>
            <th>Lokasi</th>
            <th>Detail</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>1</td>
            <td>Buat Logo Komunitas</td>
            <td>30/April/2016</td>
            <td>300.000</td>
            <td>Semarang</td>
            <td><a href="#" class="btn btn-success">Detail </a></td>
          </tr>
          <tr>
            <td>2</td>
            <td>Jaga Toko</td>
            <td>25/April/2016</td>
            <td>700.000</td>
            <td>Semarang</td>
            <td><a href="#" class="btn btn-success">Detail </a></td>
          </tr>
        </tbody>
      </table>
      </div>
    

      <hr>

      <footer>
        <p>&copy; Company 2014</p>
      </footer>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
