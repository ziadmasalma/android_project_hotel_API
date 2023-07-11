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
-- Table structure for table `roomres`
--

CREATE TABLE `roomres` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `roomid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roomres`
--

INSERT INTO `roomres` (`id`, `name`, `roomid`, `username`, `state`, `price`) VALUES
(19, 'https://media.nomadicmatt.com/2021/hoteltips2.jpg', 7, 'AbuThaher', 'Paid', 250),
(20, 'https://static.standard.co.uk/s3fs-public/thumbnails/image/2016/06/21/14/hotelroom.jpg?width=968&auto=webp&quality=50&crop=968%3A645%2Csmart', 8, '', 'Paid', 350),
(21, 'https://media.nomadicmatt.com/2021/hoteltips2.jpg', 7, 'AbuThaher', 'Paid', 250),
(22, 'https://static.standard.co.uk/s3fs-public/thumbnails/image/2016/06/21/14/hotelroom.jpg?width=968&auto=webp&quality=50&crop=968%3A645%2Csmart', 8, 'AbuThaher', 'Paid', 350),
(23, 'https://www.goldennugget.com/contentassets/7edec5e6034c4d2d88b56ff0085ccd69/fireworks-room.jpg', 9, 'AbuThaher', 'Paid', 400),
(24, 'https://lh3.googleusercontent.com/yjDoBdvT5hee7GpGXk5fSi43sU0E_4_f2YeopUW99NJODjcMWAHbDWhkLO6KvjwTXvjQwlyRR0gQx2w2CnGfyohY8ETkGVzVwo-O5ti6uk8gaHecDEMA4w4yyiCAHepf29ZGXE8M', 10, 'AbuThaher', 'Paid', 200),
(25, 'https://www.goldennugget.com/contentassets/7edec5e6034c4d2d88b56ff0085ccd69/fireworks-room.jpg', 9, 'AbuThaher', 'Paid', 400),
(26, 'https://media.nomadicmatt.com/2021/hoteltips2.jpg', 7, 'AbuThaher', 'Paid', 250),
(27, 'https://media.nomadicmatt.com/2021/hoteltips2.jpg', 7, 'AbuThaher', 'Paid', 250),
(28, 'https://static.standard.co.uk/s3fs-public/thumbnails/image/2016/06/21/14/hotelroom.jpg?width=968&auto=webp&quality=50&crop=968%3A645%2Csmart', 8, 'AbuThaher', 'Paid', 350);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roomres`
--
ALTER TABLE `roomres`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roomres`
--
ALTER TABLE `roomres`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
