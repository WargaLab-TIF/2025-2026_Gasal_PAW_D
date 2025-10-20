<?php
include 'functions.php';

$errors = [];
$success = false;

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $no_rekening = $_POST['no_rekening'];
    $alamat = $_POST['alamat'];
    $jenis_tabungan = $_POST['jenis_tabungan'];
    $saldo = $_POST['saldo'];
    $telepon = $_POST['telepon'];
    $email = $_POST['email'];

    include 'process.php';
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Perbankan</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="form-container">
        <h1>Formulir Pendataan Nasabah</h1>

        <?php if (isset($_POST['submit']) && count($errors) == 0): ?>
            <div class="success-message">
                <h3>✅ Data Berhasil Disimpan!</h3>
                <p>Terima kasih telah mengisi formulir pendataan nasabah.</p>
                <div class="navigation">
                    <a href="index.php">Isi Formulir Lagi</a>
                </div>
            </div>
        <?php else: ?>
            <form method="POST">
                <fieldset>
                    <?php require 'form.php'; ?>
                </fieldset>
            </form>
        <?php endif; ?>
    </div>
</body>

</html>