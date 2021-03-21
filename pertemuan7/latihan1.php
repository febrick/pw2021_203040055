<?php 
/*
    Febrick Hariyanto
    203040055
    github.com/febrick/pw2021_203040055
    Pertemuan 7 (21 Maret 2021)
    Materi minggu ini mempelajari mengenai Request Method yaitu GET & POST pada PHP
*/
// Variabel Scope / lingkup variabel
// $x = 10;

// function tampilx() {
// 	global $x;
// 	echo $x;
// }

// tampilx();

// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];

// $_GET
// $_GET["nama"] = "Febrick Hariyanto";
// $_GET["nrp"] = "203040055";
// var_dump($_GET);
$mahasiswa = [
    [
        "nama" => "Febrick Hariyanto",
        "nrp" => "203040055",
        "email" => "febrick.hariyanto@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1b.jpg"
    ],
    [
        "nama" => "Fajar Nur Sidiq",
        "nrp" => "203040074",
        "email" => "fajar.nursidiq@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1c.png"
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul></ul>
<?php foreach ( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>		
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>