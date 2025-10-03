<?php 

function maketable($ukuran,$aturan,$warna){
  if($ukuran < 1){
    $ukuran=1;
  }
	echo '<table>';
	for ($tr=0; $tr <= $ukuran; $tr++) { 
		echo '<tr>';
		for ($th=0; $th <= $ukuran; $th++) {
			if($tr == 0 && $th == 0){
				echo "<td></td>";
			}elseif($th == 0){
				echo "<th>$tr</th>";
			}elseif($tr == 0){
				echo "<th>$th</th>";
			}
			else{
			  if($aturan == 'prima'){
			    prima($tr%$th,$warna);
			  }else if($aturan == 'kubik'){
			    kubik($tr%$th,$warna);
			  }elseif($aturan == 'diagonal'){
			    diagonal($tr,$th,$warna);
			  }elseif($aturan == 'batas'){
			    batas($tr,$th,$ukuran,$warna);
			  }else{
			    echo "<td>" . $tr%$th."</td>";
			  }
				
			}
			
		}
		echo '</tr>';
	}
	echo '</table>';
}

function prima($num,$warna){
  $count = 0;
  for($i=1; $i<=$num; $i++){
    if($num%$i == 0){
      $count++;
    }
  }
  if($count > 1 && $count <= 2){
    echo "<td class='$warna'>$num</td>";
  }else{
    echo "<td>$num</td>";
  }
}

function kubik($num,$warna){
  $kondisi=false;
  $count = 0;
  while($count * $count * $count <= $num){
    if ($count * $count * $count == $num){
      $kondisi = true;
      break;
    }
    $count++;
  }
  
  if ($kondisi){
    echo "<td class='$warna'>$num</td>";
  }else{
    echo "<td>$num</td>";
  }
}

function diagonal($num1,$num2,$warna){
  if ($num1 == $num2){
    echo "<td class='$warna'>".$num1%$num2."</td>";
  }else{
    echo "<td >".$num1%$num2."</td>";
  }
}

function batas($num1,$num2,$ukuran,$warna){
  if($num2 == 1 || $num1 == 1 || $num2 == $ukuran || $num1 == $ukuran){
    echo "<td class='$warna'>".$num1%$num2."</td>";
  }else{
    echo "<td>".$num1%$num2."</td>";
  }
}


 ?>