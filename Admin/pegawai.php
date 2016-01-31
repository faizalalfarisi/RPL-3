<?php
include '../loginSession.php';

if ($__tipe_user == 'Pegawai' && $currentPath == 'login.php') {
   // header("Location:../web/");
}

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
    <div class="col-sm-2 sidenav">
      <h4>Broto Azhari-Resto</h4>
      <ul class="nav nav-pills nav-stacked">
        <li><a href="pegawai.php">Pegawai</a></li>
        <li><a href="meja.php">Meja</a></li>
		<li><a href="../logout.php">Logout</a></li>

      </ul><br>
      <div class="input-group">

      </div>
    </div>

    <div class="col-sm-9">
      <h4><small>PEGAWAI</small></h4>

      <div class="container">
  <h2>Daftar Pegawai Resto Broto</h2>
<?php
                        require("config.php");
                        $perintah = "select * from t_pegawai";
                        $hasil = mysql_query($perintah);

                        ?>
  <table class="table">
    <thead>
      <tr>
        <th>ID Pegawai</th>
        <th>Nama</th>
        <th>Alamat</th>
		<th>No Telp</th>
		<th>Pekerjaan</th>
		<th>Username</th>
		<th>Email</th>
		<th>Password</th>
      </tr>
    </thead>

    <tbody>
      <?php
                            $no = 0;
                            while ($data = mysql_fetch_array($hasil)) {

                                $no++;
                                ?>
                                <tr>
                                    <td> <?php echo "$data[id_pegawai]";?></td>
                                    <td> <?php echo "$data[nama_pegawai]";?> </td>
                                    <td><?php echo "$data[alamat]";?></td>
									<td><?php echo "$data[no_telp]";?></td>
									<td><?php echo "$data[pekerjaan]";?></td>
									<td><?php echo "$data[username]";?></td>
									<td><?php echo "$data[email]";?></td>
									<td><?php echo "$data[password]";?></td>
									<td><a href="pegawai_hapus.php?id_pegawai=<?php echo $data['id_pegawai'] ?> " class="btn btn-warning">D</a>
										<a href="pegawai_ubah_form.php" class="btn btn-warning">E</a></td>
                                </tr>
                            <?php } ?>
	
        
      </tr>
      
    </tbody>
  </table>
  <a href="tambahpegawai.php" class="btn btn-info">Tambah Pegawai</a>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
