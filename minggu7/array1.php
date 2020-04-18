<?php 
//perulangan pada array
//for atau foreach
$angka = [1, 3, 5, 7, 9,];

?>
<!DOCTYPE html>
<html>
<head>
	<!-- <meta charset="utf-8">
	<meta name="viewport">
	<content="width=device-width, initial-scale=1.0"> -->
	<title>Latihan Array</title>
	<style>
		.kotak {
			width : 50px;
			height : 50px;
			background-color: salmon;
			text-align: center;
			line-height: 50px;
			margin : 3px;
			float : left;
			}
	</style>
</head>
<body>
	 <?php for ($i = 0; $i < 5; $i++) { ?>
	 	<div class="kotak">
	 		<?php echo $angka[$i];?>
	 	</div>
		<?php } ?>
</body>
</html>


