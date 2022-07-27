-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2019 at 08:25 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_bus_tms`
--

-- --------------------------------------------------------

--
-- Table structure for table `seat_info`
--

CREATE TABLE `seat_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `age` int(3) NOT NULL,
  `nid` int(20) NOT NULL,
  `nationality` text NOT NULL,
  `boarding_point` text NOT NULL,
  `droping_point` text NOT NULL,
  `taka` int(5) NOT NULL,
  `payment_method` text NOT NULL,
  `tranjection_id` varchar(50) NOT NULL,
  `seat_no` varchar(11) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat_info`
--

INSERT INTO `seat_info` (`id`, `name`, `mobile`, `email`, `address`, `gender`, `age`, `nid`, `nationality`, `boarding_point`, `droping_point`, `taka`, `payment_method`, `tranjection_id`, `seat_no`, `status`) VALUES
(1, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'A-1', ''),
(2, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'A-2', ''),
(3, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'A-3', ''),
(4, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'A-4', ''),
(5, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'B-1', ''),
(6, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'B-2', ''),
(7, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'B-3', ''),
(8, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'B-4', ''),
(9, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'C-1', ''),
(10, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'C-2', ''),
(11, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'C-3', ''),
(12, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'C-4', ''),
(13, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'D-1', ''),
(14, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'D-2', ''),
(15, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'D-3', ''),
(16, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'D-4', ''),
(17, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'E-1', ''),
(18, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'E-2', ''),
(19, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'E-3', ''),
(20, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'E-4', ''),
(21, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'F-1', ''),
(22, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'F-2', ''),
(23, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'F-3', ''),
(24, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'F-4', ''),
(25, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'G-1', ''),
(26, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'G-2', ''),
(27, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'G-3', ''),
(28, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'G-4', ''),
(29, '', '', '', '', '', 0, 0, '', '', '', 0, '', '', 'G-5', '');

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `seat_info`
--
ALTER TABLE `seat_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `seat_info`
--
ALTER TABLE `seat_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
