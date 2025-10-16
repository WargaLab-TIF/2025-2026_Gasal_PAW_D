<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Konfirmasi Data</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Data Berhasil Dikirim</h2>
        <p>Berikut data yang Anda masukkan:</p>
        <ul>
            <li><strong>Nama:</strong> <?= htmlspecialchars($_POST['nama']) ?></li>
            <li><strong>Usia:</strong> <?= htmlspecialchars($_POST['usia']) ?></li>
            <li><strong>Alamat:</strong> <?= htmlspecialchars($_POST['alamat']) ?></li>
            <li><strong>No. Rekam Medis:</strong> <?= htmlspecialchars($_POST['no_rm']) ?></li>
            <li><strong>Keluhan:</strong> <?= htmlspecialchars($_POST['keluhan']) ?></li>
        </ul>
        <a href="index.php">Kembali ke Form</a>
    </div>
</body>
</html>
