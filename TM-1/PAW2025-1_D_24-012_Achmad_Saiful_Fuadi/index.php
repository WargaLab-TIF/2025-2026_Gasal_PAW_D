<?php
require_once "functions.php";

$batas = isset($_POST['batas']) ? (int)$_POST['batas']:"";
$filter = isset($_POST['filter']) ? $_POST['filter']:"";
$warna = isset($_POST['warna']) ? $_POST['warna']:"";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Mingguan 1 - NIM Genap</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>tabel hasil modulus</h1>
    <form method="post">
        <label for="batas">Batas ukuran:</label>
        <input type="number" name="batas" id="batas" min="1" value="<?php echo $batas;?>" required><br><br>

        <label for="filter">Aturan Filter:</label>
        <select name="filter" id="filter">
            <option value="kubik" <?= ($filter == "kubik")?"selected" : "";?>>Bilangan Kubik</option>
            <option value="perbatasan" <?= ($filter == "perbatasan")?"selected" : "";?>>Pola Perbatasan</option>
            <option value="prima" <?= ($filter == "prima")?"selected" : "";?>>Bilangan Prima</option>
            <option value="diagonal" <?= ($filter == "diagonal")?"selected" : "";?>>Arsiran Diagonal (kiri atas → kanan bawah)</option>
        </select><br><br>

        <label for="warna">Warna Filter:</label>
        <select name="warna" id="warna">
            <option value="yellow" <?= ($warna == "yellow")?"selected" : "";?>>Kuning</option>
            <option value="lightblue" <?= ($warna == "lightblue")?"selected" : "";?>>Biru Muda</option>
            <option value="lightgreen" <?= ($warna == "lightgreen")?"selected" : "";?>>Hijau Muda</option>
        </select><br><br>

        <button type="submit">Tampilkan</button>
    </form>

    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $batas  = intval($_POST["batas"]);
        $filter = $_POST["filter"];
        $warna  = $_POST["warna"];

        tampilkanTabelModulus($batas, $filter, $warna);
    }
    ?>
</body>
</html>
