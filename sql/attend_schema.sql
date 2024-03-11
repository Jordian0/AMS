-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2024 at 07:16 PM
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
-- Table structure for table `mca_ai`
--

CREATE TABLE `mca_ai` (
                          `name` varchar(50) NOT NULL,
                          `stid` varchar(15) NOT NULL,
                          `grp` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mca_ai`
--

INSERT INTO `mca_ai` (`name`, `stid`, `grp`) VALUES
                                                 ('Tejal Kulkarni', 'PGD202307178', 'a'),
                                                 ('Singh Chaudhri', 'PGD202307288', 'a'),
                                                 ('Sushila Sharma', 'PGD202309534', 'a'),
                                                 ('Kumaran Singh', 'PGD202309794', 'a'),
                                                 ('Samira Tamboli', 'PGD202309990', 'a'),
                                                 ('Rajnish Das', 'PGD202318904', 'b'),
                                                 ('Sudhir Begam', 'PGD202325461', 'b'),
                                                 ('Agni Sharma', 'PGD202325857', 'b'),
                                                 ('Ankit Gadhavi', 'PGD202387566', 'b'),
                                                 ('Govind Choudhary', 'PGD202399624', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `mca_cc`
--

CREATE TABLE `mca_cc` (
                          `name` varchar(50) NOT NULL,
                          `stid` varchar(15) NOT NULL,
                          `grp` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mca_cc`
--

INSERT INTO `mca_cc` (`name`, `stid`, `grp`) VALUES
                                                 ('Jyothi Narang', 'PGD202320637', 'b'),
                                                 ('Sukhbir Kumar', 'PGD202331994', 'b'),
                                                 ('Chandan Chaudhri', 'PGD202343138', 'b'),
                                                 ('Grishma Devi', 'PGD202353133', 'b'),
                                                 ('Aishwarya Devi', 'PGD202355725', 'b'),
                                                 ('Devadas Patil', 'PGD202359223', 'a'),
                                                 ('Roshni Gupta', 'PGD202361310', 'a'),
                                                 ('Chand Chaudhri', 'PGD202376206', 'a'),
                                                 ('Niketa Kulkarni', 'PGD202397263', 'a'),
                                                 ('Prabhakar Tamboli', 'PGD202397962', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `mca_dop`
--

CREATE TABLE `mca_dop` (
                           `name` varchar(50) NOT NULL,
                           `stid` varchar(15) NOT NULL,
                           `grp` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mca_dop`
--

INSERT INTO `mca_dop` (`name`, `stid`, `grp`) VALUES
                                                  ('Swapnil Jain', 'PGD202302843', 'b'),
                                                  ('Disha Korrapati', 'PGD202324160', 'b'),
                                                  ('Subrahmanya Nagarkar', 'PGD202328025', 'b'),
                                                  ('Kaur Choudhary', 'PGD202334087', 'b'),
                                                  ('Amrita Chaudhari', 'PGD202350939', 'b'),
                                                  ('Meera Begum', 'PGD202357315', 'a'),
                                                  ('Gita Kaur', 'PGD202371389', 'a'),
                                                  ('Jay Kulkarni', 'PGD202380084', 'a'),
                                                  ('Kumaran Kaur', 'PGD202394451', 'a'),
                                                  ('Indrani Nibhanupudi', 'PGD202397023', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
                            `course_id` varchar(20) NOT NULL,
                            `course_name` varchar(150) NOT NULL,
                            `faculty` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`course_id`, `course_name`, `faculty`) VALUES
                                                                   ('CSU1290', 'Web Technology Programming', 'Nitesh Sharma'),
                                                                   ('CSU1290P', 'Web Technology Programming Lab', 'Nitesh Sharma'),
                                                                   ('CSU1292', 'Advance Theory of Automata', 'Sonia'),
                                                                   ('CSU1293', 'Design and Analysis of Algorithm', 'Arvind Sharma'),
                                                                   ('CSU1293P', 'Design and Analysis of Algorithm Lab', 'Arvind Sharma'),
                                                                   ('CSU1294', 'Operating System Concepts', 'Bharti Thakur'),
                                                                   ('CSU1294P', 'Operating System Concepts Lab', 'Bharti Thakur'),
                                                                   ('CSU1295', 'Data Science & AI', 'Kritika Rana'),
                                                                   ('CSU1659', 'Deep Learning', 'Shrawan Kumar'),
                                                                   ('CSU271', 'Cloud Computing Architecture', 'Ahmad Salehi');

-- --------------------------------------------------------

--
-- Table structure for table `sub_course`
--

CREATE TABLE `sub_course` (
                              `course_id` varchar(20) NOT NULL,
                              `course` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_course`
--

INSERT INTO `sub_course` (`course_id`, `course`) VALUES
                                                     ('CSU1290', 'mca_ai'),
                                                     ('CSU1290', 'mca_cc'),
                                                     ('CSU1290', 'mca_dop'),
                                                     ('CSU1290P', 'mca_ai'),
                                                     ('CSU1290P', 'mca_cc'),
                                                     ('CSU1290P', 'mca_dop'),
                                                     ('CSU1292', 'mca_ai'),
                                                     ('CSU1292', 'mca_cc'),
                                                     ('CSU1292', 'mca_dop'),
                                                     ('CSU1293', 'mca_ai'),
                                                     ('CSU1293', 'mca_cc'),
                                                     ('CSU1293', 'mca_dop'),
                                                     ('CSU1293P', 'mca_ai'),
                                                     ('CSU1293P', 'mca_cc'),
                                                     ('CSU1293P', 'mca_dop'),
                                                     ('CSU1294', 'mca_ai'),
                                                     ('CSU1294', 'mca_cc'),
                                                     ('CSU1294', 'mca_dop'),
                                                     ('CSU1294P', 'mca_ai'),
                                                     ('CSU1294P', 'mca_cc'),
                                                     ('CSU1294P', 'mca_dop'),
                                                     ('CSU1295', 'mca_ai'),
                                                     ('CSU1295', 'mca_cc'),
                                                     ('CSU1295', 'mca_dop'),
                                                     ('CSU1659', 'mca_ai'),
                                                     ('CSU271', 'mca_cc'),
                                                     ('CSU271', 'mca_dop');

-- --------------------------------------------------------

--
-- Table structure for table `timeframe`
--

CREATE TABLE `timeframe` (
                             `tid` int(11) NOT NULL,
                             `stime` time NOT NULL,
                             `etime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timeframe`
--

INSERT INTO `timeframe` (`tid`, `stime`, `etime`) VALUES
                                                      (1, '09:15:00', '10:05:00'),
                                                      (2, '10:10:00', '11:00:00'),
                                                      (3, '11:05:00', '11:55:00'),
                                                      (4, '12:00:00', '12:50:00'),
                                                      (5, '12:55:00', '13:45:00'),
                                                      (6, '13:50:00', '14:40:00'),
                                                      (7, '14:45:00', '15:35:00'),
                                                      (8, '15:40:00', '16:30:00'),
                                                      (9, '16:35:00', '17:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `timetable`
--

CREATE TABLE `timetable` (
                             `day` int(4) NOT NULL,
                             `tid` int(11) NOT NULL,
                             `course_id` varchar(150) NOT NULL,
                             `grp` char(1) DEFAULT NULL,
                             `room_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`day`, `tid`, `course_id`, `grp`, `room_no`) VALUES
                                                                          (2, 1, 'CSU1290P', 'a', 'G-102'),
                                                                          (2, 2, 'CSU1290P', 'a', 'G-102'),
                                                                          (2, 3, 'CSU1293', '', 'G-103'),
                                                                          (2, 4, 'CSU1659', '', 'G-149'),
                                                                          (2, 5, 'CSU1295', '', 'G-104'),
                                                                          (2, 6, 'CSU271', '', 'G-105'),
                                                                          (2, 8, 'CSU1292', '', 'G-106'),
                                                                          (3, 2, 'CSU1292', '', 'G-107'),
                                                                          (3, 3, 'CSU1294P', 'a', 'G-108'),
                                                                          (3, 4, 'CSU1294P', 'a', 'G-108'),
                                                                          (3, 3, 'CSU1293P', 'b', 'G-110'),
                                                                          (3, 4, 'CSU1293P', 'b', 'G-110'),
                                                                          (3, 6, 'CSU1294', '', 'G-112'),
                                                                          (3, 7, 'CSU1295', '', 'G-113'),
                                                                          (3, 8, 'CSU271', '', 'G-114'),
                                                                          (3, 8, 'CSU1659', '', 'G-115'),
                                                                          (3, 9, 'CSU1290', '', 'G-116'),
                                                                          (4, 1, 'CSU1294P', 'a', 'G-117'),
                                                                          (4, 2, 'CSU1293', '', 'G-118'),
                                                                          (4, 4, 'CSU1295', '', 'G-119'),
                                                                          (4, 7, 'CSU271', '', 'G-120'),
                                                                          (4, 8, 'CSU1294', '', 'G-121'),
                                                                          (4, 9, 'CSU1290', '', 'G-122'),
                                                                          (5, 1, 'CSU271', '', 'G-123'),
                                                                          (5, 2, 'CSU1290', '', 'G-124'),
                                                                          (5, 3, 'CSU1293P', 'b', 'G-125'),
                                                                          (5, 4, 'CSU1293P', 'b', 'G-125'),
                                                                          (5, 7, 'CSU1659', '', 'G-127'),
                                                                          (5, 8, 'CSU1292', '', 'G-128'),
                                                                          (5, 9, 'CSU1293', '', 'G-129'),
                                                                          (6, 1, 'CSU1290P', 'a', 'G-130'),
                                                                          (6, 2, 'CSU1290P', 'a', 'G-130'),
                                                                          (6, 3, 'CSU1295', '', 'G-132'),
                                                                          (6, 6, 'CSU1292', '', 'G-133'),
                                                                          (6, 7, 'CSU1659', '', 'G-134'),
                                                                          (6, 8, 'CSU1294', '', 'G-135');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mca_ai`
--
ALTER TABLE `mca_ai`
    ADD PRIMARY KEY (`stid`),
  ADD UNIQUE KEY `stid` (`stid`);

--
-- Indexes for table `mca_cc`
--
ALTER TABLE `mca_cc`
    ADD PRIMARY KEY (`stid`),
  ADD UNIQUE KEY `stid` (`stid`);

--
-- Indexes for table `mca_dop`
--
ALTER TABLE `mca_dop`
    ADD PRIMARY KEY (`stid`),
  ADD UNIQUE KEY `stid` (`stid`),
  ADD UNIQUE KEY `stid_2` (`stid`),
  ADD UNIQUE KEY `stid_3` (`stid`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
    ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `sub_course`
--
ALTER TABLE `sub_course`
    ADD PRIMARY KEY (`course_id`,`course`);

--
-- Indexes for table `timeframe`
--
ALTER TABLE `timeframe`
    ADD PRIMARY KEY (`tid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
