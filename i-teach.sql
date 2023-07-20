-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 12:27 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `i-teach`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(11) NOT NULL,
  `admin_fullname` varchar(100) NOT NULL,
  `admin_email` varchar(100) DEFAULT NULL,
  `admin_password` varchar(200) DEFAULT NULL,
  `admin_created` varchar(100) NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_fullname`, `admin_email`, `admin_password`, `admin_created`) VALUES
(1, 'Ajayi Femi', 'ajayi@gmail.com', '$2y$10$rEoP7XYQRyNIjkLFRXgM2eHsZpqNXPX8Pa0JgVncp5Tiw7RgruzEy', '2023-06-17 05:48:22');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `contact_name` varchar(200) NOT NULL,
  `contact_email` varchar(100) DEFAULT NULL,
  `contact_message` text DEFAULT NULL,
  `date_created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `contact_name`, `contact_email`, `contact_message`, `date_created`) VALUES
(1, 'John Doe', 'a@gmail.com', 'Great service', '2023-07-13 00:01:22'),
(2, 'Ajayi Femi', 'da@gmail.com', 'Safe fix is a great platform', '2023-07-13 00:01:22'),
(3, 'Tunde Jide', 'c@gmail.com', 'nice', '2023-07-13 00:01:22'),
(4, 'Sunday Bako', 'zz@gmail.com', 'Lovely', '2023-07-13 00:01:22'),
(5, 'ade', 'r@gmail.com', 'good', '2023-07-13 00:01:22'),
(6, 'dsdss', 'zz@gmail.com', 'kj', '2023-07-13 00:01:22'),
(7, 'Femi Ajayi', 'g@gmail.com', 'Hello I teach, you are doing a great job', '2023-07-19 03:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `request_id` int(11) NOT NULL,
  `request_device_type` varchar(255) DEFAULT NULL,
  `request_problem_description` text DEFAULT NULL,
  `request_location` varchar(255) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `repairer_id` int(11) NOT NULL,
  `request_date` varchar(100) NOT NULL,
  `request_time` varchar(100) NOT NULL,
  `request_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`request_id`, `request_device_type`, `request_problem_description`, `request_location`, `customer_id`, `repairer_id`, `request_date`, `request_time`, `request_created`) VALUES
(10, 'Samsung', 'hgshs', 'ghhgs', 16, 15, '2023-06-20', '10am', '2023-06-21 10:57:48'),
(12, 'tecno', 'bsattery', 'lagos', 15, 17, '2023-06-29', '10am', '2023-06-21 17:02:41'),
(14, 'Samsung', 'charger', 'Ogudu Mall', 16, 17, '2023-06-29', '3pm', '2023-06-22 06:40:37'),
(16, 'Samsung', 'screen', 'Ojota', 15, 17, '2023-06-30', '3pm', '2023-06-22 10:43:34'),
(17, 'Iphone', 'Battery life', 'Ikoyi', 19, 21, '2023-06-30', '3pm', '2023-06-22 20:47:39'),
(18, 'tecno', 'slow', 'Ojota', 16, 16, '2023-06-29', '10am', '2023-06-23 20:44:51'),
(19, 'Itel', 'My phone keeps freezing. pls help', 'Ojota', 17, 16, '2023-06-25', '10am', '2023-06-24 15:37:36'),
(20, 'Samsung', 'My phone is slow', 'Ojota', 17, 17, '2023-06-26', '10am', '2023-06-24 15:58:10'),
(21, 'itel', 'phone slow', '5, Ajao estate, VI', 17, 17, '2023-06-25', '10am', '2023-06-24 16:03:36');

-- --------------------------------------------------------

--
-- Table structure for table `tracker`
--

CREATE TABLE `tracker` (
  `tracker_id` int(11) NOT NULL,
  `tracker_user` int(11) NOT NULL,
  `tracker_section` varchar(50) NOT NULL,
  `tracker_title` varchar(50) NOT NULL,
  `tracker_content` text NOT NULL,
  `tracker_status` varchar(50) NOT NULL,
  `tracker_date` date NOT NULL,
  `tracker_created` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tracker`
--

INSERT INTO `tracker` (`tracker_id`, `tracker_user`, `tracker_section`, `tracker_title`, `tracker_content`, `tracker_status`, `tracker_date`, `tracker_created`) VALUES
(1, 6, 'New Word', 'God is good', 'let love dwell in you', 'still comprehending', '2023-07-20', '2023-07-18 12:39:46'),
(2, 6, 'History', 'Jesus', 'I believe in God almighty, the maker of the heavens and the earth', 'still comprehending', '2023-07-18', '2023-07-18 13:04:55'),
(3, 6, 'History', 'Biden', 'Biden is a good man', 'still comprehending', '2023-07-24', '2023-07-18 15:33:46'),
(4, 6, 'New Word', 'love', 'God is love', 'fully understands', '2023-07-19', '2023-07-19 12:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_firstName` varchar(100) DEFAULT NULL,
  `user_lastName` varchar(100) DEFAULT NULL,
  `user_email` varchar(100) DEFAULT NULL,
  `user_phoneNumber` varchar(50) DEFAULT NULL,
  `user_gender` enum('male','female') DEFAULT NULL,
  `user_address` varchar(200) DEFAULT NULL,
  `user_password` varchar(200) DEFAULT NULL,
  `user_confirmPassword` varchar(200) DEFAULT NULL,
  `user_image` varchar(200) NOT NULL,
  `user_state` varchar(50) DEFAULT NULL,
  `user_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_firstName`, `user_lastName`, `user_email`, `user_phoneNumber`, `user_gender`, `user_address`, `user_password`, `user_confirmPassword`, `user_image`, `user_state`, `user_created`) VALUES
(1, 'Sunday', 'Bako', 'a@gmail.com', '667', 'male', 'Lekki', '$2y$10$esPf/EpIPvlgYWYNjnet9u/bNBOMhBq0g4vYzyEYNvMbVEVVfLWqS', '$2y$10$Fy0EoVBvdj0QJoBFNH7ZUOvs/fJKbDDGqrjvFHwwz81HlPLQ3AtO2', 'uploads/I-teach1689597658.png', 'Kano', '2023-07-17 12:40:58'),
(5, 'Ajayi', 'Bade', 'e@gmail.com', '777', 'male', 'Ogudu', '$2y$10$o2Ho4eYnl3Fwrbr5R7RMX.yevydfrskluXnjhXmkGkjEucvRtFMdG', '$2y$10$Ar9X.97IBW5e3GYq3HmMGedbRe9ZW8qApIYEdNmtF37Yl9vDjuaQK', 'uploads/I-teach1689603494.jpg', 'Abuja', '2023-07-17 14:18:14'),
(6, 'Lizzy', 'Gary', 'l@gmail.com', '87687', 'female', '2, Ogudu', '$2y$10$UzSWvLwJ7CoF8AyWfPvduu0t/J6VKLXNmPJcltTydEOhfPsD2P51u', '$2y$10$Xd1OsV8QabSv6t3Xf4ALT.VsqbCBRzpF2zG3yrb19Vm3geW9hZ4nS', 'uploads/I-teach1689847671.png', 'Lagos', '2023-07-17 14:30:01'),
(8, 'John', 'Tope', 'Jewel@gmail.com', '7765', 'male', 'Lekki', '$2y$10$/kjUhRfWS7mqvfNsvVAOAupa0K.pcnY7Dc1ZSCE2X/v2x4RshwrpG', '$2y$10$Enmta4Qvvlflcic0CKgH8ODkv.lnaRrPtJQzuaWqpltoX0B7pBWUi', 'uploads/I-teach1689710324.png', 'Lagos', '2023-07-18 19:58:44'),
(9, 'Seyi', 'Shade', 'Favour@gmail.com', '456', 'male', 'Lekki', '$2y$10$ny4oOLmc7laL/Di4v7ZhG.wqOmYieOrAgbzSJYI/AuG1YBO6DoYpW', '$2y$10$zwQXbDXl/MH9rY6o8lc7OOtNuDYz6VkhJ1mJNeAtbtiS68cAXLjZC', 'uploads/I-teach1689844430.jpg', 'Lagos', '2023-07-20 08:57:29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`admin_email`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`request_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `repairer_id` (`repairer_id`);

--
-- Indexes for table `tracker`
--
ALTER TABLE `tracker`
  ADD PRIMARY KEY (`tracker_id`),
  ADD KEY `tracker_user` (`tracker_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `cust_email` (`user_email`),
  ADD UNIQUE KEY `cust_phoneNumber` (`user_phoneNumber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `request_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tracker`
--
ALTER TABLE `tracker`
  MODIFY `tracker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tracker`
--
ALTER TABLE `tracker`
  ADD CONSTRAINT `tracker_user` FOREIGN KEY (`tracker_user`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
