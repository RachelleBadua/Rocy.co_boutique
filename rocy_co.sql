-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 06:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rocy_co`
--
CREATE DATABASE IF NOT EXISTS `rocy_co` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rocy_co`;

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

DROP TABLE IF EXISTS `about_us`;
CREATE TABLE `about_us` (
  `about_us_Id` int(11) NOT NULL,
  `image` varchar(72) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`about_us_Id`, `image`, `text`) VALUES
(1, '645869acc9dba.png', 'THIS WORKS FINALLYYYYY');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE `category` (
  `category_id` int(2) NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'scrunchy'),
(2, 'bracelet'),
(3, 'keychain'),
(4, 'tote bag');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

DROP TABLE IF EXISTS `detail`;
CREATE TABLE `detail` (
  `detail_id` int(5) NOT NULL,
  `order_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `unit_price` float NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`detail_id`, `order_id`, `product_id`, `unit_price`, `quantity`) VALUES
(5, 5, 1, 5.99, 2),
(6, 5, 3, 7.99, 1),
(9, 9, 1, 5.99, 1),
(10, 10, 3, 7.99, 1),
(11, 11, 1, 5.99, 1),
(12, 12, 1, 5.99, 1),
(16, 13, 2, 3.99, 1),
(17, 13, 3, 7.99, 1),
(19, 15, 1, 5.99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `order_id` int(5) NOT NULL,
  `user_id` int(4) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('cart','ordered','finished') DEFAULT NULL,
  `total_price` float NOT NULL,
  `isDelivery` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `order_date`, `status`, `total_price`, `isDelivery`) VALUES
(5, 10, '2023-05-05', 'ordered', 5.5, 0),
(9, 10, '2023-05-06', 'ordered', 0, 0),
(10, 10, '2023-05-06', 'ordered', 0, 0),
(11, 10, '2023-05-06', 'ordered', 1, 0),
(12, 10, '2023-05-06', 'ordered', 2, 1),
(13, 10, '2023-05-07', 'ordered', 11.98, 1),
(14, 10, '2023-05-07', 'cart', 0, 0),
(15, 11, '2023-05-07', 'ordered', 5.99, 1),
(16, 11, '2023-05-07', 'cart', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE `product` (
  `product_id` int(5) NOT NULL,
  `category_id` int(2) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(72) NOT NULL,
  `sellingPrice` float NOT NULL,
  `description` varchar(128) NOT NULL,
  `quantity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `image`, `sellingPrice`, `description`, `quantity`) VALUES
(1, 1, 'dark red fabric scrunchy', 'dark_red_fabric_scrunchy.jpg', 5.99, '    Made out of dark red handpicked fabric, sure to give wearer a nice look with low price    ', 7),
(2, 3, 'pink Rojin keychain', '644842a3e269a.png', 3.99, '               for test               ', 3),
(3, 1, 'TestProduct', '6447e2446ce77.png', 7.99, '       This is a test product.       ', 4),
(10, 3, 'ProductTest', '6448b77922ca6.png', 5.99, '   hehehehhe         ', 5),
(11, 1, 'Purple scrunchy', '6448680577893.png', 5.99, ' This is a test. ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE `profile` (
  `user_id` int(4) NOT NULL,
  `subscription` tinyint(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `postal` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `subscription`, `name`, `phoneNo`, `address`, `city`, `province`, `postal`) VALUES
(9, 0, 'Jojo', '524-324-32', '123 haha avenue', 'Montreal', 'Quebec', 'T6J 7W3'),
(10, 0, 'abc', '1029384756', '123 fakeStreet', 'Montreal', 'Quebec', 'a1a 2b2'),
(11, 0, 'eto', '1029384756', '123 fakeStreet', 'Montreal', 'Quebec', 'a1a 2b2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(72) NOT NULL,
  `roleType` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `roleType`) VALUES
(1, 'TestUser', '$2y$10$cA44WNtp7qhpgt2OsPuz/eGZlT.ketAfmu5cPBoZOVfupqH1/P1G.', 'customer'),
(6, 'TestUser2', '$2y$10$litEQ/Cl5hIZPyAWFAc/DOXUOuiAB53LlpFrD63VtLX7CCwrN6unK', 'customer'),
(9, 'TestUser4', '$2y$10$8tEuaTguZitcslQwBkaVDus8nrMq921J4kdD7YKl.8BgsW2xbnKGy', 'customer'),
(10, 'abc@abc.com', '$2y$10$kBfo8N.XaTnCdQsGJIEcxuecaLl54tzYxQFo5cj/.GkqLrp1qrDky', 'customer'),
(11, 'eto@eto.com', '$2y$10$DCLqcAKIsJGM.aml1f33Ue7cIZy3m9xNNXuGsYxg8jgJyZrMFfbUK', 'customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`about_us_Id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `order_id_detail_to_order` (`order_id`),
  ADD KEY `product_id_detail_to_product` (`product_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `category_id_product_to_category` (`category_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `about_us_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `detail_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail`
--
ALTER TABLE `detail`
  ADD CONSTRAINT `order_id_detail_to_order` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `product_id_detail_to_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `category_id_product_to_category` FOREIGN KEY (`category_id`) REFERENCES `category` (`category_id`) ON DELETE CASCADE;

--
-- Constraints for table `profile`
--
ALTER TABLE `profile`
  ADD CONSTRAINT `user_id_profile_to_user` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
