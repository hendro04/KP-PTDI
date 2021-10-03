<html>
    <head>
    <meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel="icon" href="img/logo_di4.png" type="image/gif" sizes="16x16">
		<title>Cek Resi</title>
		<!-- Tell the browser to be responsive to screen width -->
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<!-- Bootstrap 3.3.5 -->
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
		<!-- iCheck -->
		<link rel="stylesheet" href="plugins/iCheck/square/blue.css">

    </head>
<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <center><a href="https://www.indonesian-aerospace.com/" target="_blank"><img src="img/logo_di.png" alt="" width="250px"></a></center>
				    <a href="#"><b>Cek </b> Resi</a>
                    <form method="post" action="">
                        <input type="text" class="form-control" name="cek" placeholder="Cek resi anda di sini......">
                        <button type="submit" class="btn btn-primary" name="cari">Cari</button>
                    </form>
                    <table border = "2">
                        <!-- <tr>
                            <th>Tanggal</th>
                            <th>No Token</th>
                            <th>Teknisi</th>
                            <th>Keterangan</th>
                            <th>Proses</th>
                        </tr> -->
                            <?php
                            if (isset($_POST['cari'])) {
                                include 'koneksi_db.php';
                                $no_token = $_POST['cek'];
                                $sql = mysqli_query($koneksi,"SELECT * FROM `tb_servis` as a 
                                LEFT JOIN tb_teknisi as b ON a.teknisi = b.id_teknisi
                                LEFT JOIN tb_admin as c ON a.admin = c.id_admin
                                WHERE no_token = '$no_token'");
                                
                                $d = mysqli_fetch_array($sql)
                                ?>

                                <br>
                                
                                    <tr>
                                        <td><?php echo $d['tanggal']; ?></td>
                                        <td><?php echo $d['no_token']; ?></td>
                                        <td><?php echo $d['nama_teknisi']; ?></td>
                                        <td><?php echo $d['keterangan']; ?></td>
                                <td>
                                <?php
                                    if($d['status'] == 1){
                                        echo 'Dalam Antrian';
                                    } else if($d['status'] == 2){
                                        echo 'Dalam Pengerjaan';
                                    } else if($d['status'] == 3){
                                        echo 'Selesai';
                                    }
                                ?>
                                </td>
                                    </tr>
                        </table>
                                <?php
                            }
                            ?>
        </div>
    </div>
    
    		<!-- jQuery 2.1.4 -->
		<script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
		<!-- Bootstrap 3.3.5 -->
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<!-- iCheck -->
		<script src="plugins/iCheck/icheck.min.js"></script>
		<script>
			$(function () {
				$('input').iCheck({
					checkboxClass: 'icheckbox_square-blue',
					radioClass: 'iradio_square-blue',
					increaseArea: '20%' // optional
				});
			});
		</script>
</body>
</html>