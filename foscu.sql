-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 07, 2025 at 12:20 AM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u460308402_foscu`
--

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `downloads` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `filename`, `downloads`) VALUES
(1, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(2, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(3, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(4, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(5, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(6, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(7, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(8, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(9, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(10, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(11, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(12, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(13, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(14, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(15, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(16, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(17, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(18, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(19, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(20, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(21, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(22, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(23, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(24, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(25, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(26, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(27, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(28, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(29, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(30, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(31, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(32, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(33, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(34, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(35, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(36, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(37, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(38, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(39, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(40, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(41, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(42, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(43, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(44, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(45, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(46, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(47, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(48, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(49, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(50, 'FoSCU Report_Members OCA.pdf', 1),
(51, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(52, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(53, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(54, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(55, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(56, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(57, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(58, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(59, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(60, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(61, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(62, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(63, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(64, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(65, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(66, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(67, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(68, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(69, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(70, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(71, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(72, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(73, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(74, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(75, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(76, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(77, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(78, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(79, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(80, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(81, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(82, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(83, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(84, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(85, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(86, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(87, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(88, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(89, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(90, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(91, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(92, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(93, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(94, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(95, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(96, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(97, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(98, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(99, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(100, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(101, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(102, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(103, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(104, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(105, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(106, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(107, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(108, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(109, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(110, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(111, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(112, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(113, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(114, 'FoSCU Report_Members OCA.pdf', 1),
(115, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(116, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(117, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(118, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(119, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(120, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(121, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(122, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(123, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(124, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(125, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(126, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(127, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(128, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(129, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(130, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(131, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(132, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(133, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(134, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(135, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(136, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(137, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(138, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(139, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(140, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(141, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(142, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(143, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(144, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(145, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(146, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(147, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(148, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(149, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(150, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(151, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(152, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(153, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(154, 'FoSCU Report_Members OCA.pdf', 1),
(155, 'FoSCU Report_Members OCA.pdf', 1),
(156, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(157, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(158, 'FoSCU Report_Members OCA.pdf', 1),
(159, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(160, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(161, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(162, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(163, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(164, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(165, 'FoSCU Report_Members OCA.pdf', 1),
(166, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(167, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(168, 'FoSCU Report_Members OCA.pdf', 1),
(169, 'FoSCU Report_Members OCA.pdf', 1),
(170, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(171, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(172, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(173, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(174, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(175, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(176, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(177, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(178, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(179, 'FoSCU Report_Members OCA.pdf', 1),
(180, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(181, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(182, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(183, 'FoSCU Report_Members OCA.pdf', 1),
(184, 'FoSCU Report_Members OCA.pdf', 1),
(185, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(186, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(187, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(188, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(189, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(190, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(191, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(192, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(193, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(194, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(195, 'FoSCU Report_Members OCA.pdf', 1),
(196, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(197, 'FoSCU Report_Members OCA.pdf', 1),
(198, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(199, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(200, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(201, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(202, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(203, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(204, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(205, 'FoSCU Report_Members OCA.pdf', 1),
(206, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(207, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(208, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(209, 'FoSCU Report_Members OCA.pdf', 1),
(210, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(211, 'FoSCU Report_Members OCA.pdf', 1),
(212, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(213, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(214, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(215, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(216, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(217, 'FoSCU Report_Members OCA.pdf', 1),
(218, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(219, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(220, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(221, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(222, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(223, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(224, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(225, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(226, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(227, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(228, 'FoSCU Report_Members OCA.pdf', 1),
(229, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(230, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(231, 'FoSCU Report_Members OCA.pdf', 1),
(232, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(233, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(234, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(235, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(236, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(237, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(238, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(239, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(240, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(241, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(242, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(243, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(244, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(245, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(246, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(247, 'FoSCU Report_Members OCA.pdf', 1),
(248, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(249, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(250, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(251, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(252, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(253, 'FoSCU Report_Members OCA.pdf', 1),
(254, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(255, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(256, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(257, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(258, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(259, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(260, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(261, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(262, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(263, 'FoSCU Report_Members OCA.pdf', 1),
(264, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(265, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(266, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(267, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(268, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(269, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(270, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(271, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(272, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(273, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(274, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(275, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(276, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(277, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(278, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(279, 'FoSCU Report_Members OCA.pdf', 1),
(280, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(281, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(282, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(283, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(284, 'FoSCU Report_Members OCA.pdf', 1),
(285, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(286, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(287, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(288, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(289, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(290, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(291, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(292, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(293, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(294, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(295, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(296, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(297, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(298, 'FoSCU Report_Members OCA.pdf', 1),
(299, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(300, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(301, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(302, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(303, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(304, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(305, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(306, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(307, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(308, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(309, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(310, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(311, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(312, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(313, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(314, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(315, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(316, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(317, 'FoSCU Report_Members OCA.pdf', 1),
(318, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(319, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(320, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(321, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(322, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(323, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(324, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(325, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(326, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(327, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(328, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(329, 'FoSCU Report_Members OCA.pdf', 1),
(330, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(331, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(332, 'FoSCU Report_Members OCA.pdf', 1),
(333, 'FoSCU Report_Members OCA.pdf', 1),
(334, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(335, 'FoSCU Report_Members OCA.pdf', 1),
(336, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(337, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(338, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(339, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(340, 'FoSCU Report_Members OCA.pdf', 1),
(341, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(342, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(343, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(344, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(345, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(346, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(347, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(348, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(349, 'FoSCU Report_Members OCA.pdf', 1),
(350, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(351, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(352, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(353, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(354, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(355, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(356, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(357, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(358, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(359, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(360, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(361, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(362, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(363, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(364, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(365, 'FoSCU Report_Members OCA.pdf', 1),
(366, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(367, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(368, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(369, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(370, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(371, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(372, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(373, 'FoSCU Report_Members OCA.pdf', 1),
(374, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(375, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(376, 'FoSCU Report_Members OCA.pdf', 1),
(377, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(378, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(379, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(380, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(381, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(382, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(383, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(384, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(385, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(386, 'FoSCU Report_Members OCA.pdf', 1),
(387, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(388, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(389, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(390, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(391, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(392, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(393, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(394, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(395, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(396, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(397, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(398, 'FoSCU Report_Members OCA.pdf', 1),
(399, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(400, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(401, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(402, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(403, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(404, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(405, 'FoSCU Report_Members OCA.pdf', 1),
(406, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(407, 'FoSCU Research Brief 02_GnutsVC.pdf', 1),
(408, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(409, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(410, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(411, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(412, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(413, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(414, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(415, 'FoSCU Report_Members OCA.pdf', 1),
(416, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(417, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(418, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(419, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(420, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(421, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(422, 'FoSCU Report_Members OCA.pdf', 1),
(423, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(424, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(425, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(426, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(427, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(428, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(429, 'FOSCU Sythesis Report 2024-FINAL.pdf', 1),
(430, 'FoSCU Research brief 04_BeefVC.pdf', 1),
(431, 'FoSCU Research brief 03_DairyVC.pdf', 1),
(432, 'FoSCU Research brief 05_FruitsandVegiezVC.pdf', 1),
(433, 'FoSCU Research Brief 01_MaizeVC.pdf', 1),
(434, 'FoSCU Research brief 03_DairyVC.pdf', 1);

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
(27, 'FoSCU Organisation Capacity Assessment (OCA)', '2024-01-30'),
(28, 'Awareness Creation meeting with FoSCU members', '2024-02-13'),
(29, 'FoSCU Annual General Meeting	', '2024-02-23'),
(30, 'Food safety campaign on FoSCU twitter/X page	', '2024-03-19'),
(31, 'Food safety awareness creation at the Harvest Money Expo at Kololo independence ground; Invited by Rikolto and Techno serve', '2024-02-25'),
(32, 'Awareness creation on food safety at Acer Campion Jesuit College in Gulu targeting the A level students', '2024-03-08'),
(33, 'Food safety awareness to the media fraternity of Gulu City', '2024-03-04'),
(34, 'Awareness creation meeting with Gulu city markets’ committees and inspection of the markets to ascertain potential food safety hazard', '2024-03-05'),
(35, 'Awareness creation meeting with Gulu City political and technical leadership, CSOs, academic institutions and religious leaders on food safety', '2024-03-06'),
(36, 'Food safety awareness meeting with Gulu University Guild council  and students of Food safety and standards of Gulu University', '2024-03-07'),
(37, 'Training of market committees of 4 markets in Kasese municipality on Food Safety and consumer protection', '2024-03-13'),
(38, 'Joint advocacy for aflatoxin Control campaign (JAAC) in Uganda', '2024-03-26'),
(39, 'Food Safety Awareness meeting with media personalities and Masters of Ceremonies(MCs) of Kasese District and Municipality', '2024-03-11'),
(40, 'Trained agro ecological trainers of trainers(ToTs) from different Districts of Uganda(Kasese, Mayuge, Buikwe, Mityana, Mubende and Kampala ) on food safety; This was during the training of ToTs on healthy soils healthy foods organized by RUCID and AF', '2024-03-18'),
(41, 'Participated in the launching of the documentary on unmasking food safety hazards', '2024-03-21'),
(42, 'Launching of the Food Safety partnership initiative with Buganda Kingdom', '2024-03-22'),
(43, 'Breakfast meeting on consumer protection in the face of Artificial intelligence	', '2024-03-28'),
(44, 'FoSCU members planning meeting', '2024-04-19'),
(45, 'Presenting FoSCU\'s food safety policy recommendations in relevant national fora', '2024-04-30'),
(46, 'Publication of tailored food safety reports, policy briefs and position paper on FoSCU platforms', '2024-04-30'),
(47, 'Research briefs', '2024-05-31'),
(48, 'Policy briefs', '2024-05-31'),
(49, 'Synthesis report', '2024-05-31'),
(50, 'Lessons learnt workshop', '2024-05-31'),
(51, 'Endline survey', '2024-05-31');

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
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=435;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `recent`
--
ALTER TABLE `recent`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
