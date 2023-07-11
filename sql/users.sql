-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2023 at 06:35 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `phone`, `password`) VALUES
(1, 'mohammad', 'mohammadmashhour24@gmail.com', '0599782941', 'mohammad'),
(2, 'AbuThaher', 'm@gmail.com', '0599782941', 'mohammad'),
(7, 'noor', 'mh@gmail.com', '0569482508', 'mohammad'),
(8, 'n', 'nm@gmail.com', '6546546', '0599782941'),
(9, 'midfd', 'mi@gmail.com', '012345', '05312453'),
(10, 'mohjk', 'br@gmail.com', '012456789', '0599782941'),
(11, 'ahmad', 'ah@gmail.com', '014599782', '0569482508'),
(12, 'mnmd', 'nn@gmail.com', '012354978', 'mohammad'),
(13, 'fsfsdd', 'f@gmail.com', '0000000', 'mohammad'),
(14, 'vsds', 'v@gmail.com', '0599782941', 'mnmnmn0bb'),
(15, 'bbbn', 'cv@gmail.com', '0123594', 'dfsfsfsfsfs'),
(16, 'bbbn', 'cvbb@gmail.com', '0123594', 'dfsfsfsfsfs'),
(17, 'bbbn', 'cvbbff@gmail.com', '0123594', 'dfsfsfsfsfs'),
(18, 'bbbn', 'cvbbffss@gmail.com', '0123594', 'dfsfsfsfsfs'),
(19, 'gg', 'l@gmail.com', '01234568', 'mohammad'),
(20, 'qqdad', 'q@gmail.com', '16851256', '956468468465'),
(21, 'svsvsfdg', 'nmo@gmail.com', '05997824545', 'mohammad'),
(22, 'mohammadAbuThahewr', 'moham@gmial.com', '0599782941', '0599782941'),
(23, 'AbuThahe mashhiyur', 'mnb@gmial.com', '0599782941', 'mohammad'),
(24, 'nnmnmn', 'qwqwq@gmail.com', '0599782941', 'mohammad');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
