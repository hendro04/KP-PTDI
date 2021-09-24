<html>
<head>
    <title>
        Edit data Servis 
    </title>
</head>
<?php
include 'koneksi_db.php';

            $no_token = $_GET['t'];

            $sql = mysqli_query($koneksi,"SELECT * FROM `tb_servis` as a 
            LEFT JOIN tb_teknisi as b ON a.teknisi = b.id_teknisi
            LEFT JOIN tb_admin as c ON a.admin = c.id_admin
            WHERE no_token = '$no_token'");
            $d = mysqli_fetch_array($sql)
?>
<body>
    <form action="edit_proses.php" method="post">
        <table>
            <tr>
                <td> Nama User </td>
                <td>
                <input type="text" name="no_token" value="<?php echo $d['no_token']?>" hidden>

                    <input type="text" name="nama_user" placeholder="Nama Customer" value="<?php echo $d['nama_user']?>">
                </td>
            </tr>
            <tr>
                <td>Nik </td>
                <td>
                    <input type="text" name="nik_user" placeholder="180096" value="<?php echo $d['nik_user']?>">
                </td>
            </tr>
            <tr>
                <td>No Aset</td>
                <td>
                    <input type="text" name="no_aset" placeholder="1270000xxx" value="<?php echo $d['no_aset']?>">
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori">
                        <option value="" selected disabled>Kategori</option>
                        <option <?php if($d['kategori'] == 'Komputer'){
                            echo "selected";
                        }?>>Komputer</option>
                        <option <?php if($d['kategori'] == 'Printer'){
                            echo "selected";
                        }?>>Printer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Merek</td>
                <td>
                    <input type="text" name="merek" placeholder="example : Asus" value="<?php echo $d['seri']?>">
                </td>
            </tr>
            <tr>
                <td>Seri</td>
                <td>
                    <input type="text" name="seri" placeholder="example : ROG Strix" value="<?php echo $d['seri']?>">
                </td>
            </tr>
            <tr>
                <td>Teknisi</td>
                <td>
                 <select name="teknisi" id="teknisi" >
                    <option disabled selected> Pilih Teknisi </option>
                    <?php 
                    include 'koneksi_db.php';

                    $sql=mysqli_query($koneksi, "SELECT * FROM tb_teknisi");
                    while($dt = mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?=$dt['id_teknisi']?>" <?php if($d['teknisi'] == $dt['id_teknisi']){
                            echo "selected";
                        }?>><?=$dt['nama_teknisi']?></option> 
                    <?php
                    }
                    ?>
                 </select>
                </td>
            </tr>
            <tr>
                    <td>Tanggal</td>
                    <td>
                        <input type="date" name="tanggal" value="<?php echo $d['tanggal']?>">
                    </td>
            </tr>
            <tr>
                    <td>Keterangan</td>
                    <td>
                        <textarea name="keterangan" id="" cols="30" rows="10"><?php echo $d['keterangan']?></textarea>
                    </td>
            </tr>
            <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Save">
                    </td>
            </tr>
        </table>
    </form>
</body>
</html>