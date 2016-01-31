<?php
include 'loginSession.php';

if ($__tipe_user == 'Pegawai' && $currentPath == 'login.php') {
    //header("Location:../web/");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh">
<title>Resto Azhari</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 1500px}

    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1;
      height: 100%;
    }

    /* Set black background color, white text and some padding */


    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height: auto;}
    }
  </style>
</head>
<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      <h4>Broto Azhari-Resto</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="../web/Admin/pegawai.php">Admin</a></li>
        <li><a href="../web/Customer/">Customer Service</a></li>
		<li><a href="../web/Kasir/">Kasir</a></li>
		<li><a href="../web/Koki/">Koki</a></li>
		<li><a href="../web/Pantry/index.php">Pantry</a></li>
		<li><a href="../web/Pelayan/">Pelayan</a></li>
		<li><a href="logout.php">Logout</a></li>

      </ul><br>
	  </div>
    </div>
	</div>
</head>

<body>

    <div id="wrapper">

        <div id="page-wrapper">
        
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

</body>

</html>
