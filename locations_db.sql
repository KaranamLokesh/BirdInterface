-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 12:00 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `locations_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `locations`
--

CREATE TABLE `locations` (
  `ID` int(11) NOT NULL,
  `latitude` varchar(20) NOT NULL,
  `longitude` varchar(20) NOT NULL,
  `imageName` varchar(100) NOT NULL,
  `Orientation` int(9) NOT NULL,
  `date_of_upload` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `locations`
--

INSERT INTO `locations` (`ID`, `latitude`, `longitude`, `imageName`, `Orientation`, `date_of_upload`) VALUES
(3, '39.302952944444', '-93.32649125', 'imageuploads/337b12df04b713f1a01fe57b820d09ff.jpg', 1, '0000-00-00'),
(4, '39.302952944444', '-93.32649125', 'imageuploads/e2cbe818d2593b7be1cabbf2631aa9d1.jpg', 1, '0000-00-00'),
(5, '39.302952944444', '-93.32649125', 'imageuploads/1f95658f2c2f308ca4be2b44c1ea57d0.jpg', 1, '2021-01-08'),
(6, '39.302952944444', '-93.32649125', 'imageuploads/cc45000214b6df4a232b0261f7c326c4.jpg', 1, '2021-01-08'),
(7, '39.302952944444', '-93.32649125', 'imageuploads/c0ab0473af82a3d2c3fda33576ca7861.jpg', 1, '2021-01-08'),
(8, '39.302952944444', '-93.32649125', 'imageuploads/4f336d3854d4582f36496c61ac6f7ded.jpg', 1, '2021-01-08'),
(9, '39.302952944444', '-93.32649125', 'imageuploads/31f187bc955387d970e39533b3d78f12.jpg', 1, '2021-01-08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `locations`
--
ALTER TABLE `locations`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `locations`
--
ALTER TABLE `locations`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
