<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style>
		.error {
			color: black;
		}
	</style>
</head>
<body>
	<?php
	$namaErr	= $emailErr		= $jeniskelaminErr	= $websiteErr	= "";
	$nama 		= $email		= $jeniskelamin	 	= $komentar 	= $website 		= "";
	if ($_SERVER['REQUEST_METHOD'] == "POST") 
	{
		if (empty($_POST["nama"])) 
		{
			$namaErr = "Masukkan Nama";
		}
		else
		{
			$nama = test_input($_POST["nama"]);
			if(!preg_match("/^[a-zA-Z ]*$/", $nama)){
				$namaErr = "hanya huruf yang diperbolehkan";
			}
		}
		if (empty($_POST["email"])) 
		{
			$emailErr = "Masukkan Email";
		}
		else
		{
			$email = test_input($_POST["email"]);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
			{
				$emailErr = "Email anda salah";
			}
		}

		if (empty($_POST["website"])) 
		{
			$website = "";
		}
		else
		{
			$website = test_input($_POST["website"]);
			if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) 
			{
				$websiteErr = "URL anda salah";
			}	
		}

		if (empty($_POST["komentar"])) 
		{
			$komentar = "";
		}
		else
		{
			$komentar = test_input($_POST["komentar"]);
		}
		if (empty($_POST["jeniskelamin"])) 
		{
			$jeniskelaminErr = "Pilih jeniskelamin";
		}
		else
		{
			$jeniskelamin = test_input($_POST["jeniskelamin"]);
		}
	}

	function test_input($data){
		$data = trim($data);
		$data = stripcslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	?>
	<h2>
		PHP Form
	</h2>
	<p>
		<span class="error">
			*kolom harus diisi.
		</span>
	</p>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		Nama : <input type="text" name="nama" value="<?php echo $nama;?>"><span class="error"> 
			*<?php echo$namaErr;?>
		</span>
		<br><br>
		Email : <input type="text" name="email" value="<?php echo $email;?>"><span class="error"> 
			*<?php echo$emailErr;?>
		</span>
		<br><br>
		Website : <input type="text" name="website" value="<?php echo $website;?>"><span class="error"> 
			*<?php echo$websiteErr;?>
		</span>
		<br><br>
		Komentar :
		<textarea name="Komentar" rows="5" cols="50">
		<?php echo $komentar;?>
		</textarea>
		<br><br>
		Jenis Kelamin : 
		<input type="radio" name="jeniskelamin" <?php 
		if (isset($jeniskelamin) && $jeniskelamin == "perempuan") echo "checked";?> value="perempuan">Perempuan 
		<input type="radio" name="jeniskelamin" <?php
		if (isset($jeniskelamin) && $jeniskelamin == "laki-Laki") echo "checked";?> value="laki-laki">Laki-Laki
		<span class="error">
			*<?php echo $jeniskelaminErr;?>
		</span>
		<br><br>
		<input type="submit" name="submit" value="Submit">
	</form>

	<?php
	echo "<h2> INPUTAN :</h2>";
	echo $nama;
	echo "<br>";
	echo $email;
	echo "<br>";
	echo $website;
	echo "<br>";
	echo $komentar;
	echo "<br>";
	echo $jeniskelamin;
	?>
</body>
</html>