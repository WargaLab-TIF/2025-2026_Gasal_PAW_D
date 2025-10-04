<?php
    $errors = array();

// Pengecekan angka
    function checkAngka(&$errors, $data, $fieldName) {
        if (!isset($data[$fieldName]) || trim($data[$fieldName]) === '') {
            $errors[$fieldName] = "Input tidak boleh kosong.";
            return;
        }
        $nilai = $data[$fieldName];
        if (filter_var($nilai, FILTER_VALIDATE_INT)) {
            if ($nilai > 5 || $nilai < 1) {
                $errors[$fieldName] = "INPUT hanya 1-20";
            }
        
        } else {
            $errors[$fieldName] = "Masukkan hanya bilangan bulat positif";
        }
    }


// cek Kuadrat
function is_square($number) {
    if ($number < 0) return false;
    if ($number == 0) return true;
    $sqrt = sqrt($number);
    return ($sqrt == floor($sqrt));
}

// Cek Prima
function is_prime($number) {
    if ($number <= 1) return false;
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) return false;
    }
    return true;
}

// Cek Komposit
function is_composite($number) {
    if ($number <= 3) return false;
    return !is_prime($number);
}

//bikin table
function buatTabelPangkat($batas, $filter, $warna) {
    echo "<table>";

    // bikin kolom header
    echo "<tr><th><b>^</b></th>";
    for ($i = 1; $i <= $batas; $i++) {
        echo "<th><b>$i</b></th>";
    }
    echo "</tr>";

    // bikin header baris
    for ($baris = 1; $baris <= $batas; $baris++) {
        echo "<tr>";
        // Membuat header baris
        echo "<th><b>$baris</b></th>";

        // Membuat sel-sel data
        for ($kolom = 1; $kolom <= $batas; $kolom++) {
            // Operasi Pangkat
            $nilai = pow($baris, $kolom);
            $isColored = false;

            // filter
            switch ($filter) {
                case 'kuadrat':
                    if (is_square($nilai)) $isColored = true;
                    break;
                case 'catur':
                    if (($baris + $kolom) % 2 == 0) $isColored = true;
                    break;
                case 'komposit':
                    if (is_composite($nilai)) $isColored = true;
                    break;
                case 'diagonal':
                    if (($baris + $kolom) == ($batas + 1)) $isColored = true;
                    break;
            }

            // beri warna
            if ($isColored) {
                echo "<td style='background-color: $warna;'>$nilai</td>";
            } else {
                echo "<td>$nilai</td>";
            }
        }
        echo "</tr>";
    }

    echo "</table>";
}

?>