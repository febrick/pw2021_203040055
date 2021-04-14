<?php
/*
Febrick Hariyanto
203040055
Shift Jum'at 10.00 - 11.00
*/
?>
<?php
require 'function.php';
$elektronik = query("SELECT * FROM elektronik");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        img{
            max-width: 200px;
        }
    </style>

    <title>Latihan5a_203040055</title>
</head>

<body>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Gambar</th>
                <th scope="col">Nama</th>
                <th scope="col">Informasi Produk</th>
                <th scope="col">Jenis</th>
                <th scope="col">Harga</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1;
            foreach ($elektronik as $lk):
                ?>
            <tr>
                <th scope="row"><?=$i?></th>
                <td><img width="300px" src="../assets/<?= $lk["img"] ?>" alt="foto"></td>
                <td><?= $lk["nama"]?> </td>
                <td><?= $lk["informasi produk"]?> </td>
                <td><?= $lk["jenis"]?> </td>
                <td><?= $lk["harga"]?> </td>
                <td>
                    <a href=""><button class="button info outline">Ubah</button></a>
                        
                    <a href=""><button class="button warning outline">Hapus</button>
                </td>
            </tr>
            <?php
            $i++;
            endforeach;
        ?>
        </tbody>
    </table>

    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </body>
</html>