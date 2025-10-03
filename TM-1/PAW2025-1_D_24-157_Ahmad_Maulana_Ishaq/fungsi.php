<?php 

function pola($Ukuran, $Warna, $Aturan) {
    echo "<br><hr>";
    echo "<div>";
    echo "<table class='kotak'>";

    for ($baris = 0; $baris <= $Ukuran; $baris++) {
        echo "<tr class='kolom'>";
        $pojok = $Ukuran+1;
        
        for ($kolom = 0; $kolom <= $Ukuran; $kolom++) {
            $kuardat = $baris ** $kolom;

            if ($baris == 0 && $kolom == 0) {
                echo "<td class='baris'>";
            } elseif ($kolom == 0) {
                echo "<td class='baris'>$baris</td>";
            } elseif ($baris == 0) {
                echo "<td class='baris'>$kolom</td>";
            } else {
                if ($Aturan == "kuardat") {
                    $temp = sqrt($kuardat);
                    if ((int)$temp == $temp) {
                        echo "<td class='$Warna'>$kuardat</td>";
                    } else {
                        echo "<td>$kuardat</td>";
                    }
                } elseif ($Aturan == "catur") {
                    if (($kolom + $baris) % 2 == 0) {
                        echo "<td class='$Warna'>$kuardat</td>";
                    } else {
                        echo "<td>$kuardat</td>";
                    }
                } elseif ($Aturan == "komposit") {
                    if ($kuardat == 1) {
                        echo "<td>$kuardat</td>";
                    } else {
                        $genap = 2;
                        $komposit = false;
                        while ($genap < $kuardat) {
                            if ($kuardat % $genap == 0) {
                                $komposit = true;
                                break;
                            }
                            $genap++;
                        }
                        if ($komposit) {
                            echo "<td class='$Warna'>$kuardat</td>";
                        } else {
                            echo "<td>$kuardat</td>";
                        }
                    }
                } else { 
                    if ($baris == $pojok) {
                        echo "<td class='$Warna'>$kuardat</td>";
                    } else {
                        echo "<td>$kuardat</td>";
                    }
                }
            }
            $pojok--;
        }

        echo "</tr>";
    }

    echo "</table>";
    echo "</div>";
}

?>
