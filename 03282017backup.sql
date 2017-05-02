
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Table structure for table `Bidder`
--

CREATE TABLE `Bidder` (
  `Id` int(11) NOT NULL,
  `Name` varchar(75) NOT NULL,
  `Address` varchar(75) NOT NULL,
  `CellNumber` varchar(10) NOT NULL,
  `HomeNumber` varchar(10) NOT NULL,
  `Email` varchar(200) NOT NULL,
  `Paid` tinyint(4) NOT NULL
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
(1, 'Tools');

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

--
-- Dumping data for table `Donors`
--

INSERT INTO `Donors` (`Id`, `BusinessName`, `ContactName`, `ContactEmail`, `ContactTitle`, `Address`, `City`, `State`, `ZipCode`, `TaxReceipt`) VALUES
(20, 'Harrison\'s Biz', 'Harrison', 'harrison.hornsby@gmail.com', 'Boss', '123 Virginia Beach', 'Virginia Beach', 'VA', '23452', 1),
(21, 'Lauren\'s Biz', 'Lauren', 'Lauren.Hornsby@gmail.com', 'Boss Lady', '123 Street', 'Virginia Beach', 'VA', '22923', 0),
(22, 'Bob\'s Biz', 'Harrison', 'harrison.hornsby@gmail.com', 'Boss', '123 Virginia Beach', 'Virginia Beach', 'VA', '23452', 0),
(23, 'Ryan\'s Biz', 'Ryan', 'asdf@email.com', 'Boss', '123 Street', 'Virginia Beach', 'Vi', '12352', 0);

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

--
-- Dumping data for table `Items`
--

INSERT INTO `Items` (`Id`, `Description`, `RetailValue`, `DonorId`, `LotId`) VALUES
(14, 'Hammer', '50.00', 20, 1),
(15, 'Saw', '15.00', 20, 1),
(17, 'Screwdriver', '2.00', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Lot`
--

CREATE TABLE `Lot` (
  `Id` int(11) NOT NULL,
  `Description` varchar(75) NOT NULL,
  `CategoryId` int(11) NOT NULL,
  `WinningBidderId` int(11) DEFAULT NULL,
  `Delivered` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Lot`
--

INSERT INTO `Lot` (`Id`, `Description`, `CategoryId`, `WinningBidderId`, `Delivered`) VALUES
(1, 'Tool Lot', 1, NULL, NULL);

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
  ADD KEY `LotId_2` (`LotId`),
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
-- AUTO_INCREMENT for table `Bidder`
--
ALTER TABLE `Bidder`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `Category`
--
ALTER TABLE `Category`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `Donors`
--
ALTER TABLE `Donors`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `Items`
--
ALTER TABLE `Items`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
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
  ADD CONSTRAINT `Lot_ibfk_1` FOREIGN KEY (`WinningBidderId`) REFERENCES `Bidder` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Lot_ibfk_2` FOREIGN KEY (`CategoryId`) REFERENCES `Category` (`Id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
