<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Anggota Perpustakaan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Input Anggota Perpustakaan</h2>

<form method="post" action="input-aksi.php" class="form-grid">
    <label>Nama</label>
    <input type="text" name="nama" required>

    <label>Alamat</label>
    <input type="text" name="alamat" required>

    <label>No HP</label>
    <input type="text" name="no_hp" required>

    <div></div>
    <button type="submit">Simpan</button>
</form>
</body>
</html>
