<?php 
	
	function buat_pola($ukuran,$warna,$pola){
		echo "<div>";
		echo "<table class='tabel'>";

		 for ($baris=0; $baris <= $ukuran; $baris++){
			echo "<tr class='kolom'>";
				$x=$ukuran+1;
			for($kolom=0; $kolom<= $ukuran; $kolom++){
				$kuadrat = $baris ** $kolom;
				
			
				if ($baris == 0 and $kolom == 0){
					echo"<td class='baris'></td>";
				}elseif($kolom==0){
					echo "<td class='baris'>$baris</td>";
				}elseif($baris==0){
					echo "<td class='baris'>$kolom</td>";
				}else{
					if ($pola == "1"){
					$temp=sqrt($kuadrat);
					if((int)$temp==$temp){
						echo "<td class='baris $warna'>$kuadrat </td>";
					}else{
						echo "<td class='baris'> $kuadrat</td>";
					}
					}elseif($pola == "2"){

						if(($kolom  + $baris)%2 ==0){
						echo "<td class='baris $warna'>$kuadrat </td>";
						}else{
							echo "<td class='baris'> $kuadrat</td>";
						}
					}elseif($pola == "3"){
						if($kuadrat==1){
							echo "<td class='baris'> $kuadrat</td>";
						}else{
							$n=2;
							$komposit = false;
							while($n < $kuadrat){
								$tmp=$kuadrat%$n;
								if ($tmp == 0){
									$komposit = true;
									break;
								}
								$n++;
							}
							if ($komposit) {
								
								echo "<td class='baris $warna'>$kuadrat </td>";
							}else{
									echo "<td class='baris'>$kuadrat </td>";

							}

						}
					}else{
							if($baris==$x){
								echo "<td class='baris $warna'>$kuadrat </td>";
							}else{
									echo "<td class='baris'>$kuadrat </td>";

							}
							
					}
				}
				$x--;
			}
			echo "</tr>";

		}
		echo "</table>";
		echo "</div>";
	}

 ?>