<?php
function tambah_string($str){
	$str=$str. ", Jalan Imogiri Barat";
	return $str;
}

$string="MoreVapor";
echo "\$string = $string<br>";
echo tambah_string($string). "<br>";
echo "\$string = $string<br>";
?>