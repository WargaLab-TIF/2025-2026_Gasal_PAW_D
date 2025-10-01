<?php 
function tampil_tabel($baris, $tampilan,$warna){
	echo "<table>";
	if ($tampilan == 'Kuadrat') {
		for ($i=1; $i <=$baris ; $i++) { 
			echo "<tr>";

			for ($j=1; $j <=$baris ; $j++) { 
				if ($i == 1) {
					$akar = sqrt($j);
					if ($akar == (int)$akar) {
						echo "<th class=$warna>{$j} </th>";
					}else{
						echo "<th>{$j} </th>";
					}
				}else if($j==1){
					$akar = sqrt($i);
					if ($akar == (int)$akar) {
						echo "<th class=$warna>{$i} </th>";
					}else{
						echo "<th>{$i} </th>";						
					}
				}else{
					$temp = $i ** $j;
					$akar = sqrt($temp);
					if ($akar == (int)$akar) {
						echo "<td class=$warna>{$temp} </td>";	

					}else{
						echo "<td>{$temp} </td>";

					}
				}
			}
			echo "</tr>";
		}
	}else if($tampilan == 'Catur'){
		for ($i=1; $i <=$baris ; $i++) { 
			echo "<tr>";
			$res = $i;
			for ($j=1; $j <=$baris ; $j++) { 
				if ($i == 1) {
					if ($res % 2 == 0) {
						echo "<th>{$j} </th>";

					}else{
						echo "<th class=$warna>{$j} </th>";
					}

				}else if($j==1){
					if ($res % 2 == 0) {
						echo "<th>{$i} </th>";

					}else{
						echo "<th class=$warna>{$i} </th>";
					}

				}else{
					$temp = $i ** $j;
					if ($res % 2 == 1) {
						echo "<td class=$warna>{$temp}</td>";	

					}else{
						echo "<td>{$temp} </td>";
					}
					if ($res == 10) {
						$res = 0;
					}		
				}
				$res++;	
			}
			echo "</tr>";
		}
	}else if($tampilan == 'Komposit'){
		for ($i=1; $i <=$baris ; $i++) { 
			echo "<tr>";
			for ($j=1; $j <=$baris ; $j++) { 
				if ($i == 1) {
					$komposit = false;
					$k = 2;
					while ($k < $j) {
						if ($j % $k == 0) {
							$komposit = true;
							break;
						}
						$k++;
					}
					if ($komposit) {
						echo "<th class=$warna>{$j} </th>";
					}else{
						echo "<th>{$j} </th>";
					}
				}else if($j==1){
					$komposit = false;
					$k = 2;
					while ($k < $i) {
						if ($i % $k == 0) {
							$komposit = true;
							break;
						}
						$k++;
					}
					if ($komposit) {
						echo "<th class=$warna>{$i} </th>";
					}else{
						echo "<th>{$i} </th>";
					}
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
						echo "<td class=$warna>{$temp}</td>";	
					}else{
						echo "<td>{$temp} </td>";
					}

				}
			}
			echo "</tr>";
		}
	}else if($tampilan == 'Arsir'){
		for ($i=1; $i <=$baris ; $i++) { 
			echo "<tr>";
			$res = $i;
			for ($j=1; $j <=$baris ; $j++) { 
				if ($i == 1) {
					if ($baris %2 == $res %2) {
						echo "<th class=$warna>{$j} </th>";
					}else{
						echo "<th>{$j} </th>";
					}
				}else if($j==1){
					if ($baris %2 == $res %2) {
						echo "<th class=$warna>{$i} </th>";

					}else{
						echo "<th>{$i} </th>";
					}
				}else{
					$temp = $i ** $j;
					if ($baris %2 == $res %2) {
						echo "<td class=$warna>{$temp}</td>";	
					}else{
						echo "<td>{$temp} </td>";
					}
					if ($res == 10) {
						$res = 0;
					}
				}
				$res++;

			}
			echo "</tr>";
		}
	}

	echo "</table>";
}


 ?>
