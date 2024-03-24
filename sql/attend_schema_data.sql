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

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `department_id`) VALUES
                                                                       ('mca_ai', 'MCA AI', 'pg_mca'),
                                                                       ('mca_cc', 'MCA CC', 'pg_mca'),
                                                                       ('mca_dop', 'MCA DevOps', 'pg_mca');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
                           `name` varchar(50) NOT NULL,
                           `fid` varchar(15) NOT NULL,
                           `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`name`, `fid`, `password`) VALUES
                                                      ('Shrawan Kumar', 'FTA06184040', '$2y$10$rU4VVhtTaVV0ryCMi6v4NO3QsN5ojCJiQFversfSiXa.pMiZa7aEW'),
                                                      ('Nitesh Sharma', 'FTA07881168', '$2y$10$WCdc6o6k8TkAZDzUwlIWLOkV1huW0t.6.8BMIXUEefTQHcDF6oXCS'),
                                                      ('Kritika Rana', 'FTA19241699', '$2y$10$NzBq4bfO0fNbf31QXkkqOuigRXB5FuINom9HfwCFpTsUj4yV4G5Im'),
                                                      ('Arvind Sharma', 'FTA31143777', '$2y$10$QefN6wljSg2mFxATiBH1HuEFxmqReDzK.YfhaKHhO2w27yDdFipCm'),
                                                      ('Ahmad Salehi', 'FTA39670625', '$2y$10$SW7IEpkV.VA7T6RspQD0r.2UDZJYDAW2LdyYnsG/jYYP5.padUAui'),
                                                      ('Bharti Thakur', 'FTA49848913', '$2y$10$6xUTyt2LzZCEnZLsflWh1upkbmgjoF6xl6q63RuXZUPovplqPrsma'),
                                                      ('Sonia', 'FTA56190528', '$2y$10$n7WxqrB48d5VotjU0CIWL.D8KVd2zlCOz9qTwsejO1PxzQZS4GWGC');

-- --------------------------------------------------------

--
-- Table structure for table `mca_ai`
--

CREATE TABLE `mca_ai` (
                          `name` varchar(50) NOT NULL,
                          `stid` varchar(15) NOT NULL,
                          `grp` varchar(5) NOT NULL
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
                                                 ('Random boy', 'PGD202347892', 'a'),
                                                 ('Rajat Rana', 'PGD202367678', 'A'),
                                                 ('Ankit Gadhavi', 'PGD202387566', 'b'),
                                                 ('Govind Choudhary', 'PGD202399624', 'b');

-- --------------------------------------------------------

--
-- Table structure for table `mca_cc`
--

CREATE TABLE `mca_cc` (
                          `name` varchar(50) NOT NULL,
                          `stid` varchar(15) NOT NULL,
                          `grp` varchar(5) NOT NULL
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
                           `grp` varchar(5) NOT NULL
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
-- Table structure for table `postgrad`
--

CREATE TABLE `postgrad` (
                            `department_name` varchar(30) NOT NULL,
                            `department_id` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `postgrad`
--

INSERT INTO `postgrad` (`department_name`, `department_id`) VALUES
                                                                ('MCA', 'pg_mca'),
                                                                ('MSC', 'pg_msc'),
                                                                ('MTech', 'pg_mtech');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
                            `subject_id` varchar(20) NOT NULL,
                            `subject_name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subject_id`, `subject_name`) VALUES
                                                          ('CSU1290', 'Web Technology Programming'),
                                                          ('CSU1290P', 'Web Technology Programming Lab'),
                                                          ('CSU1292', 'Advance Theory of Automata'),
                                                          ('CSU1293', 'Design and Analysis of Algorithm'),
                                                          ('CSU1293P', 'Design and Analysis of Algorithm Lab'),
                                                          ('CSU1294', 'Operating System Concepts'),
                                                          ('CSU1294P', 'Operating System Concepts Lab'),
                                                          ('CSU1295', 'Data Science & AI'),
                                                          ('CSU1659', 'Deep Learning'),
                                                          ('CSU271', 'Cloud Computing Architecture');

-- --------------------------------------------------------

--
-- Table structure for table `sub_course`
--

CREATE TABLE `sub_course` (
                              `id` int(11) NOT NULL,
                              `subject_id` varchar(20) NOT NULL,
                              `course_id` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_course`
--

INSERT INTO `sub_course` (`id`, `subject_id`, `course_id`) VALUES
                                                               (1, 'CSU1290', 'mca_ai'),
                                                               (2, 'CSU1290', 'mca_cc'),
                                                               (3, 'CSU1290', 'mca_dop'),
                                                               (4, 'CSU1290P', 'mca_ai'),
                                                               (5, 'CSU1290P', 'mca_cc'),
                                                               (6, 'CSU1290P', 'mca_dop'),
                                                               (7, 'CSU1292', 'mca_ai'),
                                                               (8, 'CSU1292', 'mca_cc'),
                                                               (9, 'CSU1292', 'mca_dop'),
                                                               (10, 'CSU1293', 'mca_ai'),
                                                               (11, 'CSU1293', 'mca_cc'),
                                                               (12, 'CSU1293', 'mca_dop'),
                                                               (13, 'CSU1293P', 'mca_ai'),
                                                               (14, 'CSU1293P', 'mca_cc'),
                                                               (15, 'CSU1293P', 'mca_dop'),
                                                               (16, 'CSU1294', 'mca_ai'),
                                                               (17, 'CSU1294', 'mca_cc'),
                                                               (18, 'CSU1294', 'mca_dop'),
                                                               (19, 'CSU1294P', 'mca_ai'),
                                                               (20, 'CSU1294P', 'mca_cc'),
                                                               (21, 'CSU1294P', 'mca_dop'),
                                                               (22, 'CSU1295', 'mca_ai'),
                                                               (23, 'CSU1295', 'mca_cc'),
                                                               (24, 'CSU1295', 'mca_dop'),
                                                               (25, 'CSU1659', 'mca_ai'),
                                                               (26, 'CSU271', 'mca_cc'),
                                                               (27, 'CSU271', 'mca_dop');

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
                             `id` int(11) NOT NULL,
                             `day` int(4) NOT NULL,
                             `tid` int(11) NOT NULL,
                             `fid` varchar(15) NOT NULL,
                             `subject_id` varchar(150) NOT NULL,
                             `grp` char(1) DEFAULT NULL,
                             `room_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `timetable`
--

INSERT INTO `timetable` (`id`, `day`, `tid`, `fid`, `subject_id`, `grp`, `room_no`) VALUES
                                                                                        (1, 2, 1, 'FTA07881168', 'CSU1290P', 'a', 'G-102'),
                                                                                        (2, 2, 2, 'FTA07881168', 'CSU1290P', 'a', 'G-102'),
                                                                                        (3, 2, 3, 'FTA31143777', 'CSU1293', '', 'G-103'),
                                                                                        (4, 2, 4, 'FTA06184040', 'CSU1659', '', 'G-149'),
                                                                                        (5, 2, 5, 'FTA19241699', 'CSU1295', '', 'G-104'),
                                                                                        (6, 2, 6, 'FTA39670625', 'CSU271', '', 'G-105'),
                                                                                        (7, 2, 8, 'FTA56190528', 'CSU1292', '', 'G-106'),
                                                                                        (8, 3, 2, 'FTA56190528', 'CSU1292', '', 'G-107'),
                                                                                        (9, 3, 3, 'FTA49848913', 'CSU1294P', 'a', 'G-108'),
                                                                                        (10, 3, 4, 'FTA49848913', 'CSU1294P', 'a', 'G-108'),
                                                                                        (11, 3, 3, 'FTA31143777', 'CSU1293P', 'b', 'G-110'),
                                                                                        (12, 3, 4, 'FTA31143777', 'CSU1293P', 'b', 'G-110'),
                                                                                        (13, 3, 6, 'FTA49848913', 'CSU1294', '', 'G-112'),
                                                                                        (14, 3, 7, 'FTA19241699', 'CSU1295', '', 'G-113'),
                                                                                        (15, 3, 8, 'FTA39670625', 'CSU271', '', 'G-114'),
                                                                                        (16, 3, 8, 'FTA06184040', 'CSU1659', '', 'G-115'),
                                                                                        (17, 3, 9, 'FTA07881168', 'CSU1290', '', 'G-116'),
                                                                                        (18, 4, 1, 'FTA49848913', 'CSU1294P', 'a', 'G-117'),
                                                                                        (19, 4, 2, 'FTA31143777', 'CSU1293', '', 'G-118'),
                                                                                        (20, 4, 4, 'FTA19241699', 'CSU1295', '', 'G-119'),
                                                                                        (21, 4, 7, 'FTA39670625', 'CSU271', '', 'G-120'),
                                                                                        (22, 4, 8, 'FTA49848913', 'CSU1294', '', 'G-121'),
                                                                                        (23, 4, 9, 'FTA07881168', 'CSU1290', '', 'G-122'),
                                                                                        (24, 5, 1, 'FTA39670625', 'CSU271', '', 'G-123'),
                                                                                        (25, 5, 2, 'FTA07881168', 'CSU1290', '', 'G-124'),
                                                                                        (26, 5, 3, 'FTA31143777', 'CSU1293P', 'b', 'G-125'),
                                                                                        (27, 5, 4, 'FTA31143777', 'CSU1293P', 'b', 'G-125'),
                                                                                        (28, 5, 7, 'FTA06184040', 'CSU1659', '', 'G-127'),
                                                                                        (29, 5, 8, 'FTA56190528', 'CSU1292', '', 'G-128'),
                                                                                        (30, 5, 9, 'FTA31143777', 'CSU1293', '', 'G-129'),
                                                                                        (31, 6, 1, 'FTA07881168', 'CSU1290P', 'a', 'G-130'),
                                                                                        (32, 6, 2, 'FTA07881168', 'CSU1290P', 'a', 'G-130'),
                                                                                        (33, 6, 3, 'FTA19241699', 'CSU1295', '', 'G-132'),
                                                                                        (34, 6, 6, 'FTA56190528', 'CSU1292', '', 'G-133'),
                                                                                        (35, 6, 7, 'FTA06184040', 'CSU1659', '', 'G-134'),
                                                                                        (36, 6, 8, 'FTA49848913', 'CSU1294', '', 'G-135');

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
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `timetable`
--
ALTER TABLE `timetable`
    MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

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
