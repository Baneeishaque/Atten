-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 01, 2015 at 04:58 PM
-- Server version: 5.6.23-log
-- PHP Version: 5.6.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atten`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance_p`
--

CREATE TABLE IF NOT EXISTS `attendance_p` (
  `date` varchar(50) NOT NULL,
  `p1` varchar(50) NOT NULL DEFAULT '0',
  `p2` varchar(50) NOT NULL DEFAULT '0',
  `p3` varchar(50) NOT NULL DEFAULT '0',
  `p4` varchar(50) NOT NULL DEFAULT '0',
  `p5` varchar(50) NOT NULL DEFAULT '0',
  `branch` varchar(50) NOT NULL,
  `sem` varchar(50) NOT NULL,
  `rno` varchar(50) NOT NULL,
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attendance_p`
--

INSERT INTO `attendance_p` (`date`, `p1`, `p2`, `p3`, `p4`, `p5`, `branch`, `sem`, `rno`, `id`, `status`) VALUES
('05/10/2015', 'PRE', '0', '0', '0', '0', 'computer', 'Semester 1', '3', 1, '0p1p2p3p4p5'),
('05/10/2015', '0', 'PRE', '0', '0', '0', 'Computer', 'Semester 1', '3', 2, '0p1p2p3p4p5'),
('05/10/2015', '0', '0', 'PRE', '0', '0', 'Computer', 'Semester 1', '3', 3, '0p1p2p3p4p5'),
('05/10/2015', '0', '0', '0', 'PRE', '0', 'Computer', 'Semester 1', '3', 4, '0p1p2p3p4p5'),
('05/10/2015', '0', '0', '0', '0', 'PRE', 'Computer', 'Semester 1', '3', 10, '0p1p2p3p4p5'),
('01/09/2015', 'PRE', '0', '0', '0', '0', 'Computer', 'Semester 1', '3', 11, '0p1p2p3p4p5'),
('01/09/2015', '0', 'ABS', '0', '0', '0', 'Computer', 'Semester 1', '3', 12, '0p1p2p3p4p5'),
('01/09/2015', '0', '0', 'PRE', '0', '0', 'Computer', 'Semester 1', '3', 13, '0p1p2p3p4p5'),
('01/09/2015', '0', '0', '0', 'PRE', '0', 'Computer', 'Semester 1', '3', 14, '0p1p2p3p4p5'),
('01/09/2015', '0', '0', '0', '0', 'ABS', 'Computer', 'Semester 1', '3', 15, '0p1p2p3p4p5');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE IF NOT EXISTS `attendence` (
  `no` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `register no` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `presence` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `sn` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`sn`, `username`, `password`, `role`) VALUES
(1, 'admin', '123456', 'admin'),
(2, 'staff', '123456', 'staff');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `rno` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`rno`, `name`, `branch`, `semester`) VALUES
(10001, 'banee', 'Computer', 'Semester 1'),
(10002, 'b2', 'Computer', 'Semester 1'),
(10003, 'ggg', 'Computer', 'Semester 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance_p`
--
ALTER TABLE `attendance_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`sn`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`rno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance_p`
--
ALTER TABLE `attendance_p`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `attendence`
--
ALTER TABLE `attendence`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `sn` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
