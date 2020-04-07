-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2020 at 07:41 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `damino`
--

-- --------------------------------------------------------

--
-- Table structure for table `n8v7cdj8_books`
--

CREATE TABLE `n8v7cdj8_books` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `n8v7cdj8_books`
--

INSERT INTO `n8v7cdj8_books` (`id`, `title`, `description`) VALUES
(2, 'Test Title', 'Test Description');

-- --------------------------------------------------------

--
-- Table structure for table `n8v7cdj8_users`
--

CREATE TABLE `n8v7cdj8_users` (
  `id` int(11) NOT NULL,
  `nickname` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL COMMENT '0:not confirmed 1:confirmed 2:banned',
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `last_login_date` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `n8v7cdj8_users`
--

INSERT INTO `n8v7cdj8_users` (`id`, `nickname`, `email`, `password`, `status`, `registration_date`, `last_login_date`, `email_verified_at`, `remember_token`) VALUES
(1, 'rossifran', 'masterionic@gmail.com', '$2y$10$qhKs9lltfNFKJdx0QxYXJuUgvx5VhQgfaWmMdYcdj1pv5YeH7IYXS', 1, '2020-04-07 08:36:15', '2020-04-07 08:38:41', NULL, 'OVyH4s9ip4T5ppJiNHAOM49jdqe4ibJlisfIGpA9Px7xTijTX0At1XNw9nQE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `n8v7cdj8_books`
--
ALTER TABLE `n8v7cdj8_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `n8v7cdj8_users`
--
ALTER TABLE `n8v7cdj8_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `n8v7cdj8_books`
--
ALTER TABLE `n8v7cdj8_books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `n8v7cdj8_users`
--
ALTER TABLE `n8v7cdj8_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
