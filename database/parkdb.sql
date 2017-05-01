-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2017 at 11:23 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `parkdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `parking`
--

CREATE TABLE `parking` (
  `id` int(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `position` varchar(50) NOT NULL,
  `name` text NOT NULL,
  `priority` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parking`
--

INSERT INTO `parking` (`id`, `address`, `position`, `name`, `priority`) VALUES
(1, 'add1', 'latlang1', 'aasafsf', 1),
(2, 'saaf2', 'sdfsdf2', 'sfsdfsdf2', 2);

-- --------------------------------------------------------

--
-- Table structure for table `slot`
--

CREATE TABLE `slot` (
  `id` int(11) NOT NULL,
  `vtype_id` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `plot_id` int(11) NOT NULL,
  `is_taken` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slot`
--

INSERT INTO `slot` (`id`, `vtype_id`, `priority`, `plot_id`, `is_taken`) VALUES
(1, 101, 3, 1, 1),
(2, 101, 2, 1, 1),
(3, 101, 1, 2, 1),
(4, 101, 2, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(15) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `phone` int(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `address`, `phone`) VALUES
(1, 'ganesh', 'password', 'Ganesh Poojary', 'ganesh4212@gmail.com', 'Uppunda', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `id` int(11) NOT NULL,
  `vnum` varchar(25) NOT NULL,
  `owner` text NOT NULL,
  `login` datetime NOT NULL,
  `logout` datetime DEFAULT NULL,
  `slot_id` int(11) DEFAULT NULL,
  `vtype_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`id`, `vnum`, `owner`, `login`, `logout`, `slot_id`, `vtype_id`) VALUES
(1, '101', 'sfsfsdf', '2017-05-01 14:56:01', '2017-05-01 14:56:01', NULL, NULL),
(2, '', '', '2017-05-01 15:02:02', NULL, NULL, 101),
(4, 'ka20b142', 'Harish', '2017-05-01 15:43:50', NULL, 2, 101),
(5, 'ka20b143', 'Nagesh', '2017-05-01 15:44:07', NULL, 1, 101),
(6, 'ka20b144', 'Umesh', '2017-05-01 15:44:19', NULL, 3, 101),
(9, 'ka20 b4212', 'Ganesh poojary', '2017-05-01 16:18:45', NULL, 4, 101);

-- --------------------------------------------------------

--
-- Table structure for table `vtype`
--

CREATE TABLE `vtype` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rent` decimal(10,0) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `vtype`
--

INSERT INTO `vtype` (`id`, `name`, `rent`) VALUES
(101, 'bike', '10'),
(102, 'Car', '50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `parking`
--
ALTER TABLE `parking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slot`
--
ALTER TABLE `slot`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vtype_id` (`vtype_id`),
  ADD KEY `fk_plot_id` (`plot_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_vtype_id` (`vtype_id`);

--
-- Indexes for table `vtype`
--
ALTER TABLE `vtype`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `parking`
--
ALTER TABLE `parking`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slot`
--
ALTER TABLE `slot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `vehicle`
--
ALTER TABLE `vehicle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
