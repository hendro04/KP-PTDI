<html>
    <head>
        <title>

        </title>
    </head>
    <body>
    <table border="10">
        <tr>
            <th>No</th>
            <th>Token</th>
            <th>Customer</th>
            <th>NIK</th>
            <th>No Aset</th>
            <th>Kategori</th>
            <th>merek</th>
            <th>Seri</th>
            <th>Admin</th>
            <th>Teknisi</th>
            <th>Tanggal</th>
            <th>Keterangan</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        
    
    <?php
    include 'koneksi_db.php';
        $no = 1;
       // $data = mysqli_query($koneksi,"select no_token,nama_user,nik_user,no_aset,kategori,merek,seri,admin,teknisi,tanggal,kerangan from tb_servis where admin = $_SESSION['id_admin'] ");
       //$data = mysqli_query($koneksi,"select no_token,nama_user,nik_user,no_aset,kategori,merek,seri,admin from tb_servis where nama_user = $_SESSION['id_admin'] ");
        session_start();
        $id_admin = $_SESSION['id_admin'];
        $data = mysqli_query($koneksi,"SELECT * FROM `tb_servis` as a 
        LEFT JOIN tb_teknisi as b ON a.teknisi = b.id_teknisi
        LEFT JOIN tb_admin as c ON a.admin = c.id_admin
        WHERE admin = $id_admin");
        while($d = mysqli_fetch_array($data)){
    ?>
    <tr>
     <td><?php echo $no++;?></td>
        <td><?php echo $d['no_token'];?></td>
        <td><?php echo $d['nama_user'];?></td>
        <td><?php echo $d['nik_user'];?></td>
        <td><?php echo $d['no_aset'];?></td>
        <td><?php echo $d['kategori'];?></td>
        <td><?php echo $d['merek'];?></td>
        <td><?php echo $d['seri'];?></td>
        <td><?php echo $d['nama_admin'];?></td>
        <td><?php echo $d['nama_teknisi'];?></td>
        <td><?php echo $d['tanggal'];?></td>
        <td><?php echo $d['keterangan'];?></td>
        <td>
        <?php
            if($d['status'] == 1){
                echo 'Dalam Antrian';
                ?> <br> <a href="update_status.php?s=2&t=<?php echo $d['no_token'] ?>">Proses</a> <?php
            } else if($d['status'] == 2){
                echo 'Dalam Pengerjaan';
                ?> <br> <a href="update_status.php?s=3&t=<?php echo $d['no_token'] ?>">Selesai</a> <?php
            } else if($d['status'] == 3){
                echo 'Selesai';
            }
        ?>
        </td>
        <td><a href="cetak.php?t=<?php echo $d['no_token'] ?>" target="_blank">Print</a>
        <a href="edit.php"?t=<?php echo $d['no_token'] ?>>Edit</a>
        </td>
    </tr>
    <?php
        }
    ?>

    </table>
    </body>
</html>
