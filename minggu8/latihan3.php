 <?php 
//array multi dimensi
 $mahasiswa = [
 ["nama" => "Jenny Sabuna", 
 "nim" => "19520003",
 "jurusan" => "Teknologi Informasi", 
 "email" => "jeniroan11061980@gmail.com",
  "tugas" => [100,90,80]
],

[
 "nama" =>"Adolfina Sabuna", 
 "nim" =>"19520001", 
 "jurusan" => "Teknologi Informasi", 
 "email" =>"jeniroan@gmail.com"
	]
];
  ?>
  <!DOCTYPE html>
  <html>
  <head>
  	<title>Data Mahasiswa</title>
  </head>
  <body>
  	<h1>Data Mahasiswa</h1>
  	<?php echo $mahasiswa[0]["tugas"][1]; ?>
  </body>

  </html>




  <!-- <?php foreach ($mahasiswa as $mhs): ?> --> 
  	<!-- <ul> -->
  		<!-- <li>Nama : <?= $mhs["nama"] ?></li> -->
  		<!-- <li>NIM :<?= $mhs["nim"] ?></li> -->
  		<!-- <li>Jurusan :<?= $mhs["jurusan"] ?></li> -->
  		<!-- <li>Email : <?= $mhs["email"] ?></li> -->
  	<!-- </ul>   -->
  <!-- <?php endforeach; ?> --> 