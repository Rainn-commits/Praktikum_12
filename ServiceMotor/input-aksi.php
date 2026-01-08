<?php
include "koneksi.php";

$id   = $_POST['id'];
$nama   = $_POST['nama_pelanggan'];
$motor  = $_POST['merek_motor'];
$keluhan = $_POST['keluhan'];

mysqli_query($koneksi,
"INSERT INTO pelanggan VALUES (NULL,'$nama','$motor','$keluhan')");

header("location:index.php");
?>
