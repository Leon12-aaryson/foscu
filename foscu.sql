-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 11:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foscu`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) NOT NULL,
  `eventname` varchar(250) NOT NULL,
  `eventdate` date NOT NULL,
  `enddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eventname`, `eventdate`, `enddate`) VALUES
(1, 'Participation in food safety stakeholders\' awareness creation in Mbale City', '2023-07-24', '2023-07-28'),
(2, 'Finalization of evidence synthesis report and value chain analysis work', '2023-07-01', '2023-07-31'),
(3, 'Technical capacity building sessions for FoSCU members', '2023-08-01', '2023-08-04'),
(4, 'Development of Strategic Plans for individual technical working groups', '2023-07-01', '2023-08-01');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `organisation` varchar(40) NOT NULL,
  `picture` blob DEFAULT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `organisation`, `picture`, `upload_date`) VALUES
(0, 'FOscu', 0x7374617469632f75706c6f6164732f466f6f642053616665747920436f616c6974696f6e205567616e64615f466f72207765622042616e6e65722e706e67, '2023-07-20');

-- --------------------------------------------------------

--
-- Table structure for table `recent`
--

CREATE TABLE `recent` (
  `id` int(10) NOT NULL,
  `eventname` varchar(250) NOT NULL,
  `eventdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recent`
--

INSERT INTO `recent` (`id`, `eventname`, `eventdate`) VALUES
(1, 'FoSCU Steering Committee Meeting', '2023-07-06'),
(2, 'Presentation and Discussion of technical working group workplans', '2023-07-21'),
(3, 'World Food Safety Day Commemoration: FoSCU leading keynote on chemical food contamination in Fort-portal/Kabarole', '2023-06-05'),
(4, 'Finalization of evidence synthesis report and value chain analysis work', '2023-07-01'),
(5, 'World Food Safety Day Commemoration: FoSCU leading keynote on chemical food contamination in Gulu City', '2023-06-07'),
(6, 'Adoption of FoSCU Governance Charter, election of steering committee and technical working groups', '2023-05-25'),
(7, 'Discussion and resolutions on Governance Charter', '2023-05-03'),
(8, 'Inception of pilot project', '2023-04-19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recent`
--
ALTER TABLE `recent`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `recent`
--
ALTER TABLE `recent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
