<?php 
//cek data isset
if (!isset($_POST["submit"])) {
	header("Location: latihan3.php");
	exit;
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hasil Metode Post</title>
</head>
<body>
	<h1>Selamat Datang, <?= $_POST["nama"]; ?></h1>
</body>
</html>