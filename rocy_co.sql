-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2023 at 06:44 AM
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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `category_id` int(2) NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category`) VALUES
(1, 'scrunchy'),
(2, 'bracelet'),
(3, 'keychain'),
(4, 'tote bag'),
(5, 'test'),
(7, 'test'),
(8, 'test');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

DROP TABLE IF EXISTS `detail`;
CREATE TABLE IF NOT EXISTS `detail` (
  `detail_id` int(5) NOT NULL AUTO_INCREMENT,
  `order_id` int(5) NOT NULL,
  `product_id` int(5) NOT NULL,
  `unit_price` float NOT NULL,
  `quantity` int(3) NOT NULL,
  PRIMARY KEY (`detail_id`),
  KEY `order_id_detail_to_order` (`order_id`),
  KEY `product_id_detail_to_product` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`detail_id`, `order_id`, `product_id`, `unit_price`, `quantity`) VALUES
(1, 1, 10, 5.99, 2),
(2, 1, 3, 7.99, 1),
(3, 3, 3, 7.99, 1),
(4, 3, 1, 5.99, 12),
(5, 5, 1, 5.99, 2),
(6, 5, 3, 7.99, 1),
(9, 9, 1, 5.99, 1),
(10, 10, 3, 7.99, 1),
(11, 11, 1, 5.99, 1),
(12, 12, 1, 5.99, 1),
(16, 13, 2, 3.99, 1),
(17, 13, 3, 7.99, 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

DROP TABLE IF EXISTS `order`;
CREATE TABLE IF NOT EXISTS `order` (
  `order_id` int(5) NOT NULL AUTO_INCREMENT,
  `user_id` int(4) NOT NULL,
  `order_date` date NOT NULL DEFAULT current_timestamp(),
  `status` enum('cart','ordered','finished') DEFAULT NULL,
  `total_price` float NOT NULL,
  `isDelivery` tinyint(1) NOT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `user_id`, `order_date`, `status`, `total_price`, `isDelivery`) VALUES
(1, 1, '2023-05-03', 'ordered', 0, 0),
(3, 1, '2023-05-03', 'cart', 0, 0),
(5, 10, '2023-05-05', 'ordered', 5.5, 0),
(9, 10, '2023-05-06', 'ordered', 0, 0),
(10, 10, '2023-05-06', 'ordered', 0, 0),
(11, 10, '2023-05-06', 'ordered', 1, 0),
(12, 10, '2023-05-06', 'ordered', 2, 1),
(13, 10, '2023-05-06', 'cart', 11.98, 0);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(5) NOT NULL AUTO_INCREMENT,
  `category_id` int(2) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `image` varchar(72) NOT NULL,
  `sellingPrice` float NOT NULL,
  `description` varchar(128) NOT NULL,
  `quantity` int(3) NOT NULL,
  PRIMARY KEY (`product_id`),
  KEY `category_id_product_to_category` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `category_id`, `product_name`, `image`, `sellingPrice`, `description`, `quantity`) VALUES
(1, 1, 'dark red fabric scrunchy', 'dark_red_fabric_scrunchy.jpg', 5.99, ' Made out of dark red handpicked fabric, sure to give wearer a nice look with low price ', 7),
(2, 3, 'pink Rojin keychain', '644842a3e269a.png', 3.99, '              for test              ', 3),
(3, 1, 'TestProduct', '6447e2446ce77.png', 7.99, '       This is a test product.       ', 4),
(10, 3, 'ProductTest', '6448b77922ca6.png', 5.99, '   hehehehhe         ', 5),
(11, 1, 'Purple scrunchy', '6448680577893.png', 5.99, ' This is a test. ', 4);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `user_id` int(4) NOT NULL,
  `subscription` tinyint(1) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phoneNo` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `postal` varchar(7) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`user_id`, `subscription`, `name`, `phoneNo`, `address`, `city`, `province`, `postal`) VALUES
(9, 0, 'Jojo', '524-324-32', '123 haha avenue', 'Montreal', 'Quebec', 'T6J 7W3'),
(10, 0, 'abc', '1029384756', '123 fakeStreet', 'Montreal', 'Quebec', 'a1a 2b2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(4) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(72) NOT NULL,
  `roleType` varchar(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `email`, `password`, `roleType`) VALUES
(1, 'TestUser', '$2y$10$cA44WNtp7qhpgt2OsPuz/eGZlT.ketAfmu5cPBoZOVfupqH1/P1G.', 'customer'),
(6, 'TestUser2', '$2y$10$litEQ/Cl5hIZPyAWFAc/DOXUOuiAB53LlpFrD63VtLX7CCwrN6unK', 'customer'),
(9, 'TestUser4', '$2y$10$8tEuaTguZitcslQwBkaVDus8nrMq921J4kdD7YKl.8BgsW2xbnKGy', 'customer'),
(10, 'abc@abc.com', '$2y$10$kBfo8N.XaTnCdQsGJIEcxuecaLl54tzYxQFo5cj/.GkqLrp1qrDky', 'customer');

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
