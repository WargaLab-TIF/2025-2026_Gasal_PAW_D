<?php
    require 'validasi.php';

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $no_ktp = $_POST['no_ktp'];
        $no_tlp = $_POST['no_tlp'];
        $pin = $_POST['pin'];
        $no_rekening = $_POST['no_rekening'];
        $id_nasabah = $_POST['id_nasabah'];


        $eror = [];

        checkNama($nama, $eror);
        checkKtp($no_ktp, $eror);
        checkTlp($no_tlp, $eror);
        checkPin($pin, $eror);
        checkRekening($no_rekening, $eror);
        checkID($id_nasabah, $eror);

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TM 2</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Form Pendataan Informasi Nasabah Bank</h1>
        <form method="POST">
            <fieldset>
                <?php if (isset($_POST['submit']) && count($eror) == 0): ?>
                    <h2>Data Nasabah Berhasil Disimpan</h2>
                    <p><span>Nama:</span><?= $nama ?></p>
                    <p><span>No. KTP:</span><?= $no_ktp ?></p>
                    <p><span>No. Telepon:</span><?= $no_tlp ?></p>
                    <p><span>PIN:</span><?= $pin ?></p>
                    <p><span>No. Rekening</span><?= $no_rekening ?></p>
                    <p><span>ID Nasabah:</span><?= $id_nasabah ?></p>
                <?php else: ?>
                    <?php require 'form.php'; ?>
                <?php endif; ?>
            </fieldset>
        </form>
    </div>
</body>
</html>