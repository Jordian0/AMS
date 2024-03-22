
# SUBJECTS table
INSERT INTO `subjects` (`course_id`, `course_name`)
VALUES
    ('CSU1290P','Web Technology Programming Lab'),
    ('CSU1290','Web Technology Programming'),
    ('CSU1292','Advance Theory of Automata'),
    ('CSU1293','Design and Analysis of Algorithm'),
    ('CSU1293P','Design and Analysis of Algorithm Lab'),
    ('CSU1294','Operating System Concepts'),
    ('CSU1294P','Operating System Concepts Lab'),
    ('CSU1295','Data Science & AI'),
    ('CSU271','Cloud Computing Architecture'),
    ('CSU1659', 'Deep Learning');


# MCA AI  table
INSERT INTO `mca_ai`(`name`, `stid`, `grp`)
VALUES
    ('Kumaran Singh', 'PGD202309794', 'a'),
    ('Sushila Sharma', 'PGD202309534', 'a'),
    ('Samira Tamboli', 'PGD202309990', 'a'),
    ('Govind Choudhary', 'PGD202399624', 'a'),
    ('Rajnish Das', 'PGD202318904', 'a'),
    ('Singh Chaudhri', 'PGD202307288', 'b'),
    ('Ankit Gadhavi', 'PGD202387566', 'b'),
    ('Agni Sharma', 'PGD202325857', 'b'),
    ('Sudhir Begam', 'PGD202325461', 'b'),
    ('Tejal Kulkarni', 'PGD202307178', 'b');


# MCA CC table
INSERT INTO `mca_cc`(`name`, `stid`, `grp`)
VALUES
    ('Chand Chaudhri', 'PGD202376206', 'a'),
    ('Jyothi Narang', 'PGD202320637', 'a'),
    ('Sukhbir Kumar', 'PGD202331994', 'a'),
    ('Grishma Devi', 'PGD202353133', 'a'),
    ('Roshni Gupta', 'PGD202361310', 'a'),
    ('Prabhakar Tamboli', 'PGD202397962', 'b'),
    ('Chandan Chaudhri', 'PGD202343138', 'b'),
    ('Niketa Kulkarni', 'PGD202397263', 'b'),
    ('Aishwarya Devi', 'PGD202355725', 'b'),
    ('Devadas Patil', 'PGD202359223', 'b');


# MCA DOP table
INSERT INTO `mca_dop`(`name`, `stid`, `grp`)
VALUES
    ('Kumaran Kaur', 'PGD202394451', 'a'),
    ('Amrita Chaudhari', 'PGD202350939', 'a'),
    ('Meera Begum', 'PGD202357315', 'a'),
    ('Gita Kaur', 'PGD202371389', 'a'),
    ('Jay Kulkarni', 'PGD202380084', 'a'),
    ('Subrahmanya Nagarkar', 'PGD202328025', 'b'),
    ('Swapnil Jain', 'PGD202302843', 'b'),
    ('Disha Korrapati', 'PGD202324160', 'b'),
    ('Kaur Choudhary', 'PGD202334087', 'b'),
    ('Indrani Nibhanupudi', 'PGD202397023', 'b');




# timeframe table
INSERT INTO `timeframe`(`tid`, `stime`, `etime`)
VALUES
    (1, '09:15:00', '10:05:00'),
    (2, '10:10:00', '11:00:00'),
    (3, '11:05:00', '11:55:00'),
    (4, '12:00:00', '12:50:00'),
    (5, '12:55:00', '13:45:00'),
    (6, '13:50:00', '14:40:00'),
    (7, '14:45:00', '15:35:00'),
    (8, '15:40:00', '16:30:00'),
    (9, '16:35:00', '17:25:00');



# sub_course table
INSERT INTO `sub_course` (`course_id`, `course`)
VALUES
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


# TIMETABLE table
INSERT INTO `timetable`(`id`, `day`, `tid`, `fid`, `course_id`, `grp`, `room_no`)
VALUES
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
