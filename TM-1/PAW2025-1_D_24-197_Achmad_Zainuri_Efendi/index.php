<?php
require_once 'fungsi.php';

$ukuran = isset($_POST['ukuran']) ? (int)$_POST['ukuran'] : 5;
$filter = isset($_POST['filter']) ? $_POST['filter'] : 'kuadrat';
$warna = isset($_POST['warna']) ? $_POST['warna'] : 'kuning';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Mingguan 1 - PAW</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">
        <h1>Generator Tabel Pangkat</h1>
        <p>Aplikasi ini menghasilkan tabel hasil pangkat sesuai batas ukuran yang diberikan dan menerapkan filter warna berdasarkan aturan tertentu.</p>
        
        <form action="index.php" method="POST" class="form-kontrol">
            <div class="form-grup">
                <label for="ukuran">Batas Ukuran Tabel:</label>
                <input type="number" id="ukuran" name="ukuran" value="<?= htmlspecialchars($ukuran); ?>" min="1" required>
            </div>

            <div class="form-grup">
                <label for="filter">Aturan Filter Tampilan:</label>
                <select id="filter" name="filter">
                    <option value="kuadrat" <?= ($filter == 'kuadrat') ? 'selected' : ''; ?>>Bilangan Kuadrat</option>
                    <option value="catur" <?= ($filter == 'catur') ? 'selected' : ''; ?>>Pola Papan Catur</option>
                    <option value="prima" <?= ($filter == 'prima') ? 'selected' : ''; ?>>Bilangan Prima</option>
                    <option value="diagonal" <?= ($filter == 'diagonal') ? 'selected' : ''; ?>>Pola Diagonal Kiri-Atas ke Kanan-Bawah</option>
                </select>
            </div>

            <div class="form-grup">
                <label for="warna">Warna Filter Tampilan:</label>
                <select id="warna" name="warna">
                    <option value="kuning" <?= ($warna == 'kuning') ? 'selected' : ''; ?>>Kuning</option>
                    <option value="hijau" <?= ($warna == 'hijau') ? 'selected' : ''; ?>>Hijau</option>
                    <option value="biru" <?= ($warna == 'biru') ? 'selected' : ''; ?>>Biru Muda</option>
                </select>
            </div>

            <button type="submit" class="tombol">Buat Tabel</button>
        </form>

        <div class="hasil-tabel">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                buatTabelPangkat($ukuran, $filter, $warna);
            }
            ?>
        </div>
    </div>

</body>
</html>