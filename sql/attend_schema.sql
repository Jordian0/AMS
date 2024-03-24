-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 22, 2024 at 12:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `attend`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
                          `course_id` varchar(30) NOT NULL,
                          `course_name` varchar(30) NOT NULL,
                          `department_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
                           `name` varchar(50) NOT NULL,
                           `fid` varchar(15) NOT NULL,
                           `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mca_ai`
--

CREATE TABLE `mca_ai` (
                          `name` varchar(50) NOT NULL,
                          `stid` varchar(15) NOT NULL,
                          `grp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mca_cc`
--

CREATE TABLE `mca_cc` (
                          `name` varchar(50) NOT NULL,
                          `stid` varchar(15) NOT NULL,
                          `grp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mca_dop`
--

CREATE TABLE `mca_dop` (
                           `name` varchar(50) NOT NULL,
                           `stid` varchar(15) NOT NULL,
                           `grp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `postgrad`
--

CREATE TABLE `postgrad` (
                            `department_name` varchar(30) NOT NULL,
                            `department_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
                            `subject_id` varchar(20) NOT NULL,
                            `subject_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_course`
--

CREATE TABLE `sub_course` (
                              `id` int(11) NOT NULL,
                              `subject_id` varchar(20) NOT NULL,
                              `course_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timeframe`
--

CREATE TABLE `timeframe` (
                             `tid` int(11) NOT NULL,
                             `stime` time NOT NULL,
                             `etime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
                             `id` int(11) NOT NULL,
                             `day` int(4) NOT NULL,
                             `tid` int(11) NOT NULL,
                             `fid` varchar(15) NOT NULL,
                             `subject_id` varchar(150) NOT NULL,
                             `grp` char(1) DEFAULT NULL,
                             `room_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
    ADD PRIMARY KEY (`course_id`),
    ADD KEY `department_id` (`department_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
    ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `mca_ai`
--
ALTER TABLE `mca_ai`
    ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `mca_cc`
--
ALTER TABLE `mca_cc`
    ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `mca_dop`
--
ALTER TABLE `mca_dop`
    ADD PRIMARY KEY (`stid`);

--
-- Indexes for table `postgrad`
--
ALTER TABLE `postgrad`
    ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
    ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `sub_course`
--
ALTER TABLE `sub_course`
    ADD PRIMARY KEY (`id`),
    ADD KEY `course_id` (`subject_id`,`course_id`),
    ADD KEY `subject_id` (`subject_id`),
    ADD KEY `course_id_2` (`course_id`);

--
-- Indexes for table `timeframe`
--
ALTER TABLE `timeframe`
    ADD PRIMARY KEY (`tid`);

--
-- Indexes for table `timetable`
--
ALTER TABLE `timetable`
    ADD PRIMARY KEY (`id`),
    ADD KEY `fid` (`fid`),
    ADD KEY `tid` (`tid`),
    ADD KEY `course_id` (`subject_id`),
    ADD KEY `subjects_id` (`subject_id`),
    ADD KEY `subject_id` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sub_course`
--
ALTER TABLE `sub_course`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
    ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`department_id`) REFERENCES `postgrad` (`department_id`);

--
-- Constraints for table `sub_course`
--
ALTER TABLE `sub_course`
    ADD CONSTRAINT `sub_course_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `sub_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `timetable`
--
ALTER TABLE `timetable`
    ADD CONSTRAINT `timetable_ibfk_1` FOREIGN KEY (`fid`) REFERENCES `faculty` (`fid`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `timetable_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subjects` (`subject_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
    ADD CONSTRAINT `timetable_ibfk_3` FOREIGN KEY (`tid`) REFERENCES `timeframe` (`tid`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
