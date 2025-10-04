<?php
    // Wajib me-require file eksternal yang berisi fungsi
    require_once 'fungsi.php';

    // Inisialisasi variabel
    $tabelHTML = '';
    // Gunakan nilai default null agar pengecekan lebih mudah
    $ukuran = null;
    $aturan = null;
    $warna = null;

    // Cek jika form telah disubmit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari form
        $ukuran = isset($_POST['ukuran']) ? (int)$_POST['ukuran'] : 0;
        $aturan = isset($_POST['aturan']) ? $_POST['aturan'] : '';
        $warna = isset($_POST['warna']) ? $_POST['warna'] : '';

        // Pastikan ukuran adalah bilangan asli sebelum membuat tabel
        if ($ukuran > 0 && !empty($aturan) && !empty($warna)) {
            // Panggil fungsi dari file 'fungsi.php' untuk membuat tabel
            $tabelHTML = generateTable($ukuran, $aturan, $warna);
        }
    }
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
        <h1>Generator Tabel Modulus</h1>
        <form action="index.php" method="post">
            <div class="form-group">
                <label for="ukuran">Batas Ukuran Tabel (Bilangan Asli):</label>
                <input type="number" id="ukuran" name="ukuran" min="1" required value="<?php echo htmlspecialchars($ukuran ?? ''); ?>">
            </div>
            
            <div class="form-group">
                <label for="aturan">Pilih Aturan Filter:</label>
                <select id="aturan" name="aturan" required>
                    <option value="" disabled <?php if ($aturan === null) echo 'selected'; ?>>-- Pilih Salah Satu --</option>
                    <option value="kubik" <?php if ($aturan == 'kubik') echo 'selected'; ?>>Tandai Bilangan Kubik</option>
                    <option value="perbatasan" <?php if ($aturan == 'perbatasan') echo 'selected'; ?>>Beri Warna Pola Perbatasan</option>
                    <option value="komposit" <?php if ($aturan == 'komposit') echo 'selected'; ?>>Tandai Bilangan Komposit</option>
                    <option value="arsiran_kanan_atas" <?php if ($aturan == 'arsiran_kanan_atas') echo 'selected'; ?>>Beri Warna Arsiran Diagonal (Kanan Atas)</option>
                </select>
            </div>

            <div class="form-group">
                <label for="warna">Pilih Warna Filter:</label>
                <select id="warna" name="warna" required>
                    <option value="" disabled <?php if ($warna === null) echo 'selected'; ?>>-- Pilih Salah Satu --</option>
                    <option value="biru" <?php if ($warna == 'biru') echo 'selected'; ?>>Biru Muda</option>
                    <option value="hijau" <?php if ($warna == 'hijau') echo 'selected'; ?>>Hijau Muda</option>
                    <option value="kuning" <?php if ($warna == 'kuning') echo 'selected'; ?>>Kuning Muda</option>
                </select>
            </div>

            <button type="submit">Buat Tabel</button>
        </form>

        <div class="table-container">
            <?php
                // Tampilkan tabel yang sudah dibuat
                echo $tabelHTML;
            ?>
        </div>
    </div>

</body>
</html>