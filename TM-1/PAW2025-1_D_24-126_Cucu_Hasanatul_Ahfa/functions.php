<?php
function generateTable($limit, $filterRule, $filterColor) {
    echo "<table>";
    
    // Header
    echo "<tr><th></th>";
    for ($col = 1; $col <= $limit; $col++) {
        echo "<th><b>$col</b></th>";
    }
    echo "</tr>";
    
    // Isi tabel modulus
    for ($row = 1; $row <= $limit; $row++) {
        echo "<tr>";
        echo "<th><b>$row</b></th>";
        
        for ($col = 1; $col <= $limit; $col++) {
            $value = $row % $col;
            $style = "";

            // Terapkan filter sesuai aturan
            switch ($filterRule) {
                case "kubik":
                    if (round(pow($value, 1/3))**3 === $value) {
                        $style = "background-color:$filterColor;";
                    }
                    break;
                case "perbatasan":
                    if ($row==1 || $row==$limit || $col==1 || $col==$limit) {
                        $style = "background-color:$filterColor;";
                    }
                    break;
                case "prima":
                    if (isPrime($value)) {
                        $style = "background-color:$filterColor;";
                    }
                    break;
                case "diagonal":
                    if ($row == $col) {
                        $style = "background-color:$filterColor;";
                    }
                    break;
            }

            echo "<td style='$style'>$value</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// Fungsi cek bilangan prima
function isPrime($num) {
    if ($num < 2) return false;
    for ($i=2; $i<=sqrt($num); $i++) {
        if ($num % $i == 0) return false;
    }
    return true;
}
?>