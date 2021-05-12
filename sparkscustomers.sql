-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 09:57 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkscustomers`
--

-- --------------------------------------------------------

--
-- Table structure for table `sparks_customer_info`
--

CREATE TABLE `sparks_customer_info` (
  `SrNo` int(11) NOT NULL,
  `AccNo` varchar(15) NOT NULL,
  `Name` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `IFSCCode` varchar(15) NOT NULL,
  `Balance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sparks_customer_info`
--

INSERT INTO `sparks_customer_info` (`SrNo`, `AccNo`, `Name`, `Email`, `IFSCCode`, `Balance`) VALUES
(1, '10000000981', 'Avadhut', 'avadhut1@gmail.com', 'ABCD0000001', 73900),
(2, '10000000982', 'Uttam', 'uttam2@gmail.com', 'ABCD0000001', 46350),
(3, '10000000983', 'Ruchita', 'ruchita3@gmail.com', 'ABCD0000001', 89000),
(4, '10000000984', 'Rituja', 'rituja4@gmail.com', 'ABCD0000001', 38000),
(5, '10000000985', 'Shubham', 'shubham5@gmail.com', 'EFGH0000002', 49760),
(6, '10000000986', 'Madhura', 'madhura6@gmail.com', 'EFGH0000002', 39780),
(7, '10000000987', 'Prashant', 'prashant7@gmail.com', 'EFGH0000003', 59600),
(8, '10000000988', 'Sushant', 'sushant8@gmaqil.com', 'EFGH0000002', 40000),
(9, '10000000989', 'Tushar', 'tushar9@gmail.cm', 'EFGH0000003', 30000),
(10, '10000000990', 'Sachin', 'sachin10@gmail.com', 'EFGH0000002', 25000);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `SrNo` int(11) NOT NULL,
  `From` text NOT NULL,
  `To` text NOT NULL,
  `Amount` int(11) NOT NULL,
  `DateTime` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`SrNo`, `From`, `To`, `Amount`, `DateTime`) VALUES
(1, 'Avadhut', 'Rituja', 100, '2021-05-08 17:14:42'),
(2, 'Uttam', 'Rituja', 100, '2021-05-08 17:20:24'),
(3, 'Avadhut', 'Rituja', 100, '2021-05-08 17:22:09'),
(4, 'Uttam', 'Rituja', 100, '2021-05-08 17:34:27'),
(5, 'Sushant', 'Prashant', 200, '2021-05-08 17:36:37'),
(6, 'Ruchita', 'Rituja', 150, '2021-05-08 18:02:19'),
(7, 'Rituja', 'Uttam', 150, '2021-05-09 07:02:37'),
(8, 'Uttam', 'Rituja', 200, '2021-05-09 09:57:52'),
(9, 'Avadhut', 'Uttam', 1000, '2021-05-09 10:05:52'),
(10, 'Rituja', 'Ruchita', 150, '2021-05-09 10:43:29'),
(11, 'Shubham', 'Rituja', 120, '2021-05-09 11:02:23'),
(12, 'Avadhut', 'Rituja', 1000, '2021-05-10 05:48:19'),
(13, 'Avadhut', 'Ruchita', 120, '2021-05-10 06:12:51'),
(14, 'Madhura', 'Shubham', 200, '2021-05-10 09:47:30'),
(15, 'Avadhut', 'Rituja', 100, '2021-05-10 09:50:02'),
(16, 'Avadhut', 'Uttam', 100, '2021-05-10 09:54:12'),
(17, 'Avadhut', 'Uttam', 100, '2021-05-10 09:56:14'),
(18, 'Avadhut', 'Uttam', 100, '2021-05-10 09:57:08'),
(19, 'Avadhut', 'Uttam', 1000, '2021-05-10 09:57:25'),
(20, 'Prashant', 'Sushant', 1000, '2021-05-10 09:58:13'),
(21, 'Sachin', 'Tushar', 10000, '2021-05-10 09:59:13'),
(22, 'Uttam', 'Avadhut', 40, '2021-05-10 10:06:39'),
(23, 'Avadhut', 'Uttam', 10, '2021-05-10 10:12:09'),
(24, 'Sachin', 'Tushar', 5000, '2021-05-10 10:13:08'),
(25, 'Rituja', 'Avadhut', 580, '2021-05-10 10:14:28'),
(26, 'Sachin', 'Tushar', 5000, '2021-05-10 10:16:49'),
(27, 'Sushant', 'Prashant', 9800, '2021-05-10 10:18:39'),
(28, 'Rituja', 'Prashant', 7000, '2021-05-10 10:21:05'),
(29, 'Madhura', 'Prashant', 100, '2021-05-10 10:27:49'),
(30, 'Rituja', 'Uttam', 10000, '2021-05-10 10:31:25'),
(31, 'Sachin', 'Avadhut', 5000, '2021-05-10 10:42:57'),
(32, 'Uttam', 'Avadhut', 250, '2021-05-10 14:08:16'),
(33, 'Rituja', 'Ruchita', 10000, '2021-05-10 14:09:06'),
(34, 'Rituja', 'Avadhut', 2000, '2021-05-11 05:25:10'),
(35, 'Avadhut', 'Uttam', 100, '2021-05-11 05:32:00'),
(36, 'Avadhut', 'Uttam', 250, '2021-05-11 09:49:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sparks_customer_info`
--
ALTER TABLE `sparks_customer_info`
  ADD PRIMARY KEY (`SrNo`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`SrNo`),
  ADD UNIQUE KEY `SrNo` (`SrNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sparks_customer_info`
--
ALTER TABLE `sparks_customer_info`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `SrNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
