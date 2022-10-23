<?php
$koneksi = mysqli_connect ("localhost", "root", "", "db_009");
$sql = "SELECT * FROM tbl_cherly";
$hasil = mysqli_query($koneksi,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tabel Cherly</title>
</head>
<body>
    Nama  : Cherly Sintia Merlyta Samiati <br>
    NIM   : 210411100009 <br>
    Kelas : PAW C <br>
    <h2>Tabel Data Mahasiswa</h2>
    <form action="tambah.php"></form>
        <a href="tambah.php">Tambah</a><br>
    </form>
        <table border="1">
        <tr>
            <th>Id</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Button</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($hasil)){
        ?>
        <tr>
            <td><?php echo $row['id_cherly']?></td>
            <td><?php echo $row['nama_cherly']?></td>
            <td><?php echo $row['alamat_cherly']?></td>
            <td>
                <a href="update.php?id=<?php echo $row['id_cherly']?>">
                <button onclick="return confirm('apakah anda yakin ingin mengedit data?')" type="button" class="btn btn-sm btn-info">Update</button></a>
                <a href="delete.php?id=<?php echo $row['id_cherly']?>">
                <button onclick="return confirm('apakah anda yakin ingin menghapus data?')" type="button" class="btn btn-danger">Delete</button></a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>