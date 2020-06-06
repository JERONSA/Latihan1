<?php 
//variabel superglobal
$sepatu = [
     ["merk" => "Jimmy Choo", 
     "harga" => "$695",
     "pengiriman" => "Luar Negeri", 
     "variation" => "[36.37.38.39,40]",
     "pembayaran" => "Bisa COD",
     "gambar" => "sepatu1.jpg"
    ],
    ["merk" => "Charlotte Olympia", 
     "harga" => "$525",
     "pengiriman" => "Jakarta", 
     "variation" =>  "[36.37.38.39,40]",
     "pembayaran" => "Kartu Kredit",
     "gambar" => "sepatu2.jpg",
    ],
     ["merk" => "Christian Louboutin", 
     "harga" => "$426",
     "pengiriman" => "Bandung", 
     "variation" =>  "[36.37.38.39,40]",
     "pembayaran" => "Transfer",
     "gambar" => "sepatu3.jpg"
    ],
     ["merk" => "Manolo Blahnik", 
     "harga" => "$426",
     "pengiriman" => "Surabaya", 
     "variation" =>  "[36.37.38.39,40]",
     "pembayaran" => "Bisa COD",
     "gambar" => "sepatu4.jpg"
    ],
     ["merk" => "Walter Steiger", 
     "harga" => "$625",
     "pengiriman" => "Luar Negeri", 
     "variation" =>  "[36.37.38.39,40]",
     "pembayaran" => "Kartu Kredit",
     "gambar" => "sepatu5.jpg"
    ],
     ["merk" => "Guiseppe Zanoti", 
     "harga" => "$395",
     "pengiriman" => "Jakarta", 
     "variation" =>  "[36.37.38.39,40]",
     "pembayaran" => "Transfer",
     "gambar" => "sepatu6.jpg"
    ],
     ["merk" => "Stuart Weitzman", 
     "harga" => "$523",
     "pengiriman" => "Luar Negeri", 
     "variation" => "[36.37.38.39,40]",
     "pembayaran" => "Transfer",
     "gambar" => "sepatu7.jpg"
    ],
     ["merk" => "Salvatore Ferragamo", 
     "harga" => "$295",
     "pengiriman" => "Jakarta", 
     "variation" =>  "[36.37.38.39,40]",
     "pembayaran" => "Bisa COD",
     "gambar" => "sepatu8.jpg"
    ],
     ["merk" => "Brian Atwood", 
    "harga" => "$230",
     "pengiriman" => "Surabaya", 
     "variation" =>  "[36.37.38.39,40]",
     "pembayaran" => "Transfer",
     "gambar" => "sepatu9.jpg"
    ],
     ["merk" => "Converse", 
     "harga" => "Rp.1.952.000",
     "pengiriman" => "Bandung", 
     "variation" =>  "[36.37.38.39,40]",
     "pembayaran" => "Transfer",
     "gambar" => "sepatu10.jpg"
    ],
     ["merk" => "Hush Puppies", 
     "harga" => "Rp.175.000",
     "pengiriman" => "Bandung", 
     "variation" =>  "[36.37.38.39,40, 41]",
     "pembayaran" => "Transfer",
     "gambar" => "sepatu11.jpg"
    ],
     ["merk" => "Louis Vuitton", 
    "harga" => "Rp.1.300.000",
     "pengiriman" => "Jogyakarta", 
     "variation" =>  "[36.37.38.39,40]",
     "pembayaran" => "Transfer",
     "gambar" => "sepatu12.jpg"
    ],
    [ "merk" => "PVRA",
     "harga" => "Rp.1.250.000",
     "pengiriman" =>"Malang",
     "variation" => "[36.37.38.39,40]",
     "pembayaran" => "Transfer",
     "gambar" => "sepatu13.jpg"
    ],
     [
      "merk" => "Adidas Yeezy", 
    "harga" => "Rp.952.000",
     "pengiriman" => "Surabaya", 
     "variation" =>  "[36.37.38.39,40]",
     "pembayaran" => "Transfer",
     "gambar" => "sepatu14.jpg"
    ],
    [
     "merk" =>"Reebook", 
    "harga" => "Rp.695.000",
     "pengiriman" => "Jakarta", 
     "variation" =>  "[36.37.38.39,40]",
     "pembayaran" => "Transfer",
     "gambar" => "sepatu15.jpg",
      ],
  ];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan GET</title>
</head>
<body>
	<h1>MODEL SEPATU</h1>
	<?php foreach ($sepatu as $spt) : ?>
		<ul>
			<li><?= $spt ["merk"]; ?></li>
		</ul>
		<?php endforeach; ?>
	</body>
</html>
 