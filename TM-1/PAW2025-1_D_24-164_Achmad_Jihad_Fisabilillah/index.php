<?php
require_once "fungsi.php";
$ukuran = isset($_GET['ukuran']) ? (int)$_GET['ukuran'] : 5;
$aturan = isset($_GET['aturan']) ? $_GET['aturan'] : 'kubik';
$warna  = isset($_GET['warna'])  ? $_GET['warna']  : 'warna-merah';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Modulus</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Tugas TM1 - Tabel Hasil Modulus</h1>
    <form method="get" class="form">
        <label>Ukuran:</label>
        <input type="number" name="ukuran" value="<?= $ukuran ?>" min="1" required>
        <br>
        <label>Aturan:</label>
        <select name="aturan">
            <option value="kubik"    <?= $aturan=="kubik"?"selected":"" ?>>Kubik</option>
            <option value="border"   <?= $aturan=="border"?"selected":"" ?>>Border</option>
            <option value="prima"    <?= $aturan=="prima"?"selected":"" ?>>Prima</option>
            <option value="diagonal" <?= $aturan=="diagonal"?"selected":"" ?>>Diagonal</option>
        </select>
        <br>
        <label>Warna:</label>
        <select name="warna">
            <option value="warna-merah"  <?= $warna=="warna-merah"?"selected":"" ?>>Merah</option>
            <option value="warna-hijau"  <?= $warna=="warna-hijau"?"selected":"" ?>>Hijau</option>
            <option value="warna-biru"   <?= $warna=="warna-biru"?"selected":"" ?>>Biru</option>
            <option value="warna-kuning" <?= $warna=="warna-kuning"?"selected":"" ?>>Kuning</option>
        </select>
        <br>
        <button type="submit">Tampilkan</button>
    </form>
    <hr>
    <?php
    bangunTabelModulus($ukuran, $aturan, $warna);
    ?>
</body>
</html>
