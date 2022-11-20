-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 05:27 PM
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
-- Database: `proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `pID` int(3) NOT NULL,
  `cartID` varchar(6) NOT NULL,
  `cusername` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pID` int(3) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `pimagedir` varchar(350) NOT NULL,
  `price` int(4) NOT NULL,
  `ptype` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pID`, `pname`, `pimagedir`, `price`, `ptype`) VALUES
(101, 'White Shirt', 'asset/product/top/t1.jpg', 299, 'a'),
(102, 'Red Shirt', 'asset/product/top/t2.jpg', 299, 'a'),
(103, 'Blue Silk Shirt', 'asset/product/top/t3.jpg', 369, 'a'),
(201, 'Black Jean', 'asset/product/pants/p1.jpg', 499, 'b'),
(202, 'Short Jean', 'asset/product/pants/p2.jpg', 379, 'b'),
(301, 'Sneaker', 'asset/product/shoes/s1.jpg', 679, 'c'),
(302, 'Leather Shoe', 'asset/product/shoes/s1.jpg', 879, 'c'),
(401, 'Black Hat', 'asset/product/accessories/a1.jpg', 159, 'd'),
(402, 'Leather Belt', 'asset/product/accessories/a2.jpg', 429, 'd');

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `ptype` char(1) NOT NULL,
  `tname` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`ptype`, `tname`) VALUES
('a', 'top'),
('b', 'pants'),
('c', 'shoes'),
('d', 'accessory');

-- --------------------------------------------------------

--
-- Table structure for table `promocode`
--

CREATE TABLE `promocode` (
  `codeID` varchar(10) NOT NULL,
  `percentDiscounted` decimal(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promocode`
--

INSERT INTO `promocode` (`codeID`, `percentDiscounted`) VALUES
('BIGPROMO50', '0.50'),
('FASHION65', '0.65'),
('SPECIAL60', '0.60');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `email` varchar(32) NOT NULL,
  `pass` varchar(32) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `uAddress` varchar(300) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `username`, `email`, `pass`, `fname`, `lname`, `uAddress`, `phone`) VALUES
(3, 'takina2004', 'inoue_t@lycorico.co.jp', '81dc9bdb52d04dc20036dbd8313ed055', 'Takina', 'Inoue', '2830 Crescent Cove Drive', '9704517425');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`),
  ADD KEY `FK_username` (`cusername`),
  ADD KEY `FK_pID` (`pID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pID`),
  ADD KEY `ptype` (`ptype`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`ptype`);

--
-- Indexes for table `promocode`
--
ALTER TABLE `promocode`
  ADD PRIMARY KEY (`codeID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `FK_pID` FOREIGN KEY (`pID`) REFERENCES `product` (`pID`),
  ADD CONSTRAINT `FK_username` FOREIGN KEY (`cusername`) REFERENCES `user` (`username`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ptype`) REFERENCES `product_type` (`ptype`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
