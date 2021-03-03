<!-- Febrick Hariyanto 203040055 Pertemuan 1 (03 Maret 2021) -->

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Latihan1b</title>
</head>
<body>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th></th>
			<?php for ($i = 1; $i <= 5; $i++) : ?>
				<th>Kolom <?= $i; ?></th>
			<?php endfor; ?>
		</tr>
			<!-- Tambahkan baris kode php untuk menampilkan bagian body table -->
		<?php for ($i =1; $i<= 5; $i++) : ?>
		<tr>
			<th>Baris <?= $i ?></th>
			<?php for ($x=1; $x<=5; $x++) : ?>
				<td>Baris <?= $i ?>, Kolom <?= $x; ?></td>
			<?php endfor ?>	
		</tr>
		<?php endfor; ?>
	</table>
</body>
</html>