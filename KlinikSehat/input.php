<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Data Pasien</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Input Data Pasien</h2>

<form method="post" action="input-aksi.php" class="form-grid">
    <label>Nama Pasien</label>
    <input type="text" name="nama_pasien" required>

    <label>Umur</label>
    <input type="text" name="umur" required>

    <label>Keluhan</label>
    <input type="text" name="keluhan" required>

    <div></div>
    <button type="submit">Simpan</button>
</form>
</body>
</html>
