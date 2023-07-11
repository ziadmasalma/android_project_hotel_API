-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 06:32 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `foodres`
--

CREATE TABLE `foodres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `Description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `foodres`
--

INSERT INTO `foodres` (`id`, `name`, `username`, `state`, `price`, `Description`) VALUES
(1, 'mohammad', 'AbuThaher', 'Paid', 10.5, 'lfjgjg'),
(2, 'mohammad', 'AbuThaher', 'Paid', 10.5, 'lfjgjg'),
(3, 'mohammad', 'AbuThaher', 'Paid', 10.5, 'lfjgjg'),
(4, 'mohammad', 'AbuThaher', 'Paid', 10.5, 'lfjgjg'),
(5, 'AbuThaher', 'AbuThaher', 'Paid', 12.5, 'mskfjsfksfd'),
(6, 'mohammad', 'AbuThaher', 'Paid', 10.5, 'lfjgjg'),
(7, 'AbuThaher', 'AbuThaher', 'Paid', 12.5, 'mskfjsfksfd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `foodres`
--
ALTER TABLE `foodres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodres`
--
ALTER TABLE `foodres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
