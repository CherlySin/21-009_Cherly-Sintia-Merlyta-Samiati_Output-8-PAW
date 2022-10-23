<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_009");

$nama = $_POST['nama_cherly'];
$alamat = $_POST['alamat_cherly'];

$sql = "INSERT INTO tbl_cherly VALUE(null, '$nama', '$alamat')";
$hasil = mysqli_query($koneksi,$sql);

if ($hasil) {
    header("Location: tampil.php");
}
?>