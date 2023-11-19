-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2022 at 01:48 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `train`
--

-- --------------------------------------------------------

--
-- Table structure for table `admindatabase`
--

CREATE TABLE `admindatabase` (
  `UserID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Joined_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admindatabase`
--

INSERT INTO `admindatabase` (`UserID`, `Name`, `Email`, `Gender`, `password`, `DoB`, `Joined_on`) VALUES
(1, 'Maramawit', 'marder@gmail.com', 'F', '123456', '1992-02-01', '2022-06-01 04:42:43'),
(2, 'Edil', 'edilfeysel@gmail.com', 'F', '1234567', '1992-01-01', '2022-06-03 04:42:43');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `class` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `Price` int(50) NOT NULL,
  `Route` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`source`, `dest`, `class`, `type`, `Price`, `Route`) VALUES
('Dire Dawa', 'Lebu', 'seat', 'single', 500, NULL),
('Dire Dawa', 'Lebu', 'bed', 'single', 590, NULL),
('Lebu', 'Dire Dawa', 'seat', 'single', 520, '-'),
('Lebu', 'Dire Dawa', 'bed', 'single', 600, '-'),
('Dire Dawa', 'Adama', 'seat', 'single', 400, '-'),
('Dire Dawa', 'Adama', 'bed', 'single', 500, NULL),
('Adama', 'Dire Dawa', 'seat', 'single', 400, '-'),
('Adama', 'Dire Dawa', 'bed', 'single', 500, '-'),
('Dire Dawa', 'Meso', 'seat', 'single', 500, 'Null'),
('Dire Dawa', 'Meso', 'bed', 'single', 580, 'Null'),
('Dire Dawa', 'Debre Zeyit', 'seat', 'single', 700, 'Null'),
('Dire Dawa', 'Debre Zeyit', 'bed', 'single', 750, 'Null'),
('Dire Dawa', 'Dukem', 'Seat', 'single', 500, 'Null'),
('Dire Dawa', 'Dukem', 'bed', 'single', 550, 'Null'),
('Lebu', 'Meso', 'seat', 'single', 500, 'Null'),
('Lebu', 'Meso', 'bed', 'single', 580, 'Null'),
('Lebu', 'Debre Zeyit', 'seat', 'single', 700, 'Null'),
('Lebu', 'Debre Zeyit', 'bed', 'single', 750, 'Null'),
('Lebu', 'Dukem', 'Seat', 'single', 500, NULL),
('Lebu', 'Dukem', 'bed', 'single', 550, 'Null');

-- --------------------------------------------------------

--
-- Table structure for table `traintt`
--

CREATE TABLE `traintt` (
  `Date` varchar(5) DEFAULT NULL,
  `Dire Dawa` varchar(5) DEFAULT NULL,
  `Lebu` varchar(5) DEFAULT NULL,
  `Adama` varchar(5) NOT NULL,
  `Mejo` varchar(5) NOT NULL,
  `Dukem` varchar(5) NOT NULL,
  `Debre Zeyit` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `T_No` int(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `source` varchar(50) NOT NULL,
  `dest` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Class` varchar(25) NOT NULL,
  `Type` varchar(25) NOT NULL,
  `NoOfpass` int(11) NOT NULL,
  `VISAcard_no` int(25) NOT NULL,
  `expmonth` int(2) NOT NULL,
  `expyear` int(2) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp(),
  `Amt` int(10) NOT NULL,
  `Route` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`T_No`, `email`, `source`, `dest`, `Name`, `Class`, `Type`, `NoOfpass`, `VISAcard_no`, `expmonth`, `expyear`, `Date`, `Amt`, `Route`) VALUES
(5, 'yohanes@gmail.com', 'Adama', 'Dire Dawa', 'Yohanes melake', 'seat', 'Single', 2, 212345, 11, 2029, '2022-06-28 01:11:50', 800, 'Adama-Dire Dawa');

-- --------------------------------------------------------

--
-- Table structure for table `userdatabase`
--

CREATE TABLE `userdatabase` (
  `UserID` int(10) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `DoB` date NOT NULL,
  `Phone` varchar(10) NOT NULL,
  `Joined_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userdatabase`
--

INSERT INTO `userdatabase` (`UserID`, `Name`, `Email`, `Gender`, `password`, `DoB`, `Phone`, `Joined_on`) VALUES
(1, 'Ruth', 'ruth@gmail.com', 'F', '123456', '1992-01-10', '0999999999', '2022-06-15 05:04:49'),
(3, 'nati', 'nati@gmail.com', 'M', '123456', '1991-01-10', '1999999999', '2022-06-15 15:32:53'),
(4, 'Entisar', 'entisarumar@gmail.com', 'F', '000777', '1969-09-08', '0988223344', '2022-06-26 09:38:01'),
(5, 'Yohanes melake', 'yohanes@gmail.com', 'M', '000929', '1963-09-08', '0915767316', '2022-06-27 12:17:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `traintt`
--
ALTER TABLE `traintt`
  ADD UNIQUE KEY `Date` (`Date`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`T_No`);

--
-- Indexes for table `userdatabase`
--
ALTER TABLE `userdatabase`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `T_No` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `userdatabase`
--
ALTER TABLE `userdatabase`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
