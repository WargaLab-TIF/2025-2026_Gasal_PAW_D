 <?php
// Memanggil file eksternal yang berisi fungsi
require 'fungsi.php';

// Menetapkan nilai default
$batas = 0;
$filter = 'kuadrat'; // Filter default
$warna = 'lightblue';  // Warna default

// Memeriksa apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari form, pastikan tipenya integer untuk batas
    $batas = $_POST['batas'];
    $filter = $_POST['filter'];
    $warna = $_POST['warna'];

    checkAngka($errors, $_POST, 'batas');
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TM1 - NIM Ganjil</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Tabel Pangkat & Filter Visual</h1>
        
        <form method="POST" class="form-kontrol">
            <div class="input-grup">
                <label for="batas">Batas Ukuran Tabel (1-10):</label>
                <input type="number" id="batas" name="batas"  required><?php
                    if (isset($errors['batas'])) {
                        echo "<span style='color:red;'>{$errors['batas']}</span>";
                    }
                ?>
            </div>
            
            <div class="input-grup">
                <label for="filter">Aturan Filter Tampilan:</label>
                <select id="filter" name="filter">
                    <option value="kuadrat" <?php if ($filter == 'kuadrat') echo 'selected'; ?>>Bilangan Kuadrat</option>
                    <option value="catur" <?php if ($filter == 'catur') echo 'selected'; ?>>Pola Papan Catur</option>
                    <option value="komposit" <?php if ($filter == 'komposit') echo 'selected'; ?>>Bilangan Komposit</option>
                    <option value="diagonal" <?php if ($filter == 'diagonal') echo 'selected'; ?>>Pola Diagonal</option>
                </select>
            </div>

            <div class="input-grup">
                <label for="warna">Warna Filter Tampilan:</label>
                <select id="warna" name="warna">
                    <option value="lightblue" <?php if ($warna == 'lightblue') echo 'selected'; ?>>Biru Muda</option>
                    <option value="lightgreen" <?php if ($warna == 'lightgreen') echo 'selected'; ?>>Hijau Muda</option>
                    <option value="lightcoral" <?php if ($warna == 'lightcoral') echo 'selected'; ?>>Merah Muda</option>
                </select>
            </div>

            <button type="submit">Generate</button>
        </form>

        <div class="area-tabel">
            <?php
            

            if ($batas > 0) {
                // Fungsi dari file 'fungsi.php' dipanggil di sini
                buatTabelPangkat($batas, $filter, $warna);
            }
            ?>
        </div>
    </div>

</body>
</html>