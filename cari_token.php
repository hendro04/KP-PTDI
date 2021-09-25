<html>
    <head>
        <title>Cek Resi</title>
    </head>
<body>
<form method="post" action="">
    <center><h1>Cek Resi</h1>

    <input type="text" name="cek" placeholder="Cek resi anda di sini......"><button type="submit" name="cari">Cari</button><br><br>
</form> 
<table border = "2">
    <tr>
        <th>Tanggal</th>
        <th>No Token</th>
        <th>Teknisi</th>
        <th>Keterangan</th>
        <th>Proses</th>
    </tr>
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
    </center>
</body>
</html>