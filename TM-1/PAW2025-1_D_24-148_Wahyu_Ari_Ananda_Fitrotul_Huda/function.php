
<?php
function buatTabel($batas, $aturan, $warna) {
    echo "<table>";

    // Cetak heading kolom
    echo "<tr><th>%</th>";
    for ($j = 1; $j <= $batas; $j++) {
        echo "<th>$j</th>";
    }
    echo "</tr>";

    // Isi tabel
    for ($i = 1; $i <= $batas; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";
        for ($j = 1; $j <= $batas; $j++) {
            $nilai = $i % $j;
            $kelas = "";

            switch ($aturan) {
                case "kubik":
                    $akar = round(pow($nilai, 1/3));
                    if ($akar*$akar*$akar == $nilai) {
                        $kelas = "kubik-$warna";
                    }
                    break;

                case "perbatasan":
                    if ($i==1 || $i==$batas || $j==1 || $j==$batas) {
                        $kelas = "perbatasan-$warna";
                    }
                    break;

                case "prima":
                    if ($nilai > 1) {
                        $prima = true;
                        for ($k=2; $k<=sqrt($nilai); $k++) {
                            if ($nilai % $k == 0) { $prima=false; break; }
                        }
                        if ($prima) $kelas = "prima-$warna";
                    }
                    break;

                case "diagonal":
                    if ($i == $j) {
                        $kelas = "diagonal-$warna";
                    }
                    break;
            }

            echo "<td class='$kelas'>$nilai</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

