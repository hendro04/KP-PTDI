<?php
include 'koneksi_db.php';

$id = $_GET['id_admin'];

mysqli_query($koneksi, "delete from tb_servis where id = '$id'");
header("location:tampil.php")
?>