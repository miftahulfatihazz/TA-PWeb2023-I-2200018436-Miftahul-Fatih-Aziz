<?php
$arrNilai=array("A"=>90 ,"B"=>85 ,"C"=>70 ,"D"=>65);
echo "Menampilkan isi array asosiatif dengan forech: <br>";
foreach($arrNilai as $nama=>$nilai){
	echo "Nilai $nama=$nilai<br>";
}

reset($arrNilai);
echo "<br> Menampilkan isi array asosiatif dengan WHILE dan LIST: <br>";
while (list($nama,$nilai)=each($arrNilai)) {
	echo "Nilai $nama=$nilai<br>";
}
?>