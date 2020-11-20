-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 11:37 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `date_transaction` datetime NOT NULL,
  `age` int(30) NOT NULL,
  `mobile_no` varchar(255) NOT NULL,
  `email_id` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `date_transaction`, `age`, `mobile_no`, `email_id`) VALUES
(1, 'avinash', 'avi', '2020-11-02 05:00:00', 48, '987654321', 'avi@gmail.com'),
(2, 'rani', 'rani', '2020-11-04 03:07:00', 30, '789654321', 'rani@gmail.com'),
(3, 'aarav', 'aarav', '2020-11-08 07:05:00', 27, '998876543', 'aarav@gmail.com'),
(4, 'rubina', 'rubi', '2020-11-13 09:23:02', 38, '765432189', 'rubi@gmail.com'),
(5, 'rajshree', 'rajshree', '2020-11-16 09:00:01', 57, '886654321', 'rajshree@gmail.com'),
(6, 'arvind', 'arvind', '2020-11-17 03:23:04', 60, '789654321', 'arvind@gmail.com'),
(7, 'kareena', 'kareena', '2020-11-19 08:26:00', 48, '723486492', 'kareena@gmail.com'),
(8, 'vatsal', 'vats', '2020-11-20 03:05:04', 20, '998219982', 'vatsal@gmail.com'),
(9, 'aashu', 'aashu', '2020-11-20 03:20:06', 22, '876876523', 'aashu@gmail.com'),
(10, 'rashi', 'rashi', '2020-11-08 06:22:07', 28, '834521234', 'rashi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transfers`
--

CREATE TABLE `transfers` (
  `id` int(30) NOT NULL,
  `money_taker` varchar(30) NOT NULL,
  `amount` bigint(255) NOT NULL,
  `user` varchar(30) NOT NULL,
  `date_transaction` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transfers`
--

INSERT INTO `transfers` (`id`, `money_taker`, `amount`, `user`, `date_transaction`) VALUES
(1, 'aarav', 6700, 'avinash', '2020-11-01 21:08:00'),
(2, 'raj', -56, 'avinash', '2020-11-02 09:44:45'),
(3, 'rajshree', 48760, 'rubina', '2020-11-05 22:36:00'),
(4, 'aarav', 56000, 'vatsal', '2020-11-08 18:30:00'),
(5, 'avinash', 55000, 'rajshree', '2020-11-10 09:47:39'),
(6, 'kareena', 75000, 'arvind', '2020-11-09 18:30:00'),
(7, 'rashi', 25050, 'aashu', '2020-11-15 09:49:14'),
(8, 'aashu', 86543, 'rani', '2020-11-17 02:37:07'),
(9, 'arvind', 100000, 'kareena', '2020-11-17 09:52:40'),
(10, 'vatsal', 38670, 'aarav', '2020-11-17 03:55:00'),
(11, 'avinash', 67893, 'rashi', '2020-11-18 02:56:00'),
(12, '', -15, 'rubina', '0000-00-00 00:00:00'),
(13, 'avinash', -22, 'aashu', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transfers`
--
ALTER TABLE `transfers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transfers`
--
ALTER TABLE `transfers`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
