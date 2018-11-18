-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2018 at 05:53 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `title`
--

CREATE TABLE `title` (
  `title_ID` int(30) NOT NULL,
  `employee_title` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title`
--

INSERT INTO `title` (`title_ID`, `employee_title`) VALUES
(1, 'Chief Executive Officer'),
(2, 'Human Resource Manager'),
(5, 'Project Manager'),
(9, 'Assistant Project Manager'),
(10, 'Marketing Manager'),
(11, 'Accountant'),
(12, 'system admin'),
(13, 'General Manager');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_ID` int(20) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `title` varchar(30) NOT NULL,
  `email` varchar(35) NOT NULL,
  `phone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_ID`, `username`, `password`, `title`, `email`, `phone`) VALUES
(42, 'owden peter', '7f550a9f4c44173a37664d938f1355f0f92a47a7', 'Chief Executive Officer', 'owden.kimaro@riarauniversity.ac.ke', '+254790921553'),
(43, 'King Kaka', 'aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d', 'Chief Executive Officer', 'king@gmail.com', '+254792547896'),
(44, 'Ephantus Mwangi', '78c9a53e2f28b543ea62c8266acfdf36d5c63e61', 'Chief Executive Officer', 'ephantus@gmail.com', '+88 902 555 844'),
(45, 'Aslay', '7f550a9f4c44173a37664d938f1355f0f92a47a7', 'General Manager', 'hey@gmail.com', '+254889966663'),
(46, 'kelvin', '7f550a9f4c44173a37664d938f1355f0f92a47a7', 'Accountant', 'kev@gmail.com', '+5695522665');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `title`
--
ALTER TABLE `title`
  ADD PRIMARY KEY (`title_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `title`
--
ALTER TABLE `title`
  MODIFY `title_ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
