-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2016 at 06:20 PM
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
-- Table structure for table `train_details`
--

CREATE TABLE `train_details` (
  `train_name` varchar(20) NOT NULL,
  `train_no` int(5) NOT NULL,
  `from_station` varchar(20) NOT NULL,
  `to_station` varchar(20) NOT NULL,
  `arrival` varchar(20) NOT NULL,
  `departure` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `train_details`
--

INSERT INTO `train_details` (`train_name`, `train_no`, `from_station`, `to_station`, `arrival`, `departure`) VALUES
('Shatabdi_express', 10198, 'Kolkata', 'Mumbai', '4:00 AM', '6:30 PM'),
('Gareebrath_express', 11270, 'Vellore', 'Delhi', '5:00 PM', '1:30 AM'),
('VIT_express', 12091, 'Mumbai', 'Delhi', '9:00 PM', '3:30 AM'),
('Shatabdi_express', 12290, 'Delhi', 'Vellore', '1:00 PM', '3:30 AM'),
('Vellore_express', 12291, 'Delhi', 'Vellore', '9:00 PM', '7:30 AM'),
('Kabali_express', 12456, 'Delhi', 'Mumbai', '12:45 PM', '3:00 AM'),
('VIT_express', 12457, 'Delhi', 'Mumbai', '6:45 PM', '9:00 AM'),
('Delhi_express', 14091, 'Mumbai', 'Delhi', '1:00 AM', '3:30 PM'),
('Delhi_express', 14098, 'Delhi', 'Mumbai', '1:00 AM', '3:30 PM'),
('Mumbai_express', 14198, 'Kolkata', 'Mumbai', '1:00 AM', '3:30 PM'),
('Gareebrath_express', 14270, 'Delhi', 'Vellore', '5:00 PM', '1:30 AM'),
('Kabali_express', 14491, 'Mumbai', 'Delhi', '5:00 AM', '5:30 PM'),
('Kolkata_express', 21320, 'Mumbai', 'Kolkata', '3:00 PM', '3:00 AM'),
('Vellore_express', 21370, 'Mumbai', 'Vellore', '3:00 PM', '3:00 AM'),
('VIT_express', 24370, 'Mumbai', 'Vellore', '9:00 PM', '1:00 AM'),
('Shatabdi_express', 24770, 'Mumbai', 'Vellore', '1:00 PM', '9:00 AM'),
('Kolkata_express', 31410, 'Vellore', 'Kolkata', '9:00 PM', '9:00 AM'),
('Shatabdi_express', 41290, 'Vellore', 'Delhi', '2:00 PM', '9:30 AM'),
('Delhi_express', 44770, 'Kolkata', 'Delhi', '4:00 AM', '4:00 PM'),
('Shatabdi_express', 54760, 'Kolkata', 'Delhi', '1:00 PM', '9:00 AM'),
('Superfast_express', 61410, 'Vellore', 'Mumbai', '9:00 PM', '9:00 AM'),
('Vardaan_express', 61411, 'Vellore', 'Kolkata', '6:00 PM', '6:00 AM'),
('Gareebrath_express', 70128, 'Kolkata', 'Vellore', '6:00 AM', '7:00 PM'),
('VIT_express', 70188, 'Kolkata', 'Vellore', '10:00 AM', '11:30 PM'),
('Vellore_express', 70198, 'Kolkata', 'Vellore', '7:00 AM', '9:30 PM'),
('Superfast_express', 81320, 'Mumbai', 'Kolkata', '1:00 PM', '9:00 AM'),
('Gareebrath_express', 90198, 'Kolkata', 'Mumbai', '7:00 AM', '9:30 PM'),
('Vellore_express', 91290, 'Vellore', 'Delhi', '7:00 PM', '11:30 AM'),
('Mumbai_express', 91410, 'Vellore', 'Mumbai', '3:00 PM', '3:00 AM'),
('New_express', 91419, 'Vellore', 'Kolkata', '2:00 PM', '2:00 AM'),
('Shatabdi_express', 91420, 'Mumbai', 'Kolkata', '8:00 PM', '2:00 AM'),
('Shatabdi_express', 91480, 'Vellore', 'Mumbai', '8:00 PM', '2:00 AM'),
('Kolkata_express', 92290, 'Delhi', 'Kolkata', '7:00 PM', '11:30 AM'),
('Super_express', 92770, 'Delhi', 'Kolkata', '9:00 PM', '13:00 PM'),
('Gareebrath_express', 92790, 'Delhi', 'Kolkata', '2:00 PM', '6:30 AM'),
('Super_express', 94770, 'Kolkata', 'Delhi', '9:00 PM', '13:00 PM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `train_details`
--
ALTER TABLE `train_details`
  ADD PRIMARY KEY (`train_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
