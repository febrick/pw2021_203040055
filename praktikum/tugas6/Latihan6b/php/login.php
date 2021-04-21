<?php
/*
Febrick Hariyanto
203040055
Shift Jum'at 10.00 - 11.00
*/
?>
<?php
session_start();
require'function.php';

// pengecekan apakah user sudah login
if(isset($SESSION['username'])){
	header("Location: admin.php");
	exit;
}

// Login
if(isset($_POST['submit'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek_user = mysql_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");

	// mencocokan USERNAME dan PASSWORD
	if(mysqli_num_rows($cek_user)>0){
        $row = mysqli_fetch_assoc($cek_user);
        if(password_verify($password, $row['password'])){
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256',$row['id'], false);

        }
        if(hash('sha256', $row['id']) == $_SESSION['hash']){
            header("Location: admin.php");
            die;
        }
		header("Location: ../index.php")
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan6b | 203040055</title>
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">


</head>
<body>
    <div class="container">
    	<div class="gird">
    		<form action="" method="post">
    		<?php if(isset($error)): ?>
    		<p style="color: red; font-style: italic;">Username atau Password salah</p>
    	    <?php endif; ?>
        		<label for="username">Username</label>
        		<input type="text" name="username">

        		<label for="password">Password</label>
        		<input type="password" name="password">

        		<div class="remember">
        			<input type="checkbox" name="remember">
        			<label for="remember">Remember me</label>
        		</div>
                
        		<button type="submit" name="submit" class="button primary outline">Login</button>
    		</form>
            <div class="registrasi">
                <p>Belum punya akun ? Registrasi <a href="registrasi.php">Disini</a></p>
            </div>
    	</div>
    </div>

    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>