<?php 
	function Table($ukuran,$filter,$warna)
	{
		switch ($filter) {
			case 'vol':
				volume($ukuran,$warna);
				break;
			case 'bingkai':
				bingkai($ukuran,$warna);
				break;
			case 'diagonal':
				diagonal($ukuran,$warna);
				break;
			case 'prima':
				prima($ukuran,$warna);
				break;
		}
	}

	function volume($ukuran,$warna)
	{
		echo "<table style='border:1px solid black;'>";
	    for ($i = 0; $i <= $ukuran; $i++) {
	        echo "<tr style='border:1px solid black'>";
	        for ($j = 0; $j <= $ukuran; $j++) {
	            if ($i == 0 && $j == 0) {
	                echo "<td style='border:1px solid black; width: 35px; height: 35px'></td>";
	            }
	            elseif ($i == 0) {
	                echo "<td style='border:1px solid black;width: 35px; height: 35px'>$j</td>";
	            }
	            elseif ($j == 0) {
	                echo "<td style='border:1px solid black; width: 35px; height: 35px'>$i</td>";
	            }
	            else {
	                $hasil = $i % $j;
	                
	                $Kubik = false;
	                if ($hasil > 0) {
	                    $akar = pow($hasil, 1/3);
	                    $akarBulat = round($akar);
	                    if (pow($akarBulat, 3) == $hasil) {
	                        $Kubik = true;
	                    }
	                }
	                
	                if ($Kubik) {
	                    echo "<td style='border:1px solid black; background-color: {$warna};width: 35px; height: 35px'>{$hasil}</td>";
	                } else {
	                    echo "<td style='border:1px solid black; width: 35px; height: 35px'>{$hasil}</td>";
	            }
            }
        }
        echo "</tr>";
    }
    echo "</table>";
}
	      
	function bingkai($ukuran,$warna)
	{
		echo "<table style='border:1px solid black;'>";
	    for ($i = 0; $i <= $ukuran; $i++) {
	        echo "<tr style='border:1px solid black;'>";
	        for ($j = 0; $j <= $ukuran; $j++) {
	            if ($i == 0 && $j == 0) {
	                echo "<td style='border:1px solid black; width: 35px; height: 35px'> </td>";
	            }
	            elseif ($i == 0) {
	                echo "<td style='border:1px solid black; width: 35px; height: 35px'>$j</td>";
	            }
	            elseif ($j == 0) {
	                echo "<td style='border:1px solid black; width: 35px; height: 35px'>$i</td>";
	            }
	            else {
	                $hasil = $i % $j;
	                if ($i == 1||$i == $ukuran||$j == 1 || $j == $ukuran) {
                    echo "<td style='border: 1px solid black; width: 35px; height: 35px; background-color: {$warna};'>{$hasil}</td>";
                } else {
                    echo "<td style='border: 1px solid black; width: 35px; height: 35px;'>{$hasil}</td>";
	            }
	          }
	        }
	        echo "</tr>";
	    }
	    echo "</table>";
	}

	function prima($ukuran,$warna)
	{
		echo "<table style='border:1px solid black;'>";
	    for ($i = 0; $i <= $ukuran; $i++) {
	        echo "<tr style='border:1px solid black;'>";
	        for ($j = 0; $j <= $ukuran; $j++) {
	            if ($i == 0 && $j == 0) {
	                echo "<td style='border:1px solid black; width: 35px; height: 35px'></td>";
	            }
	            elseif ($i == 0) {
	                echo "<td style='border:1px solid black; width: 35px; height: 35px'>$j</td>";
	            }
	            elseif ($j == 0) {
	                echo "<td style='border:1px solid black; width: 35px; height: 35px'>$i</td>";
	            }
	            else {
	                $hasil = $i % $j;
	                $adalahPrima = true;
	                if ($hasil <= 1) {
	                    $adalahPrima = false;
	                } else {
	                    for ($k = 2; $k <= sqrt($hasil); $k++) {
	                        if ($hasil % $k == 0) {
	                            $adalahPrima = false;
	                            break;
	                        }
	                    }
	                }
	                if ($adalahPrima) {
	                    echo "<td style='border:1px solid black; background-color: {$warna}; width: 35px; height: 35px'>{$hasil}</td>";
	                } else {
	                    echo "<td style='border:1px solid black; width: 35px; height: 35px'>{$hasil}</td>";
		            }
	        }
	      }
	        echo "</tr>";
	    }
	}
 
	function diagonal($ukuran,$warna)
		{
			echo "<table style='border:1px solid black;'>";
		    for ($i = 0; $i <= $ukuran; $i++) {
		        echo "<tr style='border:1px solid black;'>";
		        for ($j = 0; $j <= $ukuran; $j++) {
		            if ($i == 0 && $j == 0) {
		                echo "<td style='border:1px solid black; width: 35px; height: 35px'></td>";
		            }
		            elseif ($i == 0) {
		                echo "<td style='border:1px solid black; width: 35px; height: 35px'>$j</td>";
		            }
		            elseif ($j == 0) {
		                echo "<td style='border:1px solid black; width: 35px; height: 35px'>$i</td>";
		            }
		            else {
		                $hasil = $i % $j;
		                if ($i == $j) {
	                		echo "<td style='border: 1px solid black; background-color: {$warna}; width: 35px; height: 35px'>$hasil</td>";
	            		}else {
	                		echo "<td style='border: 1px solid black; width: 35px; height: 35px'>$hasil</td>";
	            		}
		            }
		        }
		        echo "</tr>";
		    }
		    echo "</table>";
		}
?>