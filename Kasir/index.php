<?php
include "../includes/koneksi.php";

$sql = "SELECT id_pembayaran, no_meja, nama_pelanggan, total
FROM t_pembayaran JOIN t_pesanan USING(no_pesanan) JOIN 
     t_detail_meja USING(id_meja_pelanggan) JOIN
     t_pelanggan USING(id_pelanggan)
WHERE t_pembayaran.status = 'Belum Bayar'";
$query = mysql_query($sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
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
        <li><a href="pembayaran.html">Pembayaran</a></li>

      </ul><br>
      <div class="input-group">

      </div>
    </div>

    <div class="col-sm-9">
      <h4><small>KASIR</small></h4>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



</body>
</html>
