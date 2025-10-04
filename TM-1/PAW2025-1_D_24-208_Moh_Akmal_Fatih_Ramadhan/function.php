<?php

function buatTabel($ukuran, $aturan, $warna) {
    if ($ukuran < 1) $ukuran = 1;

    echo "<table>";
    for ($i = 0; $i <= $ukuran; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= $ukuran; $j++) {

            if ($i == 0 && $j == 0) {
                echo "<td></td>"; // pojok kiri atas
            } elseif ($i == 0) {
                echo "<th>$j</th>"; // header kolom
            } elseif ($j == 0) {
                echo "<th>$i</th>"; // header baris
            } else {
                $nilai = $i % $j;

                if ($aturan == "prima") {
                    tampilPrima($nilai, $warna);
                } elseif ($aturan == "kubik") {
                    tampilKubik($nilai, $warna);
                } elseif ($aturan == "diagonal") {
                    tampilDiagonal($i, $j, $nilai, $warna);
                } elseif ($aturan == "batas") {
                    tampilBatas($i, $j, $ukuran, $nilai, $warna);
                } else {
                    echo "<td>$nilai</td>";
                }
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}

function tampilPrima($n, $warna) {
    if (cekPrima($n)) {
        echo "<td class='$warna'>$n</td>";
    } else {
        echo "<td>$n</td>";
    }
}

function tampilKubik($n, $warna) {
    $akar = round(pow($n, 1/3));
    if ($akar * $akar * $akar == $n) {
        echo "<td class='$warna'>$n</td>";
    } else {
        echo "<td>$n</td>";
    }
}

function tampilDiagonal($i, $j, $n, $warna) {
    if ($i == $j) {
        echo "<td class='$warna'>$n</td>";
    } else {
        echo "<td>$n</td>";
    }
}

function tampilBatas($i, $j, $ukuran, $n, $warna) {
    if ($i == 1 || $j == 1 || $i == $ukuran || $j == $ukuran) {
        echo "<td class='$warna'>$n</td>";
    } else {
        echo "<td>$n</td>";
    }
}

function cekPrima($n) {
    if ($n < 2) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}
