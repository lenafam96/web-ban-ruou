-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2022 at 07:56 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lecongminh`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(5) NOT NULL,
  `category_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Rượu Cognac'),
(2, 'Blended Scotch Whisky'),
(3, 'Rượu Single Malt'),
(4, 'Rượu Vodka'),
(5, 'Rượu Vang'),
(6, 'Bia');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(5) NOT NULL,
  `product_name` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category_id` int(5) NOT NULL,
  `brand` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `origin` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `concentration` int(3) DEFAULT NULL,
  `volume` int(5) DEFAULT NULL,
  `price` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `image`, `category_id`, `brand`, `origin`, `concentration`, `volume`, `price`) VALUES
(1, 'Beluga Transatlantic bao da', 'BelugaTransatlanticwithLeatherthumb.jpg', 4, 'Beluga', 'Nga', 40, 700, 1250000),
(2, 'MEUKOW XO Cognac', 'Meukow-XO.jpg', 1, 'XO', 'Pháp', 40, 700, 3500000),
(3, 'Rượu Royal salute 30YO', 'Royal-salute-30YO.jpg', 2, 'Chivas', 'Scotland', 40, 500, 13000000),
(9, 'Vodka Cтанpарт Platinum', 'VodkaCтандартPlatinum_thumb.jpg', 4, 'Cтанpарт ', 'Nga', 40, 500, 650000),
(10, 'Absolut Lime Vodka', 'Absolut-Lime.jpg', 4, 'Absolut', 'Thuỵ Điển', 40, 700, 470000),
(11, 'Hennessy XO 3000ml + Kệ', 'Hennessy-XO-3000ml-Ke.jpg', 1, 'Hennessy', 'Pháp', 40, 3000, 21500000),
(12, 'Remy Martin Louis XIII', 'Louis-XIII.jpg', 1, 'Remy', 'Pháp', 40, 700, 69000000),
(13, 'Vodka Ciroc', 'Ciroc-200ml-Thumb.jpg', 4, 'Ciroc', 'Pháp', 40, 200, 550000),
(14, 'Johnnie Walker Blue Label gift box 2022', 'Johnnie-Walker-Blue-Label-Gift-2022.jpg', 2, 'Johnnie Walker', 'Scotland', 40, 750, 4700000),
(15, 'Johnnie Walker Legendary Eight', 'JW-LEGENDARY-EIGHT.jpg', 2, 'Johnnie Walker', 'Scotland', 43, 750, 5800000),
(16, 'Craigellachie 17 years old', 'Craigellachie-17YO.jpg', 3, 'Craigellachie', 'Scotland', 46, 700, 4100000),
(17, 'Glenfarclas 25 Year Old', 'Glenfarclas-25YO.jpg', 3, 'Glenfarclas', 'Scotland', 43, 700, 4700000),
(18, 'Glenfiddich 21YO Experimental Series 03 Winter Sto', 'Glenfiddich-Experimental-Series-03-Winter-Storm.jpg', 3, 'Glenfiddich', 'Scotland', 43, 700, 8900000),
(19, 'Mortlach 20 years old Gift box 2022', 'Mortlach-20YO-Gift-2022.jpg', 2, 'Mortlach', 'Scotland', 43, 700, 8250000),
(20, 'Bushmills Single Malt 16 years old', 'Bushmills 16YO.jpg', 2, 'Bushmills', 'Iceland', 40, 700, 3000000),
(21, 'Royal Brackla 21 years old 700ml', 'Royal Brackla 21YO.jpg', 2, 'Royal Brackla', 'Scotland', 40, 700, 6900000),
(22, 'Vinedo Chadwich Maipo Valley', 'Vinedo-chadwich-Maipo-Valley.png', 5, 'Vinedo Chadwich', 'Chile', 14, 750, 12500000),
(23, 'Champagne Armand de Brignac Rose (Át Bích Hồng)', '-Alko-Armand-de-Brignac-Rose-Champagne-Brut.jpg', 1, 'Arman de Brignac', 'Pháp', 12, 750, 11600000),
(24, 'St Hugo Shiraz Barossa Valley', 'ST-HUGO-SHIRAZ.jpg', 5, 'St Hugo', 'Autralia', 14, 750, 2530000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`email`, `password`) VALUES
('admin@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
