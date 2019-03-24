-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 24, 2019 at 05:37 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cc`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `Enrollment` bigint(14) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Branch` varchar(20) NOT NULL,
  `Semester` varchar(20) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Mobile` bigint(13) NOT NULL,
  `StageEvents` varchar(30) NOT NULL,
  `CampusEvents` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`Enrollment`, `Name`, `Branch`, `Semester`, `Email`, `Mobile`, `StageEvents`, `CampusEvents`) VALUES
(17162101031, 'vagheshkumar', 'CBA', 'Semester_4', 'patelvaghesh2313@gmail.com', 8734007735, 'Dance(Solo)', 'Group Dance');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `FirstName` varchar(25) NOT NULL,
  `MiddleName` varchar(25) NOT NULL,
  `LastName` varchar(25) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Enrollment` bigint(12) NOT NULL,
  `Password` varchar(15) NOT NULL,
  `Mobile` bigint(12) NOT NULL,
  `BirthDate` date DEFAULT NULL,
  `Semester` varchar(20) NOT NULL,
  `Branch` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`FirstName`, `MiddleName`, `LastName`, `Email`, `Enrollment`, `Password`, `Mobile`, `BirthDate`, `Semester`, `Branch`) VALUES
('Patel', 'vagheshkumar', 'Satishbhai', 'patelvaghesh2313@gmail.com', 17162101031, 'vaghesh2313', 8734007735, '2000-07-28', 'Semester_4', 'cba'),
('Patel', 'tarang', 'Sanjaybhai', 'pateltarang1994@gmail.com', 17162101030, 'tarangpatel', 9012399890, '2000-03-06', 'Semester_4', ''),
('Patel', 'Yash', 'NareshBhai', 'yash123@gmail.com', 17162101032, 'yash1732', 9512398199, '2000-01-23', 'semester_4', ''),
('patel', 'sne', 'manishbhai', 'snepatel@gmail.com', 17162101028, 'sne1999', 9512398199, '2000-06-14', 'Semester_4', ''),
('patel', 'sne', 'm', 'sne@gmail.com', 1, 'snepatel', 9512398199, '2019-03-08', 'Semester_4', ''),
('patel', 'Tirth', 'DIpakbhai', 'tirthpatel1705@gmail.com', 17162101029, 'tirth123', 9512398199, '2019-03-08', 'Semester_4', 'bda'),
('Panchal', 'Dhrumil', 'i', 'dpanchal0926@gmail.com', 17162101021, 'dhrumil123', 6718929001, '2000-12-04', 'Semester_4', 'cba'),
('soni', 'vedant', 's', 'vedantsoni@gmail.com', 17162101042, 'sonivedant', 8128318111, '2000-09-05', 'Semester_4', 'cba'),
('vaghesh', 'vaghesh', 'patel', 'v@gmail.com', 17162101001, 'vvv', 9512398199, '2019-03-09', 'Semester_4', 'cba'),
('vaghesh', 'vaghesh', 'patel', 'tirthpatel1@gmail.com', 17162101001, '123', 9512398199, '2019-03-09', 'Semester_4', 'bda');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
