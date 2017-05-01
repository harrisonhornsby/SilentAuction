-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: db126b.pair.com
-- Generation Time: May 01, 2017 at 05:55 PM
-- Server version: 5.6.31-log
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bmoore08_SilentAuction`
--

-- --------------------------------------------------------

--
-- Table structure for table `Bidder`
--

CREATE TABLE `Bidder` (
  `Id` int(11) NOT NULL,
  `Name` varchar(75) NOT NULL,
  `Address` varchar(75) NOT NULL,
  `CellNumber` varchar(20) NOT NULL,
  `HomeNumber` varchar(20) NOT NULL,
  `Email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Category`
--

CREATE TABLE `Category` (
  `Id` int(11) NOT NULL,
  `Description` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Category`
--

INSERT INTO `Category` (`Id`, `Description`) VALUES
(1, 'Miscellaneous');

-- --------------------------------------------------------

--
-- Table structure for table `Donors`
--

CREATE TABLE `Donors` (
  `Id` int(11) NOT NULL,
  `BusinessName` varchar(75) NOT NULL,
  `ContactName` varchar(75) NOT NULL,
  `ContactEmail` varchar(75) NOT NULL,
  `ContactTitle` varchar(75) NOT NULL,
  `Address` varchar(75) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(2) NOT NULL,
  `ZipCode` varchar(5) NOT NULL,
  `TaxReceipt` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Items`
--

CREATE TABLE `Items` (
  `Id` int(11) NOT NULL,
  `Description` varchar(75) NOT NULL,
  `RetailValue` decimal(10,2) NOT NULL,
  `DonorId` int(11) NOT NULL,
  `LotId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Lot`
--

CREATE TABLE `Lot` (
  `Id` int(11) NOT NULL,
  `Description` varchar(75) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `WinningBidderId` int(11) DEFAULT NULL,
  `Delivered` varchar(3) DEFAULT 'No',
  `WinningAmount` decimal(10,2) NOT NULL,
  `Paid` varchar(3) NOT NULL DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Lot`
--

INSERT INTO `Lot` (`Id`, `Description`, `CategoryId`, `WinningBidderId`, `Delivered`, `WinningAmount`, `Paid`) VALUES
(1, 'Default', 1, NULL, 'No', '0.00', 'No');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Bidder`
--
ALTER TABLE `Bidder`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Category`
--
ALTER TABLE `Category`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Donors`
--
ALTER TABLE `Donors`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `Items`
--
ALTER TABLE `Items`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `LotId` (`LotId`),
  ADD KEY `DonorId` (`DonorId`);

--
-- Indexes for table `Lot`
--
ALTER TABLE `Lot`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `WinningBidderId` (`WinningBidderId`),
  ADD KEY `CategoryId` (`CategoryId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `Donors`
--
ALTER TABLE `Donors`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `Lot`
--
ALTER TABLE `Lot`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Items`
--
ALTER TABLE `Items`
  ADD CONSTRAINT `Items_ibfk_1` FOREIGN KEY (`DonorId`) REFERENCES `Donors` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_items_lots` FOREIGN KEY (`LotId`) REFERENCES `Lot` (`Id`);

--
-- Constraints for table `Lot`
--
ALTER TABLE `Lot`
  ADD CONSTRAINT `Lot_ibfk_2` FOREIGN KEY (`CategoryId`) REFERENCES `Category` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
