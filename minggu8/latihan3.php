 <?php 
//array multi dimensi
 $mahasiswa = [
 ["Jenny Sabuna", "19520003", "Teknologi Informasi", "jeniroan11061980@gmail.com"],
 ["Adolfina Sabuna", "19520001", "Teknologi Informasi", "jeniroan@gmail.com"]
];
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Data Mahasiswa</title>
  </head>
  <body>
  	<h1>Data Mahasiswa</h1>
  	<?php foreach ($mahasiswa as $mhs): ?>
  	<ul>
  		<li>Nama : <?= $mhs[0] ?></li>
  		<li>Nim :<?= $mhs[1] ?></li>
  		<li>Jurusan :<?= $mhs[2] ?></li>
  		<li>Email : <?= $mhs[3] ?></li>
  	</ul>  
  <?php endforeach; ?>
  </body>

  </html>