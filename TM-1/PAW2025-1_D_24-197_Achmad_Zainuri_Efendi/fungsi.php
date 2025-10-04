<?php

function isBilanganKuadrat(int $n): bool {
    if ($n < 0) return false;
    if ($n == 0) return true;
    $akar = (int)sqrt($n);
    return $akar * $akar == $n;
}

function isBilanganPrima(int $n): bool {
    if ($n <= 1) return false;
    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) return false;
    }
    return true;
}

function buatTabelPangkat(int $batasUkuran, string $aturanFilter, string $warnaFilter) {
    
    $warnaHex = '#ffffff';
    if ($warnaFilter == 'kuning') {
        $warnaHex = '#fffacd';
    } elseif ($warnaFilter == 'hijau') {
        $warnaHex = '#98fb98';
    } elseif ($warnaFilter == 'biru') {
        $warnaHex = '#add8e6';
    }

    echo "<h2>Tabel Pangkat Ukuran $batasUkuran x $batasUkuran</h2>";
    echo "<table class='tabel-utama'>";

    echo "<thead><tr><th>^</th>";
    for ($kolom = 1; $kolom <= $batasUkuran; $kolom++) {
        echo "<th>$kolom</th>";
    }
    echo "</tr></thead>";

    echo "<tbody>";
    for ($baris = 1; $baris <= $batasUkuran; $baris++) {
        echo "<tr>";
        echo "<th>$baris</th>"; 
        
        for ($kolom = 1; $kolom <= $batasUkuran; $kolom++) {
            $nilaiSel = @pow($baris, $kolom);
            $kelasCss = '';
            
            switch ($aturanFilter) {
                case 'kuadrat':
                    if (isBilanganKuadrat($nilaiSel)) {
                        $kelasCss = 'sel-terfilter';
                    }
                    break;
                case 'catur':
                    if (($baris + $kolom) % 2 == 0) {
                        $kelasCss = 'sel-terfilter';
                    }
                    break;
                case 'prima':
                    if (isBilanganPrima($nilaiSel)) {
                        $kelasCss = 'sel-terfilter';
                    }
                    break;
                case 'diagonal':
                    if ($baris == $kolom) {
                        $kelasCss = 'sel-terfilter';
                    }
                    break;
            }
            
            echo "<td class='$kelasCss'>$nilaiSel</td>";
        }
        echo "</tr>";
    }
    echo "</tbody></table>";
    
    echo "<style>.sel-terfilter { background-color: " . $warnaHex . "; }</style>";
}