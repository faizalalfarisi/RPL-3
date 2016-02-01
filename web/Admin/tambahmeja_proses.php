
<?php
include("config.php");


$NoMeja = $_POST['meja'];
$Status = $_POST['status'];
$MaxOrang = $_POST['maxorang'];

$perintah = "INSERT INTO t_meja(no_meja,status,max_org) 
VALUES ('$NoMeja','$Status','$MaxOrang')";
$result = mysql_query($perintah);
    if ($result) {
        echo "<script>window.location.href='meja.php';</script>";
    }
    else { echo "Data belum dapat di simpan!!";
    }

?>
</form>