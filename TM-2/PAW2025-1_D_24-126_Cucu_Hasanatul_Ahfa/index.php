<?php
include 'functions.php';

$errors = [];
$data = [
    'nama' => '',
    'usia' => '',
    'alamat' => '',
    'no_rm' => '',
    'keluhan' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST;
    $errors = validasiForm($data);

    if (empty($errors)) {
        include 'process.php';
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pendataan Pasien - Layanan Kesehatan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Form Pendataan Pasien</h2>

    <form method="POST" action="index.php">
        <label>Nama Pasien:</label>
        <input type="text" name="nama" value="<?= htmlspecialchars($data['nama']) ?>">
        <?php if (!empty($errors['nama'])): ?>
            <div class="error-msg"><?= htmlspecialchars($errors['nama']) ?></div>
        <?php endif; ?>

        <label>Usia:</label>
        <input type="text" name="usia" value="<?= htmlspecialchars($data['usia']) ?>">
        <?php if (!empty($errors['usia'])): ?>
            <div class="error-msg"><?= htmlspecialchars($errors['usia']) ?></div>
        <?php endif; ?>

        <label>Alamat:</label>
        <input type="text" name="alamat" value="<?= htmlspecialchars($data['alamat']) ?>">
        <?php if (!empty($errors['alamat'])): ?>
            <div class="error-msg"><?= htmlspecialchars($errors['alamat']) ?></div>
        <?php endif; ?>

        <label>Nomor Rekam Medis:</label>
        <input type="text" name="no_rm" value="<?= htmlspecialchars($data['no_rm']) ?>">
        <?php if (!empty($errors['no_rm'])): ?>
            <div class="error-msg"><?= htmlspecialchars($errors['no_rm']) ?></div>
        <?php endif; ?>

        <label>Keluhan Utama:</label>
        <textarea name="keluhan"><?= htmlspecialchars($data['keluhan']) ?></textarea>
        <?php if (!empty($errors['keluhan'])): ?>
            <div class="error-msg"><?= htmlspecialchars($errors['keluhan']) ?></div>
        <?php endif; ?>

        <button type="submit">Kirim</button>
    </form>
</div>
</body>
</html>
