<?php
include 'koneksi_db.php';

$nama = $_POST['nama_admin'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi,"insert into tb_admin values('','$nama','$username','$password')");

?>