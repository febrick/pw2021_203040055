<!-- Febrick Hariyanto 203040055 Pertemuan 1 (03 Maret 2021) -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Latihan1c</title>
	<style type="text/css">
		h3 {
			background-color: salmon;
			display: inline-block;
			width: 50px;
			height: 50px;
			line-height: 50px;
			text-align: center;
			border-radius: 100%;
			border: 2px solid black;
			margin: 0px 5px 10px 0px;
		}
	</style>
</head>
<body>
	<?php for ($i=1; $i<=3; $i++) : ?>
		<?php for ($y=1; $y<=$i; $y++) : ?>
			<h3><?= $i ?></h3>
		<?php endfor; ?>
		<br>
	<?php endfor ?>
</body>
</html>