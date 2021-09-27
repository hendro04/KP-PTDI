<?php
include 'koneksi_db.php';


$no_token = $_GET['t'];
$sts = $_GET['s'];

mysqli_query($koneksi, "update tb_servis set status = '$sts' where no_token = '$no_token'");


header("location:tampil_data.php");
?>