<?php
include 'koneksi_db.php';

session_start(); 

$token = uniqid();
$customer = $_POST['nama_user'];
$nik = $_POST['nik_user'];
$aset = $_POST['no_aset'];
$kategori = $_POST['kategori'];
$merek = $_POST['merek'];
$seri = $_POST['seri'];
$adm = $_SESSION['id_admin'];
$teknisi = $_POST['teknisi'];
$tgl = $_POST['tanggal'];
$ket = $_POST['keterangan'];

mysqli_query($koneksi,"insert into tb_servis values('$token','$customer','$nik','$aset','$kategori','$merek','$seri','$adm','$teknisi','$tgl','$ket')");
?>