-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 04:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yettycatering`
--

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `nama_kategori` varchar(255) NOT NULL,
  `urutan` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`nama_kategori`, `urutan`) VALUES
('Macam Snack', 99),
('Menu Nasi Box', 2),
('Menu Prasmanan', 3),
('Menu Racikan', 1),
('Menu Tumpeng', 4);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `kategori` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` double DEFAULT NULL,
  `body` text NOT NULL,
  `thumbnail` varchar(255) DEFAULT 'NULL',
  `foto` varchar(255) DEFAULT 'NULL',
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `kategori`, `nama`, `harga`, `body`, `thumbnail`, `foto`, `slug`) VALUES
(1, 'Menu Nasi Box', 'Paket Nasi Ayam', 17000, '<ul>\r\n<li>Nasi</li>\r\n<li>Ayam Goreng / Bakar</li>\r\n<li>Lalap + Sambal</li>\r\n<li>Krupuk</li>\r\n<li>Pisang</li>\r\n</ul>', 'box-nasi-ayam.jpg', 'box-nasi-ayam.jpg', 'menu-nasi-box-paket-nasi-ayam'),
(3, 'Menu Nasi Box', 'Paket Nasi Gunungsari', 20000, '<ul>\r\n<li>Nasi Kuning</li>\r\n<li>Sambal Goreng</li>\r\n<li>Terik Daging</li>\r\n<li>Klengkam</li>\r\n<li>Telur Awur</li>\r\n<li>Sosis Goreng / Udang Goreng</li>\r\n<li>Acar Kuning / Timun Segar</li>\r\n<li>Sledri</li>\r\n<li>Krupuk</li>\r\n<li>Pisang</li>\r\n</ul>', NULL, NULL, 'menu-nasi-box-paket-nasi-gunungsari'),
(4, 'Menu Nasi Box', 'Paket Nasi Gudeg', 18000, '<ul>\r\n<li>Nasi</li>\r\n<li>Gudeg</li>\r\n<li>Sambal Goreng Krecek</li>\r\n<li>Ayam Opor</li>\r\n<li>Telor 1/2</li>\r\n<li>Krupuk</li>\r\n<li>Pisang</li>\r\n</ul>', 'box-nasi-gudeg.jpg', 'box-nasi-gudeg.jpg', 'menu-nasi-box-paket-nasi-gudeg'),
(5, 'Menu Nasi Box', 'Paket Nasi Racikan', 18000, '<ul>\r\n<li>Nasi</li>\r\n<li>Sambal Goreng Ati</li>\r\n<li>Bestik Daging / Glinding</li>\r\n<li>Capcay / Paklay / Orak-arik</li>\r\n<li>Sosis Goreng / Ayam Filet</li>\r\n<li>Acar</li>\r\n<li>Krupuk</li>\r\n<li>Pisang</li>\r\n</ul>', NULL, NULL, 'menu-nasi-box-paket-nasi-racikan'),
(6, 'Menu Nasi Box', 'Paket Nasi Liwet', 18000, '<ul>\r\n<li>Nasi Gurih</li>\r\n<li>Sambal Goreng Jepan</li>\r\n<li>Ayam Opor</li>\r\n<li>Telor 1/2</li>\r\n<li>Kumut</li>\r\n<li>Krupuk</li>\r\n<li>Pisang</li>\r\n</ul>', 'box-nasi-liwet.jpg', 'box-nasi-liwet.jpg', 'menu-nasi-box-paket-nasi-liwet'),
(7, 'Menu Nasi Box', 'Paket Nasi Gudangan', 18000, '<ul>\r\n<li>Nasi</li>\r\n<li>Gudangan</li>\r\n<li>Telor</li>\r\n<li>Acar</li>\r\n<li>Krupuk</li>\r\n<li>Pisang</li>\r\n</ul>', NULL, NULL, 'menu-nasi-box-paket-nasi-gudangan'),
(8, 'Menu Nasi Box', 'Paket Nasi Goreng', 18000, '<ul>\r\n<li>Nasi Goreng</li>\r\n<li>Telor Ceplok / Awur</li>\r\n<li>Ayam Tepung / Udang Goreng</li>\r\n<li>Timun</li>\r\n<li>Krupuk</li>\r\n<li>Pisang</li>\r\n</ul>', NULL, NULL, 'menu-nasi-box-paket-nasi-goreng'),
(9, 'Menu Racikan', 'Paket A', 19000, '<ul>\r\n<li>Teh</li>\r\n<li>Snack 2 Macam</li>\r\n<li>Sop Ayam / Timlo</li>\r\n</ul>\r\n\r\n<b>Nasi :</b>\r\n<ul>\r\n<li>Sambal Goreng Ati</li>\r\n<li>Terik</li>\r\n<li>Nugget</li>\r\n<li>Paklay / Capcay</li>\r\n<li>Acar</li>\r\n<li>Krupuk</li>\r\n<li>Es Cream / Es Buah</li>\r\n</ul>', 'racikan-paket-a.jpg', 'racikan-paket-a.jpg', 'menu-racikan-paket-a'),
(10, 'Menu Racikan', 'Paket B', 20000, '<ul>\r\n<li>Teh</li>\r\n<li>Snack 2 Macam</li>\r\n<li>Sop Galantin / Timlo / Sop Mekar Sari</li>\r\n</ul>\r\n\r\n<b>Nasi :</b>\r\n<ul>\r\n<li>Sambal Goreng Ati</li>\r\n<li>Bestik Cacah / Terik</li>\r\n<li>Nugget</li>\r\n<li>Paklay / Capcay</li>\r\n<li>Acar</li>\r\n<li>Krupuk</li>\r\n<li>Es Cream / Es Buah</li>\r\n</ul>', 'racikan-paket-b.jpg', 'racikan-paket-b.jpg', 'menu-racikan-paket-b'),
(11, 'Menu Racikan', 'Paket C', 21000, '<ul>\r\n<li>Teh</li>\r\n<li>Snack 2 Macam</li>\r\n<li>Sop Mekar Sari / Bakmoy</li>\r\n</ul>\r\n\r\n<b>Nasi :</b>\r\n<ul>\r\n<li>Sambal Goreng Ati</li>\r\n<li>Sambal Goreng Kreni</li>\r\n<li>Bestik Cacah / Terik</li>\r\n<li>Ayam Filet / Nugget</li>\r\n<li>Paklay / Capcay</li>\r\n<li>Acar</li>\r\n<li>Krupuk</li>\r\n<li>Es Cream / Es Buah</li>\r\n</ul>', 'racikan-paket-c.jpg', 'racikan-paket-c.jpg', 'menu-racikan-paket-c'),
(12, 'Menu Racikan', 'Paket D', 23000, '<ul>\r\n<li>Teh</li>\r\n<li>Snack 2 Macam</li>\r\n<li>Sop Matahari / Sop Penyon</li>\r\n</ul>\r\n\r\n<b>Nasi :</b>\r\n<ul>\r\n<li>Sambal Goreng Ati</li>\r\n<li>Bestik Cacah / Terik</li>\r\n<li>Udang Goreng / Nugget</li>\r\n<li>Paklay / Orak-arik Acar</li>\r\n<li>Krupuk</li>\r\n<li>Es Cream / Es Buah</li>\r\n</ul>', 'racikan-paket-d.jpg', 'racikan-paket-d.jpg', 'menu-racikan-paket-d'),
(13, 'Menu Racikan', 'Paket E', 24000, '<ul>\r\n<li>Teh</li>\r\n<li>Snack 2 Macam</li>\r\n<li>Bestik Galantin / Selat Galantin</li>\r\n</ul>\r\n\r\n<b>Nasi :</b>\r\n<ul>\r\n<li>Sambal Goreng Ati</li>\r\n<li>Bestik Cacah / Terik</li>\r\n<li>Udang Goreng / Nugget</li>\r\n<li>Paklay / Orak-arik Acar</li>\r\n<li>Krupuk</li>\r\n<li>Es Cream / Es Buah</li>\r\n</ul>', 'racikan-paket-e.jpg', 'racikan-paket-e-1.jpg,racikan-paket-e-2.jpg', 'menu-racikan-paket-e'),
(14, 'Menu Racikan', 'Paket F', 26000, '<ul>\r\n<li>Teh</li>\r\n<li>Snack 2 Macam</li>\r\n<li>Sop Matahari / Bestik Galantin</li>\r\n<li>Nasi Gunung Sari</li>\r\n<li>Es Cream / Es Buah</li>\r\n</ul>', 'racikan-paket-f.jpg', 'racikan-paket-f.jpg', 'menu-racikan-paket-f'),
(15, 'Menu Prasmanan', 'Paket A', 30000, '<ul>\r\n<li>Teh - Air Putih</li>\r\n<li>Snack 2 Macam</li>\r\n<li>Sop Glinding Ayam</li>\r\n</ul>\r\n\r\n<b>Nasi :</b>\r\n<ul>\r\n<li>Sambal Goreng Ati</li>\r\n<li>Kakap Asam Manis</li>\r\n<li>Paklay</li>\r\n<li>Acar</li>\r\n<li>Krupuk</li>\r\n<li>Es Cream / Agar</li>\r\n</ul>', 'prasmanan.jpg', NULL, 'menu-prasmanan-paket-a'),
(16, 'Menu Prasmanan', 'Paket B', 32000, '<ul>\r\n<li>Teh - Air Putih</li>\r\n<li>Snack 2 Macam</li>\r\n<li>Sop Glinding Ayam / Timlo</li>\r\n</ul>\r\n\r\n<b>Nasi :</b>\r\n<ul>\r\n<li>Sambal Goreng Ati</li>\r\n<li>Daging Cabai Hijau</li>\r\n<li>Paklay / Capcay</li>\r\n<li>Acar</li>\r\n<li>Krupuk</li>\r\n<li>Es Cream / Agar</li>\r\n</ul>', 'prasmanan.jpg', NULL, 'menu-prasmanan-paket-b'),
(17, 'Menu Prasmanan', 'Paket C', 34000, '<ul>\r\n<li>Teh - Air Putih</li>\r\n<li>Snack 2 Macam</li>\r\n<li>Sop Glinding Ayam / Timlo</li>\r\n</ul>\r\n\r\n<b>Nasi :</b>\r\n<ul>\r\n<li>Sambal Goreng Ati / Puyuh</li>\r\n<li>Bestik Daging / Ayam</li>\r\n<li>Ayam Goreng</li>\r\n<li>Paklay / Capcay / Cha Jamur</li>\r\n<li>Bakmi Goreng / Mihun</li>\r\n<li>Kakap Asam Manis</li>\r\n<li>Acar / Selada Huzar</li>\r\n<li>Es Cream / Agar</li>\r\n</ul>', 'prasmanan.jpg', NULL, 'menu-prasmanan-paket-c'),
(18, 'Menu Prasmanan', 'Paket D', 38000, '<ul>\r\n<li>Teh - Air Putih</li>\r\n<li>Snack 2 Macam</li>\r\n<li>Sop Glinding Ayam / Timlo</li>\r\n</ul>\r\n\r\n<b>Nasi :</b>\r\n<ul>\r\n<li>Sambal Goreng Ati / Puyuh</li>\r\n<li>Bestik Ayam Daging / Lidah</li>\r\n<li>Daging / Cabai Hijau</li>\r\n<li>Sate Ayam</li>\r\n<li>Paklay / Capjay</li>\r\n<li>Orak - arik / Cha Jamur</li>\r\n<li>Kakap Asam Manis</li>\r\n<li>Acar / Selada Huzar</li>\r\n<li>Krupuk</li>\r\n<li>Es Cream / Agar</li>\r\n</ul>', 'prasmanan.jpg', NULL, 'menu-prasmanan=paket-d'),
(19, 'Menu Prasmanan', 'Paket Siraman', 30000, '<ul>\r\n<li>Teh - Air Putih</li>\r\n<li>Snack 2 Macam</li>\r\n<li>Sop Glinding Ayam / Timlo</li>\r\n</ul>\r\n\r\n<b>Nasi :</b>\r\n<ul>\r\n<li>Nasi Tumpang</li>\r\n<li>Bakmi Goreng</li>\r\n<li>Capcay / Paklay</li>\r\n<li>Tahu / Tempe Bacem</li>\r\n<li>Peyek Kacang / Peyek Teri</li>\r\n<li>Es Dawet</li>\r\n</ul>', 'prasmanan.jpg', NULL, 'menu-prasmanan-paket-siraman'),
(20, 'Macam Snack', 'Asin', NULL, '<ul>\r\n<li>Kroket</li>\r\n<li>Lumpia</li>\r\n<li>Resoles</li>\r\n<li>Tunjung Sari</li>\r\n<li>Smokbeef</li>\r\n<li>Sosis Oven / Basah / Goreng</li>\r\n</ul>', 'snack-asin.jpg', NULL, 'macam-snack-asin'),
(21, 'Macam Snack', 'Manis', NULL, '<ul>\r\n<li>Garulina</li>\r\n<li>Mandarin Pie</li>\r\n<li>Aneka Cake</li>\r\n<li>Prol Kopyor</li>\r\n<li>Kacang Tart</li>\r\n<li>Soes Cocktail</li>\r\n<li>Aneka Roll</li>\r\n<li>Soes Room</li>\r\n<li>Spekuk</li>\r\n</ul>', 'snack-manis.jpg', '', 'macam-snack-manis'),
(22, 'Menu Tumpeng', 'Tumpeng Gudangan + Ayam', 400000, '', 'tumpeng-gudangan.jpg', 'tumpeng-gudangan.jpg', 'menu-tumpeng-tumpeng-gudangan-+-ayam'),
(23, 'Menu Tumpeng', 'Tumpeng Nasi Kuning', 400000, '', 'tumpeng-nasi-kuning.jpg', 'tumpeng-nasi-kuning-1.jpg,tumpeng-nasi-kuning-2.jpg', 'menu-tumpeng-tumpeng-nasi-kuning');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`nama_kategori`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `slug` (`slug`),
  ADD KEY `kategori` (`kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`kategori`) REFERENCES `kategori` (`nama_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
