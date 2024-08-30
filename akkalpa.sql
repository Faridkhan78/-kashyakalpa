-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2024 at 07:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akkalpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_city` varchar(255) NOT NULL,
  `customer_gender` varchar(255) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_email`, `customer_city`, `customer_gender`, `mobile_no`, `created_at`) VALUES
(12, 'mr Malik', 'am@gmail.com', 'kolkata', 'male', '4233439389', '2024-08-24 10:53:14'),
(13, 'ahmed sunasra', 'sunasra@gmail.com', 'kolkata', 'male', '8487012965', '2024-08-24 13:15:39'),
(14, 'mukesh kumar', 'mukesh@gmail.com', 'kolkata', 'male', '8530281323', '2024-08-24 18:29:21'),
(16, 'ramesh', 'ramesh@gamil.com', 'kolkata', 'other', '4233439385', '2024-08-24 18:33:34'),
(17, 'sajid', 'khan@gmail.com', 'kolkata', 'male', '6887878668', '2024-08-24 18:36:13'),
(18, 'mohammad nedariya', 'nedariya@gmail.com', 'kolkata', 'male', '5677904567', '2024-08-26 10:34:38'),
(19, 'arman aghariyaa', 'aghariyaarman@gmail.com', 'kolkata', 'male', '3456785345', '2024-08-26 10:41:32'),
(20, 'mahir shaikh', 'mahirhusen@gmail.com', 'kolkata', 'male', '6096709660', '2024-08-26 10:48:06'),
(21, 'farid kalol', 'kalol@gmail.com', 'kolkata', 'male', '6899955456', '2024-08-26 10:56:36');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(11) NOT NULL,
  `city` varchar(255) NOT NULL,
  `adult` int(5) NOT NULL,
  `kids` int(5) NOT NULL,
  `infants` int(5) NOT NULL,
  `stays` varchar(10) NOT NULL DEFAULT 'none',
  `tent` varchar(10) DEFAULT NULL,
  `order_date` datetime DEFAULT NULL,
  `wallet` varchar(15) DEFAULT NULL,
  `dateat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `city`, `adult`, `kids`, `infants`, `stays`, `tent`, `order_date`, `wallet`, `dateat`) VALUES
(17, 'chennai', 1, 1, 1, '', NULL, '2024-08-31 00:00:00', '', '2024-08-23 14:44:39'),
(18, 'chennai', 3, 2, 3, '', NULL, '0000-00-00 00:00:00', 'wallet', '2024-08-23 15:07:27'),
(19, 'chennai', 2, 8, 1, '', NULL, '2024-08-31 00:00:00', 'wallet', '2024-08-23 15:49:19'),
(20, 'bangalore', 2, 2, 2, 'night', NULL, '2024-08-25 00:00:00', 'wallet', '2024-08-23 17:11:00'),
(21, 'bangalore', 2, 1, 10, 'night', NULL, '2024-08-31 00:00:00', 'wallet', '2024-08-23 19:29:26'),
(22, 'bangalore', 5, 5, 1, 'night', NULL, '2024-09-06 00:00:00', 'wallet', '2024-08-24 10:58:41'),
(23, 'bangalore', 1, 1, 1, 'night', NULL, '2024-08-25 00:00:00', 'wallet', '2024-08-24 13:16:25'),
(24, 'hyderabad', 1, 1, 1, '', '', NULL, NULL, '2024-08-24 18:30:04'),
(25, 'hyderabad', 1, 0, 0, '', '', '2024-08-25 00:00:00', 'wallet', '2024-08-24 18:30:46'),
(26, 'hyderabad', 3, 3, 0, '', '', '2025-02-14 00:00:00', 'wallet', '2024-08-24 18:34:10'),
(27, 'bangalore', 1, 1, 1, 'night', 'tent', '2024-09-01 00:00:00', 'wallet', '2024-08-24 18:37:34'),
(28, 'hyderabad', 1, 1, 1, '', '', '0000-00-00 00:00:00', 'wallet', '2024-08-26 10:35:46'),
(29, 'chennai', 4, 4, 6, '', '', '0000-00-00 00:00:00', 'wallet', '2024-08-26 10:38:20'),
(30, 'bangalore', 10, 10, 5, 'night', 'tent', '2024-08-27 00:00:00', 'wallet', '2024-08-26 10:39:31'),
(33, 'hyderabad', 3, 1, 2, '', '', '2024-08-30 00:00:00', 'wallet', '2024-08-26 10:55:29'),
(34, 'chennai', 4, 5, 4, '', '', '2024-10-24 00:00:00', 'wallet', '2024-08-26 10:57:04'),
(35, 'chennai', 6, 4, 2, '', '', '2024-10-18 00:00:00', 'wallet', '2024-08-26 10:57:44'),
(36, 'chennai', 2, 1, 1, '', '', '2024-10-24 00:00:00', 'wallet', '2024-08-26 10:58:27'),
(37, 'hyderabad', 1, 1, 1, '', '', '2024-08-29 00:00:00', 'wallet', '2024-08-26 11:59:32'),
(38, 'bangalore', 3, 3, 2, 'night', 'tent', '2024-09-01 00:00:00', 'wallet', '2024-08-26 12:07:24'),
(39, 'chennai', 4, 3, 3, '', '', '2024-08-26 00:00:00', 'wallet', '2024-08-26 14:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `customer_otp`
--

CREATE TABLE `customer_otp` (
  `id` int(11) NOT NULL,
  `mobile_no` varchar(10) NOT NULL,
  `otp` int(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_otp`
--

INSERT INTO `customer_otp` (`id`, `mobile_no`, `otp`, `created_at`) VALUES
(8, '1234567890', 0, '2024-08-22 18:33:45'),
(9, '9265425523', 0, '2024-08-23 11:44:45'),
(10, '423343938', 0, '2024-08-23 12:04:08'),
(11, '8487012965', 0, '2024-08-23 17:10:10'),
(13, '5756976576', 0, '2024-08-23 19:25:56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `customer_otp`
--
ALTER TABLE `customer_otp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `customer_otp`
--
ALTER TABLE `customer_otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
