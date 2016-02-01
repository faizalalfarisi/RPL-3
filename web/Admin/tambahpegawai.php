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
        <li class=""><a href="pegawai.php">Pegawai</a></li>
        <li><a href="meja.php">Meja</a></li>

      </ul><br>
      <div class="input-group">

      </div>
    </div>

    <div class="col-sm-9">
      <h4><small>Tambah Pegawai</small></h4>
      <div class="bs-example">
    <form action="tambahpegawai_proses.php" method="POST" class="form-horizontal">

      

        <div class="form-group">
            <label class="control-label col-xs-3" for="Nama">Nama:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="nama" placeholder="Nama Anda">
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="Nama">Alamat:</label>
            <div class="col-xs-9">
                <input type="text" class="form-control" name="alamat" placeholder="Masukan Alamat Anda">
            </div>
        </div>

         <div class="form-group">
              <label class="control-label col-xs-3" for="Alamat">No.Telp:</label>
              <div class="col-xs-9">
                  <textarea rows="3" class="form-control" name="notelp" placeholder="Notelp/HP"></textarea>
              </div>
          </div>

        <div class="form-group">
            <label class="control-label col-xs-3" for="telp">Pekerjaan:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-xs-3" for="telp">Username:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="username" placeholder="Username yang jadi user">
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-xs-3" for="telp">Email:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="email" placeholder="Email yang jadi user">
            </div>
        </div>
		
		<div class="form-group">
            <label class="control-label col-xs-3" for="telp">Password:</label>
            <div class="col-xs-9">
                <input type="tel" class="form-control" name="password" placeholder="Password yang jadi user">
            </div>
        </div>

        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">

            </div>
        </div>
        <br>
        <div class="form-group">
            <div class="col-xs-offset-3 col-xs-9">
                <input type="submit" class="btn btn-primary" value="Simpan">
                <input type="reset" class="btn btn-default" value="Batal">
            </div>
        </div>

    </form>
  </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


</body>
</html>
