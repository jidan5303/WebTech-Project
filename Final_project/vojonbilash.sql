-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2022 at 04:36 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vojonbilash`
--

-- --------------------------------------------------------

--
-- Table structure for table `customerdata`
--

CREATE TABLE `customerdata` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` varchar(30) NOT NULL,
  `Mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customerdata`
--

INSERT INTO `customerdata` (`Id`, `Name`, `Email`, `Username`, `Password`, `Gender`, `Mobile`) VALUES
(1, 'Rafi', 'rafii@gmail.com', 'rafi', 'tom1234', 'Male', 1234567891),
(2, 'Jerry', 'jerry12@gmail.com', 'jerry', '$2y$05$t5cnX9skgavZQDuPCP5sGet', 'Male', 466576787),
(5, 'Sammy', 'sam@gmail.com', 'sam', '$2y$05$0XQ0.EA4N5A4jD5iWayfeeN', 'Male', 987654321),
(8, 'Robi', 'robi@gmail.com', 'robi', '1111', 'Male', 1780236982);

-- --------------------------------------------------------

--
-- Table structure for table `deliveryboydata`
--

CREATE TABLE `deliveryboydata` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Age` int(11) NOT NULL,
  `Mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deliveryboydata`
--

INSERT INTO `deliveryboydata` (`Id`, `Name`, `Email`, `Username`, `Password`, `Gender`, `Age`, `Mobile`) VALUES
(2, 'Alif', 'alif@gmail.com', 'alif_D', '666666', 'Male', 22, 1780236981),
(3, 'Raj', 'raj@gmail.com', 'raj_D', '777777', 'Male', 23, 1780236985);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Gender` text NOT NULL,
  `Mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Id`, `Name`, `Email`, `Username`, `Password`, `Gender`, `Mobile`) VALUES
(1, 'Afif', 'afif@gmail.com', 'afif123', 'afif1234', 'Male', 1234567891),
(2, 'Jidan Rahman', 'jidan@gmail.com', 'jidan', '4444', 'male', 987654321),
(5, 'Alinur', 'ali@gmail.com', 'alinur', '5678', 'male', 65314677),
(6, 'Afif Hossain', 'afif@gmail.com', 'afif01', '4444', 'male', 2147483647),
(9, 'Rafi', 'rafi@gmail.com', 'rafi', '666666', 'male', 1234566799);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `Id` int(11) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Report` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`Id`, `Category`, `Username`, `Report`) VALUES
(1, 'Delivery boy', 'amin_D', 'Can\'t edit my profile'),
(3, 'Customer', 'rajib', 'Can\'t confirm orders'),
(4, 'Restaurent owner', 'amit_O', 'Can\'t change menu'),
(5, 'Customer', 'rafi', 'Can\'t cancel order');

-- --------------------------------------------------------

--
-- Table structure for table `restaurantdata`
--

CREATE TABLE `restaurantdata` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `OwnerName` varchar(30) NOT NULL,
  `Category` varchar(30) NOT NULL,
  `Location` varchar(30) NOT NULL,
  `Mobile` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurantdata`
--

INSERT INTO `restaurantdata` (`Id`, `Name`, `OwnerName`, `Category`, `Location`, `Mobile`) VALUES
(1, 'Khanas', 'Afif', 'Fast food restaurant', 'Dhaka', 1234567891),
(2, 'Chillies', 'Razib', 'Thai Restaurant', 'Dhaka', 1780236988),
(3, 'Pizza Hut', 'Arif', 'Pizzerias', 'Dhaka', 1780236982);

-- --------------------------------------------------------

--
-- Table structure for table `restaurantownerdata`
--

CREATE TABLE `restaurantownerdata` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `RestaurantName` varchar(50) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `MobileNumber` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `restaurantownerdata`
--

INSERT INTO `restaurantownerdata` (`Id`, `Name`, `Email`, `Username`, `RestaurantName`, `Gender`, `MobileNumber`) VALUES
(2, 'Afif', 'afif@outlook.com', 'afif_O', 'Pabulum', 'Male', 1712178009),
(3, 'Saif', 'saif@gmail.com', 'saif_O', 'Pizza Hut', 'Male', 1712178002),
(4, 'Asif', 'asif@gmail.com', 'asif_O', 'Cafe Rio', 'Male', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customerdata`
--
ALTER TABLE `customerdata`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `deliveryboydata`
--
ALTER TABLE `deliveryboydata`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `restaurantdata`
--
ALTER TABLE `restaurantdata`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `restaurantownerdata`
--
ALTER TABLE `restaurantownerdata`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customerdata`
--
ALTER TABLE `customerdata`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `deliveryboydata`
--
ALTER TABLE `deliveryboydata`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `restaurantdata`
--
ALTER TABLE `restaurantdata`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `restaurantownerdata`
--
ALTER TABLE `restaurantownerdata`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
