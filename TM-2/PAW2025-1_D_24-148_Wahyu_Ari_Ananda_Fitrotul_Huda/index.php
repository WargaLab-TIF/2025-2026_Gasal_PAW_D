<?php
require_once "fungsi.php"; 

$errors = [];
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $namaPasien   = $_POST['namaPasien'] ?? '';
    $usia         = $_POST['usia'] ?? '';
    $kodePasien   = $_POST['kodePasien'] ?? '';
    $noRekamMedis = $_POST['noRekamMedis'] ?? '';
    $alamat       = $_POST['alamat'] ?? '';
    $jenisKelamin = $_POST['jenisKelamin'] ?? '';
    $jenisLayanan = $_POST['jenisLayanan'] ?? '';
    $keluhan      = $_POST['keluhan'] ?? '';

    
    $fields = [
        'namaPasien' => 'Nama pasien',
        'usia' => 'Usia',
        'kodePasien' => 'Kode pasien',
        'noRekamMedis' => 'Nomor rekam medis',
        'alamat' => 'Alamat',
        'jenisKelamin' => 'Jenis kelamin',
        'jenisLayanan' => 'Jenis layanan',
        'keluhan' => 'Keluhan'
    ];
    foreach ($fields as $key => $label) {
        if (isEmpty($_POST[$key] ?? '')) {
            $errors[$key] = "$label wajib diisi.";
        }
    }

    
    if (!isEmpty($namaPasien) && !isAlphabet($namaPasien))
        $errors['namaPasien'] = "Nama pasien hanya boleh huruf.";

    if (!isEmpty($usia) && !isNumericVal($usia))
        $errors['usia'] = "Usia hanya boleh angka.";

    if (!isEmpty($kodePasien) && !isAlphanumeric($kodePasien))
        $errors['kodePasien'] = "Kode pasien harus kombinasi huruf dan angka.";

    if (!isEmpty($noRekamMedis) && (!isNumericVal($noRekamMedis) || strlen($noRekamMedis) != 6))
        $errors['noRekamMedis'] = "Nomor rekam medis harus angka 6 digit.";

    if (!isEmpty($namaPasien) && (strlen($namaPasien) < 3 || strlen($namaPasien) > 30))
        $errors['namaPasien'] = "Nama pasien harus 3–30 karakter.";
    if (!isEmpty($keluhan) && strlen($keluhan) < 10)
        $errors['keluhan'] = "Keluhan minimal 10 karakter.";

    if (empty($errors)) $success = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Layanan Kesehatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Form Pendaftaran Layanan Kesehatan</h1>

    <?php if ($success): ?>
        <div class="success">
            <h3>✅ Data berhasil dikirim!</h3>
            <ul>
                <li><b>Nama Pasien:</b> <?= $namaPasien ?></li>
                <li><b>Usia:</b> <?= $usia ?></li>
                <li><b>Kode Pasien:</b> <?= $kodePasien ?></li>
                <li><b>No. Rekam Medis:</b> <?= $noRekamMedis ?></li>
                <li><b>Alamat:</b> <?= $alamat ?></li>
                <li><b>Jenis Kelamin:</b> <?= $jenisKelamin ?></li>
                <li><b>Jenis Layanan:</b> <?= $jenisLayanan ?></li>
                <li><b>Keluhan:</b> <?= $keluhan ?></li>
            </ul>
        </div>
    <?php else: ?>
        <form method="POST" action="<?= $_SERVER["PHP_SELF"]; ?>">
            <label>Nama Pasien:</label>
            <input type="text" name="namaPasien" value="<?= $_POST['namaPasien'] ?? '' ?>">
            <span class="error"><?= $errors['namaPasien'] ?? '' ?></span>

            <label>Usia:</label>
            <input type="text" name="usia" value="<?= $_POST['usia'] ?? '' ?>">
            <span class="error"><?= $errors['usia'] ?? '' ?></span>

            <label>Kode Pasien:</label>
            <input type="text" name="kodePasien" value="<?= $_POST['kodePasien'] ?? '' ?>">
            <span class="error"><?= $errors['kodePasien'] ?? '' ?></span>

            <label>Nomor Rekam Medis (6 digit):</label>
            <input type="text" name="noRekamMedis" value="<?= $_POST['noRekamMedis'] ?? '' ?>">
            <span class="error"><?= $errors['noRekamMedis'] ?? '' ?></span>

            <label>Alamat:</label>
            <input type="text" name="alamat" value="<?= $_POST['alamat'] ?? '' ?>">
            <span class="error"><?= $errors['alamat'] ?? '' ?></span>

            <label>Jenis Kelamin:</label>
            <select name="jenisKelamin">
                <option value="">-- Pilih --</option>
                <option value="Laki-laki" <?= (($_POST['jenisKelamin'] ?? '') == 'Laki-laki') ? 'selected' : '' ?>>Laki-laki</option>
                <option value="Perempuan" <?= (($_POST['jenisKelamin'] ?? '') == 'Perempuan') ? 'selected' : '' ?>>Perempuan</option>
            </select>
            <span class="error"><?= $errors['jenisKelamin'] ?? '' ?></span>

            <label>Jenis Layanan:</label>
            <select name="jenisLayanan">
                <option value="">-- Pilih --</option>
                <option value="Umum" <?= (($_POST['jenisLayanan'] ?? '') == 'Umum') ? 'selected' : '' ?>>Pemeriksaan Umum</option>
                <option value="Gigi" <?= (($_POST['jenisLayanan'] ?? '') == 'Gigi') ? 'selected' : '' ?>>Poli Gigi</option>
                <option value="Anak" <?= (($_POST['jenisLayanan'] ?? '') == 'Anak') ? 'selected' : '' ?>>Poli Anak</option>
                <option value="Mata" <?= (($_POST['jenisLayanan'] ?? '') == 'Mata') ? 'selected' : '' ?>>Poli Mata</option>
                <option value="Kulit" <?= (($_POST['jenisLayanan'] ?? '') == 'Kulit') ? 'selected' : '' ?>>Poli Kulit</option>
            </select>
            <span class="error"><?= $errors['jenisLayanan'] ?? '' ?></span>

            <label>Keluhan:</label>
            <textarea name="keluhan" rows="4"><?= $_POST['keluhan'] ?? '' ?></textarea>
            <span class="error"><?= $errors['keluhan'] ?? '' ?></span>

            <button type="submit">Kirim</button>
        </form>
    <?php endif; ?>
</div>
</body>
</html>
