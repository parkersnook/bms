-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: mysql.eecs.oregonstate.edu
-- Generation Time: Dec 09, 2016 at 03:29 AM
-- Server version: 5.5.37-MariaDB-wsrep
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cs340_snookp`
--

-- --------------------------------------------------------

--
-- Table structure for table `Activities`
--

CREATE TABLE `Activities` (
  `Sports` varchar(100) NOT NULL,
  `Awards` varchar(100) NOT NULL,
  `Clubs` varchar(100) NOT NULL,
  `Community` varchar(100) NOT NULL,
  `CommunityHours` int(11) NOT NULL,
  `Jobs` varchar(100) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Activities`
--

INSERT INTO `Activities` (`Sports`, `Awards`, `Clubs`, `Community`, `CommunityHours`, `Jobs`, `email`) VALUES
('Football', 'NHS Member of the year', 'FBLA', 'Community Service Club', 50, 'Mcdonalds', ''),
('a;sldkfj', ';asdl;fjk', 'a;ldskfj', 'a;lsdkfj', 50, ':SLDKJf', ''),
('a;sldkfj', ';asdl;fjk', 'a;ldskfj', 'a;lsdkfj', 50, ':SLDKJf', ''),
('a;sldkfj', ';asdl;fjk', 'a;ldskfj', 'a;lsdkfj', 50, ':SLDKJf', ''),
('a;sldkfj', ';asdl;fjk', 'a;ldskfj', 'a;lsdkfj', 50, ':SLDKJf', ''),
('a;sldkfj', ';asdl;fjk', 'a;ldskfj', 'a;lsdkfj', 50, ':SLDKJf', ''),
('a;sldkfj', ';asdl;fjk', 'a;ldskfj', 'a;lsdkfj', 50, ':SLDKJf', ''),
('a;sldkfj', ';asdl;fjk', 'a;ldskfj', 'a;lsdkfj', 50, ':SLDKJf', ''),
('a;sldkfj', ';asdl;fjk', 'a;ldskfj', 'a;lsdkfj', 50, ':SLDKJf', ''),
('a;sldkfj', ';asdl;fjk', 'a;ldskfj', 'a;lsdkfj', 50, ':SLDKJf', ''),
('asdf', 'Ddsfdsf', 'asdf', 'Dsdf', 44, 'adsfad', 'adsf@adsf.co'),
('asdf', 'Ddsfdsf', 'asdf', 'Dsdf', 44, 'adsfad', 'adsf@adsf.com'),
('asdf', 'Ddsfdsf', 'asdf', 'Dsdf', 44, 'adsfad', 'adasfdsf@adsf.com'),
('asdf', 'Ddsfdsf', 'asdf', 'Dsdf', 44, 'adsfad', 'adafdasfdsf@adsf.com'),
('asdf', 'Ddsfdsf', 'asdf', 'Dsdf', 44, 'adsfad', 'adaasdfdasfdsf@adsf.'),
('asdf', 'Ddsfdsf', 'asdf', 'Dsdf', 44, 'adsfad', 'adaasadsfdfdasfdsf@a'),
('asdf', 'Ddsfdsf', 'asdf', 'Dsdf', 44, 'adsfad', 'adaasadsfdfadsfdasfd'),
('adsf', 'asfd', 'sadff', 'fasd', 324, 'adfs', 'parker.snofadsok@gma'),
('adsf', 'asfd', 'sadff', 'fasd', 324, 'adfs', 'parker.sadsfnofadsok'),
('asdf', 'asdf', 'adsf', 'asdf', 243, 'adsf', 'adsfa@ff.nm'),
('asdf', 'asdf', 'adsf', 'asdf', 243, 'adsf', 'adadfsfa@ff.nm'),
('asdf', 'asdf', 'asdf', 'asdf', 234, 'asdf', 'adsf@ff.f'),
('Football\\r\\nSoccer\\r\\nHockey', 'First Place State', 'President of FBLA\\r\\nTeam Captian', 'March of dimes\\r\\n', 45, 'Mcdonalds\\r\\n', 'steve@steve.com');

-- --------------------------------------------------------

--
-- Table structure for table `Applicant`
--

CREATE TABLE `Applicant` (
  `Fname` varchar(80) NOT NULL,
  `Lname` varchar(80) NOT NULL,
  `HighSchool` varchar(80) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `StreetAdd` varchar(200) NOT NULL,
  `City` varchar(30) NOT NULL,
  `State` varchar(10) NOT NULL,
  `Zip` int(11) NOT NULL,
  `GPA` int(11) NOT NULL,
  `Major` varchar(50) NOT NULL,
  `GradYear` int(11) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Applicant`
--

INSERT INTO `Applicant` (`Fname`, `Lname`, `HighSchool`, `phone`, `StreetAdd`, `City`, `State`, `Zip`, `GPA`, `Major`, `GradYear`, `email`) VALUES
('', 'snook', '', '971 269 201', '224 NW 26th Street', 'Corvallis', 'jpaeradfke', 97330, 3, 'adls;kfj', 3933, ''),
('', 'asdf', '', '654654', 'asdf', 'asdf', 'asdf', 6546, 4, 'adsf', 464, 'adaasadsfdfadsfdasfd'),
('', 'asdf', '', '654654', 'asdf', 'asdf', 'asdf', 6546, 4, 'adsf', 464, 'adaasadsfdfdasfdsf@a'),
('', 'asdf', '', '654654', 'asdf', 'asdf', 'asdf', 6546, 4, 'adsf', 464, 'adaasdfdasfdsf@adsf.'),
('', 'asdf', 'adsf', '345', 'asdf', 'asdf', 'adsf', 3245, 234, 'adsf', 234, 'adadfsfa@ff.nm'),
('', 'asdf', '', '654654', 'asdf', 'asdf', 'asdf', 6546, 4, 'adsf', 464, 'adafdasfdsf@adsf.com'),
('', 'asdf', '', '654654', 'asdf', 'asdf', 'asdf', 6546, 4, 'adsf', 464, 'adasfdsf@adsf.com'),
('', 'asdf', '', '654654', 'asdf', 'asdf', 'asdf', 6546, 4, 'adsf', 464, 'adsf@adsf.co'),
('', 'asdf', '', '654654', 'asdf', 'asdf', 'asdf', 6546, 4, 'adsf', 464, 'adsf@adsf.com'),
('asdfadsf', 'asdfasdf', 'addf', '234', 'asdfasd', 'fasdfasdfa', 'sdfadsf', 234, 234, 'adsf', 234, 'adsf@ff.f'),
('', 'asdf', 'adsf', '345', 'asdf', 'asdf', 'adsf', 3245, 234, 'adsf', 234, 'adsfa@ff.nm'),
('', 'Snook', '', '9712699201', '32676 Dutch Canyon Rd', 'Scappoose', 'OR', 97056, 234, '234adsfa', 234, 'parker.sadsfnofadsok'),
('', 'Snook', '', '9712699201', '32676 Dutch Canyon Rd', 'Scappoose', 'OR', 97056, 234, '234adsfa', 234, 'parker.snofadsok@gma'),
('Steve', 'Joe', 'Tualatin High Shcool', '971-222-2222', '123 test st', 'oregon', 'newberg', 892838, 3, 'CS', 2017, 'steve@steve.com');

-- --------------------------------------------------------

--
-- Table structure for table `Chapter`
--

CREATE TABLE `Chapter` (
  `Univsersity` varchar(80) NOT NULL,
  `State` text NOT NULL,
  `Street Add` text NOT NULL,
  `City` text NOT NULL,
  `Zip` text NOT NULL,
  `GreekLetter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `Interview`
--

CREATE TABLE `Interview` (
  `Academic` int(11) NOT NULL,
  `Activity` int(11) NOT NULL,
  `Sports` int(11) NOT NULL,
  `Fit` int(11) NOT NULL,
  `Notes` varchar(200) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Interview`
--

INSERT INTO `Interview` (`Academic`, `Activity`, `Sports`, `Fit`, `Notes`, `email`, `Total`) VALUES
(5, 4, 0, 0, '0', '', 0),
(5, 6, 0, 0, '5', 'adaasadsfdfdasfdsf@a', 0),
(5, 6, 0, 0, '5', 'adaasadsfdfdasfdsf@a', 0),
(4, 4, 4, 4, 'adfadsf', '', 0),
(5, 5, 5, 4, 'asdf', '', 0),
(4, 5, 4, 6, 'asdf', '', 0),
(4, 6, 5, 5, 'sadsf', '', 0),
(4, 5, 5, 5, 'asdfasdfdasf', '', 0),
(4, 4, 4, 4, 'adsf', '', 0),
(4, 6, 5, 6, 'asdf', 'adadfsfa@ff.nm', 0),
(4, 6, 5, 6, 'asdf', 'adadfsfa@ff.nm', 0),
(4, 5, 4, 4, 'adsf', '', 17),
(4, 4, 4, 4, 'adsf', 'adadfsfa@ff.nm', 16),
(4, 4, 6, 4, 'asdfadsf', 'adsf@adsf.co', 18),
(4, 4, 6, 4, 'asdfadsf', 'adsf@adsf.co', 18);

--
-- Triggers `Interview`
--
DELIMITER $$
CREATE TRIGGER `updateTotal` BEFORE INSERT ON `Interview` FOR EACH ROW BEGIN
	SET NEW.Total = New.Academic + New.Sports + New.Fit + New.Activity+Applicant.New.GPA;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `Member`
--

CREATE TABLE `Member` (
  `Member_ID` int(11) NOT NULL,
  `memberEmail` varchar(80) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Lname` varchar(20) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Univsersity` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Member`
--

INSERT INTO `Member` (`Member_ID`, `memberEmail`, `Fname`, `Lname`, `Phone`, `Univsersity`) VALUES
(0, '', '', '', '', ''),
(1234, 'test@test.com', 'Test', 'Account', '971-269-9201', 'Oregon State University'),
(45341, 'snookp@oregonstate.edu', 'Parker', 'Snook', '971-269-9201', ''),
(223432, 'adsfdfda@ff.jj', 'adf', 'asdf', '23423', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Activities`
--
ALTER TABLE `Activities`
  ADD KEY `email` (`email`);

--
-- Indexes for table `Applicant`
--
ALTER TABLE `Applicant`
  ADD PRIMARY KEY (`email`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `email_2` (`email`);

--
-- Indexes for table `Chapter`
--
ALTER TABLE `Chapter`
  ADD PRIMARY KEY (`Univsersity`),
  ADD UNIQUE KEY `Univsersity` (`Univsersity`),
  ADD UNIQUE KEY `Univsersity_2` (`Univsersity`);

--
-- Indexes for table `Interview`
--
ALTER TABLE `Interview`
  ADD KEY `email` (`email`);

--
-- Indexes for table `Member`
--
ALTER TABLE `Member`
  ADD PRIMARY KEY (`Member_ID`),
  ADD KEY `Univsersity` (`Univsersity`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Interview`
--
ALTER TABLE `Interview`
  ADD CONSTRAINT `Interview_ibfk_1` FOREIGN KEY (`email`) REFERENCES `Applicant` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
