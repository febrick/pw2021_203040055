<?php
/*
Febrick Hariyanto
203040055
Pertemuan 12
Mempelajari Login
*/
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
  header('Location: login.php');
  exit;
}

require 'function.php';
// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// Mengambil Id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
            alert('Data Berhasil dihapus');
            document.location.href = 'index.php'
        </script>";
} else {
  echo "Data Gagal dihapus";
}
?>