-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2024 at 06:09 PM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u855062599_foscu`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `eventname`, `eventdate`, `enddate`) VALUES
(22, 'FoSCU Annual General Meeting	', '2024-02-01', '2024-02-29'),
(24, 'Presenting FoSCU\'s food safety policy recommendations in relevant national fora	', '2024-02-01', '2024-03-30'),
(25, 'Food safety campaign on FoSCU twitter/X page	', '2024-02-01', '2024-02-29'),
(26, 'Publication of tailored food safety reports, policy briefs and position paper on FoSCU platforms	', '2024-02-01', '2024-03-31');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(11) NOT NULL,
  `organisation` varchar(40) NOT NULL,
  `picture` blob DEFAULT NULL,
  `upload_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `recent`
--

INSERT INTO `recent` (`id`, `eventname`, `eventdate`) VALUES
(5, 'World Food Safety Day Commemoration: FoSCU leading keynote on chemical food contamination in Gulu City', '2023-06-07'),
(9, 'FoSCU Keynote on chemical food contamination during safe food stakeholders\' parliament in Mbale City', '2023-07-25'),
(10, 'FoSCU members capacity building workshop', '2023-08-16'),
(12, 'Technical Working Group Strategic plan development', '2023-09-30'),
(13, 'Production of innovative food safety communication tools', '2023-09-30'),
(14, '	Finalization of reports on food safety analysis in five value chains', '2023-08-31'),
(15, 'Development of research and policy briefs on food safety in assessed crop and livestock value chains', '2023-09-30'),
(16, 'Finalization of food safety-crop-animal evidence synthesis report', '2023-09-30'),
(17, ' FoSCU Communication Materials’ review meeting ', '2023-10-13'),
(18, 'Finalisation of FoSCU position paper, research reports and policy briefs on food safety ', '2023-10-30'),
(19, 'Finalization of evidence synthesis report on food safety-crop-animal protection', '2023-10-30'),
(20, 'Finalisation of Technical Working Group Strategies', '2023-10-30'),
(21, 'FoSCU 5-year Strategic Plan Development ', '2023-11-30'),
(22, 'Promotion of communication tools on non-chemical pest management', '2023-11-30'),
(23, 'Review and finalisation of advocacy and communication tools', '2023-11-30'),
(24, 'Review and finalisation of food safety assessment reports', '2023-11-30'),
(25, 'FoSCU Steering Committee Meeting', '2024-02-02'),
(26, 'FoSCU Awareness workshop for farmers (Mityana)', '2024-02-05'),
(27, 'FoSCU Organisation Capacity Assessment (OCA)', '2024-01-30');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`) VALUES
(1, 'Oluk Aaron Leonard', 'aaronoluk4deleonardo@gmail.com', '$2y$10$b501BOu3CqBsEvJsmXm8juDPyFKFIetDe9UOZYeHE9D3SZfPiAzji', 0, 'verified');

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
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `recent`
--
ALTER TABLE `recent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
