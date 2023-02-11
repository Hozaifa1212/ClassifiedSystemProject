-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2022 at 12:27 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classified-system`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `Name` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `User_Name` varchar(70) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `owner_info`
--

CREATE TABLE `owner_info` (
  `Name` varchar(70) NOT NULL,
  `Email` varchar(70) NOT NULL,
  `User_Name` varchar(70) NOT NULL,
  `Password` varchar(70) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_info`
--
ALTER TABLE `employee_info`
  ADD PRIMARY KEY (`User_Name`),
  ADD UNIQUE KEY `Emp_User_Name` (`User_Name`),
  ADD UNIQUE KEY `Emp_Email` (`Email`);

--
-- Indexes for table `owner_info`
--
ALTER TABLE `owner_info`
  ADD PRIMARY KEY (`User_Name`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `User_Name` (`User_Name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
