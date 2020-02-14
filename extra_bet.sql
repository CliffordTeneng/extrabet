-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 14, 2020 at 09:19 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `extra_bet`
--

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(32) NOT NULL,
  `match_name` varchar(255) NOT NULL,
  `teamA` varchar(255) NOT NULL,
  `teamB` varchar(255) NOT NULL,
  `tip` varchar(200) NOT NULL,
  `date_input` date NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `match_name`, `teamA`, `teamB`, `tip`, `date_input`, `date`) VALUES
(15, 'test match name', 'team a', 'team b', '3 tips', '2020-02-26', '2020-02-14 11:53:59'),
(16, 'test match name 2', 'team ab', 'team ba', '3 tips', '2020-02-19', '2020-02-14 11:55:30'),
(17, 'fadfadf', 'sfgsfdg', 'ADFDF', 'fsdf', '2020-02-18', '2020-02-14 14:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `match_result`
--

CREATE TABLE `match_result` (
  `id` int(32) NOT NULL,
  `match_name` varchar(255) NOT NULL,
  `teamA` varchar(255) NOT NULL,
  `teamB` varchar(255) NOT NULL,
  `date_input` date NOT NULL,
  `tip` varchar(255) NOT NULL,
  `result` varchar(255) DEFAULT NULL,
  `status` int(3) DEFAULT 1,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match_result`
--

INSERT INTO `match_result` (`id`, `match_name`, `teamA`, `teamB`, `date_input`, `tip`, `result`, `status`, `date`) VALUES
(12, 'test match name', 'team a', 'team b', '2020-02-26', '3 tips', 'kkk', 1, '2020-02-14 11:54:00'),
(13, 'test match name 2', 'team ab', 'team ba', '2020-02-19', '3 tips', 'kk', 0, '2020-02-14 11:55:30'),
(14, 'fadfadf', 'sfgsfdg', 'ADFDF', '2020-02-18', 'fsdf', 'jj', 1, '2020-02-14 14:16:50');

-- --------------------------------------------------------

--
-- Table structure for table `match_upcoming`
--

CREATE TABLE `match_upcoming` (
  `id` int(32) NOT NULL,
  `match_name` varchar(255) NOT NULL,
  `teamA` varchar(255) NOT NULL,
  `teamB` varchar(255) NOT NULL,
  `date_input` date NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `match_upcoming`
--

INSERT INTO `match_upcoming` (`id`, `match_name`, `teamA`, `teamB`, `date_input`, `date`) VALUES
(5, '', 'team a', 'team b', '2020-02-26', '2020-02-14 11:54:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(36) NOT NULL,
  `password` varchar(36) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'adminbetextra', '355f9df3f2383c1842dd0c3b42cf54da');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_result`
--
ALTER TABLE `match_result`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `match_upcoming`
--
ALTER TABLE `match_upcoming`
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
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `match_result`
--
ALTER TABLE `match_result`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `match_upcoming`
--
ALTER TABLE `match_upcoming`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
