<?php
include 'koneksi_db.php';

session_start();

// var_dump($_SESSION['id_admin']);
unset($_SESSION['id_admin']);
unset($_SESSION['nama_admin']);
session_destroy();
header("Location:formlogin_admin.php");
?>