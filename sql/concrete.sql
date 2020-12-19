-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 06:03 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `concrete`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@mail.com', '0192023a7bbd73250516f069df18b500');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `prod_name` varchar(50) NOT NULL,
  `quantity` int(5) NOT NULL,
  `rate` int(50) NOT NULL,
  `total` int(100) NOT NULL,
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `product_id`, `prod_name`, `quantity`, `rate`, `total`, `user_id`) VALUES
(24, 12, 'bricks', 15, 15, 225, 10);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `order_id` int(20) NOT NULL,
  `user_id` int(20) NOT NULL,
  `cart_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `total` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `address` varchar(50) NOT NULL,
  `bkash` varchar(50) NOT NULL,
  `status` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_id`, `user_id`, `cart_id`, `product_id`, `product_name`, `quantity`, `rate`, `total`, `name`, `mobile`, `date`, `address`, `bkash`, `status`) VALUES
(13, 10, 20, 2, 'cement', 3, '400', '1200', 'pronob', '01976814812', '2020-11-13', 'uttara', 'fjghkdghjdhjg', '1'),
(14, 10, 24, 12, 'bricks', 15, '15', '225', 'Arifa Mam', '01976814812', '2020-11-13', 'uttara', 'fjghkdghjdhjg', '0'),
(15, 10, 24, 12, 'bricks', 15, '15', '225', 'tonmoy', '01976814812', '2020-12-19', 'uttara', 'fjghkdghjdhjg', '0');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `rate` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `category`, `rate`, `quantity`, `image`) VALUES
(5, 'Black Texture', 'Flooring', '200', 10000, 'F1-black testure.jpeg'),
(6, 'White tile', 'Flooring', '250', 5000, 'f2-white pattern tile.jpeg'),
(7, 'Mosaic Texture', 'Flooring', '300', 5000, 'f3-mosaic texture.jpeg'),
(8, 'white chloride pipe', 'Plumbing', '120', 10000, 'plumb1.png'),
(9, 'Water Tank', 'Plumbing', '2000', 40, 'plum2.png'),
(10, 'PVC', 'Plumbing', '150', 5000, 'plumbing1-PVC.webp'),
(11, 'Zenia Dodson', 'Kitchen', '65', 854, 'kitchen.jpeg'),
(12, 'bricks', 'Basic Building Materials', '15', 9985, 'bricks.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usermessage`
--

CREATE TABLE `usermessage` (
  `id` int(11) NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` int(15) NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `usermessage`
--

INSERT INTO `usermessage` (`id`, `name`, `email`, `mobile`, `message`, `status`) VALUES
(5, 'pronob', 'admin@admin.com', 1976814812, 'fczhgjjjkkdfdfhfgj', 1),
(6, 'tonmoy', 'tonmoy@mail.com', 1976814812, 'i love coding', 1),
(7, 'tanim ahmed', 'tanim@mail.com', 1976814812, 'i love your product', 1),
(8, 'pronob', 'admin@mail.com', 1976814812, 'i love coding', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `middlename` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` varchar(300) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `middlename`, `lastname`, `address`, `email`, `contact`, `username`, `password`) VALUES
(4, '0987', '0987', '0987', '0987', '0987', '0987', '0987', 'a1Bz20ydqelm8m1wql9e1e06ec8e02f0a0074f2fcc6b26303b'),
(6, 'Hilson', 'Vincent', 'Ramos', 'Luisiana', 'email@email', '8979677836432', 'hilson', 'a1Bz20ydqelm8m1wql60d6acbd6aa032526c5ebf214719d427'),
(7, 'Clark', 'Patrick', 'Banaag', 'Lucena', 'none', '83954390', 'clarkpogi', 'a1Bz20ydqelm8m1wql7c6f5bdc16b3748b481fb5ea98bd4ace'),
(8, 'Jeru Shalom', 'Azucena', 'Barlos', 'jkfhjksdhfjks', 'jerushalombarlos@gmail.com', '8998989', 'jeeru', 'a1Bz20ydqelm8m1wql827ccb0eea8a706c4c34a16891f84e7b'),
(9, 'Harry', 'Jr', 'Den', 'espn', 'harryden@mail.com', '9876543210', 'harry', 'a1Bz20ydqelm8m1wqld3915844cde56f2dccfd24c7d34d12f0'),
(10, 'pronob', 'sarker', 'avi', 'uttara, dhaka-1230, road-11, ', 'user@email.com', '0184554', 'pronobsarker', 'a1Bz20ydqelm8m1wqlc5f17e8a51aa2656f3a987b0ab804001'),
(11, 'shuvro', 'sarker', 'avi', 'uttara, dhaka-1230, road-11,', 'saha@mail.com', '0184554', 'shuvro', 'a1Bz20ydqelm8m1wqle99a18c428cb38d5f260853678922e03'),
(12, 'shuvro', 'sarker', 'saha', 'uttara, dhaka-1230, road-11,', 'saha@mail.com', '015455', 'shuvro', 'a1Bz20ydqelm8m1wqle99a18c428cb38d5f260853678922e03'),
(13, 'sourav', 'sarker', 'avi', 'dhaka', 'admin@mail.com', '0184554', 'sourav', 'a1Bz20ydqelm8m1wqld1e6e9aa99a2e3622f9c171c7355bb6d'),
(14, 'joni', 'sarker', 'avi', 'dhaka', 'joni@mail.com', '0184554', 'joni', 'a1Bz20ydqelm8m1wql1c0ac25b077a885dc53d91b05b14544e');

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
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usermessage`
--
ALTER TABLE `usermessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `order_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `usermessage`
--
ALTER TABLE `usermessage`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
