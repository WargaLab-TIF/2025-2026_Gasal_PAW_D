<?php
require_once 'fungsi.php'; //panggil fungsi

//get form
$limit = isset($_GET['limit']) ? (int)$_GET['limit']:5;
$rule  = isset($_GET['rule'])  ? $_GET['rule']:'squares';
$color = isset($_GET['color']) ? $_GET['color']: '#ffeb3b';
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>TM1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Tabel Pangkat dengan Filter</h1>

<form method="get" action="index.php" class="form">
    <div class="row">
        <label for="limit">Batas ukuran :</label>
        <input id="limit" name="limit" type="number" min="1" value="<?php echo $limit; ?>">
    </div>

    <div class="row">
        <label for="rule">Aturan filter: </label>
        <select id="rule" name="rule">
            <option value="squares"    <?php if ($rule=='squares')    echo 'selected'; ?>>Bilangan Kuadrat</option>
            <option value="chessboard" <?php if ($rule=='chessboard') echo 'selected'; ?>>Pola Papan Catur</option>
            <option value="composite"  <?php if ($rule=='composite')  echo 'selected'; ?>>Bilangan Komposit</option>
            <option value="diagonal"   <?php if ($rule=='diagonal')   echo 'selected'; ?>>Diagonal</option>
        </select>
    </div>

    <div class="row">
        <label for="color">Warna filter:</label>
        <select id="color" name="color">
            <option value="#ffeb3b" <?php if ($color=='#ffeb3b') echo 'selected'; ?>>Kuning</option>
            <option value="#008cffff" <?php if ($color=='#008cffff') echo 'selected'; ?>>Biru</option>
            <option value="#00ff08ff" <?php if ($color=='#00ff08ff') echo 'selected'; ?>>Hijau</option>
            <option value="#ff0019ff" <?php if ($color=='#ff0019ff') echo 'selected'; ?>>Merah</option>
        </select>
    </div>

    <button type="submit">Tampilkan</button>
</form>

<?php
tabel($limit, $rule, $color);
?>

</body>
</html>
