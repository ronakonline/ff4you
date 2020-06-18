-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2020 at 05:47 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` mediumtext NOT NULL,
  `password` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@1');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(40) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL DEFAULT 0,
  `is_private_key` tinyint(1) NOT NULL DEFAULT 0,
  `ip_addresses` text DEFAULT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_addresses`, `date_created`) VALUES
(1, 'u6IxQFQQ8U', 0, 0, 0, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `method` varchar(6) NOT NULL,
  `params` text DEFAULT NULL,
  `api_key` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` int(11) NOT NULL,
  `rtime` float DEFAULT NULL,
  `authorized` varchar(1) NOT NULL,
  `response_code` smallint(3) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `providers`
--

CREATE TABLE `providers` (
  `id` int(11) NOT NULL,
  `name` mediumtext NOT NULL,
  `description` mediumtext NOT NULL,
  `price` double NOT NULL,
  `thumbnail` mediumtext NOT NULL,
  `address` mediumtext NOT NULL,
  `lat` mediumtext NOT NULL,
  `lng` mediumtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `isdeleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `providers`
--

INSERT INTO `providers` (`id`, `name`, `description`, `price`, `thumbnail`, `address`, `lat`, `lng`, `created_at`, `updated_at`, `isdeleted`) VALUES
(2, 'provider69', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat lacus pretium erat maximus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus eu magna ut lectus placerat egestas commodo et nulla. Fusce tristique consequat finibus. Integer id volutpat mauris, quis suscipit felis. Vestibulum ac est sollicitudin, posuere risus nec, rutrum nibh. Donec ultrices, eros nec rutrum auctor, libero libero vulputate neque, a efficitur massa turpis at felis. Nunc orci est, interdum vitae felis ut, molestie dictum ex. Suspendisse massa arcu, pellentesque ac est nec, egestas viverra enim. Nam consectetur augue lectus, et ullamcorper urna finibus in. Sed in pellentesque ligula.', 0, '159215185043878406_328769501231164_7204963542057877504_n.png', 'ahmedabad', '22.9990159', '72.6490015', '2020-06-06 17:48:31', '2020-06-06 17:48:31', 0),
(3, 'provider2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat lacus pretium erat maximus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus eu magna ut lectus placerat egestas commodo et nulla. Fusce tristique consequat finibus. Integer id volutpat mauris, quis suscipit felis. Vestibulum ac est sollicitudin, posuere risus nec, rutrum nibh. Donec ultrices, eros nec rutrum auctor, libero libero vulputate neque, a efficitur massa turpis at felis. Nunc orci est, interdum vitae felis ut, molestie dictum ex. Suspendisse massa arcu, pellentesque ac est nec, egestas viverra enim. Nam consectetur augue lectus, et ullamcorper urna finibus in. Sed in pellentesque ligula.', 0, 'thumbnail.jpg', 'ahmedabad', '22.999540', '72.6654448', '2020-06-06 17:51:12', '2020-06-06 17:51:12', 0),
(4, 'prvider3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat lacus pretium erat maximus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus eu magna ut lectus placerat egestas commodo et nulla. Fusce tristique consequat finibus. Integer id volutpat mauris, quis suscipit felis. Vestibulum ac est sollicitudin, posuere risus nec, rutrum nibh. Donec ultrices, eros nec rutrum auctor, libero libero vulputate neque, a efficitur massa turpis at felis. Nunc orci est, interdum vitae felis ut, molestie dictum ex. Suspendisse massa arcu, pellentesque ac est nec, egestas viverra enim. Nam consectetur augue lectus, et ullamcorper urna finibus in. Sed in pellentesque ligula.', 0, 'nothing.jpg', 'ahmedabad', '22.999293', '72.665890', '2020-06-06 17:52:27', '2020-06-06 17:52:27', 0),
(5, 'provider4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat lacus pretium erat maximus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus eu magna ut lectus placerat egestas commodo et nulla. Fusce tristique consequat finibus. Integer id volutpat mauris, quis suscipit felis. Vestibulum ac est sollicitudin, posuere risus nec, rutrum nibh. Donec ultrices, eros nec rutrum auctor, libero libero vulputate neque, a efficitur massa turpis at felis. Nunc orci est, interdum vitae felis ut, molestie dictum ex. Suspendisse massa arcu, pellentesque ac est nec, egestas viverra enim. Nam consectetur augue lectus, et ullamcorper urna finibus in. Sed in pellentesque ligula.', 0, 'nothing', 'ahmedabad', '22.9994905', '72.6662839', '2020-06-06 17:53:50', '2020-06-06 17:53:50', 0),
(6, 'provider5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat lacus pretium erat maximus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus eu magna ut lectus placerat egestas commodo et nulla. Fusce tristique consequat finibus. Integer id volutpat mauris, quis suscipit felis. Vestibulum ac est sollicitudin, posuere risus nec, rutrum nibh. Donec ultrices, eros nec rutrum auctor, libero libero vulputate neque, a efficitur massa turpis at felis. Nunc orci est, interdum vitae felis ut, molestie dictum ex. Suspendisse massa arcu, pellentesque ac est nec, egestas viverra enim. Nam consectetur augue lectus, et ullamcorper urna finibus in. Sed in pellentesque ligula.', 0, 'nothing.jpg', 'surat', '22.998960 ', '72.666525', '2020-06-06 17:55:14', '2020-06-06 17:55:14', 0),
(7, 'providers6', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat lacus pretium erat maximus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus eu magna ut lectus placerat egestas commodo et nulla. Fusce tristique consequat finibus. Integer id volutpat mauris, quis suscipit felis. Vestibulum ac est sollicitudin, posuere risus nec, rutrum nibh. Donec ultrices, eros nec rutrum auctor, libero libero vulputate neque, a efficitur massa turpis at felis. Nunc orci est, interdum vitae felis ut, molestie dictum ex. Suspendisse massa arcu, pellentesque ac est nec, egestas viverra enim. Nam consectetur augue lectus, et ullamcorper urna finibus in. Sed in pellentesque ligula.', 0, 'nothing.jpg', 'ahmedabad', '22.998922 ', '72.665835', '2020-06-06 17:57:05', '2020-06-06 17:57:05', 0),
(8, 'Provider7', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat lacus pretium erat maximus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus eu magna ut lectus placerat egestas commodo et nulla. Fusce tristique consequat finibus. Integer id volutpat mauris, quis suscipit felis. Vestibulum ac est sollicitudin, posuere risus nec, rutrum nibh. Donec ultrices, eros nec rutrum auctor, libero libero vulputate neque, a efficitur massa turpis at felis. Nunc orci est, interdum vitae felis ut, molestie dictum ex. Suspendisse massa arcu, pellentesque ac est nec, egestas viverra enim. Nam consectetur augue lectus, et ullamcorper urna finibus in. Sed in pellentesque ligula.', 0, 'nothing.jpg', 'ahmedabad', '22.999075', '6661003 ', '2020-06-06 17:59:20', '2020-06-06 17:59:20', 0),
(9, 'provider8', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat lacus pretium erat maximus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus eu magna ut lectus placerat egestas commodo et nulla. Fusce tristique consequat finibus. Integer id volutpat mauris, quis suscipit felis. Vestibulum ac est sollicitudin, posuere risus nec, rutrum nibh. Donec ultrices, eros nec rutrum auctor, libero libero vulputate neque, a efficitur massa turpis at felis. Nunc orci est, interdum vitae felis ut, molestie dictum ex. Suspendisse massa arcu, pellentesque ac est nec, egestas viverra enim. Nam consectetur augue lectus, et ullamcorper urna finibus in. Sed in pellentesque ligula.', 0, 'nothing.jpg', 'ahmedabad', '22.999042', '72.6657778', '2020-06-06 18:03:17', '2020-06-06 18:03:17', 0),
(10, 'provider9', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat lacus pretium erat maximus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus eu magna ut lectus placerat egestas commodo et nulla. Fusce tristique consequat finibus. Integer id volutpat mauris, quis suscipit felis. Vestibulum ac est sollicitudin, posuere risus nec, rutrum nibh. Donec ultrices, eros nec rutrum auctor, libero libero vulputate neque, a efficitur massa turpis at felis. Nunc orci est, interdum vitae felis ut, molestie dictum ex. Suspendisse massa arcu, pellentesque ac est nec, egestas viverra enim. Nam consectetur augue lectus, et ullamcorper urna finibus in. Sed in pellentesque ligula.', 0, 'nothing.jpg', 'ahmedabad', '22.998956', '72.666510', '2020-06-06 18:04:37', '2020-06-06 18:04:37', 0),
(11, 'provider10', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed volutpat lacus pretium erat maximus lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus eu magna ut lectus placerat egestas commodo et nulla. Fusce tristique consequat finibus. Integer id volutpat mauris, quis suscipit felis. Vestibulum ac est sollicitudin, posuere risus nec, rutrum nibh. Donec ultrices, eros nec rutrum auctor, libero libero vulputate neque, a efficitur massa turpis at felis. Nunc orci est, interdum vitae felis ut, molestie dictum ex. Suspendisse massa arcu, pellentesque ac est nec, egestas viverra enim. Nam consectetur augue lectus, et ullamcorper urna finibus in. Sed in pellentesque ligula.', 0, 'nothing.jpg', 'ahmedabad', '22.998920 ', '72.666501', '2020-06-06 18:05:44', '2020-06-06 18:05:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `slots` int(11) NOT NULL,
  `isdeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `provider_id`, `date`, `from_time`, `to_time`, `slots`, `isdeleted`) VALUES
(1, 2, '2020-06-13', '13:25:32', '18:25:33', 10, 0),
(2, 2, '2020-06-12', '13:28:08', '18:28:10', 5, 1),
(3, 0, '2020-06-15', '09:00:00', '12:00:00', 45, 0),
(4, 0, '2020-06-15', '09:00:00', '12:00:00', 45, 0),
(5, 7, '2020-06-18', '10:00:00', '22:00:00', 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slots`
--

INSERT INTO `slots` (`id`, `user_id`, `service_id`) VALUES
(1, 1, 1);

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
  `isdeleted` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `verification_code`, `verified`, `created_at`, `isdeleted`) VALUES
(1, 'ronakkk', 'ronak@gmail.com', '123', 104889, 1, '2020-06-11 12:18:40', 0),
(2, 'ronakkk', 'ronak@gmail.com', '123', 104889, 0, '2020-06-11 12:18:40', 0),
(3, 'ronakkk', 'ronak@gmail.com', '123', 104889, 0, '2020-06-11 12:18:40', 0),
(4, 'ronakkk', 'ronak@gmail.com', '123', 104889, 0, '2020-06-11 12:18:40', 0),
(5, 'ronakkk', 'ronak@gmail.com', '123', 104889, 0, '2020-06-11 12:20:12', 0),
(6, 'Yash', 'ronakpareek280@gmail.com', '123456', 912482, 0, '2020-06-11 18:42:47', 0),
(7, 'Yash', 'ronakpareek280@gmail.com', '123456', 686909, 1, '2020-06-11 18:43:16', 0),
(8, 'ronakkk', 'ronak@gmail.com', '123', 104889, 0, '2020-06-14 18:06:40', 0),
(9, 'ronakkk', 'ronak@gmail.com', '123', 104889, 0, '2020-06-14 18:07:53', 0),
(10, 'ronak', 'ronakpareek2801@gmail.com', '123456', 392963, 0, '2020-06-14 18:08:54', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `providers`
--
ALTER TABLE `providers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `providers`
--
ALTER TABLE `providers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
