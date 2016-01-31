
<?php
include("koneksi.php");


$ID_Bahan = $_POST['idbahan'];
$Nama_bahan = $_POST['nama'];
$Stok = $_POST['stok'];
$Stok_Min = $_POST['stokmin'];

$perintah = "INSERT INTO t_bahanbaku(id_bahan,nama_bahan,stok,stok_min) 
VALUES ('$ID_Bahan','$Nama_bahan','$Stok','$Stok_Min')";
$result = mysql_query($perintah);
    if ($result) {
        echo "<script>window.location.href='index.php';</script>";
    }
    else { echo "Data belum dapat di simpan!!";
    }

?>
</form>