<?php 
require_once "function.php";

$ukuran = $_GET['ukuran'] ?? null;
$aturan = $_GET['aturan'] ?? null;
$warna  = $_GET['warna'] ?? null;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Pola</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="get">
        <p>Ukuran : <input type="number" name="ukuran"></p>
        <p>Aturan : 
            <select name="aturan">
                <option value="kubik">Bilangan Kubik</option>
                <option value="batas">Pola Batas</option>
                <option value="prima">Bilangan Prima</option>
                <option value="diagonal">Diagonal</option>
            </select>
        </p>
        <p>Warna : 
            <select name="warna">
                <option value="cyan">Cyan</option>
                <option value="blue">Biru</option>
                <option value="red">Merah</option>
                <option value="yellow">Kuning</option>
            </select>
        </p>
        <button type="submit">Tampilkan</button>
    </form>

    <?php
    if ($ukuran && $aturan && $warna) {
        buatTabel($ukuran, $aturan, $warna);
    }
    ?>
</body>
</html>
