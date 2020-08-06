-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 07:33 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm_machines`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `name` varchar(100) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `idno` int(10) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `onumber` varchar(10) NOT NULL,
  `book_status` varchar(50) DEFAULT NULL,
  `amount` varchar(200) NOT NULL,
  `code` varchar(20) NOT NULL,
  `payment` set('Unpaid','Paid') NOT NULL DEFAULT 'Unpaid',
  `status` set('processing','approved','declined') NOT NULL DEFAULT 'processing',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `model` varchar(100) NOT NULL,
  `m_count` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`name`, `pname`, `idno`, `phone`, `location`, `onumber`, `book_status`, `amount`, `code`, `payment`, `status`, `created_at`, `model`, `m_count`) VALUES
('KCX 234W', 'Matthew james', 6783891, '0722356798', 'Kiserian', '0734278965', 'Active', '5000', 'MLA2ER24', 'Unpaid', 'processing', '2020-03-31 18:49:11', 'Mowers', '1'),
('KCB 234D', 'Lucky man', 6783891, '0723456788', 'Nakuru', '0734278965', 'Deactivated', '9000', 'MLA2ERYUJL3Q', 'Unpaid', 'processing', '2020-03-29 22:26:51', 'Plantors', '30');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `chat_id` int(5) NOT NULL,
  `from_id` int(5) NOT NULL,
  `to_id` int(5) NOT NULL,
  `message` varchar(500) NOT NULL,
  `chattime` time NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`chat_id`, `from_id`, `to_id`, `message`, `chattime`, `status`) VALUES
(47, 1, 3, 'Good Morning?', '06:24:56', 1),
(48, 1, 3, '', '06:25:01', 1),
(49, 1, 3, '', '06:25:03', 1),
(50, 1, 2, 'Hello?', '06:25:21', 1),
(51, 1, 3, 'Hello?', '06:25:39', 1),
(52, 1, 4, 'Good Morning?', '06:26:15', 1),
(53, 4, 1, 'Good morning too', '06:26:56', 1),
(54, 1, 4, 'Want to take a walk to town,during lunch time?', '00:00:00', 1),
(55, 4, 1, 'yes', '00:00:00', 2),
(56, 4, 1, 'let me know ', '00:00:00', 2),
(57, 4, 1, 'lets go', '00:00:00', 2),
(58, 4, 1, 'ok', '00:00:00', 2),
(59, 4, 1, 'ok', '00:00:00', 2),
(60, 4, 1, 'hey', '00:00:00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `cpayment`
--

CREATE TABLE `cpayment` (
  `name` varchar(100) NOT NULL,
  `id_no` int(8) NOT NULL,
  `receipt` varchar(40) NOT NULL,
  `dates` varchar(100) NOT NULL,
  `moneys` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpayment`
--

INSERT INTO `cpayment` (`name`, `id_no`, `receipt`, `dates`, `moneys`) VALUES
('owner', 5623588, '300', '2020-03-21', 'y234d');

-- --------------------------------------------------------

--
-- Table structure for table `custodian`
--

CREATE TABLE `custodian` (
  `name` varchar(20) CHARACTER SET armscii8 COLLATE armscii8_bin NOT NULL,
  `id` int(8) NOT NULL,
  `useremail` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `password` varchar(10) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `custodian`
--

INSERT INTO `custodian` (`name`, `id`, `useremail`, `password`) VALUES
('Admin', 30321983, 'admin@gmail.com', 'kenya2018');

-- --------------------------------------------------------

--
-- Table structure for table `farmer`
--

CREATE TABLE `farmer` (
  `farmer_id` int(10) NOT NULL,
  `n_ame` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `id_no` int(8) NOT NULL,
  `e_mail` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `p_assword` varchar(300) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `farmer`
--

INSERT INTO `farmer` (`farmer_id`, `n_ame`, `id_no`, `e_mail`, `p_assword`) VALUES
(1, 'larito', 6783891, 'larito@gmail.com', '$2y$10$6Mvqj.c9/aKC5BmAluPVHu2XRha2qlJ9nX/fu7H1fWpayJ8BBjjde'),
(2, 'psigei', 8909643, 'psigei@gmail.com', '$2y$10$09oH2UGQCQPAXojp4IulPeaYaif28qSfZ3cTEYILwo.9v6u8TzT3C'),
(3, 'Hillary Kemboi', 30321983, 'kipkemboi@gmail.com', '$2y$10$O/5pdQvq.lprlJouJLreXOYqhDx2MAINmlSZcjomHhE9ws4fVmxpO'),
(4, 'volleyball', 89450924, 'larry1@gmail.com', '$2y$10$XZoroG65o6/eLJYmEr4oxuBsFsFbOpjikO53FtIeu6CiZ2nqE6Ny.');

-- --------------------------------------------------------

--
-- Table structure for table `machine`
--

CREATE TABLE `machine` (
  `v_entries` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `image` longblob NOT NULL,
  `location` varchar(200) NOT NULL,
  `model` varchar(200) NOT NULL,
  `amount` varchar(200) NOT NULL,
  `rooms` varchar(10) NOT NULL,
  `checkin` varchar(200) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine`
--

INSERT INTO `machine` (`v_entries`, `name`, `owner`, `image`, `location`, `model`, `amount`, `rooms`, `checkin`, `status`) VALUES
INSERT INTO `machine` (`v_entries`, `name`, `owner`, `image`, `location`, `model`, `amount`, `rooms`, `checkin`, `status`) VALUES

-- --------------------------------------------------------

--
-- Table structure for table `machine_numbers`
--

CREATE TABLE `machine_numbers` (
  `Model` varchar(100) NOT NULL,
  `Figuires` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `machine_numbers`
--

INSERT INTO `machine_numbers` (`Model`, `Figuires`) VALUES
('Combine Harvestor', 0),
('Mowers', 1),
('Plantors', 30),
('Ploughing Tractors', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tractor_owner`
--

CREATE TABLE `tractor_owner` (
  `n_ame` varchar(30) CHARACTER SET latin1 NOT NULL,
  `id_no` int(8) NOT NULL,
  `e_mail` varchar(20) CHARACTER SET latin1 NOT NULL,
  `p_assword` varchar(300) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `tractor_owner`
--

INSERT INTO `tractor_owner` (`n_ame`, `id_no`, `e_mail`, `p_assword`) VALUES
('owner', 5623588, 'owner@gmail.com', '$2y$10$Y7wisx5PDbHT.QwiszJodub.qfOq/CGKeWHt1/zf5SYToHz9v6S9G');

-- --------------------------------------------------------

--
-- Table structure for table `userroles`
--

CREATE TABLE `userroles` (
  `id` int(11) NOT NULL,
  `Userrole` varchar(30) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `username` varchar(40) CHARACTER SET latin1 COLLATE latin1_general_cs NOT NULL,
  `id_no` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Dumping data for table `userroles`
--

INSERT INTO `userroles` (`id`, `Userrole`, `username`, `id_no`) VALUES
(10, 'Admin', 'admin@gmail.com', 0),
(22, 'User', 'larry@gmail.com', 0),
(24, 'User', 'david@gmail.com', 0),
(39, 'User', 'owner@gmail.com', 5623588),
(40, 'User', 'kipkemboi@gmail.com', 30321983),
(41, 'User', 'larito@gmail.com', 6783891),
(42, 'User', 'larry1@gmail.com', 89450924);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`code`),
  ADD KEY `idno` (`idno`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`chat_id`);

--
-- Indexes for table `cpayment`
--
ALTER TABLE `cpayment`
  ADD PRIMARY KEY (`moneys`),
  ADD KEY `id_no` (`id_no`);

--
-- Indexes for table `custodian`
--
ALTER TABLE `custodian`
  ADD UNIQUE KEY `email` (`useremail`);

--
-- Indexes for table `farmer`
--
ALTER TABLE `farmer`
  ADD PRIMARY KEY (`farmer_id`),
  ADD UNIQUE KEY `id_no` (`id_no`) USING BTREE;

--
-- Indexes for table `machine`
--
ALTER TABLE `machine`
  ADD PRIMARY KEY (`v_entries`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `machine_numbers`
--
ALTER TABLE `machine_numbers`
  ADD PRIMARY KEY (`Model`);

--
-- Indexes for table `tractor_owner`
--
ALTER TABLE `tractor_owner`
  ADD PRIMARY KEY (`id_no`);

--
-- Indexes for table `userroles`
--
ALTER TABLE `userroles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `chat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `farmer`
--
ALTER TABLE `farmer`
  MODIFY `farmer_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `machine`
--
ALTER TABLE `machine`
  MODIFY `v_entries` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `userroles`
--
ALTER TABLE `userroles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`idno`) REFERENCES `farmer` (`id_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cpayment`
--
ALTER TABLE `cpayment`
  ADD CONSTRAINT `cpayment_ibfk_1` FOREIGN KEY (`id_no`) REFERENCES `tractor_owner` (`id_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;