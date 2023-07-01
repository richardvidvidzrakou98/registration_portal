-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 01:01 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `browse_courses`
--

CREATE TABLE `browse_courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(100) NOT NULL,
  `course_title` varchar(200) NOT NULL,
  `credit` int(100) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `browse_courses`
--

INSERT INTO `browse_courses` (`id`, `course_code`, `course_title`, `credit`, `status`) VALUES
(1, 'COMP 204', 'ADVANCED DATABASE SYSTEM', 3, 'Not Registered'),
(2, '	INFT 206', 'GIS APPLICATIONS IN NATURAL RESOURCE MANAGEMENT', 3, 'Not Registered'),
(3, '	COMP 208', '	SOFTWARE ENGINEERING', 3, 'Not Registered'),
(4, 'COMP 202', 'COMPUTER ORGANIZATION AND ARCHITECTURE', 3, 'Not Registered'),
(5, 'COMP 206', 'PROGRAMMING WITH VISUAL BASIC.NET', 3, 'Not Registered'),
(6, 'UENR 301', '	ORAL FRENCH FOR GENERAL COMMUNICATION', 2, 'Not Registered'),
(7, 'INFT 307', '	OBJECT ORIENTED PROGRAMMING WITH JAVA', 3, 'Not Registered'),
(8, 'INFT 311', '	ADVANCED NETWORKING PRINCIPLES', 3, 'Not Registered');

-- --------------------------------------------------------

--
-- Table structure for table `registered_courses`
--

CREATE TABLE `registered_courses` (
  `id` int(11) NOT NULL,
  `course_code` varchar(255) NOT NULL,
  `course_title` varchar(200) NOT NULL,
  `credit` int(100) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `browse_courses`
--
ALTER TABLE `browse_courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_courses`
--
ALTER TABLE `registered_courses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `browse_courses`
--
ALTER TABLE `browse_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `registered_courses`
--
ALTER TABLE `registered_courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
