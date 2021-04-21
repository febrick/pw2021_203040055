<?php
/*
Febrick Hariyanto
203040055
Shift Jum'at 10.00 - 11.00
*/
?>
<?php 
session_start();
session_destroy();

setcookie('username','',time()-3600);
setcookie('hash','',time()-3600);
header("Location: ../index.php")
?>