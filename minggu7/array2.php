<?php 
$mahasiswa = ["Jenny Sabuna", "19520003", "Teknologi Informasi", "jeniroan110061980@gmail.com"];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Daftar MAhasiswa</title>
 </head>
 <body>
 <h1>Daftar Mahasiswa</h1>
 <ul>
 	<?php foreach ($mahasiswa as $mhs): ?>
 		<li>
 			<?php echo $mhs; ?>
 		</li>
	<?php endforeach; ?>
 		
 </ul>
 </body>
 </html>