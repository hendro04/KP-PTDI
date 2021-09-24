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
        </tr>
        
    
    <?php
    include 'koneksi_db.php';
        $no = 1;
       // $data = mysqli_query($koneksi,"select no_token,nama_user,nik_user,no_aset,kategori,merek,seri,admin,teknisi,tanggal,kerangan from tb_servis where admin = $_SESSION['id_admin'] ");
       //$data = mysqli_query($koneksi,"select no_token,nama_user,nik_user,no_aset,kategori,merek,seri,admin from tb_servis where nama_user = $_SESSION['id_admin'] ");
       
        $data = mysqli_query($koneksi,"select * from tb_servis");
        $d = mysqli_fetch_array($data)
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
        <td><?php echo $d['admin'];?></td>
        <td><?php echo $d['teknisi'];?></td>
        <td><?php echo $d['tanggal'];?></td>
        <td><?php echo $d['keterangan'];?></td>
    </tr>
    <?php
        //}
    ?>

    </table><br>
        <input type="submit" value="Print">
        <input type="submit" value="Hapus">
        <input type="submit" value="Update">
    </body>
</html>
