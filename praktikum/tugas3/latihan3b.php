<?php 
/*
    Febrick Hariyanto
    203040055
    github.com/febrick/pw2021_203040055
    jumat 10-11
*/

$pemainBola = [
    "Mohammad Salah",
    "Cristiano Ronaldo",
    "Lionel Messi",
    "Zlatan Ibrahimovic",
    "Neymar Jr"
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
</head>
<body>
    <h3>Daftar pemain bola terkenal</h3>
    <ol>
        <?php foreach($pemainBola as $pemain) : ?>
            <li><?= $pemain ?></li>
        <?php endforeach; ?>
    </ol>

    <?php
  
    array_push($pemainBola,"Luca Modric","Sadio Mane");
    
    sort($pemainBola);
    ?>

    <h3>Daftar pemain bola terkenal baru</h3>
    <ol>
        <?php foreach($pemainBola as $pemainBaru) : ?>
            <li><?= $pemainBaru ?></li>
        <?php endforeach; ?>
    </ol>
</body>
</html>