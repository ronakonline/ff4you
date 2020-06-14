-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2020 at 07:48 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ff4you`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `email` mediumtext NOT NULL,
  `password` mediumtext NOT NULL,
  `verification_code` mediumint(9) DEFAULT NULL,
  `verified` int(11) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `isdeleted` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `verification_code`, `verified`, `created_at`, `isdeleted`) VALUES
(1, 'Ronak', 'ronak@gmail.com', '123456', 0, 0, '2020-06-11 12:18:40', 0),
(2, 'ronak', 'ronak@gmail.com', '123', 0, 0, '2020-06-11 12:18:40', 0),
(3, 'ronak', 'ronak@gmail.com', '123', 0, 0, '2020-06-11 12:18:40', 0),
(4, 'ronak', 'ronak@gmail.com', '123', 0, 0, '2020-06-11 12:18:40', 0),
(5, 'ronak', 'ronak@gmail.com', '123', NULL, 1, '2020-06-11 12:20:12', 0),
(7, 'Yash', 'YashDaiya@gmail.com', '123456', 686909, 1, '2020-06-11 18:43:16', 0),
(8, 'smit leel', 'smit@mail.com', '123456789', NULL, 1, '2020-06-14 16:54:38', 0),
(9, 'Yash', 'daiyayash1218@gmail.com', '12345678', NULL, 1, '2020-06-14 17:25:23', 1),
(10, 'yash', 'daiyayash2020@gmail.com', 'admin@1', NULL, 0, '2020-06-14 17:48:42', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
