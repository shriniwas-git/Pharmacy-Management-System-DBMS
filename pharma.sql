-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2023 at 10:03 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharma1`
--

-- --------------------------------------------------------

--
-- Table structure for table `billing`
--

CREATE TABLE `billing` (
  `S.No` int(11) NOT NULL,
  `First Name` varchar(80) NOT NULL,
  `Last Name` varchar(80) NOT NULL,
  `City` varchar(80) NOT NULL,
  `Address` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Phone` varchar(80) NOT NULL,
  `Notes` varchar(800) NOT NULL,
  `Drug Name` varchar(80) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `billing`
--

INSERT INTO `billing` (`S.No`, `First Name`, `Last Name`, `City`, `Address`, `Email`, `Phone`, `Notes`, `Drug Name`, `Quantity`, `Amount`) VALUES
(1, 'Hello', 'Test', 'Delhi', 'gcuid', 'r@gmail.com', '542251425', 'Hello this is notes', 'Chanca Piedra', 3, 897);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `S.No` int(11) NOT NULL,
  `Name` varchar(80) NOT NULL,
  `Username` varchar(80) NOT NULL,
  `Password` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`S.No`, `Name`, `Username`, `Password`) VALUES
(1, 'test1', 'test1', '7c26c93b402f91760943aaa7cdec38a7b7020e28319d2b7bcc97707a765cbb61');

-- --------------------------------------------------------

--
-- Table structure for table `drugs`
--

CREATE TABLE `drugs` (
  `S.No` int(11) NOT NULL,
  `Drug Name` varchar(80) NOT NULL,
  `MRP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `drugs`
--

INSERT INTO `drugs` (`S.No`, `Drug Name`, `MRP`) VALUES
(0, '0', 0),
(1, 'Chanca Pied', 299),
(1, 'Chanca Piedra', 299),
(2, 'Bioderma', 399),
(3, 'Umcka Cold Care', 270),
(4, 'Cetyl Pure', 599),
(5, 'CLA Core', 799),
(6, 'Poo Pourri', 999);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `S.No` int(11) NOT NULL,
  `First Name` varchar(80) NOT NULL,
  `Last Name` varchar(80) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Message` varchar(500) NOT NULL,
  `Subject` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`S.No`, `First Name`, `Last Name`, `Email`, `Message`, `Subject`) VALUES
(1, 'Hello', 'hii', 'r@gmail.com', 'uguiwq eue ckaguuiw ', 'oiyfwuoe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `billing`
--
ALTER TABLE `billing`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`S.No`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `billing`
--
ALTER TABLE `billing`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `S.No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
