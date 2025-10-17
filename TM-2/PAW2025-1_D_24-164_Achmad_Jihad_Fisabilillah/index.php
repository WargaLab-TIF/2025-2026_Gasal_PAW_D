<?php
require 'validasi.php';

$namaPasien = $keluhanPasien = $usiaPasien = $nomorTelepon = $nomorBpjs = "";
$eror = [];

if (isset($_POST['submit'])) {
    $namaPasien    = $_POST['namaPasien']    ?? "";
    $keluhanPasien = $_POST['keluhanPasien'] ?? "";
    $usiaPasien    = $_POST['usiaPasien']    ?? "";
    $nomorTelepon  = $_POST['nomorTelepon']  ?? "";
    $nomorBpjs     = $_POST['nomorBpjs']     ?? "";

    valNama($namaPasien, $eror);
    valKeluhan($keluhanPasien, $eror);
    valUsia($usiaPasien, $eror);
    valTelepon($nomorTelepon, $eror);
    valBpjs($nomorBpjs, $eror);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pendataan Layanan Kesehatan</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="form-container">
  <h1>Pendataan Layanan Kesehatan</h1>
  <form method="post">
    <fieldset>
      <?php if (isset($_POST['submit']) && count($eror) === 0): ?>
        <?php require 'success.php'; ?>
      <?php else: ?>
        <?php require 'form.php'; ?>
      <?php endif; ?>
    </fieldset>
  </form>
</div>
</body>
</html>
