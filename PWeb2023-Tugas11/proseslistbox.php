<?php
if (isset($_POST['pilih'])) {
	$film = $_POST['film'];
	echo "Genre Film yang Anda Suka Adalah : <font color=blue><b>$film</b></font>";
}
?>