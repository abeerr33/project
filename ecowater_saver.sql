-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 04:52 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecowater_saver`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_user`
--

CREATE TABLE `admin_user` (
  `id` int(10) NOT NULL,
  `userName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `price` float NOT NULL,
  `qty` int(11) NOT NULL,
  `total` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `userID` varchar(50) NOT NULL,
  `chatTxt` varchar(500) NOT NULL,
  `dateChat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `userID`, `chatTxt`, `dateChat`) VALUES
(2, 'user2023', 'How can i get more product of ecowater saver products', '04:36:23pm_2023/12/10'),
(3, 'user2023', 'hello', '03:41:10pm_2023/12/11'),
(4, 'user2023', 'Can i help you ', '08:51:49am_2023/12/17');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `userID` varchar(50) NOT NULL,
  `fullName` varchar(50) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `passwrd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`userID`, `fullName`, `phoneNumber`, `address`, `passwrd`) VALUES
('oman2023', 'abeer albalushi', '96100333', 'muscat', '123456'),
('user2023', 'Abir', '71000111', 'muscat-seeb', '000'),
('user2024', 'aaaaa', '98765410', 'mct', '123');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `customerID` varchar(50) NOT NULL,
  `dateTime` varchar(50) NOT NULL,
  `txtFeedback` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `customerID`, `dateTime`, `txtFeedback`) VALUES
(2, 'user2023', '03:44:34pm_2023/12/09', 'good services '),
(3, 'user2023', '03:45:55pm_2023/12/09', 'aaaaaaaaaaaaaa'),
(4, 'user2023', '03:38:44pm_2023/12/11', 'awseffghh'),
(5, 'user2023', '03:40:03pm_2023/12/11', 'axassssss');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ordersID` int(11) NOT NULL,
  `productDetails` varchar(500) NOT NULL,
  `orderDate` varchar(50) NOT NULL,
  `totalPrice` float NOT NULL,
  `payMethod` varchar(50) NOT NULL,
  `customerID` varchar(50) NOT NULL,
  `orderStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ordersID`, `productDetails`, `orderDate`, `totalPrice`, `payMethod`, `customerID`, `orderStatus`) VALUES
(19, '\r\n Product Name \r\n:Aerated Steam:Cascade Model\r\n Qty \r\n:1\r\n Price\r\n:3/', '2023-12-23', 3, 'visa', 'user2023', 'Incomplete'),
(20, '\r\n Product Name \r\n:Aerated Steam:Cascade Model\r\n Qty \r\n:3\r\n Price\r\n:3/\r\n Product Name \r\n:Spray Steam:Spray Model\r\n Qty \r\n:1\r\n Price\r\n:3/\r\n Product Name \r\n:Laminar Steam:Honey Comb Model\r\n Qty \r\n:1\r\n Price\r\n:3.5/', '2023-12-27', 15.5, 'visa', 'user2023', 'Incomplete'),
(21, '\r\n Product Name \r\n:Aerated Steam:Cascade Model\r\n Qty \r\n:3\r\n Price\r\n:3/\r\n Product Name \r\n:Spray Steam:Spray Model\r\n Qty \r\n:2\r\n Price\r\n:3/', '2023-12-27', 15, 'visa', 'user2024', 'Incomplete');

-- --------------------------------------------------------

--
-- Table structure for table `paymode`
--

CREATE TABLE `paymode` (
  `id` int(10) NOT NULL,
  `payMode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productID` varchar(20) NOT NULL,
  `productName` varchar(20) NOT NULL,
  `category` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `description` varchar(500) NOT NULL,
  `QTY` int(10) NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productID`, `productName`, `category`, `price`, `description`, `QTY`, `photo`) VALUES
(3, 'P100', 'Aerated Steam', 'Ecowater', '3', 'Cascade Model', 20, './img/8.jpeg'),
(4, 'P200', 'Spray Stram', 'Ecowater', '20', 'Spray Model', 30, './img/9.jpeg'),
(5, 'P300', 'Laminar Stream', 'Ecowater', '3.5', 'Honey Comb', 10, './img/12.jpeg'),
(6, 'P400', 'Pressure Compensatio', 'Ecowater', '5', 'Spray Model', 10, './img/14.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `responsechat`
--

CREATE TABLE `responsechat` (
  `id` int(11) NOT NULL,
  `customerID` varchar(20) NOT NULL,
  `txtResponse` varchar(500) NOT NULL,
  `responseDate` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responsechat`
--

INSERT INTO `responsechat` (`id`, `customerID`, `txtResponse`, `responseDate`) VALUES
(2, 'user2023', 'response to customer user123', '05:49:36pm_2023/12/10');

-- --------------------------------------------------------

--
-- Stand-in structure for view `weekly_report`
-- (See below for the actual view)
--
CREATE TABLE `weekly_report` (
`customerID` varchar(50)
,`Sum_Trans` bigint(21)
,`orderDate` varchar(50)
,`payMethod` varchar(50)
,`orderStatus` varchar(50)
,`total` double
);

-- --------------------------------------------------------

--
-- Structure for view `weekly_report`
--
DROP TABLE IF EXISTS `weekly_report`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `weekly_report`  AS SELECT `orders`.`customerID` AS `customerID`, count(`orders`.`ordersID`) AS `Sum_Trans`, `orders`.`orderDate` AS `orderDate`, `orders`.`payMethod` AS `payMethod`, `orders`.`orderStatus` AS `orderStatus`, sum(`orders`.`totalPrice`) AS `total` FROM `orders` WHERE `orders`.`orderDate` > current_timestamp() - interval 1 week GROUP BY `orders`.`customerID` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ordersID`);

--
-- Indexes for table `paymode`
--
ALTER TABLE `paymode`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responsechat`
--
ALTER TABLE `responsechat`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ordersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `responsechat`
--
ALTER TABLE `responsechat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
