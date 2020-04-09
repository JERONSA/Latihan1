<?php 
// date untuk menampilkan tanggal dengan format tertentu
	/*echo date("l");
	echo date ("d");
	echo date("M");
	echo date("m");
	echo date("Y");	*/
	/*echo date (
		"l, d-M-Y",
		time() -
		60 * 60 * 24 * 500
	);	
	//dengan format tersebut kita dapat mengetahui 100 hari yang akan datang jatuh pada hari apa??*/
	// echo date("l", mktime());
	//latihan mencari hari tanggal lahir

	//echo date ("l", mktime(0,0,0,6,11,1980));

	//latihan mencari hari ulang tahun pada tahun 2030

	echo date("l", strtotime("11 june 2030"));
 ?>