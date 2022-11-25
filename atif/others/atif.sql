-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2021 at 08:32 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atif`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `chemicals`
--

CREATE TABLE `chemicals` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(11) NOT NULL,
  `c_unit` varchar(255) NOT NULL,
  `CreationDate` varchar(255) NOT NULL,
  `UpdationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemicals`
--

INSERT INTO `chemicals` (`c_id`, `c_name`, `c_unit`, `CreationDate`, `UpdationDate`) VALUES
(20, 'Alcohol', 'Kilogram (kg)', '2021-06-21 09:15:18 am', ''),
(21, 'Carbon', 'Milligram (mg)', '2021-06-21 10:09:57 am', ''),
(23, 'Sodium', 'Liter (L)', '2021-06-22 11:31:52 am', '');

-- --------------------------------------------------------

--
-- Table structure for table `chemical_consume`
--

CREATE TABLE `chemical_consume` (
  `id` int(11) NOT NULL,
  `c_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemical_consume`
--

INSERT INTO `chemical_consume` (`id`, `c_id`, `t_id`, `quantity`, `cdate`) VALUES
(5, 20, 1, 23, '2021-06-21 10:38:37 am'),
(6, 20, 2, 5, '2021-06-21 10:40:11 am'),
(7, 21, 1, 5, '2021-06-21 10:57:36 am'),
(8, 20, 2, 3, '2021-06-21 10:58:07 am');

-- --------------------------------------------------------

--
-- Table structure for table `chemical_stock`
--

CREATE TABLE `chemical_stock` (
  `id` int(11) NOT NULL,
  `chemical_id` int(11) NOT NULL,
  `c_stock` int(11) NOT NULL DEFAULT '0',
  `CreationDate` varchar(255) NOT NULL,
  `UpdationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chemical_stock`
--

INSERT INTO `chemical_stock` (`id`, `chemical_id`, `c_stock`, `CreationDate`, `UpdationDate`) VALUES
(16, 20, 3, '2021-06-21 09:20:47 am', '2021-06-22 11:33:55 am'),
(19, 21, 18, '2021-06-21 10:53:30 am', '2021-06-21 10:57:36 am'),
(21, 23, 0, '2021-06-22 11:31:52 am', '');

-- --------------------------------------------------------

--
-- Table structure for table `glassware`
--

CREATE TABLE `glassware` (
  `id` int(22) NOT NULL,
  `name` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `CreationDate` varchar(255) NOT NULL,
  `UpdationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glassware`
--

INSERT INTO `glassware` (`id`, `name`, `size`, `CreationDate`, `UpdationDate`) VALUES
(2, 'Beaker', '500ml', '2021-06-22 10:27:02 am', ''),
(3, 'Cubic', '120ml', '2021-06-22 10:58:59 am', '');

-- --------------------------------------------------------

--
-- Table structure for table `glassware_consume`
--

CREATE TABLE `glassware_consume` (
  `id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cdate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glassware_consume`
--

INSERT INTO `glassware_consume` (`id`, `g_id`, `t_id`, `quantity`, `cdate`) VALUES
(2, 2, 1, 2, '2021-06-22 10:51:47 am'),
(3, 2, 2, 2, '2021-06-22 11:00:07 am');

-- --------------------------------------------------------

--
-- Table structure for table `glassware_stock`
--

CREATE TABLE `glassware_stock` (
  `id` int(11) NOT NULL,
  `g_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL DEFAULT '0',
  `CreationDate` varchar(255) NOT NULL,
  `UpdationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glassware_stock`
--

INSERT INTO `glassware_stock` (`id`, `g_id`, `stock`, `CreationDate`, `UpdationDate`) VALUES
(2, 2, 0, '2021-06-22 10:27:02 am', '2021-06-22 11:00:07 am'),
(3, 3, 0, '2021-06-22 10:58:59 am', '');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `CreationDate` varchar(255) NOT NULL,
  `UpdationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `CreationDate`, `UpdationDate`) VALUES
(1, 'Dr. Muhammad Atif', '2021-06-21 09:56:32 am', '2021-06-21 10:03:08 am'),
(2, 'Dr. Asim Fareed', '2021-06-21 09:57:39 am', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chemicals`
--
ALTER TABLE `chemicals`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `chemical_consume`
--
ALTER TABLE `chemical_consume`
  ADD PRIMARY KEY (`id`),
  ADD KEY `c_id` (`c_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `chemical_stock`
--
ALTER TABLE `chemical_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chemical_id` (`chemical_id`);

--
-- Indexes for table `glassware`
--
ALTER TABLE `glassware`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `glassware_consume`
--
ALTER TABLE `glassware_consume`
  ADD PRIMARY KEY (`id`),
  ADD KEY `g_id` (`g_id`),
  ADD KEY `t_id` (`t_id`);

--
-- Indexes for table `glassware_stock`
--
ALTER TABLE `glassware_stock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `g_id` (`g_id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chemicals`
--
ALTER TABLE `chemicals`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `chemical_consume`
--
ALTER TABLE `chemical_consume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `chemical_stock`
--
ALTER TABLE `chemical_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `glassware`
--
ALTER TABLE `glassware`
  MODIFY `id` int(22) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `glassware_consume`
--
ALTER TABLE `glassware_consume`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `glassware_stock`
--
ALTER TABLE `glassware_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chemical_consume`
--
ALTER TABLE `chemical_consume`
  ADD CONSTRAINT `chemical_consume_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `chemicals` (`c_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chemical_consume_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `chemical_stock`
--
ALTER TABLE `chemical_stock`
  ADD CONSTRAINT `chemical_stock_ibfk_1` FOREIGN KEY (`chemical_id`) REFERENCES `chemicals` (`c_id`) ON DELETE CASCADE;

--
-- Constraints for table `glassware_consume`
--
ALTER TABLE `glassware_consume`
  ADD CONSTRAINT `glassware_consume_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `glassware` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `glassware_consume_ibfk_2` FOREIGN KEY (`t_id`) REFERENCES `teachers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `glassware_stock`
--
ALTER TABLE `glassware_stock`
  ADD CONSTRAINT `glassware_stock_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `glassware` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
