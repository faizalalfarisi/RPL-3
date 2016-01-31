<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id_member = $_GET['id_pegawai'];
$perintah = "DELETE from t_pegawai where id_pegawai = $id_pegawai";
$result = mysql_query($perintah);
	if ($result) {
		header("location:pegawai.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>