-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 22, 2019 at 04:20 PM
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
-- Table structure for table `add_table`
--

CREATE TABLE `add_table` (
  `add_id` int(11) NOT NULL,
  `track_num` text NOT NULL,
  `size_type` text NOT NULL,
  `container` text NOT NULL,
  `arrival` text NOT NULL,
  `arrival_date` int(11) NOT NULL,
  `seal_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_table`
--

INSERT INTO `add_table` (`add_id`, `track_num`, `size_type`, `container`, `arrival`, `arrival_date`, `seal_no`) VALUES
(9, '54139600', 'PHD20', 'Booking of container', '12:00pm', 2019, 'CUBE5'),
(10, '70239814', 'GD20', 'Bill of lading', '12:00pm', 0, 'F70G70');

-- --------------------------------------------------------

--
-- Table structure for table `add_track`
--

CREATE TABLE `add_track` (
  `track_id` int(11) NOT NULL,
  `lstatus` text NOT NULL,
  `location` text NOT NULL,
  `departure` text NOT NULL,
  `departure_date` text NOT NULL,
  `transportation` text NOT NULL,
  `track_num` text NOT NULL,
  `container` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_track`
--

INSERT INTO `add_track` (`track_id`, `lstatus`, `location`, `departure`, `departure_date`, `transportation`, `track_num`, `container`) VALUES
(120, 'on freight', 'Georgia Atlanta', '7:00am', '2019-12-12', 'Vessel', '54139600', 'Booking of container'),
(121, 'freight', 'South Colombia', '7:00am', '2019-12-12', 'Vessel', '54139600', 'Booking of container'),
(122, 'status', 'South Colombia', '7:00am', '2019-12-12', 'Truck', '70239814', 'Bill of lading');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_table`
--
ALTER TABLE `add_table`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `add_track`
--
ALTER TABLE `add_track`
  ADD PRIMARY KEY (`track_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_table`
--
ALTER TABLE `add_table`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `add_track`
--
ALTER TABLE `add_track`
  MODIFY `track_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
