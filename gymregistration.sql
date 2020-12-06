-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2020 at 12:25 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gymregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `cardname` varchar(20) NOT NULL,
  `cardnumber` int(20) NOT NULL,
  `cardmoexp` int(2) NOT NULL,
  `cardyrexp` int(4) NOT NULL,
  `cvv` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`cardname`, `cardnumber`, `cardmoexp`, `cardyrexp`, `cvv`) VALUES
('', 0, 0, 0, 0),
('raju', 46546454, 54654, 445, 5454),
('', 0, 0, 0, 0),
('', 0, 0, 0, 0),
('rahul', 5654, 45, 454, 111),
('wae', 5161, 45, 45, 545),
('wae', 5161, 45, 45, 545),
('wae', 5161, 45, 45, 545),
('111', 55, 55, 55, 55),
('', 0, 0, 0, 0),
('11', 44, 22, 55, 55),
('hemsingh makwana', 77, 77, 0, 0),
('hemsingh makwana', 77, 77, 0, 0),
('', 0, 0, 0, 0),
('66', 0, 54, 22, 33),
('66', 0, 54, 22, 33),
('66', 0, 54, 22, 33),
('66', 0, 54, 22, 33),
('11', 0, 5, 4, 11),
('', 0, 0, 0, 0),
('', 0, 0, 0, 0),
('', 0, 0, 0, 0),
('', 0, 0, 0, 0),
('', 0, 0, 0, 0),
('', 0, 0, 0, 0),
('', 0, 0, 0, 0),
('', 0, 0, 0, 0),
('', 0, 0, 0, 0),
('hemsingh makwana', 22, 2, 2, 111),
('hemsingh makwana', 22, 2, 2, 111),
('hemsingh makwana', 22, 2, 2, 111),
('hemsingh makwana', 22, 2, 2, 111),
('1221', 454, 54, 45, 233),
('1221', 454, 54, 45, 233),
('hemsingh makwana', 1, 2, 3, 4),
('hemsingh makwana', 1, 2, 3, 4),
('hemsingh makwana', 1, 2, 3, 4),
('hemsingh makwana', 1, 2, 3, 4),
('hemsingh makwana', 1, 2, 3, 4),
('hemsingh makwana', 1, 2, 3, 4),
('hemsingh makwana', 1, 2, 3, 4),
('hemsingh makwana', 1, 2, 3, 4),
('hemsingh makwana', 1, 2, 3, 4),
('hemsingh makwana', 1, 2, 3, 4),
('hemsingh makwana', 1, 2, 3, 4),
('', 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(4) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(3) NOT NULL,
  `locality` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pack` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `age`, `locality`, `email`, `pack`, `gender`) VALUES
(31, 'Hemsingh makwana', 88, 'shujalpur', 'hmakawana24@gmail.co', 'threemonth', 'm'),
(32, 'Hemsingh makwana', 88, 'shujalpur', 'hmakawana24@gmail.co', 'threemonth', 'm'),
(37, 'Hemsingh makwana', 24, '12', 'hmakawana24@gmail.co', 'onemonth', 'm'),
(39, 'Hemsingh makwana', 24, 'ram nagar', 'hmakawana24@gmail.co', 'threemonth', 'm'),
(41, '19mcmc04', 24, 'ram nagar', 'mnsh26062000@gmail.c', 'onemonth', 'm'),
(43, 'Hemsingh makwana', 24, 'ram nagar', 'hmakawana24@gmail.co', 'onemonth', 'm'),
(59, 'Hemsingh ', 24, 'nidnden', 'hemsingh.makwana.7@f', 'onemonth', 'm'),
(65, 'sachin', 22, 'indore', 'sacin@gmail.com', 'onemonth', 'm');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
