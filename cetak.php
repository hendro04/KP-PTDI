<html>
<head>
    <title>Cetak Resi</title>
</head>
<body>
    <?php
        include 'koneksi_db.php';
    ?>

    <table border="1">
        <tr>
            <th>Tanggal</th>
            <th>No Token</th>
            <th>Teknisi</th>
            <th>Keterangan</th>
        </tr>
        <?php
            $no_token = $_GET['t'];

            $sql = mysqli_query($koneksi,"SELECT * FROM `tb_servis` as a 
            LEFT JOIN tb_teknisi as b ON a.teknisi = b.id_teknisi
            LEFT JOIN tb_admin as c ON a.admin = c.id_admin
            WHERE no_token = '$no_token'");
            while($d = mysqli_fetch_array($sql)){
            ?>
            <tr>
                <td><?php echo $d['tanggal']; ?></td>
                <td><?php echo $d['no_token']; ?></td>
                <td><?php echo $d['nama_teknisi']; ?></td>
                <td><?php echo $d['keterangan']; ?></td>
            </tr>
            <?php 
            }
        ?>
    </table>
</body>
<script>
		window.print();
	</script>
</html>