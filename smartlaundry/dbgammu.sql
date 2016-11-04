-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2016 at 10:25 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgammu`
--

-- --------------------------------------------------------

--
-- Table structure for table `b8_wordlist`
--

CREATE TABLE `b8_wordlist` (
  `token` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `count` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `b8_wordlist`
--

INSERT INTO `b8_wordlist` (`token`, `count`) VALUES
('bayes*dbversion', '2'),
('bayes*texts.ham', '0'),
('bayes*texts.spam', '0');

-- --------------------------------------------------------

--
-- Table structure for table `daemons`
--

CREATE TABLE `daemons` (
  `Start` text NOT NULL,
  `Info` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gammu`
--

CREATE TABLE `gammu` (
  `Version` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gammu`
--

INSERT INTO `gammu` (`Version`) VALUES
(13);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id_history` int(11) NOT NULL,
  `id_proses` int(11) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(20) NOT NULL DEFAULT 'Sudah Diambil'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ReceivingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Text` text NOT NULL,
  `SenderNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `RecipientID` text NOT NULL,
  `Processed` enum('false','true') NOT NULL DEFAULT 'false',
  `id_folder` int(11) NOT NULL DEFAULT '1',
  `readed` enum('false','true') NOT NULL DEFAULT 'false'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`UpdatedInDB`, `ReceivingDateTime`, `Text`, `SenderNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `RecipientID`, `Processed`, `id_folder`, `readed`) VALUES
('2016-02-16 00:43:26', '2016-02-16 00:43:29', '0020006C006F0068006100610061', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' lohaaa', 6, '085865516726', 'false', 1, 'false'),
('2016-02-16 00:43:36', '2016-02-16 00:43:39', '0020006C006F0068006100610061', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' lohaaa', 7, '085865516726', 'false', 1, 'false'),
('2016-02-16 00:51:22', '2016-02-16 00:51:25', '002000660069006E', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' fin', 8, '085865516726', 'false', 1, 'false'),
('2016-02-16 06:40:31', '2016-02-16 02:04:45', '00560069006E002000620075006B00610020006C0069006E00650020006B006900200069006E0070007500740020006B007200730020006D0069006C0069006800200061006C00700072006F0020007300670020006A0061006D00200070006900720061002E002E', '+6287711862550', 'Default_No_Compression', '', '+62818445009', -1, 'Vin buka line ki input krs milih alpro sg jam pira..', 9, '085865516726', 'false', 1, 'false'),
('2016-02-16 06:40:31', '2016-02-16 02:51:28', '00560069006E00200061006C00700072006F002000730065006C006100730061002000730065006C006100730061002000730065007400200037002C0020006C0069006E006500200062006100650020006C00690020006E007900670020006C0061006E0067006B0061002000700075006C007300610020', '+6287711862550', 'Default_No_Compression', '', '+62818445009', -1, 'Vin alpro selasa selasa set 7, line bae li nyg langka pulsa ', 10, '085865516726', 'false', 1, 'false'),
('2016-02-16 06:40:31', '2016-02-16 06:40:19', '004C', '+6285876296963', 'Default_No_Compression', '', '+62816124', -1, 'L', 11, '085865516726', 'false', 1, 'false'),
('2016-02-16 06:40:31', '2016-02-16 06:41:07', '004F0079006F0079', '+6285876296963', 'Default_No_Compression', '', '+62816124', -1, 'Oyoy', 12, '085865516726', 'false', 1, 'false'),
('2016-02-16 06:44:48', '2016-02-16 06:45:46', '00560069006E0020006B006D00200064006D006E003F002000420069007300610020006B006500740065006D0075003F', '+6282136407141', 'Default_No_Compression', '', '+6281100000', -1, 'Vin km dmn? Bisa ketemu?', 13, '085865516726', 'false', 1, 'false'),
('2016-02-16 07:56:54', '2016-02-16 07:57:55', '00560069006E0020006E00640061006E00670020006D0069006C0069006800200061006C00700072006F002000730065006C006100730061002000310036002E00320030', '+6287711862550', 'Default_No_Compression', '', '+62818445009', -1, 'Vin ndang milih alpro selasa 16.20', 14, '085865516726', 'false', 1, 'false');

--
-- Triggers `inbox`
--
DELIMITER $$
CREATE TRIGGER `inbox_timestamp` BEFORE INSERT ON `inbox` FOR EACH ROW BEGIN
    IF NEW.ReceivingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.ReceivingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `outbox`
--

CREATE TABLE `outbox` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendBefore` time NOT NULL DEFAULT '23:59:59',
  `SendAfter` time NOT NULL DEFAULT '00:00:00',
  `Text` text,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL,
  `MultiPart` enum('false','true') DEFAULT 'false',
  `RelativeValidity` int(11) DEFAULT '-1',
  `SenderID` varchar(255) DEFAULT NULL,
  `SendingTimeOut` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryReport` enum('default','yes','no') DEFAULT 'default',
  `CreatorID` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `outbox`
--

INSERT INTO `outbox` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `SendBefore`, `SendAfter`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `Class`, `TextDecoded`, `ID`, `MultiPart`, `RelativeValidity`, `SenderID`, `SendingTimeOut`, `DeliveryReport`, `CreatorID`) VALUES
('2016-03-22 02:31:34', '2016-03-22 02:31:34', '2016-03-22 02:31:34', '23:59:59', '00:00:00', NULL, '+6287711862550', 'Default_No_Compression', NULL, -1, 'tes', 75, 'false', -1, NULL, '2016-03-22 02:31:34', 'default', ''),
('2016-03-22 02:31:35', '2016-03-22 02:31:35', '2016-03-22 02:31:35', '23:59:59', '00:00:00', NULL, '+6285865516726', 'Default_No_Compression', NULL, -1, 'tes', 76, 'false', -1, NULL, '2016-03-22 02:31:35', 'default', ''),
('2016-03-22 02:31:35', '2016-03-22 02:31:35', '2016-03-22 02:31:35', '23:59:59', '00:00:00', NULL, '08884004211', 'Default_No_Compression', NULL, -1, 'tes', 77, 'false', -1, NULL, '2016-03-22 02:31:35', 'default', '');

--
-- Triggers `outbox`
--
DELIMITER $$
CREATE TRIGGER `outbox_timestamp` BEFORE INSERT ON `outbox` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingTimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.SendingTimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `outbox_multipart`
--

CREATE TABLE `outbox_multipart` (
  `Text` text,
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text,
  `Class` int(11) DEFAULT '-1',
  `TextDecoded` text,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SequencePosition` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pbk`
--

CREATE TABLE `pbk` (
  `ID` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Number` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pbk`
--

INSERT INTO `pbk` (`ID`, `Name`, `Number`) VALUES
(1, 'ALVIN', '+6285865516726'),
(11, 'intan', '08884004211'),
(12, 'Dika Sti13', '+6287711862550'),
(13, 'Dalban', '+6289898989898'),
(14, 'Jisung', '+6276767676767');

-- --------------------------------------------------------

--
-- Table structure for table `pbkrelasi`
--

CREATE TABLE `pbkrelasi` (
  `id` int(11) NOT NULL,
  `idpbk` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nomor` varchar(20) NOT NULL,
  `idgroup` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pbkrelasi`
--

INSERT INTO `pbkrelasi` (`id`, `idpbk`, `nama`, `nomor`, `idgroup`) VALUES
(20, 1, 'ALVIN', '+6285865516726', 1),
(21, 11, 'intan', '08884004211', 1),
(22, 12, 'Dika Sti13', '+6287711862550', 3),
(23, 1, 'ALVIN', '+6285865516726', 3),
(24, 11, 'intan', '08884004211', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pbk_groups`
--

CREATE TABLE `pbk_groups` (
  `Name` text NOT NULL,
  `ID` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pbk_groups`
--

INSERT INTO `pbk_groups` (`Name`, `ID`) VALUES
('Seven Media Technologi', 1),
('Parkit', 3);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(15) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `no_hp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `alamat`, `no_hp`) VALUES
(2016101801, 'Rofi'' Syaiful Amin', 'Jl. Arjuna no.12 Semarang', '082242183342'),
(2016101802, 'Agung Dwi Nurfitroh', 'Jl. Arjuna no.12 Semarang', '08989999'),
(2016101803, 'Ikrom Wiji Nugroho', 'Jl. Satria Utara no.23 Semarang', '08976589900'),
(2016101804, 'Kanjeng Adib ', 'Jl. Penggandaan no 999 ', '0808090909'),
(2016101901, 'Kukuh Bayu Aji', 'Jl. Arjuna no.12 Semarang', '089087076678'),
(2016102001, 'M Alvin Adji P', 'Jl.Bulustalan VII', '0808767780887'),
(2016102002, 'M Igfar Ega', 'JL. Jalan no.2', '085100000000'),
(2016102003, 'K Anas Bahtiar', 'jl. Lapangan Ngipik no.95 Dukuhseti Pati', '08654334568'),
(2016102004, 'Hafidz Zakky', 'jl. sadewa 2 ', '085123123345'),
(2016102005, 'Lucky Nur Faiz', 'Jl. Arjuna no.12 Semarang', '085325771234'),
(2016102006, 'Zamrud Akbar', 'Jl. Arjuna no.12 Semarang', '089554567223'),
(2016102007, 'Febry Atrides', 'Jl. Pamularsih', '085778453234'),
(2016102008, 'Agung Indre C', 'jl. jalan', '081234567776'),
(2016102009, 'Restu Agung P', 'jl. Abimanyu no.43', '087234345456');

-- --------------------------------------------------------

--
-- Table structure for table `phones`
--

CREATE TABLE `phones` (
  `ID` text NOT NULL,
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TimeOut` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Send` enum('yes','no') NOT NULL DEFAULT 'no',
  `Receive` enum('yes','no') NOT NULL DEFAULT 'no',
  `IMEI` varchar(35) NOT NULL,
  `Client` text NOT NULL,
  `Battery` int(11) NOT NULL DEFAULT '-1',
  `Signal` int(11) NOT NULL DEFAULT '-1',
  `Sent` int(11) NOT NULL DEFAULT '0',
  `Received` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `phones`
--

INSERT INTO `phones` (`ID`, `UpdatedInDB`, `InsertIntoDB`, `TimeOut`, `Send`, `Receive`, `IMEI`, `Client`, `Battery`, `Signal`, `Sent`, `Received`) VALUES
('', '2016-02-03 04:56:56', '2016-02-03 03:44:00', '2016-02-03 04:57:06', 'yes', 'yes', '012345678901234', 'Gammu 1.33.0, Windows Server 2007, GCC 4.7, MinGW 3.11', 0, 24, 1, 0),
('085865516726', '2016-02-16 08:01:24', '2016-02-16 06:40:30', '2016-02-16 08:01:34', 'yes', 'yes', '353907045802328', 'Gammu 1.33.0, Windows Server 2007 SP1, GCC 4.7, MinGW 3.11', 100, 30, 2, 6);

--
-- Triggers `phones`
--
DELIMITER $$
CREATE TRIGGER `phones_timestamp` BEFORE INSERT ON `phones` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.TimeOut = '0000-00-00 00:00:00' THEN
        SET NEW.TimeOut = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `plugins`
--

CREATE TABLE `plugins` (
  `plugin_id` bigint(20) UNSIGNED NOT NULL,
  `plugin_system_name` varchar(255) NOT NULL,
  `plugin_name` varchar(255) NOT NULL,
  `plugin_uri` varchar(120) DEFAULT NULL,
  `plugin_version` varchar(30) NOT NULL,
  `plugin_description` text,
  `plugin_author` varchar(120) DEFAULT NULL,
  `plugin_author_uri` varchar(120) DEFAULT NULL,
  `plugin_data` longtext
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `prosesloundry`
--

CREATE TABLE `prosesloundry` (
  `id_proses` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `proses` varchar(30) DEFAULT 'Dalam Antrian',
  `waktu` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `jumlah` int(11) NOT NULL,
  `berat` decimal(10,2) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'Belum Diambil'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prosesloundry`
--

INSERT INTO `prosesloundry` (`id_proses`, `id_pelanggan`, `proses`, `waktu`, `jumlah`, `berat`, `keterangan`, `total`, `status`) VALUES
(102, 2016102001, 'Siap Diambil', '2016-10-22 14:06:39', 12, '3.20', 'coba lagi', 14000, 'Sudah Diambil'),
(103, 2016101801, 'Siap Diambil', '2016-10-22 14:13:00', 15, '3.00', 'kaos kaki sepasang 1', 21000, 'Sudah Diambil'),
(104, 2016102003, 'Siap Diambil', '2016-10-23 08:30:44', 15, '3.40', 'selimut 2', 20500, 'Sudah Diambil'),
(105, 2016102004, 'Siap Diambil', '2016-10-24 10:33:20', 15, '4.50', 'kaos kaki 10 pasang', 35000, 'Sudah Diambil'),
(106, 2016101803, 'Siap Diambil', '2016-10-27 04:55:13', 12, '10.00', 'satu', 10000, 'Sudah Diambil'),
(107, 2016102004, 'Siap Diambil', '2016-10-28 09:39:03', 12, '3.40', 'no commend aja', 120000, 'Sudah Diambil'),
(113, 2016101803, 'Siap Diambil', '2016-10-28 13:18:09', 11, '2.20', 'sarung 1', 19500, 'Sudah Diambil'),
(114, 2016101802, 'Siap Diambil', '2016-10-28 13:22:10', 20, '3.90', 'sarung, selimut, spray', 29000, 'Sudah Diambil'),
(115, 2016102002, 'Siap Diambil', '2016-10-28 13:23:05', 18, '3.10', 'kaos kaki 3 pasang', 25500, 'Sudah Diambil'),
(116, 2016101801, 'Siap Diambil', '2016-10-28 13:30:13', 23, '3.10', 'kaos kaki sepasang 1', 20000, 'Sudah Diambil'),
(117, 2016101901, 'Siap Diambil', '2016-10-28 13:33:10', 12, '1.90', 'kaos kaki sepasang 2', 18500, 'Sudah Diambil'),
(118, 2016102005, 'Siap Diambil', '2016-10-28 13:34:02', 8, '2.10', 'kaos kaki 3 pasang', 21500, 'Sudah Diambil'),
(119, 2016101803, 'Siap Diambil', '2016-10-28 13:34:57', 10, '1.50', 'kaos kaki sepasang 1', 15500, 'Sudah Diambil'),
(120, 2016102007, 'Siap Diambil', '2016-10-28 13:49:05', 11, '2.20', 'selimut 1', 13500, 'Sudah Diambil'),
(121, 2016102008, 'Siap Diambil', '2016-10-28 13:49:38', 12, '2.40', 'spray 2', 19500, 'Sudah Diambil'),
(124, 2016101801, 'Siap Diambil', '2016-10-30 03:38:16', 10, '2.10', 'kaos kaki sepasang 1', 15500, 'Sudah Diambil'),
(132, 2016102004, 'Siap Diambil', '2016-10-30 04:20:44', 12, '2.20', 'kaos kaki 3 pasang', 12500, 'Sudah Diambil'),
(133, 2016102004, 'Siap Diambil', '2016-10-30 04:22:45', 12, '2.20', 'kaos kaki 3 pasang', 12500, 'Sudah Diambil'),
(134, 2016101801, 'Siap Diambil', '2016-10-30 04:30:54', 12, '2.20', 'kaos kaki sepasang 1', 12500, 'Sudah Diambil'),
(135, 2016101801, 'Siap Diambil', '2016-10-30 04:33:47', 19, '2.90', 'kaos kaki sepasang 1', 19500, 'Sudah Diambil'),
(136, 2016101801, 'Di Cuci', '2016-10-30 05:04:48', 11, '2.10', 'kaos kaki sepasang 1', 11500, 'Belum Diambil'),
(137, 2016101802, 'Di Jemur', '2016-10-30 05:05:22', 12, '2.20', 'kaos kaki sepasang 1', 12500, 'Belum Diambil'),
(138, 2016101803, 'Di Strika', '2016-10-30 05:11:06', 13, '2.30', 'kaos kaki sepasang 1', 13500, 'Belum Diambil'),
(139, 2016101804, 'Siap Diambil', '2016-10-30 05:12:28', 14, '2.40', 'kaos kaki sepasang 1', 14500, 'Belum Diambil'),
(140, 2016101901, 'Di Cuci', '2016-10-30 05:12:56', 15, '2.50', 'kaos kaki sepasang 1', 15500, 'Belum Diambil'),
(141, 2016102001, 'Di Jemur', '2016-10-30 05:13:19', 16, '2.60', 'kaos kaki 3 pasang', 16500, 'Belum Diambil'),
(142, 2016102002, 'Di Strika', '2016-10-30 05:13:38', 17, '2.70', 'kaos kaki sepasang 1', 17500, 'Belum Diambil'),
(143, 2016102003, 'Dalam Antrian', '2016-10-30 05:14:19', 18, '2.80', 'kaos kaki sepasang 2', 18500, 'Belum Diambil'),
(144, 2016102004, 'Siap Diambil', '2016-10-30 05:14:45', 18, '3.10', 'kaos kaki 10 pasang', 18500, 'Belum Diambil'),
(145, 2016102005, 'Dalam Antrian', '2016-10-30 05:15:10', 15, '3.20', 'kaos kaki sepasang 2', 21500, 'Belum Diambil'),
(146, 2016102006, 'Di Cuci', '2016-10-30 05:15:38', 15, '2.60', 'kaos kaki 3 pasang', 16500, 'Belum Diambil'),
(147, 2016102007, 'Di Jemur', '2016-10-30 05:15:54', 13, '2.30', 'kaos kaki sepasang 1', 13500, 'Belum Diambil'),
(148, 2016102007, 'Di Strika', '2016-10-30 05:16:27', 18, '3.30', 'selimut 1', 23500, 'Belum Diambil'),
(149, 2016102008, 'Dalam Antrian', '2016-10-30 05:16:51', 14, '2.40', 'sarung, kaos kaki sepasang 1, selimut', 13500, 'Belum Diambil'),
(150, 2016102009, 'Dalam Antrian', '2016-10-30 05:17:12', 16, '2.70', 'kaos kaki sepasang 1', 17500, 'Belum Diambil');

-- --------------------------------------------------------

--
-- Table structure for table `sentitems`
--

CREATE TABLE `sentitems` (
  `UpdatedInDB` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `InsertIntoDB` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `SendingDateTime` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `DeliveryDateTime` timestamp NULL DEFAULT NULL,
  `Text` text NOT NULL,
  `DestinationNumber` varchar(20) NOT NULL DEFAULT '',
  `Coding` enum('Default_No_Compression','Unicode_No_Compression','8bit','Default_Compression','Unicode_Compression') NOT NULL DEFAULT 'Default_No_Compression',
  `UDH` text NOT NULL,
  `SMSCNumber` varchar(20) NOT NULL DEFAULT '',
  `Class` int(11) NOT NULL DEFAULT '-1',
  `TextDecoded` text NOT NULL,
  `ID` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `SenderID` varchar(255) NOT NULL,
  `SequencePosition` int(11) NOT NULL DEFAULT '1',
  `Status` enum('SendingOK','SendingOKNoReport','SendingError','DeliveryOK','DeliveryFailed','DeliveryPending','DeliveryUnknown','Error') NOT NULL DEFAULT 'SendingOK',
  `StatusError` int(11) NOT NULL DEFAULT '-1',
  `TPMR` int(11) NOT NULL DEFAULT '-1',
  `RelativeValidity` int(11) NOT NULL DEFAULT '-1',
  `CreatorID` text NOT NULL,
  `id_folder` int(11) NOT NULL DEFAULT '3'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sentitems`
--

INSERT INTO `sentitems` (`UpdatedInDB`, `InsertIntoDB`, `SendingDateTime`, `DeliveryDateTime`, `Text`, `DestinationNumber`, `Coding`, `UDH`, `SMSCNumber`, `Class`, `TextDecoded`, `ID`, `SenderID`, `SequencePosition`, `Status`, `StatusError`, `TPMR`, `RelativeValidity`, `CreatorID`, `id_folder`) VALUES
('2016-02-16 00:42:59', '2016-02-15 01:27:09', '2016-02-16 00:42:59', NULL, '00200068006F006F006F', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' hooo', 12, '085865516726', 1, 'SendingOKNoReport', -1, 171, 255, '', 3),
('2016-02-16 00:43:03', '2016-02-15 01:28:55', '2016-02-16 00:43:03', NULL, '002000680061006900690069', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' haiii', 13, '085865516726', 1, 'SendingOKNoReport', -1, 172, 255, '', 3),
('2016-02-02 07:54:12', '2016-02-02 01:29:24', '2016-02-02 07:54:12', NULL, '00680065006C006C006F0020006D0065006E000A00530065006E006400650072003A00200040006B0061006C006B0075006E', '082242183342', 'Default_No_Compression', '', '+62816124', 1, 'hello men\nSender: @kalkun', 6, '', 1, 'SendingOKNoReport', -1, 244, 255, '', 3),
('2016-02-02 07:54:16', '2016-02-02 01:37:09', '2016-02-02 07:54:16', NULL, '006200620062000A00530065006E006400650072003A00200040006B0061006C006B0075006E', '082242183342', 'Default_No_Compression', '', '+62816124', 1, 'bbb\nSender: @kalkun', 7, '', 1, 'SendingOKNoReport', -1, 245, 255, '', 3),
('2016-02-02 07:54:20', '2016-02-02 01:38:35', '2016-02-02 07:54:20', NULL, '006800670064006800670076006A00790075006B000A00530065006E006400650072003A00200040006B0061006C006B0075006E', '085713164833', 'Default_No_Compression', '', '+62816124', 1, 'hgdhgvjyuk\nSender: @kalkun', 8, '', 1, 'SendingOKNoReport', -1, 246, 255, '', 3),
('2016-02-02 07:54:26', '2016-02-02 01:42:26', '2016-02-02 07:54:26', NULL, '006E00670063006600790066006B007500690062002000690068006C006B006E006C0020000A00530065006E006400650072003A00200040006B0061006C006B0075006E', '082242183342', 'Default_No_Compression', '', '+62816124', 1, 'ngcfyfkuib ihlknl \nSender: @kalkun', 9, '', 1, 'SendingOKNoReport', -1, 247, 255, '', 3),
('2016-02-02 07:55:33', '2016-02-02 07:55:16', '2016-02-02 07:55:33', NULL, '006B00750066007500740073006A0066006300200079006700750079002000750079006700200020007500790067002000200069002000750068000A00530065006E006400650072003A00200040006B0061006C006B0075006E', '085713164833', 'Default_No_Compression', '', '+62816124', 1, 'kufutsjfc yguy uyg  uyg  i uh\nSender: @kalkun', 10, '', 1, 'SendingOKNoReport', -1, 248, 255, '', 3),
('2016-02-03 03:44:04', '2016-02-03 03:42:02', '2016-02-03 03:44:04', NULL, '00680061006C006C006F006F00200077006F0072006C0064000A00530065006E006400650072003A00200040006B0061006C006B0075006E', '082242183342', 'Default_No_Compression', '', '+62816124', 1, 'halloo world\nSender: @kalkun', 11, '', 1, 'SendingOKNoReport', -1, 249, 255, '', 3),
('2016-02-16 00:43:06', '2016-02-15 01:29:26', '2016-02-16 00:43:06', NULL, '002000620072006F006F', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' broo', 14, '085865516726', 1, 'SendingOKNoReport', -1, 173, 255, '', 3),
('2016-02-16 00:43:11', '2016-02-15 01:38:35', '2016-02-16 00:43:11', NULL, '0068006100690068006F006F000A00530065006E006400650072003A00200040006B0061006C006B0075006E', '085865516726', 'Default_No_Compression', '', '+62816124', 1, 'haihoo\nSender: @kalkun', 15, '085865516726', 1, 'SendingOKNoReport', -1, 174, 255, '', 3),
('2016-02-16 00:43:14', '2016-02-15 02:57:34', '2016-02-16 00:43:14', NULL, '00200068006F006C006100610061', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' holaaa', 16, '085865516726', 1, 'SendingOKNoReport', -1, 175, 255, '', 3),
('2016-02-16 00:43:18', '2016-02-15 02:58:03', '2016-02-16 00:43:18', NULL, '00200068006F006C006100610061', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' holaaa', 17, '085865516726', 1, 'SendingOKNoReport', -1, 176, 255, '', 3),
('2016-02-16 00:43:21', '2016-02-15 03:05:42', '2016-02-16 00:43:21', NULL, '00200048004100490048004F004F', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' HAIHOO', 18, '085865516726', 1, 'SendingOKNoReport', -1, 177, 255, '', 3),
('2016-02-16 00:43:24', '2016-02-15 03:23:42', '2016-02-16 00:43:24', NULL, '0020006C006F0068006100610061', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' lohaaa', 19, '085865516726', 1, 'SendingOKNoReport', -1, 178, 255, '', 3),
('2016-02-16 00:43:27', '2016-02-15 03:28:23', '2016-02-16 00:43:27', NULL, '0020006C006F0068006100610061', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' lohaaa', 20, '085865516726', 1, 'SendingOKNoReport', -1, 179, 255, '', 3),
('2016-02-16 00:43:31', '2016-02-15 03:30:42', '2016-02-16 00:43:31', NULL, '0020006C006F0068006100610061', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' lohaaa', 21, '085865516726', 1, 'SendingOKNoReport', -1, 180, 255, '', 3),
('2016-02-16 00:43:34', '2016-02-15 03:31:33', '2016-02-16 00:43:34', NULL, '0020006C006F0068006100610061', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' lohaaa', 22, '085865516726', 1, 'SendingOKNoReport', -1, 181, 255, '', 3),
('2016-02-16 00:43:37', '2016-02-15 03:34:51', '2016-02-16 00:43:37', NULL, '002000660069006E', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' fin', 23, '085865516726', 1, 'SendingOKNoReport', -1, 182, 255, '', 3),
('2016-02-16 00:43:42', '2016-02-15 03:36:44', '2016-02-16 00:43:42', NULL, '002000660069006E', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' fin', 24, '085865516726', 1, 'SendingOKNoReport', -1, 183, 255, '', 3),
('2016-02-16 00:43:51', '2016-02-15 03:38:27', '2016-02-16 00:43:51', NULL, '002000660069006E', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' fin', 25, '085865516726', 1, 'SendingOKNoReport', -1, 184, 255, '', 3),
('2016-02-16 00:43:55', '2016-02-15 03:51:20', '2016-02-16 00:43:55', NULL, '002000660069006E', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' fin', 26, '085865516726', 1, 'SendingOKNoReport', -1, 185, 255, '', 3),
('2016-02-16 00:43:58', '2016-02-15 04:00:47', '2016-02-16 00:43:58', NULL, '002000660069006E', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' fin', 27, '085865516726', 1, 'SendingOKNoReport', -1, 186, 255, '', 3),
('2016-02-16 00:44:03', '2016-02-15 06:04:43', '2016-02-16 00:44:03', NULL, '00200074006F0068006F006F', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' tohoo', 28, '085865516726', 1, 'SendingOKNoReport', -1, 187, 255, '', 3),
('2016-02-16 00:44:07', '2016-02-15 06:07:31', '2016-02-16 00:44:07', NULL, '00200074006F0068006F006F', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' tohoo', 29, '085865516726', 1, 'SendingOKNoReport', -1, 188, 255, '', 3),
('2016-02-16 00:44:10', '2016-02-15 06:10:57', '2016-02-16 00:44:10', NULL, '002000680061006F', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' hao', 30, '085865516726', 1, 'SendingOKNoReport', -1, 189, 255, '', 3),
('2016-02-16 00:44:13', '2016-02-15 06:11:42', '2016-02-16 00:44:13', NULL, '002000680061006C006F006F00200073006100790061006E0067', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' haloo sayang', 31, '085865516726', 1, 'SendingOKNoReport', -1, 190, 255, '', 3),
('2016-02-16 00:44:17', '2016-02-15 06:16:00', '2016-02-16 00:44:17', NULL, '00680061006C006F006F006F', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, 'halooo', 32, '085865516726', 1, 'SendingOKNoReport', -1, 191, 255, '', 3),
('2016-02-16 00:44:21', '2016-02-15 06:17:01', '2016-02-16 00:44:21', NULL, '00680061006C006F006F006F', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, 'halooo', 33, '085865516726', 1, 'SendingOKNoReport', -1, 192, 255, '', 3),
('2016-02-16 00:44:25', '2016-02-15 06:18:22', '2016-02-16 00:44:25', NULL, '00680061006C006F006F006F006F006F000D000A', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, 'halooooo\r\n', 34, '085865516726', 1, 'SendingOKNoReport', -1, 193, 255, '', 3),
('2016-02-16 00:44:28', '2016-02-15 06:19:00', '2016-02-16 00:44:28', NULL, '00680061006C006F006F006F006F006F000D000A', '085865516726', 'Default_No_Compression', '', '+62816124', -1, 'halooooo\r\n', 35, '085865516726', 1, 'SendingOKNoReport', -1, 194, 255, '', 3),
('2016-02-16 00:44:32', '2016-02-15 06:19:43', '2016-02-16 00:44:32', NULL, '00680061006C006F006F006F006F006F000D000A', '085865516726', 'Default_No_Compression', '', '+62816124', -1, 'halooooo\r\n', 36, '085865516726', 1, 'SendingOKNoReport', -1, 195, 255, '', 3),
('2016-02-16 00:44:35', '2016-02-15 06:20:01', '2016-02-16 00:44:35', NULL, '00680061006C006F006F006F006F006F000D000A', '085865516726', 'Default_No_Compression', '', '+62816124', -1, 'halooooo\r\n', 37, '085865516726', 1, 'SendingOKNoReport', -1, 196, 255, '', 3),
('2016-02-16 00:44:38', '2016-02-15 06:20:04', '2016-02-16 00:44:38', NULL, '00680061006C006F006F006F006F006F000D000A', '085865516726', 'Default_No_Compression', '', '+62816124', -1, 'halooooo\r\n', 38, '085865516726', 1, 'SendingOKNoReport', -1, 197, 255, '', 3),
('2016-02-16 00:44:41', '2016-02-15 06:20:15', '2016-02-16 00:44:41', NULL, '00680061006C006F006F006F006F006F000D000A', '085865516726', 'Default_No_Compression', '', '+62816124', -1, 'halooooo\r\n', 39, '085865516726', 1, 'SendingOKNoReport', -1, 198, 255, '', 3),
('2016-02-16 00:44:52', '2016-02-15 06:20:17', '2016-02-16 00:44:52', NULL, '00680061006C006F006F006F006F006F000D000A', '085865516726', 'Default_No_Compression', '', '+62816124', -1, 'halooooo\r\n', 40, '085865516726', 1, 'SendingOKNoReport', -1, 199, 255, '', 3),
('2016-02-16 00:44:55', '2016-02-15 06:23:09', '2016-02-16 00:44:55', NULL, '00680061006C006F006F006F006F006F000D000A', '085865516726', 'Default_No_Compression', '', '+62816124', -1, 'halooooo\r\n', 41, '085865516726', 1, 'SendingOKNoReport', -1, 200, 255, '', 3),
('2016-02-16 00:44:59', '2016-02-15 23:43:46', '2016-02-16 00:44:59', NULL, '002000740065007300740074', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' testt', 42, '085865516726', 1, 'SendingOKNoReport', -1, 201, 255, '', 3),
('2016-02-16 00:45:02', '2016-02-15 23:45:05', '2016-02-16 00:45:02', NULL, '00200068006100790068006F006F006F', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' hayhooo', 43, '085865516726', 1, 'SendingOKNoReport', -1, 202, 255, '', 3),
('2016-02-16 00:45:05', '2016-02-15 23:45:45', '2016-02-16 00:45:05', NULL, '00200068006100790068006F006F006F006F006F', '085865516726', 'Default_No_Compression', '', '+62816124', -1, ' hayhooooo', 44, '085865516726', 1, 'SendingOKNoReport', -1, 203, 255, '', 3),
('2016-02-16 00:51:19', '2016-02-16 00:51:11', '2016-02-16 00:51:19', NULL, '002000660069006E', '+6285865516726', 'Default_No_Compression', '', '+62816124', -1, ' fin', 45, '085865516726', 1, 'SendingOKNoReport', -1, 204, 255, '', 3),
('2016-02-16 06:41:33', '2016-02-16 06:41:26', '2016-02-16 06:41:33', NULL, '0020006F0079006F00790020006A007500670061000D000A', '+6285876296963', 'Default_No_Compression', '', '+62816124', -1, ' oyoy juga\r\n', 46, '085865516726', 1, 'SendingOKNoReport', -1, 205, 255, '', 3);

--
-- Triggers `sentitems`
--
DELIMITER $$
CREATE TRIGGER `sentitems_timestamp` BEFORE INSERT ON `sentitems` FOR EACH ROW BEGIN
    IF NEW.InsertIntoDB = '0000-00-00 00:00:00' THEN
        SET NEW.InsertIntoDB = CURRENT_TIMESTAMP();
    END IF;
    IF NEW.SendingDateTime = '0000-00-00 00:00:00' THEN
        SET NEW.SendingDateTime = CURRENT_TIMESTAMP();
    END IF;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `sms_used`
--

CREATE TABLE `sms_used` (
  `id_sms_used` int(11) NOT NULL,
  `sms_date` date NOT NULL,
  `id_user` int(11) NOT NULL,
  `out_sms_count` int(11) NOT NULL DEFAULT '0',
  `in_sms_count` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sms_used`
--

INSERT INTO `sms_used` (`id_sms_used`, `sms_date`, `id_user`, `out_sms_count`, `in_sms_count`) VALUES
(1, '2016-02-02', 1, 10, 3),
(2, '2016-02-03', 1, 1, 0),
(3, '2016-02-15', 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_proses` int(11) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_proses`, `id_pelanggan`, `nama`, `waktu`, `total`) VALUES
(23, 136, 2016101801, 'Rofi'' Syaiful Amin', '2016-10-30 05:04:48', 11500),
(24, 137, 2016101802, 'Agung Dwi Nurfitroh', '2016-10-30 05:05:22', 12500),
(25, 138, 2016101803, 'Ikrom Wiji Nugroho', '2016-10-30 05:11:06', 13500),
(26, 139, 2016101804, 'Kanjeng Adib', '2016-10-30 05:12:28', 14500),
(27, 140, 2016101901, 'Kukuh Bayu Aji', '2016-10-30 05:12:56', 15500),
(28, 141, 2016102001, 'M Alvin Adji P', '2016-10-30 05:13:19', 16500),
(29, 142, 2016102002, 'M Igfar Ega', '2016-10-30 05:13:38', 17500),
(30, 143, 2016102003, 'K Anas Bahtiar', '2016-10-30 05:14:19', 18500),
(31, 144, 2016102004, 'Hafidz Zakky', '2016-10-30 05:14:45', 18500),
(32, 145, 2016102005, 'Lucky Nur Faiz', '2016-10-30 05:15:10', 21500),
(33, 146, 2016102006, 'Zamrud Akbar', '2016-10-30 05:15:38', 16500),
(34, 147, 2016102007, 'Febry Atrides', '2016-10-30 05:15:54', 13500),
(35, 148, 2016102007, 'Febry Atrides', '2016-10-30 05:16:27', 23500),
(36, 149, 2016102008, 'Agung Indre C', '2016-10-30 05:16:51', 13500),
(37, 150, 2016102009, 'Restu Agung P', '2016-10-30 05:17:12', 17500);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `realname` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `level` enum('admin','user') NOT NULL DEFAULT 'user'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `realname`, `password`, `phone_number`, `level`) VALUES
(9, 'adib', 'Kanjeng Adib', 'adib', '087895212345', 'user'),
(2, 'agung', 'Agung Dwi Nurfitroh', 'agung', '098765678567', 'admin'),
(5, 'rofi', 'Rofi'' Syaiful Amin', 'rofi', '082242183342', 'admin'),
(6, 'admin', 'Administrator', 'admin', '1010101011', 'user'),
(8, 'Ikrom', 'Ikrom Widji Nugroho', 'ikrom', '087543653542', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `user_filters`
--

CREATE TABLE `user_filters` (
  `id_filter` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `from` varchar(15) NOT NULL,
  `has_the_words` varchar(50) NOT NULL,
  `id_folder` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_folders`
--

CREATE TABLE `user_folders` (
  `id_folder` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_folders`
--

INSERT INTO `user_folders` (`id_folder`, `name`, `id_user`) VALUES
(1, 'inbox', 0),
(2, 'outbox', 0),
(3, 'sent_items', 0),
(4, 'draft', 0),
(5, 'Trash', 0),
(6, 'Spam', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_forgot_password`
--

CREATE TABLE `user_forgot_password` (
  `id_user` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `valid_until` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_group`
--

CREATE TABLE `user_group` (
  `id_group` int(11) NOT NULL,
  `id_pbk` int(11) NOT NULL,
  `id_pbk_groups` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_group`
--

INSERT INTO `user_group` (`id_group`, `id_pbk`, `id_pbk_groups`, `id_user`) VALUES
(1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_inbox`
--

CREATE TABLE `user_inbox` (
  `id_inbox` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_inbox`
--

INSERT INTO `user_inbox` (`id_inbox`, `id_user`, `trash`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_outbox`
--

CREATE TABLE `user_outbox` (
  `id_outbox` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_outbox`
--

INSERT INTO `user_outbox` (`id_outbox`, `id_user`) VALUES
(15, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_sentitems`
--

CREATE TABLE `user_sentitems` (
  `id_sentitems` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `trash` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sentitems`
--

INSERT INTO `user_sentitems` (`id_sentitems`, `id_user`, `trash`) VALUES
(1, 1, 0),
(2, 1, 0),
(3, 1, 0),
(4, 1, 0),
(5, 1, 0),
(6, 1, 0),
(7, 1, 0),
(8, 1, 0),
(9, 1, 0),
(10, 1, 0),
(11, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_settings`
--

CREATE TABLE `user_settings` (
  `id_user` int(11) NOT NULL,
  `theme` varchar(10) NOT NULL DEFAULT 'blue',
  `signature` varchar(50) NOT NULL,
  `permanent_delete` enum('true','false') NOT NULL DEFAULT 'false',
  `paging` int(2) NOT NULL DEFAULT '10',
  `bg_image` varchar(50) NOT NULL,
  `delivery_report` enum('default','yes','no') NOT NULL DEFAULT 'default',
  `language` varchar(20) NOT NULL DEFAULT 'english',
  `conversation_sort` enum('asc','desc') NOT NULL DEFAULT 'asc',
  `country_code` varchar(2) NOT NULL DEFAULT 'US'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_settings`
--

INSERT INTO `user_settings` (`id_user`, `theme`, `signature`, `permanent_delete`, `paging`, `bg_image`, `delivery_report`, `language`, `conversation_sort`, `country_code`) VALUES
(1, 'green', 'false;--\nPut your signature here', 'false', 20, 'true;background.jpg', 'default', 'indonesian', 'desc', 'ID'),
(2, 'blue', 'false;', 'false', 20, 'true;background.jpg', 'default', 'english', 'asc', 'US');

-- --------------------------------------------------------

--
-- Table structure for table `user_templates`
--

CREATE TABLE `user_templates` (
  `id_template` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `Name` varchar(64) NOT NULL,
  `Message` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `b8_wordlist`
--
ALTER TABLE `b8_wordlist`
  ADD PRIMARY KEY (`token`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id_history`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `outbox`
--
ALTER TABLE `outbox`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `outbox_date` (`SendingDateTime`,`SendingTimeOut`),
  ADD KEY `outbox_sender` (`SenderID`);

--
-- Indexes for table `outbox_multipart`
--
ALTER TABLE `outbox_multipart`
  ADD PRIMARY KEY (`ID`,`SequencePosition`);

--
-- Indexes for table `pbk`
--
ALTER TABLE `pbk`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pbkrelasi`
--
ALTER TABLE `pbkrelasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indexes for table `phones`
--
ALTER TABLE `phones`
  ADD PRIMARY KEY (`IMEI`);

--
-- Indexes for table `plugins`
--
ALTER TABLE `plugins`
  ADD PRIMARY KEY (`plugin_id`),
  ADD UNIQUE KEY `plugin_index` (`plugin_system_name`) USING BTREE;

--
-- Indexes for table `prosesloundry`
--
ALTER TABLE `prosesloundry`
  ADD PRIMARY KEY (`id_proses`);

--
-- Indexes for table `sentitems`
--
ALTER TABLE `sentitems`
  ADD PRIMARY KEY (`ID`,`SequencePosition`),
  ADD KEY `sentitems_date` (`DeliveryDateTime`),
  ADD KEY `sentitems_tpmr` (`TPMR`),
  ADD KEY `sentitems_dest` (`DestinationNumber`),
  ADD KEY `sentitems_sender` (`SenderID`);

--
-- Indexes for table `sms_used`
--
ALTER TABLE `sms_used`
  ADD PRIMARY KEY (`id_sms_used`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone_number` (`phone_number`);

--
-- Indexes for table `user_filters`
--
ALTER TABLE `user_filters`
  ADD PRIMARY KEY (`id_filter`);

--
-- Indexes for table `user_folders`
--
ALTER TABLE `user_folders`
  ADD PRIMARY KEY (`id_folder`);

--
-- Indexes for table `user_forgot_password`
--
ALTER TABLE `user_forgot_password`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_group`
--
ALTER TABLE `user_group`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `user_inbox`
--
ALTER TABLE `user_inbox`
  ADD PRIMARY KEY (`id_inbox`);

--
-- Indexes for table `user_outbox`
--
ALTER TABLE `user_outbox`
  ADD PRIMARY KEY (`id_outbox`);

--
-- Indexes for table `user_sentitems`
--
ALTER TABLE `user_sentitems`
  ADD PRIMARY KEY (`id_sentitems`);

--
-- Indexes for table `user_settings`
--
ALTER TABLE `user_settings`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_templates`
--
ALTER TABLE `user_templates`
  ADD PRIMARY KEY (`id_template`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `outbox`
--
ALTER TABLE `outbox`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;
--
-- AUTO_INCREMENT for table `pbk`
--
ALTER TABLE `pbk`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pbkrelasi`
--
ALTER TABLE `pbkrelasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `pbk_groups`
--
ALTER TABLE `pbk_groups`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2016102010;
--
-- AUTO_INCREMENT for table `plugins`
--
ALTER TABLE `plugins`
  MODIFY `plugin_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `prosesloundry`
--
ALTER TABLE `prosesloundry`
  MODIFY `id_proses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;
--
-- AUTO_INCREMENT for table `sms_used`
--
ALTER TABLE `sms_used`
  MODIFY `id_sms_used` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_filters`
--
ALTER TABLE `user_filters`
  MODIFY `id_filter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_folders`
--
ALTER TABLE `user_folders`
  MODIFY `id_folder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `user_group`
--
ALTER TABLE `user_group`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user_templates`
--
ALTER TABLE `user_templates`
  MODIFY `id_template` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
