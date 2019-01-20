-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 20, 2019 at 04:31 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `track`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_track`
--

CREATE TABLE `add_track` (
  `track_id` int(11) NOT NULL,
  `track_num` text NOT NULL,
  `lstatus` text NOT NULL,
  `location` text NOT NULL,
  `type` text NOT NULL,
  `departure` text NOT NULL,
  `departure_date` text NOT NULL,
  `arrival` text NOT NULL,
  `arrival_date` text NOT NULL,
  `transportation` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_track`
--

INSERT INTO `add_track` (`track_id`, `track_num`, `lstatus`, `location`, `type`, `departure`, `departure_date`, `arrival`, `arrival_date`, `transportation`, `name`) VALUES
(2, '564321', 'freight', 'South Colombia', 'Pet', '2:51pm', '2019-01-02', '10:00am', '', 'truck', 'Dinayen '),
(28, '564321', 'freight', 'South Colombia', 'goods', '2:51pm', '', '10:00am', '', 'truck', 'Dinayen Stephanie'),
(30, '564321654', 'freight', 'Georgia Atlanta', 'Cargo', '2:51pm', '2019-01-12', '10:00am', '	 2019-01-12', 'truck', 'Cynorine Berinyuy'),
(32, '564321', 'freight', 'South Colombia', 'goods', '2:51pm', '', '10:00am', '', 'truck', 'Dinayen Stephanie'),
(36, '564321', 'freight', 'South Colombia', 'goods', '2:51pm', '', '10:00am', '', 'truck', 'Dinayen Stephanie'),
(40, '564321', 'freight', 'South Colombia', 'goods', '2:51pm', '', '10:00am', '', 'truck', 'Dinayen Stephanie'),
(42, '564321', 'freight', 'South Colombia', 'goods', '2:51pm', '', '10:00am', '', 'truck', 'Dinayen Stephanie'),
(81, '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_track`
--
ALTER TABLE `add_track`
  ADD PRIMARY KEY (`track_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_track`
--
ALTER TABLE `add_track`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
