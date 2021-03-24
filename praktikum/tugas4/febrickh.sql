-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Mar 2021 pada 15.54
-- Versi server: 10.4.16-MariaDB
-- Versi PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `febrickh`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `elektronik`
--

CREATE TABLE `elektronik` (
  `id` int(11) NOT NULL,
  `img` varchar(150) NOT NULL,
  `nama` varchar(150) NOT NULL,
  `informasi produk` varchar(255) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `elektronik`
--

INSERT INTO `elektronik` (`id`, `img`, `nama`, `informasi produk`, `jenis`, `harga`) VALUES
(3, 'asus1.jpg', 'ASUS VIVOBOOK', 'ASUS VIVOBOOK A416MA N4020 RAM8GB HDD1TB INTEL UHD GRAPHIC WINDOWS.', 'elektronik', 5549000),
(4, 'asus2.jpg', 'ASUS VIVOBOOK A412FA', 'LAPTOP ASUS VIVOBOOK A412FA Intel Pentium Gold 5405U 14\'\'FHD / 1TB HDD + 256 SSD/ WIN 10.', 'elektronik', 7499000),
(5, 'asus3.jpg', 'ASUS VIVOBOOK K413EA', 'ASUS VIVOBOOK K413EA - i3 1115G4 - 8GB - 512GB SSD - FINGERPRINT - 14 FHD IPS - WIN10 - OFFICE.', 'elektronik', 10399900),
(6, 'asus4.jpg', 'ASUS X441BA', 'LAPTOP ASUS X441BA AMD A4-9125 4GB 1TB DVD VGA R3 WIN10.', 'elektronik', 5999000),
(7, 'asus5.jpg', 'ASUS ROG Zephyrus', 'ASUS ROG Zephyrus GA401II-R75TA8W R7-4800HS/GTX1650Ti/8G/512G PCIe/120Hz.', 'elektronik', 19260000);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `elektronik`
--
ALTER TABLE `elektronik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
