<?php
include "koneksi.php";

$nama   = $_POST['nama'];
$alamat = $_POST['alamat'];
$no_hp  = $_POST['no_hp'];

mysqli_query($koneksi,
"INSERT INTO anggota VALUES (NULL,'$nama','$alamat','$no_hp')");

header("location:index.php");
?>
