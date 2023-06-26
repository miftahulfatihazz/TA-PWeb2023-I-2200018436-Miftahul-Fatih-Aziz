<?php
if (isset($_POST['pilih'])) {
	echo "Jenis Musik Favoritmu Adalah : <br>";
	if (isset($_POST['musik1'])) {
		echo "+ " .$_POST['musik1'] . "<br>";
	}
	if (isset($_POST['musik2'])) {
		echo "+ " .$_POST['musik2'] . "<br>";
	}
	if (isset($_POST['musik3'])) {
		echo "+ " .$_POST['musik3'] . "<br>";
	}
	if (isset($_POST['musik4'])) {
		echo "+ " .$_POST['musik4'] . "<br>";
	}
	if (isset($_POST['musik5'])) {
		echo "+ " .$_POST['musik5'] . "<br>";
	}
}
?> 