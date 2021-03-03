<!-- Febrick Hariyanto 203040055 Pertemuan 1 (03 Maret 2021) -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tugas1</title>
	<style type="text/css">
		.kotak {
			width: 40px;
			height: 40px;
			display: inline-block;
			border: 3px solid black;
		}
		.biru {
			background-color: lightblue;
		}
		.salmon {
			background-color: salmon;
		}
	</style>
</head>
<body>
	<?php for ($kolom=1; $kolom<=6; $kolom++) :
		for ($baris=1; $baris<=6; $baris++) :

			if ($kolom%2==!0) :
				if ($baris%2==!0) : ?>
					<div class="kotak biru"></div>
				<?php else: ?>
					<div class="kotak salmon"></div>
				<?php endif; ?>

			<?php else:
				if ($baris%2==!0) :?>
					<div class="kotak salmon"></div>
				<?php else: ?>
					<div class="kotak biru"></div>
				<?php endif; ?> 
			<?php endif; ?>

		<?php endfor; ?>
		<br>
	<?php endfor; ?>
</body>
</html>