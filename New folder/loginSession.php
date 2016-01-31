<?php
defined('__NOT_DIRECT') || define('__NOT_DIRECT',1);
include 'config.php';
$valid = true;

if($_POST){
    mysql_connect(DB_HOST,DB_USER,DB_PASS);
    mysql_select_db(DB_NAME);

    $userId = mysql_real_escape_string($_POST['username']);
    $data = mysql_fetch_array(mysql_query("SELECT * FROM t_pegawai WHERE id_pegawai='".$userId."'"));

    if($data != false && $data['password'] == $_POST['password']){
        //login berhasil
        $_SESSION['user_id'] = $data['username'];
        $_SESSION['idpegawai'] = $data['id_pegawai'];
        $_SESSION['my_user_agent'] = md5($_SERVER['HTTP_USER_AGENT']);

    }
    else{
        $valid = false;
    }
}
?>