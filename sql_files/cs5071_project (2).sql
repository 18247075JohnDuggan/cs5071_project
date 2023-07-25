-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 03:27 PM
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
  `breeding` varchar(15) DEFAULT NULL,
  `farm` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `animals`
--

INSERT INTO `animals` (`Aniaml_ID`, `Animal_type`, `Animal_gender`, `breeding`, `farm`) VALUES
(254, 'Cattle', 'Female', 'Yes', 'Farm X'),
(12, 'Dog', 'male', 'No', 'Farm Y'),
(255, 'Cattle', 'Female', 'Yes', 'Farm X'),
(253, 'Cattle', 'Female', 'Yes', 'Farm X'),
(252, 'Cattle', 'Female', 'Yes', 'Farm X'),
(251, 'Cattle', 'Female', 'Yes', 'Farm X'),
(250, 'Cattle', 'Female', 'Yes', 'Farm X'),
(243, 'Cattle', 'Female', 'Yes', 'Farm X'),
(249, 'Cattle', 'Female', 'Yes', 'Farm X'),
(248, 'Cattle', 'Female', 'Yes', 'Farm X'),
(247, 'Cattle', 'Female', 'Yes', 'Farm X'),
(246, 'Cattle', 'Female', 'Yes', 'Farm X'),
(245, 'Cattle', 'Female', 'Yes', 'Farm X'),
(242, 'Cattle', 'Female', 'Yes', 'Farm X'),
(240, 'Cattle', 'Female', 'Yes', 'Farm X'),
(235, 'Cattle', 'Female', 'Yes', 'Farm X'),
(239, 'Cattle', 'Female', 'Yes', 'Farm X'),
(232, 'Cattle', 'Female', 'Yes', 'Farm X'),
(230, 'Cattle', 'Female', 'Yes', 'Farm X'),
(229, 'Cattle', 'Female', 'Yes', 'Farm X'),
(228, 'Cattle', 'Female', 'Yes', 'Farm X'),
(225, 'Cattle', 'Female', 'Yes', 'Farm X'),
(224, 'Cattle', 'Female', 'Yes', 'Farm X'),
(223, 'Cattle', 'Female', 'Yes', 'Farm X'),
(220, 'Cattle', 'Female', 'Yes', 'Farm X'),
(215, 'Cattle', 'Female', 'Yes', 'Farm X'),
(210, 'Cattle', 'Female', 'Yes', 'Farm X'),
(190, 'Cattle', 'Female', 'Yes', 'Farm Y'),
(185, 'Cattle', 'Female', 'Yes', 'Farm Y'),
(2, 'Dog', 'male', 'No', 'Farm X'),
(175, 'Cattle', 'Female', 'Yes', 'Farm Y'),
(1, 'Dog', 'male', 'No', 'Farm Y'),
(99, 'Bull', 'Male', 'Yes', 'Farm Y'),
(97, 'Bullock', 'Male', 'No', 'Farm Y'),
(97, 'Bullock', 'Male', 'No', 'Farm Y'),
(22, 'Sheep (Ram)', 'Male', 'Yes', 'Farm X'),
(23, 'Sheep', 'Female', 'Yes', 'Farm X'),
(24, 'Sheep', 'Female', 'Yes', 'Farm X'),
(25, 'Sheep', 'Female', 'Yes', 'Farm X'),
(26, 'Sheep', 'Female', 'Yes', 'Farm X');

-- --------------------------------------------------------

--
-- Table structure for table `farms`
--

CREATE TABLE `farms` (
  `Farm` varchar(15) NOT NULL,
  `Aniaml_ID` int(255) NOT NULL,
  `Animal_type` varchar(255) NOT NULL,
  `Animal_gender` varchar(7) NOT NULL,
  `users_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `farms`
--

INSERT INTO `farms` (`Farm`, `Aniaml_ID`, `Animal_type`, `Animal_gender`, `users_id`) VALUES
('Farm X', 254, 'Cattle', 'Female', 50),
('Farm Y', 12, 'Dog', 'male', 25),
('Farm X', 255, 'Cattle', 'Female', 50),
('Farm X', 253, 'Cattle', 'Female', 50),
('Farm X', 252, 'Cattle', 'Female', 50),
('Farm X', 251, 'Cattle', 'Female', 50),
('Farm X', 250, 'Cattle', 'Female', 50),
('Farm X', 243, 'Cattle', 'Female', 50),
('Farm X', 249, 'Cattle', 'Female', 50),
('Farm X', 248, 'Cattle', 'Female', 50),
('Farm X', 247, 'Cattle', 'Female', 50),
('Farm X', 246, 'Cattle', 'Female', 50),
('Farm X', 245, 'Cattle', 'Female', 50),
('Farm X', 242, 'Cattle', 'Female', 50),
('Farm X', 240, 'Cattle', 'Female', 50),
('Farm X', 235, 'Cattle', 'Female', 50),
('Farm X', 239, 'Cattle', 'Female', 50),
('Farm X', 232, 'Cattle', 'Female', 50),
('Farm X', 230, 'Cattle', 'Female', 50),
('Farm X', 229, 'Cattle', 'Female', 50),
('Farm X', 228, 'Cattle', 'Female', 50),
('Farm X', 225, 'Cattle', 'Female', 50),
('Farm X', 224, 'Cattle', 'Female', 50),
('Farm X', 223, 'Cattle', 'Female', 50),
('Farm X', 220, 'Cattle', 'Female', 50),
('Farm X', 215, 'Cattle', 'Female', 50),
('Farm X', 210, 'Cattle', 'Female', 50),
('Farm Y', 190, 'Cattle', 'Female', 25),
('Farm Y', 185, 'Cattle', 'Female', 25),
('Farm X', 2, 'Dog', 'male', 50),
('Farm Y', 175, 'Cattle', 'Female', 25),
('Farm Y', 1, 'Dog', 'male', 25),
('Farm Y', 99, 'Bull', 'Male', 25),
('Farm Y', 97, 'Bullock', 'Male', 25),
('Farm Y', 97, 'Bullock', 'Male', 25),
('Farm X', 22, 'Sheep (Ram)', 'Male', 50),
('Farm X', 23, 'Sheep', 'Female', 50),
('Farm X', 24, 'Sheep', 'Female', 50),
('Farm X', 25, 'Sheep', 'Female', 50),
('Farm X', 26, 'Sheep', 'Female', 50);

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
