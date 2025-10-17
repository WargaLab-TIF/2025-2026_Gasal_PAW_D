
<?php
include "function.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tabel Modulus - NIM Genap</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tabel Modulus (NIM Genap)</h2>

    <form method="post">
        <label>Batas ukuran:</label>
        <input type="number" name="batas" required><br><br>

        <label>Pilih aturan filter:</label>
        <select name="aturan">
            <option value="kubik">Bilangan Kubik</option>
            <option value="perbatasan">Pola Perbatasan</option>
            <option value="prima">Bilangan Prima</option>
            <option value="diagonal">Pola Diagonal</option>
        </select><br><br>

        <label>Pilih warna:</label>
        <select name="warna">
            <option value="kuning">Kuning</option>
            <option value="biru">Biru</option>
            <option value="merah">Merah</option>
        </select><br><br>

        <input type="submit" value="Tampilkan">
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $batas  = (int) $_POST['batas'];
        $aturan = $_POST['aturan'];
        $warna  = $_POST['warna'];

        // panggil fungsi dari fungsi.php
        buatTabel($batas, $aturan, $warna);
    }
    ?>
</body>
</html>

