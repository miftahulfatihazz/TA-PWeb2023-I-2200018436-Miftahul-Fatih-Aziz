<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<center>
		<h2>
			Portal UAD
		</h2>
	</center>
	<div class="login">
		<form action="#" method="post" onsubmit="validasi()">
			<div>
				<label>
					Nama Lengkap :
				</label>
				<input type="text" name="nama"  id="nama">
			</div>
			<div>
				<label>
					Email :
				</label>
				<input type="email" name="email" id="email">
			</div>
			<div>
				<label>
					Nim :
				</label>
				<input type="text" name="nim" id="nim">
			</div>
			<div>
				<label>
					Alamat :
				</label>
				<textarea cols="40" rows="5" name="alamat" id="alamat">
				</textarea>
			</div>
			<div>
				<input type="submit" value="Daftar" class="tombol">
			</div>
		</form>
	</div>
</body>
<script type="text/javascript">
	function validasi() {
		var nama = document.getElementById("nama").value;
		var nim = document.getElementById("nim").value;
		var email = document.getElementById("email").value;
		var alamat = document.getElementById("alamat").value;
		if (nama != "" && email!= && nim!= && alamat !="") {
			return true;
		}else{
			alert('Anda harus mengisi data dengan lengkap !');
		}
	}
</script>
</html>