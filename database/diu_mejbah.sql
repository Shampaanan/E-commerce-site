-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 23, 2022 at 08:21 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diu_mejbah`
--

-- --------------------------------------------------------

--
-- Table structure for table `ii_operators`
--

CREATE TABLE `ii_operators` (
  `ii_id` int(11) NOT NULL,
  `ii_fullname` varchar(63) NOT NULL,
  `ii_address` varchar(255) NOT NULL,
  `ii_zip` varchar(7) NOT NULL,
  `ii_country` varchar(15) NOT NULL,
  `ii_email` varchar(63) NOT NULL,
  `ii_password` varchar(127) NOT NULL,
  `ii_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ii_operators`
--

INSERT INTO `ii_operators` (`ii_id`, `ii_fullname`, `ii_address`, `ii_zip`, `ii_country`, `ii_email`, `ii_password`, `ii_status`) VALUES
(1, 'Nirjhor Anjum', 'Wireless Gate, Greenway Rd, Dhaka', '1217', 'Bangladesh', 'nirjhor@live.com', '6367c48dd193d56ea7b0baad25b19455e529f5ee', 'Active'),
(2, 'Dr. Ishak Anjum', 'Lalbagh, Old Town, Dhaka', '1212', 'Bangladesh', 'dr.ishak@live.com', '973efc107cb6210380e4c864bc6dedb1287cff3d', 'Active'),
(3, 'Kazi Ahmed', 'Eskaton Garden, Mogbazar, Dhaka', '1218', 'Bangladesh', 'mr.kazi@live.com', 'c036c3a984ca8bf25c01670468b479195867ce1f', 'Active'),
(4, 'Tahmid Alif', 'Seoul, Park Street', '1233', 'China', 'alif@ymail.com', 'f37bfca52bc671f9a016b431b007ce75704e8f28', 'Inactive'),
(5, 'Silvar D Costa', 'Indian Artist Colony, Delhi', '23443', 'India', 'costa@yahoo.co.in', 'a09a08643dba17e8981ff3d412a2c2781fc869b4', 'Inactive');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ii_operators`
--
ALTER TABLE `ii_operators`
  ADD PRIMARY KEY (`ii_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ii_operators`
--
ALTER TABLE `ii_operators`
  MODIFY `ii_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
