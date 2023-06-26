<?php

$gaji = 100000;
$pajak = 0.1;
$thp = $gaji - ($gaji*$pajak);
if ($gaji >= 50000) {
	echo "Gaji sebelum pajak = Rp. $gaji <br>";
}else {
	echo "Gaji yang dibawa pulang = Rp. $thp";

}

?>