<?php 
/*
	Febrick Hariyanto
	203040055
	github.com/febrick/pw2021_203040055
	Pertemuan 4 (27 Februari 2021)
	Materi minggu ini mempelajari mengenai penggunaan Function
*/
	
// Date
// Untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();
// echo date("l", time()-60*60*24*100);

// mktime
// membuat sendiri detik
// mktime(0, 0, 0, 0, 0, 0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 06, 19, 2001));

// strtotime
echo date ("l", strtotime("19 jun 2001"));

?>