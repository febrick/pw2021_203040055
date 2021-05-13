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
session_destroy();
header('Location: login.php');
exit;
?>