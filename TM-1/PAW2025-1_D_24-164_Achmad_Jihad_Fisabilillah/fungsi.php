<?php
function bangunTabelModulus($ukuran, $aturan, $warna) {
    if ($ukuran < 1) {
        $ukuran = 1;
    }

    echo "<table class='tabel-modulus'>";
    echo "<thead>";
    echo "<tr>";
    echo "<th class='sudut'>%</th>";
    for ($kol = 1; $kol <= $ukuran; $kol++) {
        echo "<th class='heading'>$kol</th>";
    }
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";

    for ($bar = 1; $bar <= $ukuran; $bar++) {
        echo "<tr>";
        echo "<th class='heading'>$bar</th>";

        for ($kol = 1; $kol <= $ukuran; $kol++) {
            $nilai = $bar % $kol;
            $warnai = false;

            if ($aturan == "kubik") {
                for ($i = 0; $i <= $nilai; $i++) {
                    if ($i * $i * $i == $nilai) {
                        $warnai = true;
                        break;
                    }
                }
            } else if ($aturan == "border") {
                if ($bar == 1 || $bar == $ukuran || $kol == 1 || $kol == $ukuran) {
                    $warnai = true;
                }
            } else if ($aturan == "prima") {
                if ($nilai > 1) {
                    $prima = true;
                    for ($i = 2; $i <= sqrt($nilai); $i++) {
                        if ($nilai % $i == 0) {
                            $prima = false;
                            break;
                        }
                    }
                    if ($prima) {
                        $warnai = true;
                    }
                }
            } else if ($aturan == "diagonal") {
                if ($bar == $kol) {
                    $warnai = true;
                }else if ($bar + $kol == $ukuran + 1) {
                    $warnai = true;
                } 
            } else if ($aturan == "ular_tangga") {
                if ($ukuran % 2 == 0) {
                    if ($bar % 2 == 0  ) {
                        $warnai = true;
                    }
                }else if($ukuran %2 == 1){
                    if ($bar % 2 == 1) {
                        $warnai = true;
                    }
                }

            }

            $kelas = "sel";
            if ($warnai) {
                $kelas .= " " . $warna;
            }

            echo "<td class='$kelas'>$nilai</td>";
        }

        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
}
?>
