<?php 

require_once 'fungsi.php';
if (isset($_POST['submit'])) {
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $ibu = $_POST['ibu'];
    $password = $_POST['password'];

    $errors = [];

    valNik($nik, $errors);
    valNama($nama, $errors);
    valUmur($umur, $errors);
    valIbu($ibu, $errors);
    valPassword($password, $errors);
    
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ACAB</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="form-container">
        <h1>Form Pembukaan Pekening Nasabah Bank ACAB</h1>
        <form action="index.php" method="POST">
            <fieldset>
            <?php if(isset($_POST['submit']) && count($errors) == 0): ?>
                <h1>Berhasil Dikirim</h1>
                <?php require 'berhasil.php';?>
            <?php else: ?>
                <?php require 'form.php';?>
            <?php endif; ?>
            </fieldset>
        </form>
    </div>
</body>
</html>