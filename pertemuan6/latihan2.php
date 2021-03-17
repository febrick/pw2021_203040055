<?php
/*
    Febrick Hariyanto
    203040055
    github.com/febrick/pw2021_203040055
    Pertemuan 6 (17 Maret 2021)
    Materi minggu ini mempelajari mengenai Array Associative pada PHP
*/

// $mahasiswa =[
//     ["Febrick Hariyanto", "203040055","febrick.hariyanto@gmail.com", "Teknik Informatika"],
//     ["Febrick Hariyanto", "203040055","febrick.hariyanto@gmail.com", "Teknik Informatika"]
// ];

// Array Associstive
// Definisinya sama seperti array numerik, kecuali
// Key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Febrick Hariyanto",
        "nrp" => "203040055",
        "email" => "febrick.hariyanto@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1b.jpg"
    ],
    [
        "nama" => "Febrick Hariyanto",
        "nrp" => "203040055",
        "email" => "febrick.hariyanto@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "1c.png"
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>



    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?=  $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>jurusan : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>


</body>
</html>