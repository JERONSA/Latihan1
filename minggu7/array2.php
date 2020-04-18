<?php 
//array multidimensi/array didalam array/array bersarang
$mahasiswa = [
	 ["Jenny Sabuna", "19520003", "Teknologi Informasi", "jeniroan110061980@gmail.com"], 
 	["Anggi", "19510003", "Sistem Informasi", "anggi@gmail.com"]
];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar Mahasiswa</title>
 </head>
 <body>
 <h1>Daftar Mahasiswa</h1>
 <?php foreach ($mahasiswa as $mhs) : ?>
 <ul>
 	<?php foreach ($mhs as $m) : ?>
	<li><?php echo $m; ?></li>
	<?php endforeach; ?>
 	</ul>
 	<?php endforeach; ?>
  </body>
 </html>