-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 05:30 PM
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
-- Database: `francisco_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `user_type` enum('ITSO Personnel','Associate','Student') NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `code` varchar(20) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('active','deactivated') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `username`, `password`, `email`, `user_type`, `fullname`, `code`, `datecreated`, `status`, `created_at`, `updated_at`) VALUES
(3, 'dini_ii', 'user1', 'user@sample.com', 'ITSO Personnel', 'Rudini Francisco III', '', '2024-10-19 07:12:40', 'deactivated', '2024-11-29 13:07:08', '2024-11-29 13:07:08'),
(5, 'user1', 'user1', 'fapflores@gmail.com', 'ITSO Personnel', 'users111', '', '2024-11-29 16:37:46', 'deactivated', '2024-11-29 13:07:08', '2024-11-29 13:07:08'),
(6, 'floyd', 'floyd', 'fapflores@gmail.com', 'ITSO Personnel', 'floyd', '', '2024-11-29 16:48:20', 'deactivated', '2024-11-29 13:07:08', '2024-11-29 13:07:08'),
(7, 'user2', 'user2', 'user2@gmail.com', 'ITSO Personnel', 'user2', '', '2024-11-29 18:34:56', 'active', '2024-11-29 13:07:08', '2024-11-29 13:07:08'),
(8, 'user3', 'user3', 'user3@gmail.com', 'ITSO Personnel', 'user3', '', '2024-11-29 22:36:10', 'active', '2024-11-29 14:36:10', '2024-11-29 14:36:10'),
(9, 'USER4', 'USER4', 'USER4@GMAIL.COM', 'ITSO Personnel', 'USER4', '', '2024-11-30 00:16:19', 'active', '2024-11-29 16:16:19', '2024-11-29 16:16:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
