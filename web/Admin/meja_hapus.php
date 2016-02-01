<?php session_start();
if (ISSET($_SESSION['adminlogin']))
{
require("config.php");
$id_member = $_GET['no_meja'];
$perintah = "DELETE from t_meja where no_meja = $no_meja";
$result = mysql_query($perintah);
	if ($result) {
		header("location:meja.php");
	} else { echo "Data belum dapat di simpan!!"; 
	}
}
?>