<?php
/*
Febrick Hariyanto
203040055
Shift Jum'at 10.00 - 11.00
*/
?>
<?php
// Menghubungkan dengan file php lainya
require'function.php';
$id = $_GET['id'];

    if(hapus($id)>0){
        echo "<script>
        alert('Data Berhasil dihapus!');
        document.location.href='admin.php';
        </script>";
    } else{
        echo "<script>
        alert('Data Gagal dihapus!');
        document.location.href='admin.php';
        </script>";
    }
?>