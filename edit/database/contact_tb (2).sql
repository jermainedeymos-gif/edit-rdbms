-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2025 at 09:06 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rdbms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

DROP TABLE IF EXISTS `contact_tb`;
CREATE TABLE `contact_tb` (
  `id` int(11) NOT NULL,
  `name_tb` varchar(1000) NOT NULL,
  `email_tb` varchar(1000) NOT NULL,
  `subject_tb` varchar(1000) NOT NULL,
  `message_tb` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`id`, `name_tb`, `email_tb`, `subject_tb`, `message_tb`) VALUES
(1, 'Zhao kempis', 'kempiszhao@gmail.com', 'Carwash Booking', 'Interior Washing'),
(2, 'Zhao kempis', 'kempiszhao@gmail.com', 'Carwash Booking', 'Interior Washing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_tb`
--
ALTER TABLE `contact_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_tb`
--
ALTER TABLE `contact_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
