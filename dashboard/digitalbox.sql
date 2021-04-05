-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2020 at 05:57 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `digitalbox`
--

-- --------------------------------------------------------

--
-- Table structure for table `locationdb`
--

CREATE TABLE `locationdb` (
  `id` int(11) NOT NULL,
  `DID` varchar(256) NOT NULL,
  `ADDRESS` varchar(256) NOT NULL,
  `LAT` varchar(256) DEFAULT NULL,
  `LNG` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `locationdb`
--

INSERT INTO `locationdb` (`id`, `DID`, `ADDRESS`, `LAT`, `LNG`) VALUES
(1, 'DB101', 'DataSoft, Shyamoli, Dhaka', 'Industry', 23.7739039, 90.3640328);

-- --------------------------------------------------------

-- Indexes for table `colleges`
--
ALTER TABLE `locationdb`
  ADD PRIMARY KEY (`id`);


-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `locationdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
