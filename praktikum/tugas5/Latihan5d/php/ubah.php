<?php
/*
Febrick Hariyanto
203040055
Shift Jum'at 10.00 - 11.00
*/
?>
<?php
// Menghubungkan dengan file php lainnya
require'function.php';

$id = $_GET['id'];
$lk=query("SELECT * FROM elektronik WHERE id = $id")[0];

if(isset($_POST['ubah'])){
    if(tambah($_POST)>0){
        echo "<script>
        alert('Data Berhasil diubah!');
        document.location.href='admin.php';
        </script>";
    } else{
        echo "<script>
        alert('Data Gagal diubah!');
        document.location.href='admin.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5d | 203040055</title>
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">


</head>
<body>
    <div class="container">
    
        <div class="add" style="padding-top: 20px;">
            <a href="admin.php"><button class="button alert outline">Kembali</button></a>
        </div>

        <h3>Form Ubah Data</h3>
        <form action="" method="post">
            <!-- Form nama -->
            <label for="nama">Nama</label>
            <input type="text" data-role="input" name="nama" id="nama" value="<?= $lk['nama']?>" require>

            <!-- Form Informasi Produk -->
            <label for="Informasi Produk">Informasi Produk</label>
            <input type="text" data-role="input" name="informasi produk" id="informasi produk" value="<?= $lk['informasi produk']?>" require>

            <!-- Form Jenis -->
            <label for="jenis">Jenis</label>
            <input type="text" data-role="input" name="jenis" id="jenis" value="<?= $lk['jenis']?>" require>

            <!-- Form Harga -->
            <label for="harga">Harga</label>
            <input type="text" data-role="input" name="harga" id="harga" value="<?= $lk['harga']?>" required>

            <!-- Form Gambar -->
            <label for="gambar">Gambar</label>
            <input type="text" data-role="input" name="gambar" id="gambar" value="<?= $lk['img']?>" require>

            <button type="submit" name="ubah" class="button success outline" >
            Ubah Data
            </button>

        </form>
    </div>
<!-- Metro - 4 -->
<script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

</body>
</html>