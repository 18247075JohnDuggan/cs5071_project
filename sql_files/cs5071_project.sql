-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 04:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs5071_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `animals`
--

CREATE TABLE `animals` (
  `Aniaml_ID` int(255) NOT NULL,
  `Animal_type` varchar(255) NOT NULL,
  `Animal_gender` varchar(7) NOT NULL,
  `breeding` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`Aniaml_ID`, `Animal_type`, `Animal_gender`, `breeding`) VALUES
(254, 'Cattle', 'Female', 'Yes'),
(12, 'Dog', 'male', 'No'),
(255, 'Cattle', 'Female', 'Yes'),
(253, 'Cattle', 'Female', 'Yes'),
(252, 'Cattle', 'Female', 'Yes'),
(251, 'Cattle', 'Female', 'Yes'),
(250, 'Cattle', 'Female', 'Yes'),
(243, 'Cattle', 'Female', 'Yes'),
(249, 'Cattle', 'Female', 'Yes'),
(248, 'Cattle', 'Female', 'Yes'),
(247, 'Cattle', 'Female', 'Yes'),
(246, 'Cattle', 'Female', 'Yes'),
(245, 'Cattle', 'Female', 'Yes'),
(242, 'Cattle', 'Female', 'Yes'),
(240, 'Cattle', 'Female', 'Yes'),
(235, 'Cattle', 'Female', 'Yes'),
(239, 'Cattle', 'Female', 'Yes'),
(232, 'Cattle', 'Female', 'Yes'),
(230, 'Cattle', 'Female', 'Yes'),
(229, 'Cattle', 'Female', 'Yes'),
(228, 'Cattle', 'Female', 'Yes'),
(225, 'Cattle', 'Female', 'Yes'),
(224, 'Cattle', 'Female', 'Yes'),
(223, 'Cattle', 'Female', 'Yes'),
(220, 'Cattle', 'Female', 'Yes'),
(215, 'Cattle', 'Female', 'Yes'),
(210, 'Cattle', 'Female', 'Yes'),
(190, 'Cattle', 'Female', 'Yes'),
(185, 'Cattle', 'Female', 'Yes'),
(2, 'Dog', 'male', 'No'),
(175, 'Cattle', 'Female', 'Yes'),
(1, 'Dog', 'male', 'No'),
(99, 'Bull', 'Male', 'Yes'),
(97, 'Bullock', 'Male', 'No'),
(97, 'Bullock', 'Male', 'No'),
(22, 'Sheep (Ram)', 'Male', 'Yes'),
(23, 'Sheep', 'Female', 'Yes'),
(24, 'Sheep', 'Female', 'Yes'),
(25, 'Sheep', 'Female', 'Yes'),
(26, 'Sheep', 'Female', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `offspring`
--

CREATE TABLE `offspring` (
  `Sire` int(255) NOT NULL,
  `Dam` int(255) NOT NULL,
  `Animal_id` int(255) NOT NULL,
  `Animal_Type` varchar(30) NOT NULL,
  `Animal_gender` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offspring`
--

INSERT INTO `offspring` (`Sire`, `Dam`, `Animal_id`, `Animal_Type`, `Animal_gender`) VALUES
(99, 255, 80, 'Calf', 'Male'),
(99, 254, 81, 'Calf', 'Female'),
(99, 253, 82, 'Calf', 'Male'),
(99, 252, 83, 'Calf', 'Female'),
(99, 251, 84, 'Calf', 'Male'),
(99, 250, 85, 'Calf', 'Female'),
(99, 249, 86, 'Calf', 'Female'),
(99, 248, 87, 'Calf', 'Male'),
(99, 247, 88, 'Calf', 'Male'),
(99, 246, 89, 'Calf', 'Male'),
(22, 23, 30, 'Lamb', 'Male'),
(22, 24, 31, 'Lamb', 'Male'),
(22, 25, 32, 'Lamb', 'Female'),
(22, 26, 33, 'Lamb', 'Male');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
