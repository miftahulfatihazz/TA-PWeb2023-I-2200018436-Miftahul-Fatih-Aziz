<?php
function cetak_ganjil($awal,$akhir){
	for($i = $awal; $i < $akhir; $i++){
		if($i%2==1){
			echo "$i, ";
		}
	}
}

$a=10;
$b=100;
echo "<b>Bilangan ganjil dari $a sampai $b, adalah:</b><br>";
cetak_ganjil($a,$b);
?>