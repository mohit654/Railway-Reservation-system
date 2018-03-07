-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 06:19 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trains`
--

-- --------------------------------------------------------

--
-- Table structure for table `fare`
--

CREATE TABLE `fare` (
  `train_no` int(5) NOT NULL,
  `class` varchar(20) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fare`
--

INSERT INTO `fare` (`train_no`, `class`, `price`) VALUES
(11270, 'Class-1A', 4500),
(11270, 'Class-2A', 3500),
(11270, 'Class-3A', 2500),
(12091, 'Class-1A', 4500),
(12091, 'Class-2A', 3500),
(12091, 'Class-3A', 2500),
(12290, 'Class-3A', 2500),
(12290, 'Class-2A', 3500),
(12290, 'Class-1A', 4500),
(12291, 'Class-1A', 4500),
(12291, 'Class-2A', 3500),
(12291, 'Class-3A', 2500),
(12456, 'Class-1A', 4500),
(12456, 'Class-2A', 3500),
(12456, 'Class-3A', 2500),
(12457, 'Class-1A', 4500),
(12457, 'Class-2A', 3500),
(12457, 'Class-3A', 2500),
(14091, 'Class-1A', 4500),
(14091, 'Class-2A', 3500),
(14091, 'Class-3A', 2500),
(14098, 'Class-1A', 4500),
(14098, 'Class-2A', 3500),
(14098, 'Class-3A', 2500),
(14270, 'Class-1A', 4500),
(14270, 'Class-2A', 3500),
(14270, 'Class-3A', 2500),
(14491, 'Class-1A', 4500),
(14491, 'Class-2A', 3500),
(14491, 'Class-3A', 2500),
(21320, 'Class-1A', 4500),
(21320, 'Class-2A', 3500),
(21320, 'Class-3A', 2500),
(21370, 'Class-1A', 4500),
(21370, 'Class-2A', 3500),
(21370, 'Class-3A', 2500),
(24370, 'Class-1A', 4500),
(24370, 'Class-2A', 3500),
(24370, 'Class-3A', 2500),
(24770, 'Class-1A', 4500),
(24770, 'Class-2A', 3500),
(24770, 'Class-3A', 2500),
(31410, 'Class-1A', 4500),
(31410, 'Class-2A', 3500),
(31410, 'Class-3A', 2500),
(41290, 'Class-1A', 4500),
(41290, 'Class-2A', 3500),
(41290, 'Class-3A', 2500),
(44770, 'Class-1A', 4500),
(44770, 'Class-2A', 3500),
(44770, 'Class-3A', 2500),
(54760, 'Class-1A', 4500),
(54760, 'Class-2A', 3500),
(54760, 'Class-3A', 2500),
(61410, 'Class-1A', 4500),
(61410, 'Class-2A', 3500),
(61410, 'Class-3A', 2500),
(61411, 'Class-1A', 4500),
(61411, 'Class-2A', 3500),
(61411, 'Class-3A', 2500),
(81320, 'Class-1A', 4500),
(81320, 'Class-2A', 3500),
(81320, 'Class-3A', 2500),
(91290, 'Class-1A', 4500),
(91290, 'Class-2A', 3500),
(91290, 'Class-3A', 2500),
(91410, 'Class-1A', 4500),
(91410, 'Class-2A', 3500),
(91410, 'Class-3A', 2500),
(91419, 'Class-1A', 4500),
(91419, 'Class-2A', 3500),
(91419, 'Class-3A', 2500),
(91420, 'Class-1A', 4500),
(91420, 'Class-2A', 3500),
(91420, 'Class-3A', 2500),
(91480, 'Class-1A', 4500),
(91480, 'Class-2A', 3500),
(91480, 'Class-3A', 2500),
(92290, 'Class-1A', 4500),
(92290, 'Class-2A', 3500),
(92290, 'Class-3A', 2500),
(92770, 'Class-1A', 4500),
(92770, 'Class-2A', 3500),
(92770, 'Class-3A', 2500),
(92790, 'Class-1A', 4500),
(92790, 'Class-2A', 3500),
(92790, 'Class-3A', 2500),
(94770, 'Class-1A', 4500),
(94770, 'Class-2A', 3500),
(94770, 'Class-3A', 2500),
(14198, 'Class-1A', 4500),
(14198, 'Class-2A', 3500),
(14198, 'Class-3A', 2500),
(10198, 'Class-1A', 4500),
(10198, 'Class-2A', 3500),
(10198, 'Class-3A', 2500),
(90198, 'Class-1A', 4500),
(90198, 'Class-2A', 3500),
(90198, 'Class-3A', 2500),
(70198, 'Class-1A', 4500),
(70198, 'Class-2A', 3500),
(70198, 'Class-3A', 2500),
(70188, 'Class-1A', 4500),
(70188, 'Class-2A', 3500),
(70188, 'Class-3A', 2500),
(70128, 'Class-1A', 4500),
(70128, 'Class-2A', 3500),
(70128, 'Class-3A', 2500);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
