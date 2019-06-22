-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2018 at 04:57 PM
-- Server version: 5.7.16-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `srmsincubation`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `password`) VALUES
('Ravi Pathak', 'ravi@gmail.com', 'ravi');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `email` varchar(50) NOT NULL,
  `pid` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `idea` varchar(50) NOT NULL,
  `title` varchar(150) NOT NULL,
  `statement` longtext NOT NULL,
  `details` longtext NOT NULL,
  `team` longtext NOT NULL,
  `upload` text NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`email`, `pid`, `department`, `idea`, `title`, `statement`, `details`, `team`, `upload`, `status`) VALUES
('ravipathak105@gmail.com', 1, 'Information Technology', 'Prototype Ready', 'eCampus Android App', 'abcd ', 'effghh', 'cdscx', 'uploads/data_structures_algorithms_tutorial.pdf', 'WAITING'),
('kapil@gmail.com', 2, 'Mechanical Engineering', 'Market Ready', 'dfdfdf', 'fdfdf', 'fdfd', 'dfdf', 'uploads/cprogramming_tutorial.pdf', 'NEW'),
('ravi@gmail.com', 3, 'Information Technology', 'Prototype Ready', 'fef', 'rewrewr', 'erwr', 'rewr', 'uploads/cprogramming_tutorial.pdf', 'NEW'),
('ravipathak105@gmail.com', 4, 'Information Technology', 'Market Ready', 'wdwadw', 'asdasd', 'sadasd', 'asdasd', 'uploads/cprogramming_tutorial.pdf', 'WAITING'),
('ravipathak105@gmail.com', 5, 'Electronics & Communication', 'Market Ready', 'ddd', 'ddd', 'ddd', 'ddd', 'uploads/data_structures_algorithms_tutorial.pdf', 'NEW');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `roll_no` bigint(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `roll_no`, `gender`, `password`, `created_at`) VALUES
(1, 'Ravi Pathak', 'ravipathak105@gmail.com', 9458708033, 1601410083, 'Male', '$2y$10$LRQq2jqMA0Sk5OI/r9gh9eZZ09GeKZSeUicW3QrpTV3aJt81xMHXq', '2018-10-07 15:12:12'),
(2, 'akash', 'akash@gmail.com', 546564, 4776, 'Female', '$2y$10$WdTKUJXeOxtC0fCrI5mAoesZ7orVYotWV2B4JqHYutZaX4Jz8bm3i', '2018-10-07 21:04:15'),
(3, 'Mohit Singh', 'mohit.singh@srms.ac.in', 7588800400, 1234567890, 'Male', '$2y$10$NoQCJZGvTRDIuFMSVbnhb..ZF1Hr/nh8idYCQNbutXMlttIkvkjh.', '2018-10-08 11:29:07'),
(4, 'kapil', 'kapil@gmail.com', 9458708033, 1601410083, 'Male', '$2y$10$XHNOntHkjPYdpizmOPf.Lu3eCHVBSV8dTlt/erITPoz84Wmks.74.', '2018-10-08 19:39:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
