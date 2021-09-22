<html>
<head>
    <title>
        Masukan Data Servis 
    </title>
</head>
<body>
    <form action="crud_servis.php" method="post">
        <table>
            <tr>
                <td> Nama User </td>
                <td>
                    <input type="text" name="nama_user" placeholder="Nama Customer">
                </td>
            </tr>
            <tr>
                <td>Nik </td>
                <td>
                    <input type="text" name="nik_user" placeholder="180096">
                </td>
            </tr>
            <tr>
                <td>No Aset</td>
                <td>
                    <input type="text" name="no_aset" placeholder="1270000xxx">
                </td>
            </tr>
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori">
                        <option value="" selected disabled>Kategori</option>
                        <option>Komputer</option>
                        <option>Printer</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Merek</td>
                <td>
                    <input type="text" name="merek" placeholder="example : Asus">
                </td>
            </tr>
            <tr>
                <td>Seri</td>
                <td>
                    <input type="text" name="seri" placeholder="example : ROG Strix">
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
                    while($d = mysqli_fetch_array($sql)){
                    ?>
                    <option value="<?=$d['id_teknisi']?>"><?=$d['nama_teknisi']?></option> 
                    <?php
                    }
                    ?>
                 </select>
                </td>
            </tr>
            <tr>
                    <td>Tanggal</td>
                    <td>
                        <input type="date" name="tanggal" >
                    </td>
            </tr>
            <tr>
                    <td>Keterangan</td>
                    <td>
                        <textarea name="keterangan" id="" cols="30" rows="10"></textarea>
                    </td>
            </tr>
            <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Input">
                    </td>
            </tr>
        </table>
    </form>
</body>
</html>