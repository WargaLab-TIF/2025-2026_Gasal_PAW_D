<?php
include 'functions.php';

$nama = $nik = $tempat_lahir = $tanggal_lahir = $alamat = $no_telepon = $email = $keluhan = $no_bpjs = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'] ?? "";
    $nik = $_POST['nik'] ?? "";
    $tempat_lahir = $_POST['tempat_lahir'] ?? "";
    $tanggal_lahir = $_POST['tanggal_lahir'] ?? "";
    $alamat = $_POST['alamat'] ?? "";
    $no_telepon = $_POST['no_telepon'] ?? "";
    $email = $_POST['email'] ?? "";
    $keluhan = $_POST['keluhan'] ?? "";
    $no_bpjs = $_POST['no_bpjs'] ?? "";

    include 'proses_form.php';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Pasien - Rumah Sakit Sehat</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="form-container">
    <h1>Form Pendaftaran Pasien</h1>
    <form method="POST">
        <fieldset>
            <?php if ($_SERVER["REQUEST_METHOD"] == "POST" && empty($errors)): ?>
                <div class="success-message">
                    ✅ <strong>Pendaftaran Berhasil!</strong><br><br>
                    Data Anda telah tersimpan dalam sistem.<br><br>
                    <p><a href="index.php" class="btn btn-primary">Daftar Lagi</a></p>
                </div>
            <?php else: ?>
                <?php require 'form.php'; ?>
            <?php endif; ?>
        </fieldset>
    </form>
</div>
</body>
</html>