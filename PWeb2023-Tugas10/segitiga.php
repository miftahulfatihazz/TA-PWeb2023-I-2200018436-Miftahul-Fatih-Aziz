<?php
echo "<pre>";

$tinggi_segitiga = 5;
for($i = 1; $i <= $tinggi_segitiga; $i++) {
  for ($j=1; $i <= $tinggi_segitiga - $i; $j++) { 
    echo " ";
  }
  for($k = 1; $k <= $i; $k++) {
    echo " *";
  }
  echo "<br>";
}
echo "</pre>";
?>