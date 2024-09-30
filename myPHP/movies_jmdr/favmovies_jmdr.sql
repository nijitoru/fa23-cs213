-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 02:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_db_jmdr`
--

-- --------------------------------------------------------

--
-- Table structure for table `favmovies_jmdr`
--

CREATE TABLE `favmovies_jmdr` (
  `movieID` int(5) NOT NULL,
  `movieTitle` varchar(255) DEFAULT NULL,
  `actors` varchar(255) DEFAULT NULL,
  `runTime` int(4) DEFAULT NULL,
  `genre` varchar(255) DEFAULT NULL,
  `revenue` double DEFAULT NULL,
  `yearRelease` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `favmovies_jmdr`
--

INSERT INTO `favmovies_jmdr` (`movieID`, `movieTitle`, `actors`, `runTime`, `genre`, `revenue`, `yearRelease`) VALUES
(1, 'La La Land', 'Emma Stone', 128, 'Musical', 448000000, 2016),
(2, 'Interstellar', 'Matt Damon', 169, 'Sci-fi', 681000000, 2014),
(3, 'Whiplash', 'Miles Teller', 107, 'Indie', 49000000, 2014);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `favmovies_jmdr`
--
ALTER TABLE `favmovies_jmdr`
  ADD PRIMARY KEY (`movieID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `favmovies_jmdr`
--
ALTER TABLE `favmovies_jmdr`
  MODIFY `movieID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
