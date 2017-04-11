-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 11, 2017 at 03:32 AM
-- Server version: 10.1.20-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id1060855_sepakat_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahan_baku`
--

CREATE TABLE `bahan_baku` (
  `id_bahan_baku` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `no_telp` varchar(50) DEFAULT NULL,
  `email` varchar(40) NOT NULL,
  `bukti` varchar(50) NOT NULL,
  `total_produksi` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `barang_bahan` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  `gambar_latar` varchar(1000) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `tipe` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahan_baku`
--

INSERT INTO `bahan_baku` (`id_bahan_baku`, `nama`, `alamat`, `no_telp`, `email`, `bukti`, `total_produksi`, `kategori`, `barang_bahan`, `provinsi`, `kota`, `icon`, `gambar_latar`, `deskripsi`, `id_user`, `tipe`) VALUES
(2, 'PT. SepakatBan', 'Jln. Danau Kerinci A5', '089990999999', 'tefnder@gmail.com', '', '10000', '1', 'Kelapa Sawit', 'Aceh', 'Banda Aceh', '', '', 'We are all connected; To each other, biologically. To the earth, chemically. To the rest of the universe atomically.\r\nThe regret on our side is, they used to say years ago, we are reading about you in science class. Now they say, we are reading about you in history class.\r\nWe have an infinite amount to learn both from nature and from each other\r\nThe path of a cosmonaut is not an easy, triumphant march to glory. You have to get to know the meaning not just of joy but also of grief, before being allowed in the spacecraft cabin.\r\nThe Earth was small, light blue, and so touchingly alone, our home that must be defended like a holy relic. The Earth was absolutely round. I believe I never knew what the word round meant until I saw Earth from space.', 24, ''),
(3, 'PT Tyas Decor', 'Jln. Danau Ranau Sawojajar', '08234567890', 'intisetianingtyas@gmail.com', '', '10000', '1', 'Teh', 'Aceh', 'Meulaboh', '', '', 'Bonbon caramels oat cake candy tart carrot cake. Gummi bears cupcake pastry cheesecake cake caramels muffin. Gummies chupa chups caramels gummies chocolate cake danish candy. Halvah topping icing brownie sugar plum danish.\r\nDragée icing gingerbread brownie candy candy canes tart biscuit lemon drops. Gummies oat cake cheesecake. Liquorice topping jelly-o lollipop oat cake. Liquorice pie icing.\r\nGummi bears toffee lollipop pastry biscuit toffee powder caramels. Cotton candy jelly beans tootsie roll sweet roll. Jelly beans danish tootsie roll dragée sweet macaroon.', 27, ''),
(4, 'PT Tyas Wedding Organizer', '', NULL, 'intisetian@yahoo.com', '', '', '', '', '', '', '', '', '', 28, ''),
(5, 'Fikri Izzudin', 'Jln. Surakarta No. 908', '087790890878', 'mbahkoe.pendekar@gmail.com', '', '200', '2', 'Kerbau', 'Banten', 'Cilegon', '', '', 'Bonbon caramels oat cake candy tart carrot cake. Gummi bears cupcake pastry cheesecake cake caramels muffin. Gummies chupa chups caramels gummies chocolate cake danish candy. Halvah topping icing brownie sugar plum danish.\r\nDragée icing gingerbread brownie candy candy canes tart biscuit lemon drops. Gummies oat cake cheesecake. Liquorice topping jelly-o lollipop oat cake. Liquorice pie icing.\r\nGummi bears toffee lollipop pastry biscuit toffee powder caramels. Cotton candy jelly beans tootsie roll sweet roll. Jelly beans danish tootsie roll dragée sweet macaroon.', 31, ''),
(6, 'Ahmad Syahroni', 'Jln. Danau Toba', '087700890909', 'karepmuron@gmail.com', '', '400', '2', 'Sapi Potong', 'Bali', 'Denpasar', '', '', 'Oat cake danish jujubes cotton candy. Jelly-o topping caramels biscuit apple pie chocolate bar croissant toffee candy canes. Gummi bears jelly-o apple pie I love I love.\r\nMacaroon liquorice candy canes candy canes. Cotton candy pastry gummi bears lemon drops I love gingerbread cookie. Halvah candy jelly-o tiramisu bonbon. Toffee jelly beans ice cream chocolate cake dragée apple pie muffin wafer carrot cake.', 32, ''),
(7, 'Ahmad Roni 2', 'Jln. Danau Tambingan', '086709808079', 'ahmadsyahroni518@gmail.com', '', '400', '3', 'Rumput Laut', 'Jawa Barat', 'Cilegon', '', '', 'Cupcake ipsum dolor sit amet. Lollipop pudding cotton candy. Gummi bears cupcake chupa chups dessert apple pie. Brownie dessert chocolate cake gummi bears gummies gingerbread bonbon powder', 33, ''),
(8, 'Ahmad Syah 3', 'Sawojajar Malang', '08909089768800', 'kpiekmobasd123@gmail.com', '', '500', '3', 'Bandeng', 'Bangka Belitung', 'Belitung', '', '', 'Cupcake ipsum dolor sit amet. Lollipop pudding cotton candy. Gummi bears cupcake chupa chups dessert apple pie. Brownie dessert chocolate cake gummi bears gummies gingerbread bonbon powder', 34, '');

-- --------------------------------------------------------

--
-- Table structure for table `barang_bahan`
--

CREATE TABLE `barang_bahan` (
  `id_bb` int(11) NOT NULL,
  `nama_bb` varchar(50) NOT NULL,
  `id_kategori` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang_bahan`
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
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  `kotak` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `kategori`, `icon`, `kotak`) VALUES
(1, 'Perkebunan', 'fa fa-3x fa-cubes', 'col-md-4 category-box'),
(2, 'Peternakan', 'fa fa-3x fa-cubes', 'col-md-3 category-box'),
(3, 'Perikanan', 'fa fa-3x fa-cubes', 'col-md-4 category-box'),
(4, 'Pertambangan Batu Bara', 'fa fa-3x fa-diamond', 'col-md-4 category-box'),
(5, 'Kayu', 'fa fa-3x fa-flask', 'col-md-3 category-box'),
(6, 'Elektronik', 'fa fa-3x fa-diamond', 'col-md-4 category-box'),
(7, 'Pertambangan Batu - batuan', '', 'col-md-4 category-box'),
(8, 'Semen', '', 'col-md-3 category-box'),
(9, 'Keramik,Porselen & Kaca', '', 'col-md-4 category-box'),
(10, 'Logam dan sejenisnya', '', 'col-md-4 category-box'),
(11, 'Kimia', '', 'col-md-3 category-box'),
(12, 'Plastik dan Kemasan', '', 'col-md-4 category-box'),
(13, 'Pakan dan Ternak', '', 'col-md-4 category-box'),
(14, 'Pertambangan Minyak dan Batubara', '', 'col-md-3 category-box'),
(15, 'Pulp dan Kertas', '', 'col-md-4 category-box'),
(16, 'Otomitif & Komponennya', '', 'col-md-4 category-box'),
(17, 'Tekstil & Garmen', '', 'col-md-3 category-box'),
(18, 'Alas Kaki', '', 'col-md-4 category-box'),
(19, 'Kabel', '', 'col-md-4 category-box'),
(20, 'Pertambangan Batubara', '', 'col-md-3 category-box'),
(21, 'Makanan dan Minuman', '', 'col-md-4 category-box'),
(22, 'Rokok', '', 'col-md-4 category-box'),
(23, 'Farmasi', '', 'col-md-3 category-box'),
(24, 'Kosmetik & Barang Keperluan Rumah Tangga', '', 'col-md-4 category-box'),
(25, 'Peralatan Rumah Tangga', '', 'col-md-4 category-box'),
(26, 'Properti & Real Estate', '', 'col-md-3 category-box'),
(27, 'Konstruksi Bangunan', '', 'col-md-4 category-box'),
(28, 'Jalan Tol,Pelabuhan,Bandara', '', 'col-md-4 category-box'),
(29, 'Energi', '', 'col-md-3 category-box'),
(30, 'Telekomunikasi', '', 'col-md-4 category-box'),
(31, 'Transportasi', '', 'col-md-4 category-box'),
(32, 'Bank', '', 'col-md-3 category-box'),
(33, 'Konstruksi Non Bangunan', '', 'col-md-4 category-box'),
(34, 'Lembaga Pembiayaan', '', 'col-md-4 category-box'),
(35, 'Perusahaan Efek', '', 'col-md-3 category-box'),
(36, 'Asuransi', '', 'col-md-4 category-box'),
(38, 'Perdagangan Eceran', '', 'col-md-4 category-box'),
(39, 'Restoran', '', 'col-md-3 category-box'),
(40, 'Hotel dan Pariwisata', '', 'col-md-4 category-box'),
(43, 'Perusahaan Investasi', '', 'col-md-4 category-box'),
(44, 'Pertanian', '', 'col-md-3 category-box'),
(45, 'Penerbangan', '', 'col-md-4 category-box');

-- --------------------------------------------------------

--
-- Table structure for table `kerjasama`
--

CREATE TABLE `kerjasama` (
  `id_kerjasama` int(11) NOT NULL,
  `id_manufaktur` int(11) NOT NULL,
  `id_bahan_baku` int(11) NOT NULL,
  `konfirmasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerjasama`
--

INSERT INTO `kerjasama` (`id_kerjasama`, `id_manufaktur`, `id_bahan_baku`, `konfirmasi`) VALUES
(4, 12, 2, '0');

-- --------------------------------------------------------

--
-- Table structure for table `kota`
--

CREATE TABLE `kota` (
  `id_kota` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kota`
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
-- Table structure for table `manufaktur`
--

CREATE TABLE `manufaktur` (
  `id_manufaktur` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `provinsi` varchar(50) NOT NULL,
  `kota` varchar(50) DEFAULT NULL,
  `no_telp` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `tipe` varchar(100) NOT NULL,
  `deskripsi` mediumtext NOT NULL,
  `barang_dibutuhkan` varchar(50) NOT NULL,
  `banyak_kebutuhan` varchar(1000) NOT NULL,
  `icon` varchar(1000) NOT NULL,
  `gambar_latar` varchar(100) NOT NULL,
  `bukti` varchar(40) NOT NULL,
  `id_user` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufaktur`
--

INSERT INTO `manufaktur` (`id_manufaktur`, `nama`, `alamat`, `provinsi`, `kota`, `no_telp`, `email`, `tipe`, `deskripsi`, `barang_dibutuhkan`, `banyak_kebutuhan`, `icon`, `gambar_latar`, `bukti`, `id_user`) VALUES
(12, 'PT SepakatMan', 'Jln. Danau Kerinci A5', 'Bali', 'Denpasar', '081908678898', 'tefani.diva@gmail.com', 'Perusahaan Sedang', 'Apple pie pie toffee lemon drops cupcake tart marzipan candy. Tart chocolate bar chocolate bar candy cotton candy. Carrot cake candy canes jujubes cupcake cupcake sugar plum.\r\nDessert lollipop sesame snaps muffin jelly-o. Halvah gummi bears jujubes pastry. Marzipan chocolate bar cheesecake jelly-o halvah jelly-o.\r\nMacaroon jelly biscuit bonbon halvah macaroon biscuit biscuit gingerbread. Pie carrot cake powder macaroon. Chocolate bar marzipan tootsie roll chocolate cake brownie', 'Semangat 86', '10000', 'assets/images/logo/Screenshot_6.png', 'assets/images/gambarlatar/halo.jpg', '', 21),
(13, 'PT Aqua ', '', '', NULL, '', 'tefanidivadiva@yahoo.co.id', '', '', '', '', '', '', '', 25),
(14, 'PT Tia Cetak', 'Jln. Panjahitan 28', 'Bali', 'Denpasar', '087909808707', 'intisetian@gmail.com', 'Perusahaan Sedang', 'Apple pie pie toffee lemon drops cupcake tart marzipan candy. Tart chocolate bar chocolate bar candy cotton candy. Carrot cake candy canes jujubes cupcake cupcake sugar plum.\r\nDessert lollipop sesame snaps muffin jelly-o. Halvah gummi bears jujubes pastry. Marzipan chocolate bar cheesecake jelly-o halvah jelly-o.\r\nMacaroon jelly biscuit bonbon halvah macaroon biscuit biscuit gingerbread. Pie carrot cake powder macaroon. Chocolate bar marzipan tootsie roll chocolate cake brownie', 'Kayu', '10000', '', '', '', 26),
(15, 'Veloz Creative', 'This Street on That Road on The Other City', 'Aceh', 'Banda Aceh', '082299999999', 'muhammad.p.widodo@gmail.com', 'Perusahaan Besar', 'Apple pie pie toffee lemon drops cupcake tart marzipan candy. Tart chocolate bar chocolate bar candy cotton candy. Carrot cake candy canes jujubes cupcake cupcake sugar plum.\r\nDessert lollipop sesame snaps muffin jelly-o. Halvah gummi bears jujubes pastry. Marzipan chocolate bar cheesecake jelly-o halvah jelly-o.\r\nMacaroon jelly biscuit bonbon halvah macaroon biscuit biscuit gingerbread. Pie carrot cake powder macaroon. Chocolate bar marzipan tootsie roll chocolate cake brownie', 'Besi Titanium', '2000', 'assets/images/logo/Material3.jpg', '', '', 29),
(16, 'Ahmad Ron 4', 'Jln. Kedungkandang 10', 'Jawa Barat', 'Cilegon', '081908809709', 'ahmad_syahroni_23rpl@student.smktelkom-m', 'Perusahaan Besar', 'Apple pie pie toffee lemon drops cupcake tart marzipan candy. Tart chocolate bar chocolate bar candy cotton candy. Carrot cake candy canes jujubes cupcake cupcake sugar plum.\r\nDessert lollipop sesame snaps muffin jelly-o. Halvah gummi bears jujubes pastry. Marzipan chocolate bar cheesecake jelly-o halvah jelly-o.\r\nMacaroon jelly biscuit bonbon halvah macaroon biscuit biscuit gingerbread. Pie carrot cake powder macaroon. Chocolate bar marzipan tootsie roll chocolate cake brownie', 'Cengkeh', '500', '', '', '', 35),
(17, 'Tefani Diva', 'Jln. Sumber Gempol', 'Bandung', 'Bandung', '086908706809', 'tefani_wibowo_23rpl@student.smktelkom-ml', 'Perusahaan Besar', 'Apple pie pie toffee lemon drops cupcake tart marzipan candy. Tart chocolate bar chocolate bar candy cotton candy. Carrot cake candy canes jujubes cupcake cupcake sugar plum.\r\nDessert lollipop sesame snaps muffin jelly-o. Halvah gummi bears jujubes pastry. Marzipan chocolate bar cheesecake jelly-o halvah jelly-o.\r\nMacaroon jelly biscuit bonbon halvah macaroon biscuit biscuit gingerbread. Pie carrot cake powder macaroon. Chocolate bar marzipan tootsie roll chocolate cake brownie', 'Batu Bara', '8000', '', '', '', 36);

-- --------------------------------------------------------

--
-- Table structure for table `postingan`
--

CREATE TABLE `postingan` (
  `id_post` int(11) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `isi` varchar(10000) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `postingan`
--

INSERT INTO `postingan` (`id_post`, `id_user`, `isi`, `gambar`, `tanggal`, `waktu`) VALUES
(2, '21', '<p class=\"paragraph ng-attr-widget\"><span class=\"ng-directive ng-binding\">Powder\r\n chupa chups chocolate bar cake chupa chups fruitcake gummi bears. Bear \r\nclaw donut macaroon tart liquorice caramels sweet roll soufflé. Bear \r\nclaw marshmallow dessert jujubes cake chupa chups.</span></p><p class=\"paragraph ng-attr-widget\"><span class=\"ng-directive ng-binding\">Croissant\r\n croissant danish sweet roll caramels. Chupa chups halvah icing \r\nchocolate cake jelly. Caramels wafer muffin. Chocolate danish apple pie \r\ndragée.</span></p><span class=\"ng-directive ng-binding\">Danish\r\n sweet roll macaroon. Fruitcake gummi bears sugar plum. Soufflé candy \r\ncanes pastry apple pie wafer. Sweet chocolate cake cheesecake muffin \r\ntiramisu cake</span>', 'assets/images/posting/hola.jpg', '2017-04-11', '12:13:14.000000');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `provinsi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provinsi`
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
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `konfirmasi` varchar(100) NOT NULL,
  `perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `konfirmasi`, `perusahaan`) VALUES
(21, 'tefani.diva@gmail.com', '2354f5672e8a1b7fed2de61c64117bc7', '1', 'Manufaktur'),
(24, 'tefnder@gmail.com', 'fb2fcd534b0ff3bbed73cc51df620323', '1', 'Bahan Baku'),
(25, 'tefanidivadiva@yahoo.co.id', 'b37375cac08800a044e2df942645912e', 'eedb582caa6e2d04d80c12adbe391e3a', 'Manufaktur'),
(26, 'intisetian@gmail.com', 'fa9f8b649df45d903152e5b2ce8b24d2', '1', 'Manufaktur'),
(27, 'intisetianingtyas@gmail.com', '79698bb3f850cc23393cfe72d4145c0d', '1', 'Bahan Baku'),
(28, 'intisetian@yahoo.com', '1a1afc5b8b0acf38db467f1b59ffd2b4', '22dabe9ad8d41eed708a3c09661f4b58', 'Bahan Baku'),
(29, 'muhammad.p.widodo@gmail.com', '1abf5b51520bf9adb3138e99284d807a', '1', 'Manufaktur'),
(30, 'admin', '21232f297a57a5a743894a0e4a801fc3', '1', 'Admin'),
(31, 'mbahkoe.pendekar@gmail.com', '5d4864249b21de08642aa6ff4178b346', '1', 'Bahan Baku'),
(32, 'karepmuron@gmail.com', 'd78b154c99fe7f06ebc02ebd63d1c87c', '1', 'Bahan Baku'),
(33, 'ahmadsyahroni518@gmail.com', 'f887f4f877c4bcf465e7749f784ef5b9', '1', 'Bahan Baku'),
(34, 'kpiekmobasd123@gmail.com', '0aa55f453e8e2a6480f9aff3a1bbcf57', '1', 'Bahan Baku'),
(35, 'ahmad_syahroni_23rpl@student.smktelkom-mlg.sch.id', 'a8ab0f1aa60e5ef45ec15b5f52385ea8', '1', 'Manufaktur'),
(36, 'tefani_wibowo_23rpl@student.smktelkom-mlg.sch.id', '8fc11f598e30f20530f096c65cc94cd1', '1', 'Manufaktur');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahan_baku`
--
ALTER TABLE `bahan_baku`
  ADD PRIMARY KEY (`id_bahan_baku`);

--
-- Indexes for table `barang_bahan`
--
ALTER TABLE `barang_bahan`
  ADD PRIMARY KEY (`id_bb`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kerjasama`
--
ALTER TABLE `kerjasama`
  ADD PRIMARY KEY (`id_kerjasama`);

--
-- Indexes for table `kota`
--
ALTER TABLE `kota`
  ADD PRIMARY KEY (`id_kota`);

--
-- Indexes for table `manufaktur`
--
ALTER TABLE `manufaktur`
  ADD PRIMARY KEY (`id_manufaktur`);

--
-- Indexes for table `postingan`
--
ALTER TABLE `postingan`
  ADD PRIMARY KEY (`id_post`);

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
  MODIFY `id_bahan_baku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `barang_bahan`
--
ALTER TABLE `barang_bahan`
  MODIFY `id_bb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=539;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `kerjasama`
--
ALTER TABLE `kerjasama`
  MODIFY `id_kerjasama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `kota`
--
ALTER TABLE `kota`
  MODIFY `id_kota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;
--
-- AUTO_INCREMENT for table `manufaktur`
--
ALTER TABLE `manufaktur`
  MODIFY `id_manufaktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `postingan`
--
ALTER TABLE `postingan`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang_bahan`
--
ALTER TABLE `barang_bahan`
  ADD CONSTRAINT `barang_bahan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
