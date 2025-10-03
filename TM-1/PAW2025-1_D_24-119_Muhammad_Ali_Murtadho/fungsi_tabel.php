<?php 
function tampil_tabel($baris, $tampilan,$warna){
	echo "<table>";

	if ($tampilan == 'Kuadrat') {
		kuadrat($baris, $warna);
	}else if($tampilan == 'Catur'){
		catur($baris, $warna);
	}else if($tampilan == 'Komposit'){
		komposit($baris, $warna);
	}else if($tampilan == 'Arsir'){
		arsir($baris, $warna);
	}
	echo "</table>";
}

function kuadrat($baris, $warna){
	for ($i=0; $i <=$baris ; $i++) { 
		echo "<tr>";
		for ($j=0; $j <=$baris ; $j++) { 
			if ($i == 0 && $j == 0) {
				echo "<td></td>";
			}
			else if ($i == 0) {
				echo "<th>{$j} </th>";
			}else if($j==0){
				echo "<th>{$i} </th>";	
			}else{
				$temp = $i ** $j;
				$akar = sqrt($temp);
				if ($akar == (int)$akar) {
					echo "<td class='$warna'>{$temp} </td>";	

				}else{
					echo "<td>{$temp} </td>";
				}
			}
		}
		echo "</tr>";
	}
}


function catur($baris,$warna){
	for ($i=0; $i <=$baris ; $i++) { 
		echo "<tr>";
		$res = $i;
		for ($j=0; $j <=$baris ; $j++) {
			if ($i == 0 && $j == 0) {
				echo "<th></th>";
		 	} 
			else if ($i == 0) {
				echo "<th>{$j} </th>";
			}else if($j==0){
				echo "<th>{$i} </th>";
			}else{
				$temp = $i ** $j;
				if ($res % 2 == 1) {
					echo "<td class='$warna'>{$temp}</td>";	
				}else{
					echo "<td>{$temp}</td>";
				}
				if ($res == $baris) {
					if ($baris %2 == 0) {
						$res = 0;
					}else{
						$res = 1;
					}
				}		
			}
			$res++;	
		}
		echo "</tr>";
	}
}

function komposit($baris, $warna){
	for ($i=0; $i <=$baris ; $i++) { 
		echo "<tr>";
		for ($j=0; $j <=$baris ; $j++) { 
			if ($i == 0 && $j == 0) {
				echo "<th></th>";
		 	} 
			else if ($i == 0) {
				echo "<th>{$j} </th>";
			}else if($j==0){
				echo "<th>{$i} </th>";
			}else{
				$temp = $i ** $j;
				$komposit = false;
				$k = 2;
				while ($k < $temp) {
					if ($temp % $k == 0) {
						$komposit = true;
						break;
					}
					$k++;
				}
				if ($komposit) {
					echo "<td class='$warna'>{$temp}</td>";	
				}else{
					echo "<td>{$temp} </td>";
				}
			}
		}
		echo "</tr>";
	}
}

function arsir($baris, $warna){
	for ($i=0; $i <=$baris ; $i++) { 
			echo "<tr>";
			$res = $i;
			for ($j=0; $j <=$baris ; $j++) {
				if ($j == 0&&$i == 0) {
				 	echo "<th></th>";
				 } 
				else if ($i == 0) {
					echo "<th>{$j} </th>";
				}else if($j==0){
					echo "<th>{$i} </th>";
				}else{
					$temp = $i ** $j;
					if ($res%$baris==1) {
						echo "<td class='$warna'>{$temp}</td>";
					}else{
						echo "<td>{$temp}</td>";
					}
					if ($res == $baris) {
						$res = 0;
					}
				}
				$res++;
			}
			echo "</tr>";
		}
}

 ?>
