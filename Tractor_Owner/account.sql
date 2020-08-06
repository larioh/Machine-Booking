-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 03:45 PM
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
-- Table structure for table `account1`
--

CREATE TABLE `account1` (
  `n_ame` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `id_no` int(8) NOT NULL,
  `e_mail` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `p_assword` varchar(20) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `account1`
--

INSERT INTO `account` (`n_ame`, `id_no`, `e_mail`, `p_assword`) VALUES
('kirinyaga', 975432, 'kirinyaga@gmail.com', '0987654321'),
('larry', 1234567, 'larry@gmail.com', 'kenya'),
('benja', 1234568, 'benja@gmail.com', 'benja'),
('cosmas ngeno', 9456712, 'cossy@gmail.com', '12345678'),
('kevo ', 9876543, 'kevo@gmail.com', 'meru2015'),
('kimamo', 21436587, 'kimamo@gmail.com', '12345678'),
('David', 23465789, 'david@gmail.com', 'david'),
('brian', 30295982, 'brian@gmail.com', '12345678'),
('admin', 30321983, 'admin@gmail.com', 'kenya2018'),
('enock baba', 56478390, 'baba@gmail.com', '20202020'),
('victor', 56789034, 'qwerty@gmail.com', '123456789'),
('timmy talam', 56789243, 'timmy@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
