<!DOCTYPE html>
<html>
<head>
	<title>Latihan Array</title>
	<style>
		.kotak {
			width: 30px;
			height: 30px;
			background-color: greenyellow;
			text-align: center;
			vertical-align: center;
			line-height: 30px;
			margin: 3px;
			float: left;
			transition: 0.5s;
		}

		.kotak:hover {
			transform: rotate(360deg);
			border-radius: 50%; 
		}
	</style>
</head>
<body>
	<?php 
	$angka = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	 ?>
	<div class="kotak"><?= $angka[3]; ?></div>
</body>
</html>