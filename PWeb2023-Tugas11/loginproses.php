<?php
if (isset($_POST['Login'])) {
	$user = $_POST['Username'];
	$pass = $_POST['password'];
	if ($user == "2200018436" && $pass == "29092003") {
		echo ("<h2> Login Sukses </h2>");
	}
	else {
		echo "<h2> Login Gagal, username atau password anda salah </hr>";
	}
}
?>