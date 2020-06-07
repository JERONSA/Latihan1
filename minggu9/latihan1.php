<?php 
//cek apakah tidak ada data di $_GET
if (!isset($_GET["merk"]) ) {
	//redirect
	header("Location: latihan.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Sepatu</title>
</head>
<body>
<ul>
	<li><img src="img/<?= $_GET["gambar"]; ?>"></li>
	<li><?= $_GET["merk"];?></li>
	<li><?= $_GET["harga"];?></li>
	<li><?= $_GET["pengiriman"];?></li>
	<li><?= $_GET["variation"];?></li>
	<li><?= $_GET["pembayaran"];?></li>
</ul>
<a href="latihan.php">PREVIOUS</a>
<a href="login.php">LOGOUT</a>
</body>
</body>
</html>