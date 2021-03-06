-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 28 Mar 2017 pada 12.13
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_sepakat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bahan_baku`
--

CREATE TABLE IF NOT EXISTS `bahan_baku` (
`id_bahan_baku` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `bukti` varchar(50) NOT NULL,
  `total_produksi` varchar(50) NOT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  `barang_bahan` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `id_user` int(11) DEFAULT NULL,
  `gambar_latar` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `nama`, `alamat`, `no_telp`, `email`, `bukti`, `total_produksi`, `kategori`, `barang_bahan`, `provinsi`, `kota`, `id_user`, `gambar_latar`) VALUES
(1, '', '', '0', 'stich@gmail.com', '', '', NULL, '', '', NULL, NULL, ''),
(2, '', '', '0', 'minyak@gmail.com', '', '', NULL, '', '', NULL, NULL, ''),
(3, '', '', '0', 'tessa@gmail.com', '', '', NULL, '', '', NULL, 5, ''),
(4, '', '', '0', 'pensil@gmail.com', '', '', NULL, '', '', NULL, 6, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang_bahan`
--

CREATE TABLE IF NOT EXISTS `barang_bahan` (
`id_bb` int(11) NOT NULL,
  `nama_bb` varchar(50) NOT NULL,
  `id_kategori` int(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=539 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang_bahan`
--

INSERT INTO `barang_bahan` (`id_bb`, `nama_bb`, `id_kategori`) VALUES
(103, 'Tebu', 1),
(104, 'Teh', 1),
(105, 'Kelapa Sawit', 1),
(106, 'Tembakau', 1),
(107, 'Cengkeh', 1),
(108, 'Kopi', 1),
(109, 'Karet', 1),
(110, 'Kapas', 1),
(111, 'Kakao', 1),
(112, 'Kelapa', 1),
(113, 'Lada', 1),
(114, 'Kayu Manis', 1),
(115, 'Panili', 1),
(116, 'Kerbau', 2),
(117, 'Kuda', 2),
(118, 'Sapi Potong', 2),
(119, 'Sapi Perah', 2),
(120, 'Domba', 2),
(121, 'Kambing', 2),
(122, 'Kelinci', 2),
(123, 'Ayam Buras', 2),
(124, 'Ayam Ras Pedaging', 2),
(125, 'Ayam Ras Petelur', 2),
(126, 'Merpati', 2),
(127, 'Burung Puyuh', 2),
(128, 'Itik', 2),
(129, 'Itik Manila', 2),
(131, 'Rumput Laut', 3),
(132, 'Nila', 3),
(133, 'Bandeng', 3),
(134, 'Udang Galah', 3),
(135, 'Udang Barong', 3),
(136, 'Tuna', 3),
(137, 'Kepiting Tulang Lunak', 3),
(138, 'Kerapu', 3),
(139, 'Kakap', 3),
(140, 'Kuwe', 3),
(141, 'Beronang', 3),
(142, 'Teripang', 3),
(143, 'Kerang', 3),
(144, 'Cumi-cumi', 3),
(145, 'Batu Bara', 4),
(146, 'Minyak', 5),
(147, 'Gas Bumi', 5),
(148, 'Timah', 6),
(149, 'Biji Besi', 6),
(150, 'Tembaga', 6),
(151, 'Nikel', 6),
(152, 'Emas', 6),
(153, 'Mineral', 6),
(154, 'Intan', 7),
(155, 'Granit', 7),
(156, 'Safir', 7),
(157, 'Semen', 8),
(158, 'Keramik', 9),
(159, 'Porselen', 9),
(160, 'Kaca', 9),
(161, 'Timah', 10),
(162, 'Biji Besi', 10),
(163, 'Tembaga', 10),
(164, 'Nikel', 10),
(165, 'Emas', 10),
(166, 'Asam', 11),
(167, 'Basa', 11),
(168, 'Garam', 11),
(169, 'Zat Organik', 11),
(170, 'Zat Anorganik', 11),
(171, 'Pelarut', 11),
(172, 'Bahan Petrokimia', 11),
(173, 'Plastik', 11),
(174, 'Pupuk', 11),
(175, 'Pestisida', 11),
(176, 'Semen', 11),
(177, 'Gula', 11),
(178, 'Alkohol', 11),
(179, 'Pulp', 11),
(180, 'Kertas', 11),
(181, 'Plastik', 12),
(182, 'Gaplek Chips', 13),
(183, 'Bungkil Kopra', 13),
(184, 'Bungkmil Sawit', 13),
(185, 'Wheat Polard', 13),
(186, 'FML', 13),
(187, 'Molases', 13),
(188, 'Rumput Odot', 13),
(189, 'Tebon Jagung', 13),
(190, 'Kayu', 14),
(191, 'Pulp', 15),
(192, 'Kertas', 15),
(193, 'Kepala Silinder', 16),
(194, 'Blok Silinder', 16),
(195, 'Torak/Seher(Piston) dan kelengkapannya', 16),
(196, 'Poros engkol (crank shaft)', 16),
(197, 'Poros bubungan (cam shaft)', 16),
(198, 'Mekanisme katup (valve mecanisme)', 16),
(199, 'Gigi timing (Timing gear)', 16),
(200, 'Roda penerus (Fly wheel)', 16),
(201, 'Cylinder head cover', 16),
(202, 'Gasket', 16),
(203, 'Camshaft sprocket', 16),
(204, 'Camshaft', 16),
(205, 'Seal', 16),
(206, 'Cylinder head', 16),
(207, 'Spark plug', 16),
(208, 'Collets', 16),
(209, 'Retainer', 16),
(210, 'Valve spring', 16),
(211, 'Spring seat', 16),
(212, 'Valve seal', 16),
(213, 'Exhaust valve', 16),
(214, 'Intake valve', 16),
(215, 'Coolant outlet', 16),
(216, 'Camshaft bearing', 16),
(217, 'Rocker assembly', 16),
(218, 'Intake valve', 16),
(219, 'Valve spring retainer lock', 16),
(220, 'Oil seal', 16),
(221, 'Spark plug', 16),
(222, 'Adjusting shim', 16),
(223, 'Valve lifter', 16),
(224, 'Valve spring', 16),
(225, 'Valve guide', 16),
(226, 'Intake manifold', 16),
(227, 'Exhaust manifold', 16),
(228, 'Combustion chamber', 16),
(229, 'Gasket', 16),
(358, 'Water jacket', 16),
(359, 'Exhaust valve', 16),
(360, 'Rocker arm', 16),
(361, 'Valve', 16),
(362, 'Push rod', 16),
(363, 'Valve lifter', 16),
(364, 'Camshaft', 16),
(365, 'Ring piston', 16),
(366, 'Piston & piston pin', 16),
(367, 'Engine block', 16),
(368, 'Camshaft', 16),
(369, 'Camshaft gear / camshaft sprocket', 16),
(370, 'Timing chain', 16),
(371, 'Camshaft bushing', 16),
(372, 'Crankshaft', 16),
(373, 'Crankshaft gear', 16),
(374, 'Main bearing', 16),
(375, 'Connecting rod bearing', 16),
(376, '1st Main bearing cap', 16),
(377, 'Connecting rod cap', 16),
(378, 'Nut', 16),
(379, 'Main bearing cap', 16),
(380, '5th main bearing cap', 16),
(381, 'Thrust washer / thrust bearing', 16),
(382, 'Pilot bearing', 16),
(383, 'Cooling driened plug', 16),
(384, 'Cooling driened plug', 16),
(385, 'Main bearing', 16),
(386, 'Bolt', 16),
(387, 'Connecting rod', 16),
(388, 'Lock pin', 16),
(488, 'Benang Jahit', 17),
(489, 'Benang mouline', 17),
(490, 'Benang melange', 17),
(491, 'Benang yaspis', 17),
(492, 'Benang karet', 17),
(493, 'Benang suji', 17),
(494, 'Benang bordir', 17),
(495, 'Benang jagung', 17),
(496, 'Benang tetoron', 17),
(497, 'Benang wol', 17),
(498, 'Weft Yarn', 17),
(499, 'Knitting Yarn', 17),
(500, 'Fancy Yarn', 17),
(501, 'Kemeja', 17),
(502, 'Pakaian Tidur', 17),
(503, 'T-shirt', 17),
(504, 'Jaket', 17),
(505, 'Rok', 17),
(506, 'Jeans', 17),
(507, 'Sweater', 17),
(508, 'Seragam', 17),
(509, 'Gaun Pengantin', 17),
(510, 'Sepatu Wanita', 18),
(511, 'Sepatu Kulit', 18),
(512, 'Sepatu Olahraga', 18),
(513, 'Sepatu Casual', 18),
(514, 'Sepatu Bot', 18),
(515, 'Mokasin', 18),
(516, 'Loafer', 18),
(517, 'Sepatu Balet', 18),
(519, 'Sandal Jepit', 18),
(520, 'Bakiak', 18),
(521, 'Kabel Listrik', 19),
(522, 'Kabel Utp', 19),
(523, 'Kabel FDP', 19),
(524, 'Kabel Fiber Optik', 19),
(525, 'Kabel Coaxial', 19),
(526, 'Resistor', 20),
(527, 'Variable Resistor', 20),
(528, 'Ligtht Depending Resistor', 20),
(529, 'Thermistor', 20),
(530, 'Kapasitor', 20),
(531, 'Kapasitor Elektrolit', 20),
(532, 'Kapasitor Variabel', 20),
(533, 'Induktor', 20),
(534, 'Induktor Variabel', 20),
(536, 'Transistor', 20),
(537, 'Integrated Circuit', 20),
(538, 'Saklar', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
`id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Perkebunan'),
(2, 'Peternakan'),
(3, 'Perikanan'),
(4, 'Pertambangan Batu Bara'),
(5, 'Pertambangan Minyak dan Gas Bumi'),
(6, 'Pertambangan Logam dan Mineral'),
(7, 'Pertambangan Batu - batuan'),
(8, 'Semen'),
(9, 'Keramik,Porselen & Kaca'),
(10, 'Logam dan sejenisnya'),
(11, 'Kimia'),
(12, 'Plastik dan Kemasan'),
(13, 'Pakan dan Ternak'),
(14, 'Kayu'),
(15, 'Pulp dan Kertas'),
(16, 'Otomitif & Komponennya'),
(17, 'Tekstil & Garmen'),
(18, 'Alas Kaki'),
(19, 'Kabel'),
(20, 'Elektronika'),
(21, 'Makanan dan Minuman'),
(22, 'Rokok'),
(23, 'Farmasi'),
(24, 'Kosmetik & Barang Keperluan Rumah Tangga'),
(25, 'Peralatan Rumah Tangga'),
(26, 'Properti & Real Estate'),
(27, 'Konstruksi Bangunan'),
(28, 'Energi'),
(29, 'Jalan Tol,Pelabuhan,Bandara'),
(30, 'Telekomunikasi'),
(31, 'Transportasi'),
(32, 'Konstruksi Non Bangunan'),
(33, 'Bank'),
(34, 'Lembaga Pembiayaan'),
(35, 'Perusahaan Efek'),
(36, 'Asuransi'),
(37, 'Perdagangan Besar barang Produksi'),
(38, 'Perdagangan Eceran'),
(39, 'Restoran'),
(40, 'Hotel dan Pariwisata'),
(41, 'Advertising,Printing & Media'),
(42, 'Jasa komputer dan Perangkatnya'),
(43, 'Perusahaan Investasi'),
(44, 'Pertanian'),
(45, 'Penerbangan'),
(46, 'hi'),
(47, 'Halo'),
(48, 'Ini baru'),
(49, 'Hihi'),
(50, 'Hatiper\\'),
(51, 'Hati perhatian'),
(52, 'Coba'),
(54, 'Jiu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kerjasama`
--

CREATE TABLE IF NOT EXISTS `kerjasama` (
`id_kerjasama` int(11) NOT NULL,
  `id_manufaktur` int(20) NOT NULL,
  `id_bahan_baku` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kota`
--

CREATE TABLE IF NOT EXISTS `kota` (
`id_kota` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=113 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kota`
--

INSERT INTO `kota` (`id_kota`, `provinsi`, `kota`) VALUES
(1, 'Aceh', 'Banda Aceh'),
(2, 'Aceh', 'Langsa'),
(3, 'Aceh', 'Lhokseumawe'),
(4, 'Aceh', 'Meulaboh'),
(5, 'Aceh', 'Sabang'),
(6, 'Aceh', 'Subulussalam'),
(7, 'Bali', 'Denpasar'),
(8, 'Bangka Belitung', 'Pangkalpinang'),
(9, 'Banten', 'Cilegon'),
(10, 'Banten', 'Serang'),
(11, 'Banten', 'Tangerang Selatan'),
(12, 'Banten', 'Tangerang'),
(13, 'Bengkulu', 'Bengkulu'),
(14, 'Gorontalo', 'Gorontalo'),
(15, 'Jakarta', 'Jakarta Barat'),
(16, 'Jakarta', 'Jakarta Pusat'),
(17, 'Jakarta', 'Jakarta Selatan'),
(18, 'Jakarta', 'Jakarta Timur'),
(19, 'Jakarta', 'Jakarta Utara'),
(20, 'Jambi', 'Sungai Penuh'),
(21, 'Jambi', 'Jambi'),
(22, 'Gorontalo', 'Bandung'),
(23, 'Jawa Barat', 'Bekasi'),
(24, 'Jawa Barat', 'Bogor'),
(25, 'Jawa Barat', 'Cimahi'),
(26, 'Jawa Barat', 'Cirebon'),
(27, 'Jawa Barat', 'Depok'),
(28, '', 'Sukabumi'),
(29, '', 'Tasikmalaya'),
(30, '', 'Banjar'),
(31, '', 'Magelang'),
(32, '', 'Pekalongan'),
(33, '', 'Purwokerto'),
(34, '', 'Salatiga'),
(35, '', 'Semarang'),
(36, '', 'Surakarta'),
(37, '', 'Tegal'),
(38, '', 'Batu'),
(39, '', 'Blitar'),
(40, '', 'Kediri'),
(41, '', 'Madiun'),
(42, '', 'Malang'),
(43, '', 'Mojokerto'),
(44, '', 'Pasuruan'),
(45, '', 'Probolinggo'),
(46, '', 'Surabaya'),
(47, '', 'Pontianak'),
(48, '', 'Singkawang'),
(49, '', 'Banjarbaru'),
(50, '', 'Banjarmasin'),
(51, '', 'Palangkaraya'),
(52, '', 'Balikpapan'),
(53, '', 'Bontang'),
(54, '', 'Samarinda'),
(55, '', 'Tarakan'),
(56, '', 'Batam'),
(57, '', 'Tanjungpinang'),
(58, '', 'Bandar Lampung'),
(59, '', 'Kotabumi'),
(60, '', 'Liwa'),
(61, '', 'Metro'),
(62, '', 'Ternate'),
(63, '', 'Tidore Kepulauan'),
(64, '', 'Ambon'),
(66, '', 'Bima'),
(67, '', 'Mataram'),
(68, '', 'Kupang'),
(69, '', 'Sorong'),
(70, '', 'Jayapura'),
(71, '', 'Dumai'),
(72, '', 'Pekanbaru'),
(73, '', 'Makassar'),
(74, '', 'Palopo'),
(75, '', 'Parepare'),
(76, '', 'Palu'),
(77, '', 'Bau-Bau'),
(78, '', 'Kendari'),
(79, '', 'Bitung'),
(80, '', 'Kotamobagu'),
(81, '', 'Manado	'),
(82, '', 'Tomohon	'),
(83, '', 'Bukittinggi'),
(84, '', 'Padang'),
(85, '', 'Padangpanjang'),
(86, '', 'Pariaman'),
(87, '', 'Payakumbuh'),
(88, '', 'Sawahlunto'),
(89, '', 'Solok'),
(90, '', 'Lubuklinggau'),
(91, '', 'Pagaralam'),
(92, '', 'Palembang'),
(93, '', 'Prabumulih'),
(94, '', 'Binjai'),
(95, '', 'Medan'),
(96, '', 'Padang Sidempuan'),
(97, '', 'Pematangsiantar'),
(98, '', 'Sibolga'),
(99, '', 'Tanjungbalai'),
(100, '', 'Tebingtinggi'),
(101, '', 'Yogyakarta'),
(102, 'Jawa Tengah', 'Magelang'),
(103, 'Jawa Tengah', 'Pekalongan'),
(104, 'Jawa Tengah', 'Purwokerto'),
(105, 'Jawa Tengah', 'Semarang'),
(106, 'Jawa Timur', 'Blitar'),
(108, 'Jawa Tengah', 'Mojokerto'),
(109, 'Jawa Tengah', 'Suarabaya'),
(110, 'Jawa Timur', 'Batu'),
(111, 'Kalimantan Selatan', 'Balikpapan'),
(112, 'Jawa Timur', 'Malang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `manufaktur`
--

CREATE TABLE IF NOT EXISTS `manufaktur` (
`id_manufaktur` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `kota` varchar(20) DEFAULT NULL,
  `provinsi` varchar(50) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `barang_dibutuhkan` varchar(50) NOT NULL,
  `banyak_kebutuhan` varchar(1000) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  `gambar_latar` varchar(100) NOT NULL,
  `bukti` varchar(40) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manufaktur`
--

INSERT INTO `manufaktur` (`id_manufaktur`, `nama`, `alamat`, `kota`, `provinsi`, `no_telp`, `email`, `tipe`, `barang_dibutuhkan`, `banyak_kebutuhan`, `icon`, `gambar_latar`, `bukti`, `id_user`) VALUES
(1, 'PT Mandiri Sentosa', 'Jln. Danau Ranau G5', 'Denpasar', 'Bali', '089900', 'mandiri@gmail.com', 'Perusahaan Besar', 'Teh', '1000 Kg', 'assets/images/logo/Screenshot_6.png', '', '', 1),
(2, '', '', NULL, '', '', 'asus@gmail.com', '', '', '', '', '', '', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `postingan`
--

CREATE TABLE IF NOT EXISTS `postingan` (
`id_post` int(11) NOT NULL,
  `id_user` int(20) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(200) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`provinsi`) VALUES
('Aceh'),
('Bali'),
('Bangka Belitung'),
('Banten'),
('Bengkulu'),
('Gorontalo'),
('Jakarta'),
('Jambi'),
('Jawa Barat'),
('Kalimantan Barat'),
('Kalimantan Selatan'),
('Kalimantan Tengah'),
('Kalimantan Timur'),
('Kalimantan Utara'),
('Kepulauan Bangka Belitung'),
('Kepulauan Riau'),
('Lampung'),
('Maluku'),
('Maluku Utara'),
('Nusa Tenggara Barat'),
('Nusa Tenggara Timur'),
('Riau'),
('Sulawesi Barat'),
('Sulawesi Selatan'),
('Sulawesi Tengah'),
('Sulawesi Tenggara'),
('Sulawesi Utara'),
('Sumatera Barat'),
('Sumatera Selatan'),
('Sumatera Utara'),
('Yogyakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `konfirmasi` tinyint(1) NOT NULL,
  `perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `konfirmasi`, `perusahaan`) VALUES
(1, 'mandiri@gmail.com', 'mandiri', 0, 'Manufaktur'),
(2, 'asus@gmail.com', 'asus', 0, 'Manufaktur'),
(3, 'stich@gmail.com', 'stich', 0, 'Bahan Baku'),
(4, 'minyak@gmail.com', 'minyak', 0, 'Bahan Baku'),
(5, 'tessa@gmail.com', 'tessa', 0, 'Bahan Baku'),
(6, 'pensil@gmail.com', 'pensil', 0, 'Bahan Baku');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
 ADD PRIMARY KEY (`id_bahan_baku`), ADD UNIQUE KEY `id_kategori_pbb` (`kategori`), ADD UNIQUE KEY `id_kota` (`kota`);

--
-- Indexes for table `barang_bahan`
--
ALTER TABLE `barang_bahan`
 ADD PRIMARY KEY (`id_bb`), ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
 ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kerjasama`
--
ALTER TABLE `kerjasama`
 ADD PRIMARY KEY (`id_kerjasama`), ADD UNIQUE KEY `id_perusahaan` (`id_manufaktur`), ADD UNIQUE KEY `id_pbb` (`id_bahan_baku`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
 ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `manufaktur`
--
ALTER TABLE `manufaktur`
 ADD PRIMARY KEY (`id_manufaktur`), ADD UNIQUE KEY `id_kota` (`kota`), ADD UNIQUE KEY `id_kota_2` (`kota`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
 ADD PRIMARY KEY (`id_post`), ADD UNIQUE KEY `id_user` (`id_user`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
 ADD PRIMARY KEY (`provinsi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
MODIFY `id_bahan_baku` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `barang_bahan`
--
ALTER TABLE `barang_bahan`
MODIFY `id_bb` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=539;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT for table `kerjasama`
--
ALTER TABLE `kerjasama`
MODIFY `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `manufaktur`
--
ALTER TABLE `manufaktur`
MODIFY `id_manufaktur` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `barang_bahan`
--
ALTER TABLE `barang_bahan`
ADD CONSTRAINT `barang_bahan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
