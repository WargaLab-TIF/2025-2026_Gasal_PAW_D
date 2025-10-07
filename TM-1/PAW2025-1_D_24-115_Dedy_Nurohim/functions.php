<?php
function buatTabelPangkat($batas, $aturan, $warna)
{
    echo "<table>";


    echo "<tr><th></th>";
    for ($i = 1; $i <= $batas; $i++) {
        echo "<th>$i</th>";
    }
    echo "</tr>";

    for ($baris = 1; $baris <= $batas; $baris++) {
        echo "<tr><th>$baris</th>";
        for ($kolom = 1; $kolom <= $batas; $kolom++) {
            $nilai = pow($baris, $kolom);
            $highlight = cekFilter($nilai, $baris, $kolom, $aturan, $batas);

            if ($highlight) {
                echo "<td style='background-color:$warna; color:white; font-weight:bold;'>$nilai</td>";
            } else {
                echo "<td>$nilai</td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";
}


function cekFilter($nilai, $baris, $kolom, $aturan, $batas)
{
    switch ($aturan) {
        case "kuadrat":
            return (sqrt($nilai) == floor(sqrt($nilai)));

        case "catur":
            return (($baris + $kolom) % 2 == 0);

        case "komposit":
            return isKomposit($nilai);

        case "diagonal":
            return (($baris + $kolom) == ($batas + 1));

        default:
            return false;
    }
}


function isKomposit($n)
{
    if ($n <= 3) return false;
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) return true;
    }
    return false;
}
