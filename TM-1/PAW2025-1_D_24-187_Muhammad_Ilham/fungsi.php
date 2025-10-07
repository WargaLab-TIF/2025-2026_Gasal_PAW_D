<?php 
	
// cek bilangan prima
function is_prima($n) {
	if ($n <= 1) return false;
	if ($n == 2) return true;
	if ($n % 2 == 0) return false;
	for ($i = 3; $i <= sqrt($n); $i += 2) { 
		if ($n % $i == 0) return false;
	}
	return true;
}

// cek kuadrat
function is_kuadrat($n) {
	$akar = floor(sqrt($n));
	return ($akar * $akar == $n);
}

// fungsi utama
function table_pangkat($batas, $filter, $warna) {
	echo "<table class='table_pangkat'>";

	echo "<tr><th></th>";

	// table head atas
	for ($i = 1; $i <= $batas; $i++) { 
		echo "<th>$i</th>";
	}

	echo "</tr>";

	// table head kiri
	for ($i = 1; $i <= $batas; $i++) { 
		echo "<tr>";
		echo "<th>$i</th>";

		for ($j = 1; $j <= $batas; $j++) { 
			$hasil = pow($i, $j);
			$style = "";



			// filter
			if ($filter == "kuadrat" && is_kuadrat($hasil)) {
				$style = "background-color:$warna;";
			} elseif ($filter == "catur" && (($i + $j) % 2 == 0)) {
				$style = "background-color:$warna;";
			} elseif ($filter == "komposit" && ($hasil > 1 && !is_prima($hasil))) {
				$style = "background-color:$warna;";
			} elseif ($filter == "diagonal" && ($i + $j == $batas + 1)) {
				$style = "background-color:$warna;";
			}

			echo "<td style='$style'>$hasil</td>";

		}
		echo "</tr>";
	}
	echo "</table>";
}


 ?>