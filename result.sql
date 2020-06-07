-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2020 at 04:59 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(20) NOT NULL,
  `enrollment` bigint(200) NOT NULL,
  `name` text NOT NULL,
  `ds` int(50) NOT NULL,
  `toc` int(50) NOT NULL,
  `ml` int(50) NOT NULL,
  `cp` int(50) NOT NULL,
  `itr` int(50) NOT NULL,
  `em` int(50) NOT NULL,
  `it` int(50) NOT NULL,
  `ds_lab` int(50) NOT NULL,
  `ml_lab` int(50) NOT NULL,
  `seminar` int(50) NOT NULL,
  `sgpa` double NOT NULL,
  `cgpa` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `enrollment`, `name`, `ds`, `toc`, `ml`, `cp`, `itr`, `em`, `it`, `ds_lab`, `ml_lab`, `seminar`, `sgpa`, `cgpa`) VALUES
(118, 23242343546576, 'Chaudhari Pooja Suresh', 41, 36, 25, 62, 45, 47, 90, 72, 68, 80, 0, 0),
(119, 23242343546, 'Chaudhari Komal Krushna', 54, 53, 65, 84, 64, 63, 90, 86, 82, 82, 8.09, 8.26),
(120, 23242343546577, 'Vispute Payal Hemant', 56, 47, 41, 74, 50, 54, 90, 84, 76, 86, 7.36, 0),
(121, 23242333546576, 'Jain Rohan Rajesh', 79, 69, 66, 96, 71, 73, 90, 94, 96, 94, 8.91, 9.18),
(122, 23242343544356, 'Jadhav Revati Kundanrao', 44, 51, 43, 72, 61, 58, 90, 78, 74, 82, 7.41, 0),
(123, 2324237646576, 'Bafna Gautami Sandesh', 62, 69, 53, 88, 59, 72, 90, 86, 92, 84, 8.41, 8.27),
(124, 23242343546, 'Chaudhari Sanket Kishor', 73, 75, 69, 96, 68, 67, 90, 96, 94, 92, 8.82, 8.73),
(125, 2324234646576, 'Purnansh  Billore', 53, 63, 65, 82, 59, 71, 90, 88, 90, 86, 8.32, 7.65),
(126, 232423435657, 'Suryawanshi Varun Ravindra', 55, 41, 52, 84, 63, 64, 90, 90, 72, 84, 7.73, 7.65),
(127, 23242343548776, 'More Pradnya Hitendra', 52, 46, 56, 84, 73, 62, 90, 92, 86, 88, 8.09, 7.93),
(128, 23242343546765, 'Shinde Rutika Girish', 50, 51, 42, 76, 56, 46, 90, 88, 84, 94, 7.45, 0),
(129, 23242343545676, 'Bhamare Yash Suresh', 54, 44, 50, 78, 68, 61, 90, 86, 76, 88, 7.73, 7.66),
(130, 232423446576, 'Gupta Sankalp Sushil', 49, 45, 53, 88, 58, 42, 90, 72, 90, 88, 7.64, 7.34),
(131, 2324238436576, 'Modi Poojan Sanjay', 60, 66, 47, 78, 70, 44, 90, 92, 92, 94, 8.05, 7.71),
(132, 23562343546576, 'Brahmankar Vipul Shrikant', 66, 65, 44, 94, 57, 51, 90, 92, 92, 94, 8.14, 7.69),
(133, 2742343546576, 'Pagar Neha Dipak', 45, 40, 41, 42, 53, 46, 90, 66, 70, 94, 6.73, 0),
(134, 232429873546576, 'Tejal Sanjay Patil', 49, 41, 46, 42, 67, 52, 90, 60, 82, 94, 7.09, 7.23),
(135, 23242343546500, 'Wagh Shweta Ajit', 40, 29, 35, 72, 63, 54, 90, 70, 72, 82, 0, 0),
(136, 23242343546098, 'Khedkar Mohini Narendra', 51, 59, 67, 90, 73, 60, 90, 90, 90, 88, 8.55, 8.41),
(137, 2324234986576, 'Chaudhari Sneha Rajendra', 50, 40, 40, 76, 49, 45, 90, 78, 76, 84, 7, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=138;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
