<?php 
include 'koneksi_db.php';

$username = $_POST['username'];
$password = $_POST['password'];
    
$sql = mysqli_query($koneksi,"SELECT * FROM tb_admin WHERE username = '".$_POST['username']."' and password = '".$_POST['password']."'");
$data = mysqli_fetch_array($sql);

session_start();
if ($data) {
    // var_dump($data);
    $_SESSION["id_admin"] = $data['id_admin'];
    $_SESSION["nama_admin"] = $data['nama_admin'];
    echo "Session variables are set.";
} else {
    echo "Login gagal";
}

// echo $row;
?>