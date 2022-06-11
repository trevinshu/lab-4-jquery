-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2021 at 10:14 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tshu2_dmit2503`
--

-- --------------------------------------------------------

--
-- Table structure for table `flot_smartphones`
--

CREATE TABLE `flot_smartphones` (
  `manufacturer` varchar(250) NOT NULL,
  `2007` int(12) NOT NULL,
  `2009` int(12) NOT NULL,
  `2011` int(12) NOT NULL,
  `2013` int(12) NOT NULL,
  `2015` int(12) NOT NULL,
  `2017` int(12) NOT NULL,
  `2019` int(12) NOT NULL,
  `2021` int(12) NOT NULL,
  `id` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `flot_smartphones`
--

INSERT INTO `flot_smartphones` (`manufacturer`, `2007`, `2009`, `2011`, `2013`, `2015`, `2017`, `2019`, `2021`, `id`) VALUES
('Samsung', 300, 400, 500, 550, 650, 800, 900, 1000, 1),
('Apple', 300, 350, 400, 500, 600, 800, 900, 1200, 2),
('LG', 200, 200, 200, 300, 400, 500, 600, 700, 3),
('Nokia', 200, 200, 300, 400, 200, 500, 600, 750, 4),
('Motorola', 200, 200, 300, 250, 300, 400, 500, 600, 5),
('Blackberry', 500, 500, 300, 300, 600, 600, 300, 300, 6),
('HTC', 300, 400, 500, 600, 400, 400, 400, 500, 7),
('Sony', 300, 300, 350, 400, 500, 600, 700, 900, 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `flot_smartphones`
--
ALTER TABLE `flot_smartphones`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `flot_smartphones`
--
ALTER TABLE `flot_smartphones`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
