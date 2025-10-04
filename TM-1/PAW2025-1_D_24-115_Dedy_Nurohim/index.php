<?php
include "functions.php";


$batas = isset($_POST['batas']) ? $_POST['batas'] : "";
$aturan = isset($_POST['aturan']) ? $_POST['aturan'] : "";
$warna = isset($_POST['warna']) ? $_POST['warna'] : "";
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>TM1 - NIM Ganjil (Tabel Pangkat)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Tugas Mingguan 1 - Tabel Pangkat</h2>

    <form method="POST">
        <label>Batas Ukuran:</label>
        <input type="number" name="batas" min="1" required
            value="<?= htmlspecialchars($batas) ?>"><br><br>

        <label>Pilih Aturan Filter:</label>
        <select name="aturan">
            <option value="kuadrat" <?= ($aturan == "kuadrat") ? "selected" : ""; ?>>Bilangan Kuadrat</option>
            <option value="catur" <?= ($aturan == "catur") ? "selected" : ""; ?>>Pola Papan Catur</option>
            <option value="komposit" <?= ($aturan == "komposit") ? "selected" : ""; ?>>Bilangan Komposit</option>
            <option value="diagonal" <?= ($aturan == "diagonal") ? "selected" : ""; ?>>Pola Arsiran Diagonal (↙)</option>
        </select><br><br>

        <label>Pilih Warna:</label>
        <select name="warna">
            <option value="red" <?= ($warna == "red") ? "selected" : ""; ?>>Merah</option>
            <option value="green" <?= ($warna == "green") ? "selected" : ""; ?>>Hijau</option>
            <option value="blue" <?= ($warna == "blue") ? "selected" : ""; ?>>Biru</option>
        </select><br><br>

        <button type="submit">Tampilkan Tabel</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        buatTabelPangkat($batas, $aturan, $warna);
    }
    ?>
</body>

</html>