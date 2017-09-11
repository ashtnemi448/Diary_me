-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2017 at 06:09 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `diary`
--

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(6) NOT NULL,
  `date` varchar(100) NOT NULL,
  `text` varchar(6000) NOT NULL,
  `title` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `date`, `text`, `title`) VALUES
(4, 'qwe', '<p>qwertyuiopasdfghjklzxcvbnm</p>\r\n\r\n<p>qwertyuiopasdfghjklzxcvbnm</p>\r\n\r\n<p>qwertyuiopasdfghjklzxcvbnm</p>\r\n\r\n<p><strong>qwertyuiopasdfghjklzxcvbnm</strong></p>\r\n\r\n<p><strong>qwertyuiopasdfghjklzxcvbnm</strong></p>\r\n\r\n<p><em>qwertyuiopasdfghjklzxcvbnm</em></p>\r\n\r\n<p><em>nnkbs&nbsp;</em></p>\r\n', 'qwe'),
(4, 'poi', '<p>qwertyuiopasdfghjklzxcvbnm</p>\r\n\r\n<p>qwertyuiopasdfghjklzxcvbnm</p>\r\n\r\n<p>qwertyuiopasdfghjklzxcvbnm</p>\r\n\r\n<p><strong>qwertyuiopasdfghjklzxcvbnm</strong></p>\r\n\r\n<p><strong>qwertyuiopasdfghjklzxcvbnm</strong></p>\r\n\r\n<p><em>qwertyuiopasdfghjklzxcvbnm</em></p>\r\n\r\n<p><em>nnkbs&nbsp;</em></p>\r\n', 'poi'),
(3, 'admin', '<p>adminadmin</p>\r\n\r\n<p>adminadminadminadmin</p>\r\n\r\n<p>admin</p>\r\n\r\n<p>admin</p>\r\n\r\n<p>admin</p>\r\n\r\n<p>admin</p>\r\n\r\n<p>admin</p>\r\n\r\n<p>admin</p>\r\n', 'admin'),
(4, 'absc', '<p>qwertyuiopasdfghjklzxcvbnm</p>\r\n\r\n<p>qwertyuiopasdfghjklzxcvbnm</p>\r\n\r\n<p>qwertyuiopasdfghjklzxcvbnm</p>\r\n\r\n<p><strong>qwertyuiopasdfghjklzxcvbnm</strong></p>\r\n\r\n<p><strong>qwertyuiopasdfghjklzxcvbnm</strong></p>\r\n\r\n<p><em>qwertyuiopasdfghjklzxcvbnm</em></p>\r\n\r\n<p><em>nnkbs&nbsp;</em><em><span style="display:none">&nbsp;</span></em></p>\r\n\r\n<p>&nbsp;</p>\r\n', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(4, 'sample', 'sample'),
(3, 'boss', 'baby');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD KEY `id` (`id`);

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
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
