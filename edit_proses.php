<?php
// koneksi database
include 'koneksi_db.php';
// menangkap data yang di kirim dari form
session_start();
$token = $_POST['no_token'];
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
// update data ke database

// var_dump($token);
mysqli_query($koneksi,"update tb_servis 
set nama_user='$customer', nik_user='$nik', no_aset='$aset',
 kategori='$kategori', merek='$merek', seri='$seri', admin='$adm', 
 teknisi='$teknisi', tanggal='$tgl', keterangan='$ket' 
 where no_token='$token'");
// mengalihkan halaman kembali ke index.php
header("location:tampil_data.php");
?>