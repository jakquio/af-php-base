-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 11, 2012 at 10:53 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tmart_biz`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `First_Name` varchar(20) DEFAULT NULL,
  `Last_Name` varchar(15) DEFAULT NULL,
  `Address` varchar(25) DEFAULT NULL,
  `City` varchar(20) DEFAULT NULL,
  `State` varchar(15) DEFAULT NULL,
  `Zip` varchar(10) DEFAULT NULL,
  `Phone_number` varchar(25) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `UserType` varchar(30) DEFAULT NULL,
  `Cust_ID` int(6) NOT NULL AUTO_INCREMENT,
  `Password` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`Cust_ID`),
  KEY `First_Name` (`First_Name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`First_Name`, `Last_Name`, `Address`, `City`, `State`, `Zip`, `Phone_number`, `Email`, `UserType`, `Cust_ID`, `Password`) VALUES
('Seras', 'Korynne', '412 Souther Blvd', 'San Antonio', 'TX', '78224', '970-445-4572', 'skory@hotmail.com', 'Customer', 4, 'b2b6fdddbb8e71916df9d69459987b0b'),
('John', 'Wilmer', '901 Beach St', 'San Antonio', 'TX', '78253', '970-243-7435', 'jwilm@gmail.com', 'Customer', 6, 'b2b6fdddbb8e71916df9d69459987b0b'),
('Billy', 'Teila', '719 Junipero Ave', 'Long Beach', 'CA', '90813', '562-872-2398', 'bteila@gmail.com', 'Customer', 8, 'b2b6fdddbb8e71916df9d69459987b0b'),
('Johnathan', 'Lathers', '9201 Oceanpath #112', 'San Antonio', 'TX', '78229', '9704582741', 'jolath@yahoo.com', 'Customer', 9, 'b2b6fdddbb8e71916df9d69459987b0b'),
('Chantra', 'Em', '834 Culebra Rd', 'San Antonio', 'TX', '78250', '970-012-7877', 'cem@hotmail.com', 'ADMIN', 10, 'b2b6fdddbb8e71916df9d69459987b0b'),
('Brian', 'Knight', '871 Gullers', 'San Antonio', 'TX', '78229', '970-300-9587', 'Bknight@gmail.com', 'MGR', 11, 'b2b6fdddbb8e71916df9d69459987b0b'),
('Lori', 'Sanders', '340 Longern', 'Los Angeles', 'CA', '87104', '562-230-0199', 'Lsanders@aol.com', 'SALES', 12, 'b2b6fdddbb8e71916df9d69459987b0b'),
('John', 'Smith', '123 Fake St', 'long beach', 'CA', '78250', '970-222-4812', 'smith@fake.com', 'Customer', 13, 'b2b6fdddbb8e71916df9d69459987b0b');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `InventoryID` int(6) NOT NULL DEFAULT '0',
  `ProductID` varchar(8) DEFAULT NULL,
  `QoH` int(6) DEFAULT NULL,
  `Cost` decimal(10,2) DEFAULT NULL,
  `Price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`InventoryID`, `ProductID`, `QoH`, `Cost`, `Price`) VALUES
(100, 'PS-Vita', 15, '200.00', '249.99'),
(110, 'PS3', 30, '199.99', '299.99'),
(200, 'Xbox360', 25, '199.99', '299.99'),
(300, 'Wii', 50, '179.99', '219.99');

-- --------------------------------------------------------

--
-- Table structure for table `invoices`
--

CREATE TABLE IF NOT EXISTS `invoices` (
  `OrderID` int(8) NOT NULL AUTO_INCREMENT,
  `CustID` int(6) DEFAULT NULL,
  `OrderDate` date DEFAULT NULL,
  `CompleteDate` date DEFAULT NULL,
  PRIMARY KEY (`OrderID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE IF NOT EXISTS `order_items` (
  `OrderID` int(6) DEFAULT NULL,
  `ItemID` varchar(12) NOT NULL DEFAULT '',
  `Quantity` int(10) DEFAULT NULL,
  `InventoryID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `ID` varchar(8) NOT NULL DEFAULT '0',
  `Item_Desc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `Item_Desc`) VALUES
('PS-Vita', 'Latest Handheld introduced from Sony. Has increased processing than the PSP. ARM-Cortex Core processor, Rear Touchpads, Active front touch-screen, Augmented Reality, and Dual Analog sticks.'),
('PS3', 'Playstation 3 Entertainment Console from Sony. Full 3D rendered graphics, processor speeds, and Online Shopping Experience.'),
('Wii', 'Nintendo Wii Game Console. Bluetooth enabled with innovations in motion capture and gameplay. '),
('Xbox360', 'Microsoft Xbox 360 Gaming Console. Fully Implement Online Marketplace with Multiplayer Content, Powerful Graphics, and Third-Pary support from Developers.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
