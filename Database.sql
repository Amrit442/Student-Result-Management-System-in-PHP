-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2018 at 10:09 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsm`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `getSubject` ()  NO SQL
SELECT * FROM subject$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `password`) VALUES
(1, 'admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `usn` varchar(10) NOT NULL,
  `ssid` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`usn`, `ssid`) VALUES
('1BY16IS001', 'ise5a'),
('1BY16IS002', 'ise5a'),
('1BY16IS003', 'ise5a'),
('1BY16IS004', 'ise5a'),
('1BY16IS005', 'ise5a'),
('1BY16IS006', 'ise5a'),
('1BY16IS007', 'ise5b'),
('1BY16IS010', 'ise5b'),
('1BY16IS011', 'ise5b'),
('1BY16IS012', 'ise5a');

-- --------------------------------------------------------

--
-- Table structure for table `external`
--

CREATE TABLE `external` (
  `usn` varchar(10) NOT NULL,
  `subcode` varchar(8) NOT NULL,
  `ssid` varchar(5) NOT NULL,
  `iamarks1` int(2) NOT NULL,
  `iamarks2` int(2) NOT NULL,
  `iamarks3` int(2) NOT NULL,
  `avg` int(2) NOT NULL,
  `iafull` int(2) NOT NULL,
  `extmarks` int(2) NOT NULL,
  `extfull` int(2) NOT NULL,
  `total` int(3) NOT NULL,
  `full` int(3) NOT NULL,
  `result` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `external`
--

INSERT INTO `external` (`usn`, `subcode`, `ssid`, `iamarks1`, `iamarks2`, `iamarks3`, `avg`, `iafull`, `extmarks`, `extfull`, `total`, `full`, `result`) VALUES
('1BY16IS001', '15CS51', 'ise5a', 19, 15, 16, 17, 20, 60, 80, 77, 100, 'P'),
('1BY16IS001', '15CS52', 'ise5a', 16, 12, 20, 16, 20, 20, 80, 36, 100, 'F'),
('1BY16IS001', '15CS53', 'ise5a', 16, 15, 19, 17, 20, 50, 80, 67, 100, 'P'),
('1BY16IS001', '15CS54', 'ise5a', 12, 12, 16, 13, 20, 0, 80, 13, 100, 'A'),
('1BY16IS001', '15CS553', 'ise5a', 19, 20, 20, 20, 20, 60, 80, 80, 100, 'P'),
('1BY16IS001', '15CS562', 'ise5a', 19, 18, 20, 19, 20, 79, 80, 98, 100, 'P'),
('1BY16IS001', '15CSL57', 'ise5a', 19, 15, 19, 18, 20, 75, 80, 93, 100, 'P'),
('1BY16IS001', '15CSL58', 'ise5a', 19, 15, 19, 18, 20, 72, 80, 90, 100, 'P'),
('1BY16IS002', '15CS51', 'ise5a', 19, 12, 19, 17, 20, 50, 80, 67, 100, 'P'),
('1BY16IS002', '15CS52', 'ise5a', 19, 17, 19, 18, 20, 78, 80, 96, 100, 'P'),
('1BY16IS002', '15CS53', 'ise5a', 19, 17, 16, 17, 20, 0, 80, 17, 100, 'A'),
('1BY16IS002', '15CS54', 'ise5a', 16, 15, 20, 17, 20, 72, 80, 89, 100, 'P'),
('1BY16IS002', '15CS553', 'ise5a', 20, 20, 19, 20, 20, 40, 80, 60, 100, 'P'),
('1BY16IS002', '15CS562', 'ise5a', 19, 12, 20, 17, 20, 0, 80, 17, 100, 'A'),
('1BY16IS002', '15CSL57', 'ise5a', 19, 17, 16, 17, 20, 80, 80, 97, 100, 'P'),
('1BY16IS002', '15CSL58', 'ise5a', 19, 20, 18, 19, 20, 68, 80, 87, 100, 'P'),
('1BY16IS003', '15CS51', 'ise5a', 19, 20, 18, 19, 20, 40, 80, 59, 100, 'P'),
('1BY16IS003', '15CS52', 'ise5a', 19, 19, 18, 19, 20, 50, 80, 69, 100, 'P'),
('1BY16IS003', '15CS53', 'ise5a', 19, 15, 16, 17, 20, 60, 80, 77, 100, 'P'),
('1BY16IS003', '15CS54', 'ise5a', 16, 15, 19, 17, 20, 68, 80, 85, 100, 'P'),
('1BY16IS007', '15CS51', 'ise5b', 19, 17, 20, 19, 20, 50, 80, 69, 100, 'P'),
('1BY16IS007', '15CS52', 'ise5b', 12, 20, 18, 17, 20, 72, 80, 89, 100, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` int(11) NOT NULL,
  `usn` varchar(20) NOT NULL,
  `action` varchar(20) NOT NULL,
  `cdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `usn`, `action`, `cdate`) VALUES
(3, '1BY16IS001', 'Updated', '2018-10-28 10:48:38'),
(4, '1BY16IS001', 'Updated', '2018-10-28 10:49:14'),
(5, '1BY16IS002', 'Updated', '2018-10-28 10:49:36'),
(6, '1BY16CS001', 'Inserted', '2018-10-28 10:52:05'),
(7, '1BY16IS002', 'Deleted', '2018-10-28 10:52:22'),
(8, '1BY16IS002', 'Inserted', '2018-10-28 10:54:03'),
(9, '1BY16CS001', 'Deleted', '2018-10-28 10:58:28'),
(10, '1BY16IS002', 'Deleted', '2018-10-28 11:07:50'),
(11, '1BY16IS002', 'Inserted', '2018-10-29 09:30:35'),
(12, '1BY16IS006', 'Inserted', '2018-10-29 10:47:14'),
(13, '1BY16IS006', 'Deleted', '2018-10-30 16:14:11'),
(14, '1BY16IS002', 'Deleted', '2018-10-30 16:54:21'),
(15, '1BY16IS002', 'Inserted', '2018-10-30 17:52:11'),
(16, '1BY16IS002', 'Deleted', '2018-10-30 17:52:28'),
(17, '1BY16IS002', 'Inserted', '2018-10-30 17:53:17'),
(18, '1BY16IS002', 'Deleted', '2018-10-30 17:53:24'),
(19, '1BY16IS002', 'Inserted', '2018-10-30 17:56:19'),
(20, '1BY16IS003', 'Inserted', '2018-10-30 17:57:03'),
(21, '1BY16IS004', 'Inserted', '2018-10-30 17:58:30'),
(22, '1BY16IS004', 'Deleted', '2018-10-30 17:59:36'),
(23, '1BY16IS003', 'Deleted', '2018-10-30 18:03:18'),
(24, '1BY16IS002', 'Deleted', '2018-10-30 18:03:25'),
(25, '1BY16IS002', 'Inserted', '2018-11-03 23:44:32'),
(26, '1BY16IS002', 'Deleted', '2018-11-03 23:44:38'),
(27, '1BY16IS002', 'Inserted', '2018-11-04 03:10:49'),
(28, '1BY16IS002', 'Deleted', '2018-11-04 03:10:56'),
(29, '1BY16IS006', 'Inserted', '2018-11-04 09:12:19'),
(30, '1BY16IS006', 'Deleted', '2018-11-04 09:12:32'),
(31, '1BY16IS002', 'Inserted', '2018-11-04 09:20:47'),
(32, '1BY16IS003', 'Inserted', '2018-11-04 09:21:44'),
(33, '1BY16IS004', 'Inserted', '2018-11-04 09:22:21'),
(34, '1BY16IS005', 'Inserted', '2018-11-04 09:23:37'),
(35, '1BY16IS006', 'Inserted', '2018-11-04 09:24:08'),
(36, '1BY16IS007', 'Inserted', '2018-11-04 09:24:50'),
(37, '1BY16IS010', 'Inserted', '2018-11-04 09:29:56'),
(38, '1BY16IS010', 'Deleted', '2018-11-04 09:30:22'),
(39, '1BY16IS010', 'Inserted', '2018-11-04 09:31:16'),
(40, '1BY16IS010', 'Deleted', '2018-11-04 09:31:28'),
(41, '1BY16IS010', 'Inserted', '2018-11-04 09:32:53'),
(42, '1BY16IS011', 'Inserted', '2018-11-04 09:34:20'),
(43, '1BY16IS012', 'Inserted', '2018-11-04 09:35:07'),
(44, '1BY16IS013', 'Inserted', '2018-11-04 09:36:47'),
(45, '1BY16IS013', 'Deleted', '2018-11-04 13:55:46'),
(46, '1BY16IS030', 'Inserted', '2018-11-04 13:56:49'),
(47, '1BY16IS030', 'Deleted', '2018-12-03 17:34:20'),
(48, '1BY16IS001', 'Deleted', '2018-12-03 19:51:46'),
(49, '1BY16IS002', 'Deleted', '2018-12-03 19:52:12'),
(50, '1BY16IS003', 'Deleted', '2018-12-03 19:53:43'),
(51, '1BY16IS004', 'Deleted', '2018-12-03 19:54:45'),
(52, '1BY16IS001', 'Inserted', '2018-12-03 21:44:20'),
(53, '1BY16IS002', 'Inserted', '2018-12-03 21:47:00'),
(54, '1BY16IS003', 'Inserted', '2018-12-03 21:50:30'),
(55, '1BY16IS004', 'Inserted', '2018-12-03 21:51:08'),
(56, '1BY16IS111', 'Inserted', '2018-12-03 23:37:09'),
(57, '1BY16IS111', 'Updated', '2018-12-03 23:37:43'),
(58, '1BY16IS111', 'Deleted', '2018-12-03 23:40:08');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `usn` varchar(12) NOT NULL,
  `request` varchar(240) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`usn`, `request`, `date`) VALUES
('1BY16IS001', 'I wrote well in Automata but i got failed.', '2018-12-03'),
('1BY16IS007', 'I got result of only two subject.\r\n', '2018-12-03'),
('1BY16IS001', 'fhgfghf', '2018-12-05');

-- --------------------------------------------------------

--
-- Table structure for table `semsec`
--

CREATE TABLE `semsec` (
  `ssid` varchar(5) NOT NULL,
  `sem` int(2) NOT NULL,
  `sec` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semsec`
--

INSERT INTO `semsec` (`ssid`, `sem`, `sec`) VALUES
('ise5a', 5, 'a'),
('ise5b', 5, 'b');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `usn` varchar(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`usn`, `name`, `address`, `phone`, `gender`, `dob`) VALUES
('1BY16IS001', 'Abhijit Baruah', 'Pune', '9108396113', 'male', '1997-11-12'),
('1BY16IS002', 'Adithya Vasisth', 'Bangalore', '9108396113', 'male', '1999-08-11'),
('1BY16IS003', 'Agneya Kaushik', 'Bengaluru', '9108396110', 'male', '1997-09-09'),
('1BY16IS004', 'Akarshan Kumar', 'Bihar', '9108396100', 'male', '1998-10-08'),
('1BY16IS005', 'Haneesh', 'Bengaluru', '9108396116', 'male', '1998-11-13'),
('1BY16IS006', 'Amrit Raj', 'Bihar', '9108396116', 'male', '1997-11-18'),
('1BY16IS007', 'Anirudh Rs', 'Bengaluru', '9108396117', 'male', '1998-12-12'),
('1BY16IS010', 'Chaitanyalakshmi PM', 'Bengaluru', '9108310119', 'female', '1998-11-12'),
('1BY16IS011', 'Gaurav Sarraf', 'Kolkata', '9108311119', 'male', '1998-09-18'),
('1BY16IS012', 'Geetha Priya', 'Bengaluru', '9108312118', 'female', '1999-08-07');

--
-- Triggers `student`
--
DELIMITER $$
CREATE TRIGGER `deleteLog` BEFORE DELETE ON `student` FOR EACH ROW INSERT INTO logs VALUES(null,OLD.usn,'Deleted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `insertLog` AFTER INSERT ON `student` FOR EACH ROW INSERT INTO logs VALUES(null,NEW.usn,'Inserted',NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `updateLog` AFTER UPDATE ON `student` FOR EACH ROW INSERT INTO logs VALUES(null,NEW.usn,'Updated',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subcode` varchar(50) NOT NULL,
  `title` varchar(60) NOT NULL,
  `sem` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subcode`, `title`, `sem`) VALUES
('15CS51', 'MANAGEMENT AND ENTREPRENEURSHIP FOR IT INDUSTRY', 5),
('15CS52', 'COMPUTER NETWORKS', 5),
('15CS53', 'DATABASE MANAGEMENT SYSTEM', 5),
('15CS54', 'AUTOMATA THEORY AND COMPUTABILITY', 5),
('15CS553', 'ADVANCED JAVA AND J2EE', 5),
('15CS562', 'ARTIFICIAL INTELLIGENCE', 5),
('15CSL57', 'COMPUTER NETWORK LABORATORY', 5),
('15CSL58', 'DBMS LABORATORY WITH MINI PROJECT', 5);

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `qaf` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `name`, `pass`, `address`, `phone`, `gender`, `dob`, `qaf`) VALUES
(11, 'Roshan', '123', 'Bengaluru', '4234324252', 'male', '2018-12-27', 'phd'),
(12, 'Sahil', '121', 'Assam', '9108396100', 'male', '1998-08-18', 'btech');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`usn`,`ssid`),
  ADD KEY `ssid` (`ssid`);

--
-- Indexes for table `external`
--
ALTER TABLE `external`
  ADD PRIMARY KEY (`usn`,`subcode`,`ssid`),
  ADD KEY `subcode` (`subcode`),
  ADD KEY `ssid` (`ssid`);

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD KEY `usn` (`usn`);

--
-- Indexes for table `semsec`
--
ALTER TABLE `semsec`
  ADD PRIMARY KEY (`ssid`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`usn`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subcode`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logs`
--
ALTER TABLE `logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `class_ibfk_2` FOREIGN KEY (`ssid`) REFERENCES `semsec` (`ssid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `external`
--
ALTER TABLE `external`
  ADD CONSTRAINT `external_ibfk_1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `external_ibfk_2` FOREIGN KEY (`subcode`) REFERENCES `subject` (`subcode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `external_ibfk_3` FOREIGN KEY (`ssid`) REFERENCES `semsec` (`ssid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `c1` FOREIGN KEY (`usn`) REFERENCES `student` (`usn`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
