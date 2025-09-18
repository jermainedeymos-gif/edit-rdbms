-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2025 at 04:08 AM
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
-- Database: `rdbms_db`
--
CREATE DATABASE IF NOT EXISTS `rdbms_db` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `rdbms_db`;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `admin_user` varchar(100) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `creation_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `booking_tb`
--

CREATE TABLE `booking_tb` (
  `booking_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `vehicle_id` int(11) NOT NULL,
  `price_id` int(11) NOT NULL,
  `booking_date` date NOT NULL,
  `booking_time` datetime NOT NULL,
  `package_type` varchar(100) NOT NULL,
  `washing_point` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `mobile_no` int(11) NOT NULL,
  `wash_date` date NOT NULL,
  `wash_time` datetime NOT NULL,
  `message` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client_login`
--

CREATE TABLE `client_login` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_pass` varchar(1000) NOT NULL,
  `login_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_login`
--

INSERT INTO `client_login` (`id`, `user_name`, `user_pass`, `login_date`) VALUES
(45, 'user', '$2y$10$nKsLU5JsRA5zDy3efkH5nuVRYeTJq1HdrV2bkRJ6JWjhaAF9OFS/i', '2025-09-12');

-- --------------------------------------------------------

--
-- Table structure for table `customer_tb`
--

CREATE TABLE `customer_tb` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `date_registered` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback_tb`
--

CREATE TABLE `feedback_tb` (
  `feedback_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(1000) NOT NULL,
  `date_submitted` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_tb`
--

CREATE TABLE `payment_tb` (
  `payment_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `payment_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `price_tb`
--

CREATE TABLE `price_tb` (
  `price_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `basic` decimal(50,0) NOT NULL,
  `premium` decimal(50,0) NOT NULL,
  `complex` decimal(50,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_assignment_tb`
--

CREATE TABLE `service_assignment_tb` (
  `assignment_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `staff_id` int(11) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `service_tb`
--

CREATE TABLE `service_tb` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(50) NOT NULL,
  `duration` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff_tb`
--

CREATE TABLE `staff_tb` (
  `staff_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle_tb`
--

CREATE TABLE `vehicle_tb` (
  `vehicle_id` int(11) NOT NULL,
  `customer-id` int(11) NOT NULL,
  `model` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



CREATE TABLE bookings (
    id INT AUTO_INCREMENT PRIMARY KEY,
    package_type VARCHAR(100) NOT NULL,
    washing_point VARCHAR(100) NOT NULL,
    full_name VARCHAR(150) NOT NULL,
    mobile_no VARCHAR(20) NOT NULL,
    wash_date DATE NOT NULL,
    wash_time TIME NOT NULL,
    message TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);



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


--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking_tb`
--
ALTER TABLE `booking_tb`
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `vehicle_id` (`vehicle_id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `price_id` (`price_id`);

--
-- Indexes for table `client_login`
--
ALTER TABLE `client_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_tb`
--
ALTER TABLE `customer_tb`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  ADD PRIMARY KEY (`feedback_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `payment_tb`
--
ALTER TABLE `payment_tb`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `booking_id` (`booking_id`);

--
-- Indexes for table `price_tb`
--
ALTER TABLE `price_tb`
  ADD PRIMARY KEY (`price_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `service_assignment_tb`
--
ALTER TABLE `service_assignment_tb`
  ADD PRIMARY KEY (`assignment_id`),
  ADD KEY `booking_id` (`booking_id`),
  ADD KEY `staff_id` (`staff_id`);

--
-- Indexes for table `service_tb`
--
ALTER TABLE `service_tb`
  ADD PRIMARY KEY (`service_id`);

--
-- Indexes for table `staff_tb`
--
ALTER TABLE `staff_tb`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `vehicle_tb`
--
ALTER TABLE `vehicle_tb`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `customer-id` (`customer-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `booking_tb`
--
ALTER TABLE `booking_tb`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `client_login`
--
ALTER TABLE `client_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `customer_tb`
--
ALTER TABLE `customer_tb`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_tb`
--
ALTER TABLE `payment_tb`
  MODIFY `payment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `price_tb`
--
ALTER TABLE `price_tb`
  MODIFY `price_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_assignment_tb`
--
ALTER TABLE `service_assignment_tb`
  MODIFY `assignment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `service_tb`
--
ALTER TABLE `service_tb`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_tb`
--
ALTER TABLE `staff_tb`
  MODIFY `staff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicle_tb`
--
ALTER TABLE `vehicle_tb`
  MODIFY `vehicle_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_tb`
--
ALTER TABLE `booking_tb`
  ADD CONSTRAINT `booking_tb_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer_tb` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_tb_ibfk_2` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle_tb` (`vehicle_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_tb_ibfk_3` FOREIGN KEY (`price_id`) REFERENCES `price_tb` (`price_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `feedback_tb`
--
ALTER TABLE `feedback_tb`
  ADD CONSTRAINT `feedback_tb_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking_tb` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment_tb`
--
ALTER TABLE `payment_tb`
  ADD CONSTRAINT `payment_tb_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking_tb` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `price_tb`
--
ALTER TABLE `price_tb`
  ADD CONSTRAINT `price_tb_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `service_tb` (`service_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `service_assignment_tb`
--
ALTER TABLE `service_assignment_tb`
  ADD CONSTRAINT `service_assignment_tb_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking_tb` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `service_assignment_tb_ibfk_2` FOREIGN KEY (`staff_id`) REFERENCES `staff_tb` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `vehicle_tb`
--
ALTER TABLE `vehicle_tb`
  ADD CONSTRAINT `vehicle_tb_ibfk_1` FOREIGN KEY (`customer-id`) REFERENCES `customer_tb` (`customer_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
