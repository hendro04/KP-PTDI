<?php
include 'koneksi_db.php';

$nama = $_POST['nama_admin']
$username = $_POST['username']
$password = $_POST['password']

mysql_query($koneksi,"insert db_servis_center('','$nama','$username','$password')")
?>