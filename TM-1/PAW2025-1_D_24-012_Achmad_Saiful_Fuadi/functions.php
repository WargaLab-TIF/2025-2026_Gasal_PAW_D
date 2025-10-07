<?php
function bilPrime($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

function bilCube($n) {
    $c = round(pow($n, 1/3));
    return ($c**3 == $n);
}

function tampilkanTabelModulus($batas, $filter, $warna) {
    echo "<table>";
    
    echo "<tr><th>%</th>";
    for ($col = 1; $col <= $batas; $col++) {
        echo "<th>$col</th>";
    }
    echo "</tr>";

    for ($row = 1; $row <= $batas; $row++) {
        echo "<tr>";
        echo "<th>$row</th>";

        for ($col = 1; $col <= $batas; $col++) {
            $value = $row % $col;
            $style = "";

            switch ($filter) {
                case "kubik":
                    if (bilCube($value)) $style = "background-color:$warna;";
                    break;
                case "perbatasan":
                    if ($row == 1 || $row == $batas || $col == 1 || $col == $batas) {
                        $style = "background-color:$warna;";
                    }
                    break;
                case "prima":
                    if (bilPrime($value)) $style = "background-color:$warna;";
                    break;
                case "diagonal":
                    if ($row == $col) $style = "background-color:$warna;";
                    break;
            }

            echo "<td style='$style'>$value</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}
