<!DOCTYPE html>
<html>
<head>
	<title>Metode Post</title>
</head>
<body>
	<h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
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