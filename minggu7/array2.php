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
 <ul>
 	<li><?php echo $mahasiswa[0][0]; ?></li>	
 	<li><?php echo $mahasiswa[0][1]; ?></li>	
 	<li><?php echo $mahasiswa[0][2]; ?></li>	
 	<li><?php echo $mahasiswa[0][3]; ?></li>
 </ul>
 <ul>
 	<li><?php echo $mahasiswa[1][0]; ?></li>	
 	<li><?php echo $mahasiswa[1][1]; ?></li>	
 	<li><?php echo $mahasiswa[1][2]; ?></li>	
 	<li><?php echo $mahasiswa[1][3]; ?></li>
 </ul>
 </body>
 </html>