<?php
	
	function prima($ukuran) {
		$number = $ukuran;
		if ($number <= 1) {
			return false;
		}

		for ($i = 2; $i <= sqrt($number); $i++) {
			if ($number % $i == 0) {
				return false;
			}
		}

		return true;
	}

	function original($ukuran, $warna) {
		echo "<table>";
		for ($i = 0; $i <= $ukuran; $i++) {
			echo "<tr>";
			for ($j = 0; $j <= $ukuran; $j++) {
				if ($i == 0 && $j == 0) {
					echo "<th></th>";
				} elseif ($i == 0) {
					echo "<th>$j</th>";
				} elseif ($j == 0) {
					echo "<th>$i</th>";
				} else {
					$number = $i**$j;
					echo "<td style=background-color:$warna>$number</td>";
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	function kuadrat($ukuran, $warna) {
		echo "<table>";
		for ($i = 0; $i <= $ukuran; $i++) {
			echo "<tr>";
			for ($j = 0; $j <= $ukuran; $j++) {
				if ($i == 0 && $j == 0) {
					echo "<th></th>";
				} elseif ($i == 0) {
					echo "<th>$j</th>";
				} elseif ($j == 0) {
					echo "<th>$i</th>";
				} else {
					$number = $i**$j;
					if (sqrt($number) == floor(sqrt($number))) {
						echo "<td style=background-color:$warna>$number</td>";
					} else {
						echo "<td>$number</td>";	
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	function catur($ukuran, $warna) {
		echo "<table>";
		for ($i = 0; $i <= $ukuran; $i++) {
			echo "<tr>";
			for ($j = 0; $j <= $ukuran; $j++) {
				if ($i == 0 && $j == 0) {
					echo "<th></th>";
				} elseif ($i == 0) {
					echo "<th>$j</th>";
				} elseif ($j == 0) {
					echo "<th>$i</th>";
				} else {
					$number = $i**$j;
					if (($i + $j) % 2 == 0) {
						echo "<td style=background-color:$warna>$number</td>";
					} else {
						echo "<td>$number</td>";
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	function komposit($ukuran, $warna) {
		echo "<table>";
		for ($i = 0; $i <= $ukuran; $i++) {
			echo "<tr>";
			for ($j = 0; $j <= $ukuran; $j++) {
				if ($i == 0 && $j == 0) {
					echo "<th></th>";
				} elseif ($i == 0) {
					echo "<th>$j</th>";
				} elseif ($j == 0) {
					echo "<th>$i</th>";
				} else {
					$number = $i**$j;
					if (prima($number)){
						echo "<td>$number</td>";
					} else {
						echo "<td style=background-color:$warna>$number</td>";
					}
				}
			}
			echo "</tr>";
		}
		echo "</table>";
	}

	function arsiran($ukuran, $warna) {
		$count = $ukuran;
		echo "<table>";
		for ($i = 0; $i <= $ukuran; $i++) {
			echo "<tr>";
			for ($j = 0; $j <= $ukuran; $j++) {
				if ($i == 0 && $j == 0) {
					echo "<th></th>";
				} elseif ($i == 0) {
					echo "<th>$j</th>";
				} elseif ($j == 0) {
					echo "<th>$i</th>";
				} else {
					$number = $i**$j;
					if ($j != $count + 1){
						echo "<td>$number</td>";
					} else {
						echo "<td style=background-color:$warna>$number</td>";
					}
				}
			}
			echo "</tr>";
			$count--;
		}
		echo "</table>";
	}

	function display ($ukuran, $warna, $pola) {
		switch($pola) {
			case 'kuadrat':
				kuadrat($ukuran, $warna);
				break;

			case 'catur' : 
				catur($ukuran, $warna);
				break;

			case 'komposit' : 
				komposit($ukuran, $warna);
				break;

			case 'arsiran' : 
				arsiran($ukuran, $warna);
				break;
				
			default:
				original($ukuran, $warna);
				break;
		}

	}
?>
