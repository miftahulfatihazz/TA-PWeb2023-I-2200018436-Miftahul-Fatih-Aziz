<?php
if (isset($_POST['proses'])) {
	$saran = nl2br($_POST['Saran']);
	echo "Kritik / Saran Anda :  <br>";
	echo "<font color=blue><b>$saran</b></font";
}
?>