<?php 

//penulisan array
$hari  = array("Senin", "Selasa", "Rabu" );
$bulan  = array("Januari", "Februari", "Maret" );
$gabungan  = array(100, "teks", true );

//memanggil array
//versidebugging atau versi programer
var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";

//versi user
echo "$gabungan[0]";

 ?>