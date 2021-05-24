<?php
/*
Febrick Hariyanto
203040055
Shift Jum'at 10.00 - 11.00
*/
?>
<?php
session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

require 'function.php';
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];;
    $elektronik = query(
        "SELECT * FROM elektronik WHERE
        nama LIKE '%$keyword%' OR
        informasi LIKE '%$keyword%' OR
        jenis LIKE '%$keyword%' OR
        harga LIKE '%$keyword%' 
        "
    );
} else {
    $elektronik = query("SELECT * FROM elektronik");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <style>
        img {
            max-width: 200px;
        }
    </style>

    <title>Latihan6c_203040055</title>
</head>

<body>
    <div class="container">
        <div class="logout">
            <a href="logout.php"><button class="button alert outline">Logout</button></a>
        </div>
        <div class="add" style="padding-top: 20px;">
            <a href="tambah.php"><button class="button primary outline">Tambah Data</button></a>
        </div>
        <form action="" method="get">
            <input type="text" name="keyword" data-role="input" autofocus width="500px">
            <button type="submit" name="cari" class="button secondary outline">Cari</button>
        </form>
    </div>
    <table class="table row-border">
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
            <?php if (empty($elektronik)) : ?>
                <tr>
                    <th colspan="7">Data tidak di temukan</th>
                </tr>
            <?php else : ?>
                <?php $i = 1;
                foreach ($elektronik as $lk) :
                ?>
                    <tr>
                        <th scope="row"><?= $i ?></th>
                        <td><img width="300px" src="../assets/<?= $lk["img"] ?>" alt="foto"></td>
                        <td><?= $lk["nama"] ?> </td>
                        <td><?= $lk["informasi produk"] ?> </td>
                        <td><?= $lk["jenis"] ?> </td>
                        <td><?= $lk["harga"] ?> </td>
                        <td>
                            <a href="ubah.php?id=<?= $lk["id"] ?>"><button class="button info outline">Ubah</button></a>

                            <a href="hapus.php?id=<? $lk["id"] ?> <onclick=" return confirm(Hapus Data??)><button class="button warning outline">Hapus</button>
                        </td>
                    </tr>
                <?php
                    $i++;
                endforeach;
                ?>
            <?php endif; ?>
        </tbody>
    </table>

    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>

</html>