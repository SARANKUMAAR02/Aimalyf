-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 05:00 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `city_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`city_id`, `name`) VALUES
(1, 'Tiruchengode'),
(2, 'Mohanur'),
(3, 'Pollachi'),
(4, 'udumalaipettai'),
(5, 'Dharapuram');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `name`) VALUES
(1, 'India');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `district_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`district_id`, `name`) VALUES
(1, 'Namakkal'),
(2, 'Coimbatore'),
(3, 'Tiruppur');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `state_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`state_id`, `name`) VALUES
(1, 'TamilNadu'),
(2, 'Kerala'),
(3, 'Karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(5) NOT NULL,
  `name` varchar(30) NOT NULL,
  `bloodgroup` char(5) NOT NULL,
  `birth` date NOT NULL,
  `phone` char(12) NOT NULL,
  `lastdonate` date DEFAULT NULL,
  `country_id` int(5) NOT NULL,
  `state_id` int(5) NOT NULL,
  `district_id` int(5) NOT NULL,
  `city_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `name`, `bloodgroup`, `birth`, `phone`, `lastdonate`, `country_id`, `state_id`, `district_id`, `city_id`) VALUES
(1, 'KOWSHIKRAJA T', 'O+ve', '2003-10-19', '8754629577', '2021-10-19', 1, 1, 1, 1),
(2, 'PrabuSelvam', 'O+ve', '2004-07-22', '9342285452', '2022-07-22', 1, 1, 1, 2),
(3, 'Azhahar balaji ', 'A+ve', '2004-06-03', '9360961798', NULL, 1, 1, 2, 3),
(5, 'Saran vijay', 'B+ve', '2003-10-12', '9566903621', NULL, 1, 1, 2, 3),
(6, 'Ajay kumar ', 'A+ve', '2004-01-22', '8220885185', NULL, 1, 1, 2, 3),
(7, 'Mani sekar', 'B+ve', '2004-07-22', '9345581592', NULL, 1, 1, 3, 4),
(8, 'Kawin ', 'O+ve', '2002-08-22', '8056559999', NULL, 1, 1, 2, 3),
(9, 'Dharun ', 'O+ve', '2004-07-08', '6374986311', NULL, 1, 1, 2, 3),
(10, 'Gowtham', 'AB+ve', '2003-10-19', '6383900289', NULL, 1, 1, 2, 3),
(11, 'Jeeva kodi', 'O+ve', '2004-02-18', '8754633565', NULL, 1, 1, 2, 3),
(12, 'Prakashini', 'B+v e', '2003-03-29', '6379388725', NULL, 1, 1, 2, 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`district_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `state` (`state_id`),
  ADD KEY `city` (`city_id`),
  ADD KEY `district` (`district_id`),
  ADD KEY `country` (`country_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `city_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `district_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `state_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `city` FOREIGN KEY (`city_id`) REFERENCES `city` (`city_id`),
  ADD CONSTRAINT `country` FOREIGN KEY (`country_id`) REFERENCES `country` (`country_id`),
  ADD CONSTRAINT `district` FOREIGN KEY (`district_id`) REFERENCES `district` (`district_id`),
  ADD CONSTRAINT `state` FOREIGN KEY (`state_id`) REFERENCES `state` (`state_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
