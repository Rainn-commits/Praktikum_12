<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Input Service Motor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Input Data Service</h2>

<form method="post" action="input-aksi.php" class="form-grid">
    <label>ID</label>
    <input type="text" name="id" required>

    <label>Nama Pelanggan</label>
    <input type="text" name="nama_pelanggan" required>

    <label>Merek Motor</label>
    <input type="text" name="merek_motor" required>

    <label>Keluhan</label>
    <input type="text" name="keluhan" required>

    <div></div>
    <button type="submit">Simpan</button>
</form>
</div>
</body>
</html>
