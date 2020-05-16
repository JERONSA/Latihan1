 <?php 
//array multi dimensi
 $mahasiswa = [
 ["nama" => "Jenny Sabuna", 
 "nim" => "19520003",
 "jurusan" => "Teknologi Informasi", 
 "email" => "jeniroan11061980@gmail.com",
 "gambar" => "jenny.jpg"
  // "tugas" => [100,90,80]
],

[
 "nama" =>"Adolfina Sabuna", 
 "nim" =>"19520001", 
 "jurusan" => "Teknologi Informasi", 
 "email" =>"jeniroan@gmail.com",
 "gambar" => "siren.jpg"
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

<?php foreach ($mahasiswa as $mhs): ?>
  	<ul>
  		<li> 
  		<img src="img/<?= $mhs["gambar"]; ?>">
  			
  		</li>
  		<li>Nama : <?= $mhs["nama"] ?></li> 
  		<li>NIM :<?= $mhs["nim"] ?></li>
  		<li>Jurusan :<?= $mhs["jurusan"] ?></li>
  		<li>Email : <?= $mhs["email"] ?></li> 
  	</ul> 
  <?php endforeach; ?> 
  	  </body>
  </html>


  <!-- <?php echo $mahasiswa[0]["tugas"][1]; ?> -->




 