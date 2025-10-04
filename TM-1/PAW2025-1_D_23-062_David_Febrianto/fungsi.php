<?php

// Fungsi bantu untuk mengecek apakah sebuah bilangan adalah komposit
function isComposite($num) {
    if ($num <= 3) {
        return false; // 1, 2, 3 bukan komposit
    }
    if ($num % 2 == 0 || $num % 3 == 0) {
        return true; // Habis dibagi 2 atau 3 (selain 2 dan 3 itu sendiri)
    }
    for ($i = 5; $i * $i <= $num; $i = $i + 6) {
        if ($num % $i == 0 || $num % ($i + 2) == 0) {
            return true;
        }
    }
    return false;
}

// Fungsi utama untuk membuat tabel sesuai spesifikasi
function generateTable($batas, $aturan, $warna) {
    $html = "<table>";

    // Membuat heading kolom (angka 1 sampai batas)
    $html .= "<tr><th>Mod</th>";
    for ($j = 1; $j <= $batas; $j++) {
        $html .= "<th>" . $j . "</th>";
    }
    $html .= "</tr>";

    // Membuat baris-baris tabel
    for ($i = 1; $i <= $batas; $i++) {
        $html .= "<tr>";
        // Membuat heading baris (angka 1 sampai batas)
        $html .= "<th>" . $i . "</th>";

        // Mengisi sel-sel tabel
        for ($j = 1; $j <= $batas; $j++) {
            $nilai = $i % $j;
            $class = '';
            $highlight = false;

            // Logika filter berdasarkan aturan yang dipilih
            switch ($aturan) {
                case 'kubik':
                    $akar = round(pow($nilai, 1/3));
                    if ($akar * $akar * $akar == $nilai && $nilai > 0) {
                        $highlight = true;
                    }
                    break;
                case 'perbatasan':
                    if ($i == 1 || $i == $batas || $j == 1 || $j == $batas) {
                        $highlight = true;
                    }
                    break;
                case 'komposit':
                    if (isComposite($nilai)) {
                        $highlight = true;
                    }
                    break;
                case 'arsiran_kanan_atas':
                    // Pola diagonal dari kanan atas ke kiri bawah
                    if (($i + $j) == ($batas + 1)) {
                        $highlight = true;
                    }
                    break;
            }

            if ($highlight) {
                $class = "class='" . htmlspecialchars($warna) . "'";
            }

            $html .= "<td " . $class . ">" . $nilai . "</td>";
        }
        $html .= "</tr>";
    }

    $html .= "</table>";
    return $html;
}

?>