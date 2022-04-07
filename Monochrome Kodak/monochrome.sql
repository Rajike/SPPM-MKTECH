-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 04, 2022 at 06:53 AM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `monochrome`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', '123'),
(2, 'jike', '123');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `email`, `phone`, `pass`, `address`, `city`, `zip`) VALUES
(1, 'member', 'member@gmail.com', '0777123456', '123', '26/A blabla road', 'kegalle', 71000),
(5, 'efw wf2', 'fwef@wrgg.jytr2', '3424342', 'ewfew2', '43432', '43432', 434342),
(6, 'dwadaw', 'fwef@wrgg.jytr', '32442324', 'dawdawd', 'dwadawd', 'awdawd', 432432),
(13, 'aer', 'aer', '132312', 're', '2313', 'wqdwq', 321),
(14, 'dqw', 'dwad', '13231', 'adw', 'qweeq', 'eqwewq', 231),
(16, 'test test', 'test@gmail.com', '072468768', 'test', 'testest', 'testest', 71500),
(17, 'kytes', 'kyte@gmail.com', '0778123456', '12345', '80/a street', 'wee', 65000);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `size` varchar(200) NOT NULL,
  `frame` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `instructions` varchar(200) NOT NULL,
  `price` int(20) NOT NULL,
  `buyer` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `sm` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `size`, `frame`, `image`, `instructions`, `price`, `buyer`, `status`, `sm`) VALUES
(2, '8x10', 'white', 'uploads/signature.png', 'dwadawdawddwa', 0, 'member@gmail.com', 'Completed', '231123213'),
(3, '12x18', 'white', 'uploads/image-gallery.png', '1321312vfsffdfsf', 0, 'member@gmail.com', 'Declined', 'waddwadawdawdawd'),
(4, '4x6', 'none', 'uploads/logout.png', 'fsefsefsefes', 1000, 'member@gmail.com', 'Processing', NULL),
(5, '5x7', 'brown', 'uploads/black.jpg', 'large', 1000, 'member@gmail.com', 'Processing', NULL),
(6, '4x6', 'borderless', 'uploads/black.webp', 'feska', 280, 'member@gmail.com', 'Processing', NULL),
(7, '12x18', 'brown', 'uploads/brown.jpg', 'fawfawfawf', 810, 'kyte@gmail.com', 'Processing', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
