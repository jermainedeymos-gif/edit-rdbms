-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2025 at 07:04 AM
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
-- Database: `rdbms`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

CREATE TABLE `contact_tb` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_tb`
--

INSERT INTO `contact_tb` (`id`, `user_name`, `user_email`, `subject`, `message`) VALUES
(1, 'johndoe', 'jermainedeymos@gmail.com', 'uyu', 'h'),
(20, 'johndoe', 'jermainedeymos@gmail.com', 'Math', 'gyfgyf'),
(21, 'jermaine deymos', 'maine@gmail.com', 'carwash', 'test 1'),
(22, 'jermaine deymos', 'jermainedeymos@gmail.com', 'carwash', 'awrqawerwer');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
