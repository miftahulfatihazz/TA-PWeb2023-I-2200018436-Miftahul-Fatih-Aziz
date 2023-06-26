<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form action="" method="post" name="input">
		Nama Anda : <input type="text" name="nama"><br><br>
		Nim Anda : <input type="text" name="nim"><br><br>
		<input type="submit" name="Input" value="Tampilkan"/>
	</form>
</body>
</html>

<?php
if (isset($_POST['Input'])) {
	$nama=$_POST['nama'];
	echo "<br> Nama Anda : <b>$nama</b>";
}
if (isset($_POST['Input'])) {
	$nim=$_POST['nim'];
	echo "<br> Nim Anda : <b>$nim</b>";
}
?>