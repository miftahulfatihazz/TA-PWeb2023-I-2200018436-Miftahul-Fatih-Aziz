<?php
$arrNilai=array("A"=>90, "B"=>85, "C"=>70, "D"=>65);
echo $arrNilai['A']."<br>"; //90
echo $arrNilai['B']."<br><br>"; //85

$arrNilai=array();
$arrNilai['X']=80;
$arrNilai['Y']=90;
$arrNilai['Z']=70;
echo $arrNilai['Y']."<br>"; //90
echo $arrNilai['X']."<br>"; //80
?>