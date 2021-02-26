<?php  
/*
	Febrick Hariyanto
	203040055
	github.com/febrick/pw2021_203040055
	Pertemuan 4 (27 Februari 2021)
	Materi minggu ini mempelajari mengenai penggunaan Function
*/

function salam($waktu = "Datang", $nama = "Admin") {
	return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Latihan Function</title>
</head>
<body>
	<h1><?= salam("Pagi", "Febrick"); ?></h1>
</body>
</html>