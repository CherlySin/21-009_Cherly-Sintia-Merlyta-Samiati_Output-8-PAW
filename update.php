<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form update data</title>
</head>
<body>
    <?php
    echo "Nama  : Cherly Sintia Merlyta Samiati<br>";
    echo "NIM   : 210411100009<br>";
    echo "Kelas : PAW C<br>";

    $koneksi = mysqli_connect("localhost", "root", "", "db_009");
    $id=$_GET['id'];
    $sql="SELECT * FROM tbl_cherly WHERE id_cherly=$id";
    $hasil=mysqli_query($koneksi, $sql);
    if (!$hasil){
        echo "Query salah";
    }

    
    ?>

    <h2>Form Update Data</h2>
    <?php
    while ($row=mysqli_fetch_assoc($hasil)) {
    ?>
    <form action="update_action.php" method="post">
        <input type="hidden" name="id_cherly" value="<?php echo $id;?>"><br>
        Nama Mahasiswa : <input type="text" name="nama_cherly" value="<?php echo $row['nama_cherly']?>"><br>
        Alamat Mahasiswa : <input type="text" name="alamat_cherly" value="<?php echo $row['alamat_cherly']?>"><br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
    <a href="tampil.php">
        <button type="kembali" class="btn btn-primary">Kembali</button>
    </a>
    <?php } ?>
</body>
</html>