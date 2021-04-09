-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2021 at 08:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(25, 'Vic', 'Vic@example.com', 'e10adc3949ba59abbe56e057f20f883e'),
(26, 'Dorcey123', 'test@tester.com', '1b3970c91f34dfdb48248904be41b3e9'),
(27, 'Vic', 'test@tester.com', 'e10adc3949ba59abbe56e057f20f883e'),
(28, 'Vic', 'test@tester.com', 'fcea920f7412b5da7be0cf42b8c93759'),
(29, 'asdf', 'test@tester.com', 'bfd59291e825b5f2bbf1eb76569f8fe7'),
(30, 'Viktor', 'test@tester.com', 'af5b3d17aa1e2ff2a0f83142d692d701'),
(31, 'Viktor', 'test@tester.com', 'e10adc3949ba59abbe56e057f20f883e'),
(32, 'Viktor', 'test@tester.com', '8f139acdbb282022f9fc8a5f69fc9cc1'),
(33, 'Viktor', 'test@tester.com', '92683f41853a24ef02ba15a1351ad92c'),
(34, 'Viktor', 'test@tester.com', '131f72d5d80d8eb4123a5476bbb25e6f');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
