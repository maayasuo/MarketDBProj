-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2022 at 11:42 PM
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
  `orderNo` int(255) NOT NULL,
  `pID` int(3) NOT NULL,
  `userID` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pID` int(3) NOT NULL,
  `pname` varchar(25) NOT NULL,
  `pimagedir` varchar(350) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `ptype` char(1) DEFAULT NULL,
  `isFeature` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pID`, `pname`, `pimagedir`, `price`, `ptype`, `isFeature`) VALUES
(103, 'Beige Wool Coat', 'asset/product/top/t3-1.jpg', '1780.00', 'a', 0),
(104, 'Black Suit', 'asset/product/top/t4.jpg', '6942.00', 'a', 1),
(105, 'Black T-Shirt', 'asset/product/top/t5.jpg', '750.00', 'a', 0),
(106, 'Brown Sweater', 'asset/product/top/t6.jpg', '1690.00', 'a', 1),
(107, 'Striped Denim Jacket', 'asset/product/top/t7.jpg', '4700.00', 'a', 0),
(108, 'White T-Shirt', 'asset/product/top/t1.jpg', '299.00', 'a', 0),
(109, 'Red T-Shirt', 'asset/product/top/t2.jpg', '299.00', 'a', 0),
(203, 'Blue Cargo Pants', 'asset/product/pants/p3.jpg', '890.00', 'b', 0),
(204, 'Blue Denim Shorts', 'asset/product/pants/p4.jpg', '1099.00', 'b', 1),
(205, 'Blue Jeans', 'asset/product/pants/p5.jpg', '1350.00', 'b', 0),
(206, 'Grey Sweatpants', 'asset/product/pants/p6.jpg', '799.00', 'b', 1),
(207, 'Pink Leather Pants', 'asset/product/pants/p7.jpg', '2100.50', 'b', 0),
(208, 'Short Jeans', 'asset/product/pants/p2.jpg', '379.00', 'b', 0),
(209, 'Black Jeans', 'asset/product/pants/p1.jpg', '499.00', 'b', 0),
(301, 'Snaker Sneakers', 'asset/product/shoes/s1.jpg', '679.00', 'c', 1),
(302, 'Cheap Leather Shoes', 'asset/product/shoes/s2.jpg', '879.00', 'c', 0),
(303, 'Black High Heals', 'asset/product/shoes/s3.jpg', '850.00', 'c', 0),
(304, 'Black Leather Boots', 'asset/product/shoes/s4.jpg', '2520.50', 'c', 0),
(305, 'Brown Leather Shoes', 'asset/product/shoes/s5.jpg', '1780.00', 'c', 0),
(306, 'White Ankle Boots', 'asset/product/shoes/s6.jpg', '3000.69', 'c', 0),
(307, 'White Sneakers', 'asset/product/shoes/s7.jpg', '3690.00', 'c', 1),
(403, 'Brown Straw Hat', 'asset/product/accessories/a3.jpg', '450.50', 'd', 0),
(404, 'Premium Leather Belt', 'asset/product/accessories/a4.jpg', '1788.25', 'd', 1),
(405, 'Pearl Necklace', 'asset/product/accessories/a5.jpg', '5350.00', 'd', 0),
(406, 'Pocket Watch', 'asset/product/accessories/a6.jpg', '7190.00', 'd', 1),
(407, 'Top Hat', 'asset/product/accessories/a7.jpg', '1780.00', 'd', 0),
(408, 'Black Hat', 'asset/product/accessories/a1.jpg', '159.00', 'd', 0),
(409, 'Leather Belt', 'asset/product/accessories/a2.jpg', '429.00', 'd', 0);

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
  `username` varchar(20) NOT NULL,
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
(3, 'takina2004', 'inoue_t@lycorico.co.jp', '81dc9bdb52d04dc20036dbd8313ed055', 'Takina', 'Inoue', '2830 Crescent Cove Drive', '9704517425'),
(4, 'fujimasakura', 'fujima@227.sme.co.jp', '7815696ecbf1c96e6894b779456d330e', 'Sakura', 'Fujima', '9 Chome-7-1 Akasaka, Minato City, Tokyo 107-6214', '0570086573');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`orderNo`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `orderNo` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`ptype`) REFERENCES `product_type` (`ptype`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
