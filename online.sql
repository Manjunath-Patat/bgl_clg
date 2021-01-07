-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 09:31 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(15) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `address`, `email`, `mobile`, `password`) VALUES
(1, 'Manjunath Patat', 'Bailhongal', 'admin', 8123652143, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(5) NOT NULL,
  `cid` int(30) NOT NULL,
  `name` varchar(50) NOT NULL,
  `food` varchar(30) NOT NULL,
  `price` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `cid`, `name`, `food`, `price`) VALUES
(95, 15, '', '', ''),
(96, 15, '', '', ''),
(97, 15, '', '', ''),
(98, 15, '', '', ''),
(99, 15, '', '', ''),
(100, 15, '', '', ''),
(101, 15, '', '', ''),
(102, 10, '', '', ''),
(103, 10, '', '', ''),
(104, 10, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `address`, `mobile`, `email`, `password`) VALUES
(1, 'Arun k', 'bgk', 1231231231, 'a123@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `food` varchar(50) NOT NULL,
  `img` blob NOT NULL,
  `price` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `food`, `img`, `price`) VALUES
(1, 'sugar', 'rice', 0xffd8ffe000104a46494600010100000100010000ffdb008400090607131312151313131615151617181b1918181818181a1a181a1818171a181e171a1d2820181b251b1a1721312225292b2e2e2e171f3338332d37282d2e2b010a0a0a0e0d0e1b10101b2f2520262d2d2d2d2e2f2f2d2d2d2f302d2d2d2d2d2d352f2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d302d2d2d2d2d2d2d2d2d2d2dffc000110800b8011103012200021101031101ffc4001c0000020203010100000000000000000000040503060002070108ffc4004110000103020403060305070303050100000102031100210412314105516106132271819132a1b11442c1d1f007233352, '150'),
(2, 'sugar', 'rice2', 0x322e6a7067, '200'),
(3, 'astama', 'd', 0x64612e6a7067, '300'),
(4, 'Sugar', 'tea', 0x77656c636f6d652e6a7067, '20'),
(5, 'Sugar', 'tea', 0x77656c636f6d652e6a7067, '20'),
(6, 'b', 'wdf', '', ''),
(7, 'd', 'tea', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` bigint(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`id`, `name`, `address`, `mobile`, `email`, `password`) VALUES
(2, 'Akshata A', 'Bailhongal', 8123652143, 'geeta123@gmail.com', '123'),
(4, 'Manjunath', 'savadatti', 8123652143, 'manju143@gmail.com', '123123'),
(5, 'Geeta Huddar', 'Bailhongal', 8123652143, 'geeta123@gmail.com', '123123'),
(6, 'Akshata Arer', 'Bailhongal', 111111122, 'akshu123@gmail.com', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(5) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `disease` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `emobile` bigint(15) NOT NULL,
  `room` int(10) NOT NULL,
  `payble` int(20) NOT NULL,
  `insurance` varchar(30) NOT NULL,
  `password` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `fname`, `lname`, `disease`, `address`, `mobile`, `emobile`, `room`, `payble`, `insurance`, `password`) VALUES
(10, 'Manjunath', 'Patat', 'fever', 'Bailhongal', 8123652143, 123654789, 1, 12, 'LIC', 123123),
(16, 'Manjunath', 'P', 'feverr', 'dharawad', 123456, 9876434234, 12333, 10000, 'LIC', 4703);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(5) NOT NULL,
  `pid` int(5) NOT NULL,
  `myselect` varchar(30) NOT NULL,
  `hotel` varchar(50) NOT NULL,
  `food` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `pid`, `myselect`, `hotel`, `food`) VALUES
(53, 10, 'Select', 'b', 'abcd');

-- --------------------------------------------------------

--
-- Table structure for table `resturant_owner`
--

CREATE TABLE `resturant_owner` (
  `id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL,
  `rname` varchar(10) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resturant_owner`
--

INSERT INTO `resturant_owner` (`id`, `name`, `address`, `rname`, `mobile`, `email`, `password`) VALUES
(9, 'Geeta H', 'savadatti', 'B', 8888894556, 'g123@gmail.com', '123654'),
(12, 'Akshata Arer', 'Bailhongal', 'B', 8123652143, 'acchu123@gmail.com', '123123'),
(13, 'Manjunath Patat', 'Bailhongal', 'B', 9874563210, 'akshu123@gmail.com', '1231236');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resturant_owner`
--
ALTER TABLE `resturant_owner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `resturant_owner`
--
ALTER TABLE `resturant_owner`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
