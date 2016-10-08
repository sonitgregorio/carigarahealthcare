-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2016 at 07:34 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `carigara`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_branch`
--

CREATE TABLE IF NOT EXISTS `tbl_branch` (
`id` int(11) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_branch`
--

INSERT INTO `tbl_branch` (`id`, `description`) VALUES
(1, 'Branch 1'),
(2, 'Branch 3'),
(3, 'branch 3'),
(4, 'branch 4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_consultation`
--

CREATE TABLE IF NOT EXISTS `tbl_consultation` (
`id` int(11) NOT NULL,
  `pid` int(11) NOT NULL,
  `symptoms` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `findings` varchar(60) NOT NULL,
  `stats` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_consultation`
--

INSERT INTO `tbl_consultation` (`id`, `pid`, `symptoms`, `date`, `findings`, `stats`) VALUES
(1, 10, 'Lagdos with oro oro', '2016-09-27', 'Utot Ubo', 0),
(2, 11, 'utut obo', '2016-10-06', 'Kisspilitst', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventory`
--

CREATE TABLE IF NOT EXISTS `tbl_inventory` (
`id` int(11) NOT NULL,
  `med_desc` varchar(120) NOT NULL,
  `price` double(11,2) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_inventory`
--

INSERT INTO `tbl_inventory` (`id`, `med_desc`, `price`, `qty`) VALUES
(1, 'Biogesic', 20.00, 0),
(13, 'Biogesics', 20.00, 22),
(14, 'Biogesicss', 20.00, 11),
(15, 'Biogesicssssss', 20.00, 11),
(16, 'Biogesicsssssssss', 20.00, 11),
(17, 'Biogesict', 20.00, 11);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_party`
--

CREATE TABLE IF NOT EXISTS `tbl_party` (
`id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `civil_status` varchar(20) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `email_address` varchar(25) NOT NULL,
  `position` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `dob` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_party`
--

INSERT INTO `tbl_party` (`id`, `firstname`, `lastname`, `address`, `contact`, `civil_status`, `gender`, `email_address`, `position`, `age`, `dob`) VALUES
(10, 'sdasd', 'tamadin', 'asdasd', '09172580624', 'Divorced', 'Femal', '', 6, 90, '11/02/2015'),
(11, 'asd', 'sadasdsad', 'weqwe', 'qweqweq', 'Maried', 'Femal', '', 6, 9, '2007-09-26'),
(12, 'Doctors', 'Doctor', 'doctor street', '09172580624', 'Single', 'Male', 'doctor@gmail.com', 4, 0, ''),
(13, 'front', 'front', 'front street', '09172580624', 'Single', 'Male', 'front@gmail.com', 3, 0, ''),
(14, 'pharma', 'pharma', 'pharma street', '09172580624', 'Maried', 'Femal', 'pharma@gmail.com', 2, 0, ''),
(15, 'admins', 'admin', 'admin street', '09172580624', 'Single', 'Male', 'admin@gmail.com', 1, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_position`
--

CREATE TABLE IF NOT EXISTS `tbl_position` (
`id` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_position`
--

INSERT INTO `tbl_position` (`id`, `description`) VALUES
(1, 'Admin'),
(2, 'Pharmacist'),
(3, 'Front Desk'),
(4, 'Doctor');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_prescription`
--

CREATE TABLE IF NOT EXISTS `tbl_prescription` (
`id` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `mid` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `note` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_prescription`
--

INSERT INTO `tbl_prescription` (`id`, `cid`, `mid`, `qty`, `note`) VALUES
(4, 1, 14, 2, 'Pag hugas kada adlaw'),
(5, 1, 1, 1, 'ok'),
(6, 2, 13, 6, '2'),
(7, 2, 1, 2, '3x a day'),
(8, 2, 1, 2, '3x a day'),
(9, 2, 1, 1, '20 kada adlaw');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_queue`
--

CREATE TABLE IF NOT EXISTS `tbl_queue` (
`id` int(11) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_supply`
--

CREATE TABLE IF NOT EXISTS `tbl_supply` (
`id` int(11) NOT NULL,
  `equipment` varchar(20) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double(11,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_supply`
--

INSERT INTO `tbl_supply` (`id`, `equipment`, `quantity`, `amount`) VALUES
(1, 'dfdfd', 11, 20.00),
(2, 'dfdfd', 11, 20.00),
(3, 'dfdfd', 11, 20.00),
(4, 'dfdfd', 11, 20.00),
(5, 'dfdfd', 11, 20.00),
(6, 'dfdfd', 11, 20.00),
(7, 'dfdfd', 11, 20.00),
(8, 'dfdfd', 11, 20.00),
(9, 'dfdfd', 22, 12.00),
(10, 'sad', 22, 2.00),
(11, 'asd', 30, 20.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE IF NOT EXISTS `tbl_users` (
`id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `position` int(11) NOT NULL,
  `pid` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `username`, `password`, `position`, `pid`) VALUES
(10, 'doctor', '40be4e59b9a2a2b5dffb918c0e86b3d7', 4, 12),
(11, 'front', '40be4e59b9a2a2b5dffb918c0e86b3d7', 3, 13),
(12, 'pharma', '40be4e59b9a2a2b5dffb918c0e86b3d7', 2, 14),
(13, 'admin', '40be4e59b9a2a2b5dffb918c0e86b3d7', 1, 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_consultation`
--
ALTER TABLE `tbl_consultation`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_party`
--
ALTER TABLE `tbl_party`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_position`
--
ALTER TABLE `tbl_position`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_queue`
--
ALTER TABLE `tbl_queue`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_supply`
--
ALTER TABLE `tbl_supply`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_branch`
--
ALTER TABLE `tbl_branch`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_consultation`
--
ALTER TABLE `tbl_consultation`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_inventory`
--
ALTER TABLE `tbl_inventory`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tbl_party`
--
ALTER TABLE `tbl_party`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_position`
--
ALTER TABLE `tbl_position`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_prescription`
--
ALTER TABLE `tbl_prescription`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_queue`
--
ALTER TABLE `tbl_queue`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_supply`
--
ALTER TABLE `tbl_supply`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
