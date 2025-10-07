<?php
function sizeLimit($batas_ukuran, $aturan_filter_tampilan, $warna_filter_tampilan)
{
	if ($aturan_filter_tampilan == "bilanganKuadrat") {
		echo "<table>";
		for ($baris = 0; $baris <= $batas_ukuran; $baris++) {
			echo "<tr>";
			for ($kolom = 0; $kolom <= $batas_ukuran; $kolom++) {
				if ($baris == 0 and $kolom == 0) {
					echo "<th></th>";
				} else if ($baris == 0) {
					echo "<th>$kolom</th>";
				} else if ($kolom == 0) {
					echo "<th>$baris</th>";
				} else {
					$pangkat = $baris ** $kolom;
					$akar = sqrt($pangkat);
					if ($akar == (int) $akar) {
						echo "<td class='{$warna_filter_tampilan}'>{$pangkat}</td>";
					} else {
						echo "<td>$pangkat</td>";
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	} elseif ($aturan_filter_tampilan == "papanCatur") {
		echo "<table>";
		for ($baris = 0; $baris <= $batas_ukuran; $baris++) {
			echo "<tr>";
			for ($kolom = 0; $kolom <= $batas_ukuran; $kolom++) {
				if ($baris == 0 and $kolom == 0) {
					echo "<th></th>";
				} else if ($baris == 0) {
					echo "<th>$kolom</th>";
				} else if ($kolom == 0) {
					echo "<th>$baris</th>";
				} else {
					$pangkat = $baris ** $kolom;
					$catur = $kolom + $baris;
					if ($catur % 2 == 0) {
						echo "<td class='{$warna_filter_tampilan}'>{$pangkat}</td>";
					} else {
						echo "<td>$pangkat</td>";
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	} else if ($aturan_filter_tampilan == "bilanganKomposit") {
		echo "<table>";
		for ($baris = 0; $baris <= $batas_ukuran; $baris++) {
			echo "<tr>";
			for ($kolom = 0; $kolom <= $batas_ukuran; $kolom++) {
				if ($baris == 0 and $kolom == 0) {
					echo "<th></th>";
				} else if ($baris == 0) {
					echo "<th>$kolom</th>";
				} else if ($kolom == 0) {
					echo "<th>$baris</th>";
				} else {
					$pangkat = $baris ** $kolom;
					$faktor = 0;
					for ($i = 2; $i < $pangkat; $i++) {
						if ($pangkat % $i == 0) {
							$faktor++;
							break;
						}
					}
					if ($faktor > 0) {
						echo "<td class='{$warna_filter_tampilan}'>{$pangkat}</td>";
					} else {
						echo "<td>$pangkat</td>";
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	} else if ($aturan_filter_tampilan == "polaArsiran") {
		echo "<table>";
		for ($baris = 0; $baris <= $batas_ukuran; $baris++) {
			echo "<tr>";
			for ($kolom = 0; $kolom <= $batas_ukuran; $kolom++) {
				if ($baris == 0 and $kolom == 0) {
					echo "<th></th>";
				} else if ($baris == 0) {
					echo "<th>$kolom</th>";
				} else if ($kolom == 0) {
					echo "<th>$baris</th>";
				} else {
					$pangkat = $baris ** $kolom;
					if ($baris + $kolom == $batas_ukuran + 1) {
						echo "<td class='{$warna_filter_tampilan}'>{$pangkat}</td>";
					} else {
						echo "<td>$pangkat</td>";
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}
}
?>