<?php 
function bilanganKubik($data){
	$akar_kubik=round(pow($data,1/3));
	if ($akar_kubik ** 3 == $data) {
		return True;
	}return False;
}


function bilanganPrima($data){
	if ($data <= 1) {
		return False;
	}if ($data == 2) {
		return True;
	}if ($data % 2 == 0) {
		return False;
	}
	for ($i=3; $i <= sqrt($data) ; $i+=2) { 
		if ($data % $i ==0) {
			return False;
		}
	}return True;
}



function fungsi ($ukuran,$aturan,$warna){
	echo "<tr><th>X</th>";
	for ($heading=1; $heading <= $ukuran ; $heading++) { 
		echo "<th>$heading</th>";
	}echo "</tr>";
		for ($baris=1; $baris <= $ukuran ; $baris++) { 
			echo "<tr><th>$baris</th>";
			for ($kolom=1; $kolom <= $ukuran ; $kolom++) { 
				$hasil=$baris % $kolom;
				if ($aturan=='kubik') {
					if (bilanganKubik($hasil)==True) {
						echo "<td class='$warna'>$hasil</td>";
					}else{
						echo "<td>$hasil</td>";
					}
				}elseif($aturan=='batas'){
					if ($baris==1||$kolom==1||$baris==$ukuran||$kolom==$ukuran) {
						echo "<td class='$warna'>$hasil</td>";
					}else{
						echo "<td>$hasil</td>";
					}
				}elseif ($aturan=='prima') {
					if (bilanganPrima($hasil)) {
						echo "<td class='$warna'>$hasil</td>";
					}else{
						echo "<td>$hasil</td>";
					}
				}elseif ($aturan=='diagonal') {
					if ($baris==$kolom) {
						echo "<td class='$warna'>$hasil</td>";
					}else{
						echo "<td>$hasil</td>";
					}
				}else{
					echo "<td class='$warna'>$hasil</td>";
				}

			}echo "</tr>";
		}

}
 ?>
