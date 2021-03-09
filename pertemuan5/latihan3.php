<?php 
/*
	Febrick Hariyanto
	203040055
	github.com/febrick/pw2021_203040055
	Pertemuan 5 (09 Maret 2021)
	Materi minggu ini mempelajari mengenai Array pada PHP
*/

$mahasiswa = [
	["Febrick Hariyanto", "203040055", "Teknik Informatika", "febrick.hariyanto@unpas.ac.id"],
	["Febrick Hariyanto", "203040055", "Teknik Informatika", "febrick.hariyanto@yahoo.com"],
	["Febrick Hariyanto", "203040055", "Teknik Informatika", "febrick.hariyanto@gmail.com"]
];

?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>

<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
	<li>Nama : <?= $mhs[0]; ?></li>
	<li>NRP : <?= $mhs[1]; ?></li>
	<li>Jurusan : <?= $mhs[2]; ?></li>
	<li>Email : <?= $mhs[3]; ?></li>
</ul>
<?php endforeach; ?>

</body>
</html>