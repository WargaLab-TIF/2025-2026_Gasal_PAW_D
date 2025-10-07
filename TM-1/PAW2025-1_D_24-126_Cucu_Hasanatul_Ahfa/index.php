<?php include "functions.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>TM1 - PAW</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Tugas Mingguan 1 - PAW</h2>
    <form method="post">
        <label>Batas Ukuran:</label>
        <input type="number" name="limit" value="<?php echo isset($_POST['limit']) ? $_POST['limit'] : ''; ?>" required><br><br>

        <label>Aturan Filter:</label>
        <select name="filterRule">
            <option value="kubik" <?php if(isset($_POST['filterRule']) && $_POST['filterRule']=="kubik") echo "selected"; ?>>Bilangan Kubik</option>
            <option value="perbatasan" <?php if(isset($_POST['filterRule']) && $_POST['filterRule']=="perbatasan") echo "selected"; ?>>Perbatasan</option>
            <option value="prima" <?php if(isset($_POST['filterRule']) && $_POST['filterRule']=="prima") echo "selected"; ?>>Bilangan Prima</option>
            <option value="diagonal" <?php if(isset($_POST['filterRule']) && $_POST['filterRule']=="diagonal") echo "selected"; ?>>Arsiran Diagonal</option>
        </select><br><br>

        <label>Warna:</label>
        <select name="filterColor">
            <option value="lightblue" <?php if(isset($_POST['filterColor']) && $_POST['filterColor']=="lightblue") echo "selected"; ?>>Biru Muda</option>
            <option value="lightgreen" <?php if(isset($_POST['filterColor']) && $_POST['filterColor']=="lightgreen") echo "selected"; ?>>Hijau Muda</option>
            <option value="lightpink" <?php if(isset($_POST['filterColor']) && $_POST['filterColor']=="lightpink") echo "selected"; ?>>Merah Muda</option>
        </select><br><br>

        <button type="submit">Tampilkan Tabel</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $limit = $_POST["limit"];
        $filterRule = $_POST["filterRule"];
        $filterColor = $_POST["filterColor"];

        generateTable($limit, $filterRule, $filterColor);
    }
    ?>
</body>
</html>