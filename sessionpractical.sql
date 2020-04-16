-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2019 at 10:51 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sessionpractical`
--

-- --------------------------------------------------------

--
-- Table structure for table `aapcandidates`
--

CREATE TABLE `aapcandidates` (
  `cno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nop` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `pb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aapcandidates`
--

INSERT INTO `aapcandidates` (`cno`, `name`, `nop`, `age`, `pb`) VALUES
(1, 'MEERA SANYAL', 'AAM AADMI PARTY', 45, '3 YEARS'),
(2, 'SUDHIR SAWANT', 'AAM AADMI PARTY', 45, '5 YEARS'),
(3, 'MEGHA PATKAR', 'AAM AADMI PARTY', 47, '7 YEARS');

-- --------------------------------------------------------

--
-- Table structure for table `bjpcandidates`
--

CREATE TABLE `bjpcandidates` (
  `cno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nop` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `pb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bjpcandidates`
--

INSERT INTO `bjpcandidates` (`cno`, `name`, `nop`, `age`, `pb`) VALUES
(1, 'DR>KIRIT SOMYA', 'BHARTIYA JANTA PARTY', 47, '5 Years'),
(2, 'MANDA MHATRE', 'BHARTIYA JANTA PARTY', 57, '10 Years'),
(3, 'SANJAY KELKAR', 'BHARTIYA JANTA PARTY', 43, '6 Years');

-- --------------------------------------------------------

--
-- Table structure for table `bspcandidates`
--

CREATE TABLE `bspcandidates` (
  `cno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nop` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `pb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bspcandidates`
--

INSERT INTO `bspcandidates` (`cno`, `name`, `nop`, `age`, `pb`) VALUES
(1, 'GIRISH CHANDRA', 'BAHUJAN SAMJ PARTY', 46, '& YEARS'),
(2, 'DEEPAK SAWNT', 'BAHUJAN SAMJ PARTY', 67, '10 YEARS'),
(3, 'PRAKASH AMBEDKAR', 'BAHUJAN SAMJ PARTY', 78, '12 YEARS');

-- --------------------------------------------------------

--
-- Table structure for table `congresscandidates`
--

CREATE TABLE `congresscandidates` (
  `cno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nop` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `pb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `congresscandidates`
--

INSERT INTO `congresscandidates` (`cno`, `name`, `nop`, `age`, `pb`) VALUES
(1, 'NARAYAN PAWAR', 'INDIAN NATIONAL CONGRESS', 45, '12 YEARS'),
(2, 'NAMDEO BHAGAT', 'INDIAN NATIONAL CONGRESS', 45, '3 YEARS'),
(3, 'SANJAY NIROOPAM', 'INDIAN NATIONAL CONGRESS', 43, '17 YEARS');

-- --------------------------------------------------------

--
-- Table structure for table `mansecandidates`
--

CREATE TABLE `mansecandidates` (
  `cno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nop` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `pb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mansecandidates`
--

INSERT INTO `mansecandidates` (`cno`, `name`, `nop`, `age`, `pb`) VALUES
(1, 'BALA NANGOIK', 'MANSE', 57, '12 YEARS'),
(2, 'GAJANAN KELE', 'MANSE', 37, '6 YEARS'),
(3, 'NILESH CHAVHAN ', 'MANSE', 46, '13 YEARS');

-- --------------------------------------------------------

--
-- Table structure for table `membersbjp`
--

CREATE TABLE `membersbjp` (
  `cno` int(11) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membersbjp`
--

INSERT INTO `membersbjp` (`cno`, `region`) VALUES
(1, 'MIRA BHAYANDER'),
(2, 'Nashik'),
(3, 'Thane');

-- --------------------------------------------------------

--
-- Table structure for table `memberscongress`
--

CREATE TABLE `memberscongress` (
  `cno` int(11) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memberscongress`
--

INSERT INTO `memberscongress` (`cno`, `region`) VALUES
(1, 'Thane'),
(2, 'Nashik'),
(3, 'Mira Bhayander');

-- --------------------------------------------------------

--
-- Table structure for table `membersshivsena`
--

CREATE TABLE `membersshivsena` (
  `cno` int(11) NOT NULL,
  `region` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `membersshivsena`
--

INSERT INTO `membersshivsena` (`cno`, `region`) VALUES
(1, 'Mira Bhayander'),
(2, 'Nashik'),
(3, ' Thane');

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE `parties` (
  `bjp` varchar(250) DEFAULT NULL,
  `congress` varchar(250) DEFAULT NULL,
  `manse` varchar(250) DEFAULT NULL,
  `shivsena` varchar(250) DEFAULT NULL,
  `aap` varchar(250) DEFAULT NULL,
  `bsp` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`bjp`, `congress`, `manse`, `shivsena`, `aap`, `bsp`) VALUES
('dhawal@gmail.com', NULL, NULL, NULL, NULL, NULL),
('0', '0', '0', 'atul@gmail.com', '0', '0'),
(NULL, NULL, NULL, 'aniketbrahmecha@gmail.com', NULL, NULL),
('rithiksharma099@gmail.com', NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, 'arjun@gmail.com', NULL),
('harshmali@gmail.com', NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, NULL, NULL, 'rahul@gmail.com'),
('manasvi@gmail.com', NULL, NULL, NULL, NULL, NULL),
('parth@gmail.com', NULL, NULL, NULL, NULL, NULL),
('karan@gmail.com', NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, 'vrinda@gmail.com', NULL, NULL),
('0', '0', 'ashok@gmail.com', '0', '0', '0'),
('0', '0', 'ashok@gmail.com', '0', '0', '0'),
('dhoni@gmail.com', NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, 'sehwag@gmail.com', NULL, NULL),
(NULL, NULL, NULL, 'sehwag@gmail.com', NULL, NULL),
(NULL, NULL, NULL, 'sehwag@gmail.com', NULL, NULL),
(NULL, NULL, NULL, 'sehwag@gmail.com', NULL, NULL),
(NULL, NULL, NULL, 'sehwag@gmail.com', NULL, NULL),
(NULL, NULL, NULL, 'sehwag@gmail.com', NULL, NULL),
(NULL, NULL, NULL, 'sehwag@gmail.com', NULL, NULL),
('0', '0', 'kama@h.com', '0', '0', '0'),
(NULL, NULL, NULL, NULL, 'rishabh@gmail.com', NULL),
('rithiksharma099@gmail.com', NULL, NULL, NULL, NULL, NULL),
('rahul@gmail.com', NULL, NULL, NULL, NULL, NULL),
('rahul@gmail.com', NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, 'ayushi@gmail.com', NULL, NULL),
('suddhu@gmail.com', NULL, NULL, NULL, NULL, NULL),
(NULL, NULL, NULL, 'karan@gmail.com', NULL, NULL),
('patel@gmail.com', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shivsenacandidates`
--

CREATE TABLE `shivsenacandidates` (
  `cno` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `nop` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `pb` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `shivsenacandidates`
--

INSERT INTO `shivsenacandidates` (`cno`, `name`, `nop`, `age`, `pb`) VALUES
(1, 'RAHUL SHELWALE', 'SHIVSENA', 36, '3 YEARS'),
(2, 'VIJAY NAHATA', 'SHIVSENA', 60, '18 YEARS'),
(3, 'EKNATH SHINDE', 'SHIVSENA', 36, '8 YEARS');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `region` varchar(255) NOT NULL,
  `aadharno` int(11) NOT NULL,
  `panno` varchar(255) NOT NULL,
  `voted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`name`, `email`, `password`, `age`, `region`, `aadharno`, `panno`, `voted`) VALUES
('', '', '', 0, '', 0, '', 'false'),
('kadam', 'Array', 'kadam', 34, 'Mira Bhayander', 35, '24', 'false'),
('aman', 'aman@g.com', 'aman', 45, 'Thane', 123, '', 'false'),
('parth', 'parth@gmail.com', 'parth', 67, 'Mira Bhayander', 534, '58', 'false'),
('rishi', 'rishi@gmail.com', 'rishi', 56, 'Mira Bhayander', 746, '426', 'false'),
('karan', 'karan@gmail.com', 'karan', 67, 'Mira Bhayander', 794, '907', 'true'),
('siddhi', 'siddhi@gmail.com', 'siddhi', 19, 'Thane', 4789, 'wri', 'false'),
('aniket', 'aniket@gmail.com', 'aniket', 23, 'Nashik', 35266, '52656', 'false'),
('patel', 'patel@gmail.com', 'patelpatel', 67, 'Nashik', 678888, '8888', 'true'),
('jadhav', 'jadhav@gmail.com', 'jadhav', 23, 'Thane', 1233333, '3', 'false'),
('kama', 'kama@h.com', 'kama', 32, 'Mira Bhayander', 9996776, '99999', 'false'),
('Sudhanshu', 'sudhanshu@gmai.com', 'sudhanshu', 45, 'Thane', 2147483647, '33144997', 'false');

-- --------------------------------------------------------

--
-- Stand-in structure for view `voterview`
-- (See below for the actual view)
--
CREATE TABLE `voterview` (
`name` varchar(255)
,`email` varchar(255)
,`aadharno` int(11)
,`panno` varchar(255)
);

-- --------------------------------------------------------

--
-- Structure for view `voterview`
--
DROP TABLE IF EXISTS `voterview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `voterview`  AS  select `signin`.`name` AS `name`,`signin`.`email` AS `email`,`signin`.`aadharno` AS `aadharno`,`signin`.`panno` AS `panno` from `signin` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aapcandidates`
--
ALTER TABLE `aapcandidates`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `bjpcandidates`
--
ALTER TABLE `bjpcandidates`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `bspcandidates`
--
ALTER TABLE `bspcandidates`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `congresscandidates`
--
ALTER TABLE `congresscandidates`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `mansecandidates`
--
ALTER TABLE `mansecandidates`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `membersbjp`
--
ALTER TABLE `membersbjp`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `memberscongress`
--
ALTER TABLE `memberscongress`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `membersshivsena`
--
ALTER TABLE `membersshivsena`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `shivsenacandidates`
--
ALTER TABLE `shivsenacandidates`
  ADD PRIMARY KEY (`cno`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`aadharno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aapcandidates`
--
ALTER TABLE `aapcandidates`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bjpcandidates`
--
ALTER TABLE `bjpcandidates`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bspcandidates`
--
ALTER TABLE `bspcandidates`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `congresscandidates`
--
ALTER TABLE `congresscandidates`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `mansecandidates`
--
ALTER TABLE `mansecandidates`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `shivsenacandidates`
--
ALTER TABLE `shivsenacandidates`
  MODIFY `cno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
