-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2015 at 04:57 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `id` int(6) unsigned NOT NULL,
  `College_Name` varchar(200) NOT NULL,
  `College_President_Name` varchar(100) NOT NULL,
  `Chapter_President_email` varchar(100) NOT NULL,
  `Chapter_Contact_Number` varchar(14) NOT NULL,
  `State` varchar(20) NOT NULL,
  `Boys` varchar(3) NOT NULL,
  `Girls` varchar(3) NOT NULL,
  `Accomodation` varchar(3) NOT NULL,
  `Arrival_Date` varchar(20) NOT NULL,
  `Departure_Date` varchar(20) NOT NULL,
  `Departure_Time` varchar(20) NOT NULL,
  `Doc_upload` varchar(30) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `College_Name`, `College_President_Name`, `Chapter_President_email`, `Chapter_Contact_Number`, `State`, `Boys`, `Girls`, `Accomodation`, `Arrival_Date`, `Departure_Date`, `Departure_Time`, `Doc_upload`, `reg_date`) VALUES
(16, 'nitdgp', 'anupama', 'anupam@gmail.com', '+91451789263', 'bihar', '555', '44', 'Yes', '2015-11-17', '2015-03-02', '02:03', 'document/[Songs.PK] 01 - Jackp', '2015-11-20 03:54:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `Chapter_President_email` (`Chapter_President_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(6) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
