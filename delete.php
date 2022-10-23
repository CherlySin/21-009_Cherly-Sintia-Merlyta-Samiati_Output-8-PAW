<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_009");
$id = $_GET['id'];

$sql = "DELETE FROM tbl_cherly WHERE id_cherly=$id";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil){
    header("Location: tampil.php");
}
?>