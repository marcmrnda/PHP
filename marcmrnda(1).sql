-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2025 at 09:51 AM
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
-- Database: `marcmrnda`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `contact_no` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `email`, `address`, `section`, `contact_no`, `password`, `account_type`) VALUES
(10, 'Jennie Kim', 'banini@gmail.com', 'Korea', 'BLACKPINK', '111111', '', ''),
(11, 'Jisoo Kim', 'iamjisoo@gmail.com', 'South Korea', 'BLACKPINK', '11111', '', ''),
(12, 'Chaeyoung Park', 'rosieposie@gmail.com', 'South Korea', 'BLACKPINK', '11111', '', ''),
(13, 'Lisa Manoban', 'lalisaa@gmail.com', 'Bangkok,Thailand', 'BLACKPINK', '111111', '', ''),
(14, 'Luffy', 'meatuuu@gmail.com', 'North Blue', 'StrawHats Pirate', '11111', '', ''),
(15, 'Zoro', 'kuina@gmail.com', 'Green Blue', 'StrawHats Pirate', '11111', '', ''),
(16, 'Sanji', 'cookingislyf@gmail.com', 'South Blue', 'StrawHats Pirate', '2222', '', ''),
(17, 'Nami-Swannn', 'tanbgeringe@gmail.com', 'Mega Blue', 'StrawHats Pirate', '1111111', '', ''),
(18, 'Usopp-kun', 'longnose@gmail.com', 'Red Blue', 'StrawHats Pirate', '111111', '', ''),
(19, 'Robin', 'pineapple@gmail.com', 'Point Blue', 'StrawHats Pirate', '111111', '', ''),
(20, 'Chopper', 'doctor@gmail.com', 'Drum Islandsss', 'StrawHats Pirate', '1241235134', '', ''),
(22, 'Brook Yohoho', 'laboon@gmail.com', 'Middle East', 'StrawHats Pirate', '123124124', '', ''),
(25, 'Jimbei Chan', 'luffykun@gmail.com', 'Fish Girl Island', 'StrawHats Pirate', '1111111', '', ''),
(26, 'Lebron James Senpai', 'manonthelakers@gmail.com', 'Los Angeles', 'Cavaliers', '0912312312444', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
