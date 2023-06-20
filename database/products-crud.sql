-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 09:41 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `products-crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) NOT NULL,
  `image` varchar(500) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` double DEFAULT NULL,
  `date_created` date DEFAULT current_timestamp(),
  `description` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `price`, `date_created`, `description`) VALUES
(7, 'acer-aspire-gx-781-gaming-pc.jpg', 'Acer aspire', 700, '2023-06-19', 'gx 781 gaming pc'),
(8, 'dell-inspiron-5675-gaming-pc-recon-blue.jpg', 'Dell Inspiron', 700, '2023-06-19', 'Dell inspiron gaming pc recon blue cpu'),
(9, 'apple-9-7-ipad-32-gb-gold.jpg', 'iPad', 70, '2023-06-19', 'Apple ipad 32gb gold '),
(10, 'dell-inspiron-5675-gaming-pc-recon-blue.jpg', 'Dell inspiron', 300, '2023-06-20', 'gaming pc recon blue');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
