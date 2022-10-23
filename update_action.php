<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_009");

$id = $_POST['id_cherly'];
$nama = $_POST['nama_cherly'];
$alamat = $_POST['alamat_cherly'];

$sql = "UPDATE tbl_cherly
SET nama_cherly='$nama', alamat_cherly='$alamat'
WHERE id_cherly=$id";

$hasil = mysqli_query($koneksi, $sql);

if ($hasil){
    header("Location: tampil.php");
} else {
    echo "Update data tidak berhasil<br>";
}
?>