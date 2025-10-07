<?php
require_once 'fungsi.php'; 


$limit = isset($_GET['limit']) ? (int)$_GET['limit']:5;
$rule  = isset($_GET['rule'])  ? $_GET['rule']:'kuadrat';
$color = isset($_GET['color']) ? $_GET['color']: 'red';
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <title>TM-1</title>
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
            <option value="kuadrat"    <?php if ($rule==='kuadrat')    echo 'selected'; ?>>Bilangan Kuadrat</option>
            <option value="catur" <?php if ($rule==='catur') echo 'selected'; ?>>Pola Papan Catur</option>
            <option value="komposit"  <?php if ($rule==='komposit')  echo 'selected'; ?>>Bilangan Komposit</option>
            <option value="diagonal"   <?php if ($rule==='diagonal')   echo 'selected'; ?>>Diagonal</option>
        </select>
    </div>

    <div class="row">
        <label for="color">Warna filter:</label>
        <select id="color" name="color">
            <option value="red" <?php if ($color==='red') echo 'selected'; ?>>Merah</option>
            <option value="blue" <?php if ($color==='blue') echo 'selected'; ?>>Biru</option>
            <option value="cyan" <?php if ($color==='cyan') echo 'selected'; ?>>Biru Muda</option>
            <option value="brown" <?php if ($color==='brown') echo 'selected'; ?>>Coklat</option>
        </select>
    </div>

    <button type="submit">Tampilkan</button>
</form>

<?php
tabel($limit, $rule, $color);
?>

</body>
</html>
