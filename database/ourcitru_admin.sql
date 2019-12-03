-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 03, 2019 at 11:18 AM
-- Server version: 10.1.43-MariaDB-cll-lve
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ourcitru_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `notelp` varchar(255) NOT NULL,
  `wa` varchar(255) NOT NULL,
  `aduan` varchar(255) DEFAULT NULL,
  `bank1` varchar(255) DEFAULT NULL,
  `bank2` varchar(255) DEFAULT NULL,
  `subject` varchar(150) DEFAULT NULL,
  `pesan` text NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `email`, `username`, `notelp`, `wa`, `aduan`, `bank1`, `bank2`, `subject`, `pesan`, `created`, `updated`) VALUES
(1, 'indripasambuna', 'indriisyqpasambuna@gmail.com', 'indripasambuna', '082187649169', '082187649169', NULL, ' - ', NULL, 'email-revisi', '<p>pengajuan revisi data member saya</p>\r\n\r\n<p>username : tindamogalad</p>\r\n\r\n<p>cabang bank sebelumnya : BRI</p>\r\n\r\n<p>cabang bank revisi : mandiri</p>\r\n', '2019-11-21 00:01:32', NULL),
(2, 'hj.yusnalia', 'armahanismah26@gmail.com', 'hajayusna', '08124454589', '08124454589', 'Ganti No Rekening', 'Bank BRI - 021801014447534', NULL, 'customer-service', '<p>Dear Customer Service, mohon revisi no.rekening karena Bonus tidak pernah masuk ke rekening sebelumnya.</p>\r\n\r\n<p>Thanks...</p>\r\n', '2019-11-21 12:27:56', NULL),
(3, 'ramadwinanto', 'ramadj@gmail.com', 'ramadj2', '085888962101', '085888962101', NULL, ' - ', NULL, 'email-revisi', '<p>saya ada kesalahan dalam penginputan nomor rekening mohon di revisi dari data awal no rekening = 10100052082559 menjadi 1010005208259 ( terlalu banyak angka 5 nya )</p>\r\n\r\n<p>mohon d proses segera agar besok bonus bisa masuk terima kasih</p>\r\n', '2019-11-21 12:58:12', NULL),
(5, 'pujiermanto', 'pujiermanto@gmail.com', 'puji122', '0882-2266-8778', '', 'Ganti No Rekening', 'Bank BRI - 0122114445554', 'Bank BCA - 012213132156', 'email-revisi', '<p>mbak ivon aku bu silvy</p>\r\n', '2019-11-24 05:21:55', NULL),
(6, 'cutfatma', 'sitinurrafidah0@gmail.com', 'Fatma', '6281-1680-7239', '6281-1680-7239', 'Ganti No Rekening', 'BNI - 0506341913', 'MANDIRI - 158-00-01119593', 'email-revisi', '<p>Tolong revisikan data member an. Cut Fatma username : Fatma</p>\r\n\r\n<p>Dengan data rekening diatas, dan nomer hp juga direvisi seperti data diatas.</p>\r\n\r\n<p> </p>\r\n\r\n<p>Terimaksih.</p>\r\n\r\n<p>Upline sponsor cut meutia (farah) dan rafidah</p>\r\n', '2019-11-24 22:12:47', NULL),
(10, 'cutzulfiyatni', 'Cutyatni@gmail.com', 'Zulfiyatni', '0852-6016-8080', '0852-6016-8080', 'Ganti No Rekening', 'BRI - 131 201 002 303 533', 'Mandiri - 158 00 0476366 0 ', 'email-revisi', '<p>Tolong revisikan data rekening member saya an. Cut Zulfiyatni sbb:</p>\r\n\r\n<p> </p>\r\n\r\n<p>Username: Zulfiyatni1, Zulfiyatni2, Zutfiyatni3, Zulfiyatni4, Zutfiyatni5, Zulfiyatni6, Zulfiyatni7.</p>\r\n\r\n<p> </p>\r\n\r\n<p>No. Rek sbelumnya:</p>\r\n\r\n<p>BRI.131 201 002 303 533. Atas nama Cut Meutia</p>\r\n\r\n<p> </p>\r\n\r\n<p>Rekening Baru:</p>\r\n\r\n<p>Mandiri 158 00 0476366 0 an. Cut Zulfiyatni</p>\r\n\r\n<p> </p>\r\n\r\n<p>Butab terlampir. Terimakasih</p>\r\n\r\n<p> </p>\r\n\r\n<p>Upline : Cut Meutia</p>\r\n\r\n<p> </p>\r\n', '2019-11-25 20:54:14', NULL),
(23, 'dadankomarudin', 'dadan2121@gmail.com', 'dadan2121', '0882-2266-8778', '', 'Order Via Email', ' - ', ' - ', 'email-order', '<p>testing email order dengan invoice</p>\r\n', '2019-12-02 20:21:11', NULL),
(22, 'dadankomarudin', 'dadan2121@gmail.com', 'dadan2121', '0882-2266-8778', '', 'Order Via Email', ' - ', ' - ', 'email-order', '<p>test email order bray</p>\r\n', '2019-12-02 20:17:53', NULL),
(21, 'dadankomarudin', 'dadan2121@gmail.com', 'dadan2121', '0882-2266-8778', '', 'Order Via Email', ' - ', ' - ', 'email-order', '<p>langsung order pakai invoice download</p>\r\n', '2019-12-02 20:14:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id_files` int(11) NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `uploaded_on` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` enum('1','0') NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id_files`, `file_name`, `uploaded_on`, `status`, `username`) VALUES
(5, 'puji122_ss.jpg', '2019-11-23 22:21:55', '1', 'puji122'),
(4, 'puji122_Untitled-3.png', '2019-11-23 22:21:55', '1', 'puji122'),
(6, 'puji122_phpmailer.png', '2019-11-23 22:21:55', '1', 'puji122'),
(21, 'dadan2121_INVOICE_BERJAYA2.xlsx', '2019-12-02 13:21:11', '1', 'dadan2121'),
(20, 'dadan2121_INVOICE_BERJAYA1.xlsx', '2019-12-02 13:17:53', '1', 'dadan2121'),
(19, 'dadan2121_INVOICE_BERJAYA.xlsx', '2019-12-02 13:14:10', '1', 'dadan2121');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE `unit` (
  `unit_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `name`, `created`, `updated`) VALUES
(1, 'email-order', '2019-11-03 17:13:07', NULL),
(2, 'email-revisi', '2019-11-03 17:13:07', NULL),
(3, 'customer-service', '2019-11-03 17:13:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `level` int(1) NOT NULL COMMENT '1 admin, 2 kasir',
  `update` datetime DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `name`, `image`, `address`, `level`, `update`, `ip_address`) VALUES
(1, 'admin', '356a192b7913b04c54574d18c28d46e6395428ab', 'Admin Ourcitrus', 'logo.png', 'Sidoarjo - Jawa Timur', 1, NULL, ''),
(2, 'kasir', '123654', 'kasir1', NULL, NULL, 2, NULL, NULL),
(3, 'admin2', '333222111', 'Admin Ourcitrus2', 'logo.png', 'Sidoarjo - Jawa Timur2', 1, NULL, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id_files`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id_files` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
