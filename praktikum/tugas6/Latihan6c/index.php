<?php
/*
Febrick Hariyanto
203040055
Shift Jum'at 10.00 - 11.00
*/
?>
<?php
require 'php/function.php';
$elektronik = query("SELECT * FROM elektronik");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <title>Latihan6c_203040055</title>
</head>

<body>
    <div class="container">
        <a href="php/login.php">
            <button class="button yellow outline">Masuk ke halaman admin</button>
        </a>
        <div class="grid">
            <div class="row">
                <?php 
                foreach ($elektronik as $lk) :
                ?>
                <div class="cell-md-3">
                    <div class="card">
                        <div class="card-header">
                            <img style="width: 100%;" src="assets/<?= $lk['img'] ?>">
                        </div>
                        <div class="card-content p-2">
                            <a class="text-center"
                                href="php/detail.php?id=<?= $lk["id"] ?>"><?= $lk["nama"] ?> </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>