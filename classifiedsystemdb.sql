-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2022 at 12:40 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easystore`
--

-- --------------------------------------------------------

--
-- Table structure for table `admininfo`
--

CREATE TABLE `admininfo` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `contNo` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `aid` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admininfo`
--

INSERT INTO `admininfo` (`fname`, `lname`, `age`, `gen`, `contNo`, `email`, `aid`, `pass`) VALUES
('Hozaifa', 'Shafiq', 21, 'Male', 1722175515, 'shafiq@gmail.com', 1001, '123456');


-- --------------------------------------------------------

--
-- Table structure for table `cashierinfo`
--

CREATE TABLE `cashierinfo` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `contNo` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cid` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashierinfo`
--

INSERT INTO `cashierinfo` (`fname`, `lname`, `age`, `gen`, `contNo`, `email`, `cid`, `pass`) VALUES
('Nafiz', 'Ahmed', 25, 'Male', 1513456345, 'nafiz@gmail.com', 3001, '123456');

-- --------------------------------------------------------

--
-- Table structure for table `cashiertoadmin`
--

CREATE TABLE `cashiertoadmin` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cashiertoadmin`
--

INSERT INTO `cashiertoadmin` (`name`, `email`, `comment`) VALUES
('Fariya', 'prity@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ques` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `managerinfo`
--

CREATE TABLE `managerinfo` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `contNo` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mid` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `edu` varchar(100) NOT NULL,
  `exp` int(11) NOT NULL,
  `preadd` varchar(100) NOT NULL,
  `peradd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managerinfo`
--

INSERT INTO `managerinfo` (`fname`, `lname`, `age`, `gen`, `contNo`, `email`, `mid`, `pass`, `edu`, `exp`, `preadd`, `peradd`) VALUES
('Nafiz', 'Ahmed', 25, 'Male', 1722175515, 'nafiz@gmail.com', 2001, '12345678', 'BSC', 1, 'Mirpur', 'Nirpur');

-- --------------------------------------------------------

--
-- Table structure for table `managertoadmin`
--

CREATE TABLE `managertoadmin` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `managertoadmin`
--

INSERT INTO `managertoadmin` (`name`, `email`, `comment`) VALUES
('Hozaifa', 'hozaifa@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `proname` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `proid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `sid` int(11) NOT NULL,
  `orderid` int(11) NOT NULL,
  `proname` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `purchaserecord`
--

CREATE TABLE `purchaserecord` (
  `proname` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `proid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchaserecord`
--

INSERT INTO `purchaserecord` (`proname`, `quantity`, `price`, `catagory`, `proid`, `sid`) VALUES
('Milk', 200, 30000, 'Grocerry', 5002, 2);

-- --------------------------------------------------------

--
-- Table structure for table `sellrecord`
--

CREATE TABLE `sellrecord` (
  `name` varchar(100) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `sid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sellrecord`
--

INSERT INTO `sellrecord` (`name`, `catagory`, `quantity`, `price`, `proid`, `sid`) VALUES
('Milk', 'Grocerry', 200, 30000, 5002, 2);

-- --------------------------------------------------------

--
-- Table structure for table `stockreport`
--

CREATE TABLE `stockreport` (
  `proname` varchar(100) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `catagory` varchar(100) NOT NULL,
  `proid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stockreport`
--

INSERT INTO `stockreport` (`proname`, `quantity`, `price`, `catagory`, `proid`) VALUES
('Milk', 200, 30000, 'Grocerry', 201);

-- --------------------------------------------------------

--
-- Table structure for table `supplierinfo`
--

CREATE TABLE `supplierinfo` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `gen` varchar(100) NOT NULL,
  `contNo` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `sid` int(11) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplierinfo`
--

INSERT INTO `supplierinfo` (`fname`, `lname`, `age`, `gen`, `contNo`, `email`, `sid`, `pass`) VALUES
('Dipa', 'Sarkar', 23, 'Female', 1312343212, 'hdfyusfu3@gmail.com', 1, '654321Tn');

-- --------------------------------------------------------

--
-- Table structure for table `suppliertoadmin`
--

CREATE TABLE `suppliertoadmin` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `suppliertoadmin`
--

INSERT INTO `suppliertoadmin` (`name`, `email`, `comment`) VALUES
('Hozaifa', 'hozaifa@gmail.com', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `transections`
--

CREATE TABLE `transections` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transections`
--

INSERT INTO `transections` (`id`, `amount`) VALUES
(200, 30000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admininfo`
--
ALTER TABLE `admininfo`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `cashierinfo`
--
ALTER TABLE `cashierinfo`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `cashiertoadmin`
--
ALTER TABLE `cashiertoadmin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `managerinfo`
--
ALTER TABLE `managerinfo`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `managertoadmin`
--
ALTER TABLE `managertoadmin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `purchaserecord`
--
ALTER TABLE `purchaserecord`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `sellrecord`
--
ALTER TABLE `sellrecord`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `stockreport`
--
ALTER TABLE `stockreport`
  ADD PRIMARY KEY (`proid`);

--
-- Indexes for table `supplierinfo`
--
ALTER TABLE `supplierinfo`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `suppliertoadmin`
--
ALTER TABLE `suppliertoadmin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `transections`
--
ALTER TABLE `transections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admininfo`
--
ALTER TABLE `admininfo`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `cashierinfo`
--
ALTER TABLE `cashierinfo`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3002;

--
-- AUTO_INCREMENT for table `managerinfo`
--
ALTER TABLE `managerinfo`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2003;

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=501;

--
-- AUTO_INCREMENT for table `stockreport`
--
ALTER TABLE `stockreport`
  MODIFY `proid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `supplierinfo`
--
ALTER TABLE `supplierinfo`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transections`
--
ALTER TABLE `transections`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=201;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
