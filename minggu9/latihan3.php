<!DOCTYPE html>
<html>
<head>
	<title>Metode Post</title>
</head>
<body>
	<?php 

 	if (isset($_POST["submit"])): ?>
	<h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
	<?php endif;?>

	<form method="Post">
		Masukkan Nama :
	<input type="text" name="nama">	
	<br>
	<button type="submit" name="submit">
		Kirim!
	</button>
	</form>
</body>
</html>