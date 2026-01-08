<?php
include "koneksi.php";

$nama  = $_POST['nama_pasien'];
$umur  = $_POST['umur'];
$keluhan = $_POST['keluhan'];

mysqli_query($koneksi,
"INSERT INTO pasien VALUES (NULL,'$_POST[nama_pasien]','$_POST[umur]','$_POST[keluhan]')");

header("location:index.php");
?>
