-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2023 at 04:36 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `socialnetwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `group_volunteer`
--

CREATE TABLE `group_volunteer` (
  `id` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `active` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `group_volunteer`
--

INSERT INTO `group_volunteer` (`id`, `id_group`, `id_user`, `name`, `active`) VALUES
(1, 41, 14, 'group 41', '1'),
(2, 42, 14, 'group 42', '1');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(10) NOT NULL,
  `point` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id_post`, `id_user`, `description`, `image`, `createdAt`, `status`, `point`) VALUES
(1, 13, 'test test', '', '2023-04-08 09:53:22', 'air', 10),
(2, 13, 'test2', '', '2023-04-08 09:53:29', 'air', 10),
(3, 13, 'test3', '', '2023-04-08 09:53:33', 'air', 10),
(4, 13, 'test4', '', '2023-04-08 09:53:35', 'air', 10),
(5, 13, 'test5', '', '2023-04-08 09:53:38', 'air', 10),
(6, 14, 'faga', '', '2023-04-08 09:53:40', 'air', 10),
(7, 14, 'vzvzxz', '', '2023-04-08 09:53:44', 'air', 10),
(8, 14, 'agaga', '', '2023-04-08 09:53:47', 'air', 10),
(9, 14, 'what da fck', '', '2023-04-08 09:53:49', 'air', 10),
(10, 14, '', '6430f2b73246b.jpg', '2023-04-08 09:53:51', 'air', 10),
(11, 15, 'haha\r\n', '', '2023-04-08 09:53:53', 'air', 10),
(12, 15, 'conga\r\n', '', '2023-04-08 09:53:56', 'air', 10),
(13, 15, 'concak', '', '2023-04-08 09:54:05', 'air', 10),
(14, 14, 'concak', '', '2023-04-08 09:54:08', 'air', 10),
(15, 14, '', '', '2023-04-08 09:54:11', 'air', 10),
(16, 14, '', '6431107daed99.jpg', '2023-04-08 09:54:13', 'air', 10),
(17, 14, '', '64311098b6fd8.jpg', '2023-04-08 09:54:15', 'air', 10),
(18, 14, 'chube', '', '2023-04-08 09:54:18', 'air', 10),
(19, 14, 'cs tuoi dep', '', '2023-04-08 09:54:21', 'air', 10),
(20, 14, 'chu be dan', '643118dcebf4e.jpg', '2023-04-08 09:54:24', 'air', 10),
(42, 14, 'chu ga', '', '2023-04-08 10:49:18', 'air', 0),
(43, 14, 'here', '', '2023-04-08 10:56:48', 'air', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT current_timestamp(),
  `designation` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `skills` text DEFAULT NULL,
  `aboutme` text DEFAULT NULL,
  `profileimage` varchar(255) DEFAULT NULL,
  `role` varchar(50) NOT NULL,
  `point` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `name`, `email`, `password`, `createdAt`, `designation`, `degree`, `university`, `city`, `country`, `skills`, `aboutme`, `profileimage`, `role`, `point`) VALUES
(13, 'John Smith', 'test@test.com', 'YjdlNDhmMTk4NjFhNDNjNGM2MDdhOGFlZTBiY2M3Mjg=', '2017-09-04 07:45:47', 'Web Developer', 'B.Tech', 'ABCB', 'Sydney', 'Australia', 'PHP HTML CSS', 'I like to code and teach.', '59ad28c885f9c.png', '', 0),
(14, 'Duy Ha', 'halac123b@gmail.com', 'ZTM4OGYwMmY3NTBlNjVlYmJhOTVhYjk0OTNjZGEwMWU=', '2023-04-07 17:50:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'admin', 20),
(15, 'ha ha', 'halac123code@gmail.com', 'ZTM4OGYwMmY3NTBlNjVlYmJhOTVhYjk0OTNjZGEwMWU=', '2023-04-08 05:48:08', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'user', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `group_volunteer`
--
ALTER TABLE `group_volunteer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id_post`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);
ALTER TABLE `users` ADD FULLTEXT KEY `role` (`profileimage`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `group_volunteer`
--
ALTER TABLE `group_volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
