-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2019 at 12:02 AM
-- Server version: 5.6.38
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajb`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `acc_ID` int(11) NOT NULL,
  `acc_username` varchar(20) NOT NULL,
  `acc_password` text NOT NULL,
  `acc_type` varchar(20) NOT NULL,
  `acc_datecreated` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`acc_ID`, `acc_username`, `acc_password`, `acc_type`, `acc_datecreated`) VALUES
(109, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'co-administrator', '2019-06-03'),
(108, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'administrator', '2019-06-03'),
(1, 'root', '63a9f0ea7bb98050796b649e85481845', 'administrator', '2019-06-03'),
(110, 'test', '098f6bcd4621d373cade4e832627b4f6', 'co-administrator', '2019-06-04'),
(111, 'A', '0cc175b9c0f1b6a831c399e269772661', 'co-administrator', '2019-06-10'),
(112, 'B', '92eb5ffee6ae2fec3ad71c777531578f', 'co-administrator', '2019-06-10'),
(113, 'C', '4a8a08f09d37b73795649038408b5f33', 'co-administrator', '2019-06-10'),
(114, 'D', '8277e0910d750195b448797616e091ad', 'co-administrator', '2019-06-10'),
(115, 'E', 'e1671797c52e15f763380b45e841ec32', 'co-administrator', '2019-06-10'),
(116, 'F', '8fa14cdd754f91cc6554c9e71929cce7', 'co-administrator', '2019-06-10');

-- --------------------------------------------------------

--
-- Table structure for table `jobposts`
--

CREATE TABLE `jobposts` (
  `job_ID` int(11) NOT NULL,
  `acc_ID` int(11) NOT NULL,
  `job_title` varchar(30) NOT NULL,
  `job_description` longtext NOT NULL,
  `job_email` varchar(20) NOT NULL,
  `job_contact` text NOT NULL,
  `job_address` text NOT NULL,
  `job_salary` text NOT NULL,
  `job_category` int(11) NOT NULL,
  `job_dateposted` date NOT NULL,
  `job_dateexpiry` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jobposts`
--

INSERT INTO `jobposts` (`job_ID`, `acc_ID`, `job_title`, `job_description`, `job_email`, `job_contact`, `job_address`, `job_salary`, `job_category`, `job_dateposted`, `job_dateexpiry`) VALUES
(23, 1, 'A', 'A\r\n', 'z@email', '09112223344', '1', '1', 0, '2019-06-19', '2019-06-29'),
(24, 109, 'A\'a\'', 'A\'\"d', 'smcinema@email.com', '1', '2', '1', 0, '2019-06-22', '2019-07-02'),
(25, 1, 'Cat', 'Cat\r\nDog', 'test@email', '09112223344', '2', '2000', 3, '2019-07-01', '2019-07-27'),
(26, 1, 'Cit', 'Cit', 'a@email', '129', '2', '2000', 0, '2019-07-01', '2019-07-27'),
(27, 1, 'A', 'A', 'a@email', 'A', '1', '1', 5, '2019-07-03', '2019-07-31'),
(28, 1, 'B', 'B', 'a@email', 'B', '1', '2', 7, '2019-07-03', '2019-07-31'),
(29, 1, 'C', 'C', 'a@email', 'C', '2', '3', 6, '2019-07-03', '2019-07-31'),
(30, 1, '4', '4', 'a@email', '4', '1', '4', 3, '2019-07-03', '2019-07-31'),
(31, 1, '5', '5', 'a@email', '5', '1', '5', 5, '2019-07-03', '2019-07-31'),
(32, 1, '6', '6', 'a@email', '6', '1', '6', 8, '2019-07-03', '2019-07-31'),
(33, 1, '7', '7', 'a@email', '7', '1', '7', 5, '2019-07-03', '2019-07-31'),
(34, 1, '8', '8', 'a@email', '8', '1', '8', 8, '2019-07-03', '2019-07-31'),
(35, 1, '9', '9\r\n', 'a@email', '9', '1', '9', 7, '2019-07-03', '2019-07-31'),
(36, 1, 'Test', 'Test', 'a@email', '1', '2', '1', 6, '2019-07-04', '2019-07-31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acc_ID`),
  ADD UNIQUE KEY `uniqueuser` (`acc_username`);

--
-- Indexes for table `jobposts`
--
ALTER TABLE `jobposts`
  ADD PRIMARY KEY (`job_ID`),
  ADD KEY `accID` (`acc_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `acc_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `jobposts`
--
ALTER TABLE `jobposts`
  MODIFY `job_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
