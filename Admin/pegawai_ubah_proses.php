
<?php
include("config.php");


$Nama = $_POST['nama'];
$Alamat = $_POST['alamat'];
$No_Telp = $_POST['notelp'];
$Pekerjaan = $_POST['pekerjaan'];
$Username = $_POST['username'];
$Email = $_POST['email'];
$Password = $_POST['password'];

$perintah = "UPDATE INTO t_pegawai(nama_pegawai,alamat,no_telp,pekerjaan,username,email,password) 
VALUES ('$Nama','$Alamat','$No_Telp','$Pekerjaan','$Username','$Email','$Password')";
$result = mysql_query($perintah);
    if ($result) {
        echo "<script>window.location.href='pegawai.php';</script>";
    }
    else { echo "Data belum dapat di simpan!!";
    }

?>
</form>