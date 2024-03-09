
# SUBJECTS table
INSERT INTO `subjects`(`course_id`, `course_name`, `faculty`)
VALUES
    ('CSU1290P','Web Technology Programming Lab','Nitesh Sharma'),
    ('CSU1290','Web Technology Programming','Nitesh Sharma'),
    ('CSU1292','Advance Theory of Automata','Sonia'),
    ('CSU1293','Design and Analysis of Algorithm','Arvind Sharma'),
    ('CSU1293P','Design and Analysis of Algorithm Lab','Arvind Sharma'),
    ('CSU1294','Operating System Concepts','Bharti Thakur'),
    ('CSU1294P','Operating System Concepts Lab','Bharti Thakur'),
    ('CSU1295','Data Science & AI','Kritika Rana'),
    ('CSU271','Cloud Computing Architecture','Ahmad Salehi'),
    ('CSU1659', 'Deep Learning', 'Shrawan Kumar');


# MCA AI  table
INSERT INTO `mca_ai`(`name`, `stid`)
VALUES
    ('Kumaran Singh', 'PGD202309794'),
    ('Sushila Sharma', 'PGD202309534'),
    ('Samira Tamboli', 'PGD202309990'),
    ('Govind Choudhary', 'PGD202399624'),
    ('Rajnish Das', 'PGD202318904'),
    ('Singh Chaudhri', 'PGD202307288'),
    ('Ankit Gadhavi', 'PGD202387566'),
    ('Agni Sharma', 'PGD202325857'),
    ('Sudhir Begam', 'PGD202325461'),
    ('Tejal Kulkarni', 'PGD202307178');


# MCA CC table
INSERT INTO `mca_cc`(`name`, `stid`)
VALUES
    ('Chand Chaudhri', 'PGD202376206'),
    ('Jyothi Narang', 'PGD202320637'),
    ('Sukhbir Kumar', 'PGD202331994'),
    ('Grishma Devi', 'PGD202353133'),
    ('Roshni Gupta', 'PGD202361310'),
    ('Prabhakar Tamboli', 'PGD202397962'),
    ('Chandan Chaudhri', 'PGD202343138'),
    ('Niketa Kulkarni', 'PGD202397263'),
    ('Aishwarya Devi', 'PGD202355725'),
    ('Devadas Patil', 'PGD202359223');


# MCA DOP table
INSERT INTO `mca_dop`(`name`, `stid`)
VALUES
    ('Kumaran Kaur', 'PGD202394451'),
    ('Amrita Chaudhari', 'PGD202350939'),
    ('Meera Begum', 'PGD202357315'),
    ('Gita Kaur', 'PGD202371389'),
    ('Jay Kulkarni', 'PGD202380084'),
    ('Subrahmanya Nagarkar', 'PGD202328025'),
    ('Swapnil Jain', 'PGD202302843'),
    ('Disha Korrapati', 'PGD202324160'),
    ('Kaur Choudhary', 'PGD202334087'),
    ('Indrani Nibhanupudi', 'PGD202397023');




# timeframe table
INSERT INTO `timeframe`(`tid`, `stime`, `etime`)
VALUES
    ('1', '09:15:00', '10:05:00'),
    ('2', '10:10:00', '11:00:00'),
    ('3', '11:05:00', '11:55:00'),
    ('4', '12:00:00', '12:50:00'),
    ('5', '12:55:00', '13:45:00'),
    ('6', '13:50:00', '14:40:00'),
    ('7', '14:45:00', '15:35:00'),
    ('8', '15:40:00', '16:30:00'),
    ('9', '16:35:00', '17:25:00');



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
    ('CSU1659', 'mca_ai');


# TIMETABLE table
INSERT INTO `timetable`(`day`, `tid`, `course_id`, `grp`, `room_no`)
VALUES
    ('2','1','CSU1290P','a','G-102'),
    ('2','2','CSU1290P','a','G-102'),
    ('2','3','CSU1293','','G-103'),
    ('2','4','CSU1659','','G-149'),
    ('2','5','CSU1295','','G-104'),
    ('2','6','CSU271','','G-105'),
    ('2','8','CSU1292','','G-106'),
    ('3','2','CSU1292','','G-107'),
    ('3','3','CSU1294P','a','G-108'),
    ('3','4','CSU1294P','a','G-108'),
    ('3','3','CSU1293P','b','G-110'),
    ('3','4','CSU1293P','b','G-110'),
    ('3','6','CSU1294','','G-112'),
    ('3','7','CSU1295','','G-113'),
    ('3','8','CSU271','','G-114'),
    ('3','8','CSU1659','','G-115'),
    ('3','9','CSU1290','','G-116'),
    ('4','1','CSU1294P','a','G-117'),
    ('4','2','CSU1293','','G-118'),
    ('4','4','CSU1295','','G-119'),
    ('4','7','CSU271','','G-120'),
    ('4','8','CSU1294','','G-121'),
    ('4','9','CSU1290','','G-122'),
    ('5','1','CSU271','','G-123'),
    ('5','2','CSU1290','','G-124'),
    ('5','3','CSU1293P','b','G-125'),
    ('5','4','CSU1293P','b','G-125'),
    ('5','7','CSU1659','','G-127'),
    ('5','8','CSU1292','','G-128'),
    ('5','9','CSU1293','','G-129'),
    ('6','1','CSU1290P','a','G-130'),
    ('6','2','CSU1290P','a','G-130'),
    ('6','3','CSU1295','','G-132'),
    ('6','6','CSU1292','','G-133'),
    ('6','7','CSU1659','','G-134'),
    ('6','8','CSU1294','','G-135');
