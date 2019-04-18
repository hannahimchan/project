-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2019 at 11:49 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `repair`
--

-- --------------------------------------------------------

--
-- Table structure for table `floor`
--

CREATE TABLE `floor` (
  `rep_floor` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `floor`
--

INSERT INTO `floor` (`rep_floor`) VALUES
(1),
(2),
(3),
(4),
(5);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(5) NOT NULL,
  `date` varchar(15) NOT NULL,
  `department` varchar(30) NOT NULL,
  `elect` varchar(30) NOT NULL,
  `building` varchar(30) NOT NULL,
  `office` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL,
  `place` varchar(30) NOT NULL,
  `floor` varchar(2) NOT NULL,
  `room` int(10) NOT NULL,
  `status` varchar(15) NOT NULL,
  `update` varchar(10) NOT NULL,
  `delete` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `date`, `department`, `elect`, `building`, `office`, `description`, `place`, `floor`, `room`, `status`, `update`, `delete`) VALUES
(145, '62-03-16', 'ะีะ', 'โต๊ะ', 'โต๊ะ', 'โต๊ะ', '่ีนีรว', '2', '1', 0, '', '', ''),
(146, '62-03-16', 'IT', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ำดพ้ะพ', '1', '3', 0, '', '', ''),
(147, '62-03-16', 'ัรัร', 'โต๊ะ', 'โต๊ะ', 'โต๊ะ', '่ระร', '', '2', 0, '', '', ''),
(148, '62-03-16', 'ัรัร', 'โต๊ะ', 'โต๊ะ', 'โต๊ะ', '่ระร', '', '2', 0, '', '', ''),
(149, '62-03-16', 'ีนีรน', 'โต๊ะ', 'โต๊ะ', 'โต๊ะ', 'ีัรัี', '3', '1', 0, '', '', ''),
(150, '62-03-18', 'หำะำพ', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ewrewt', '1', '2', 0, '', '', ''),
(151, '62-03-19', 'IT', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'กเกด้กด', '1', '1', 0, '', '', ''),
(152, '62-03-19', '', '', '', '', '', '', '', 0, '', '', ''),
(153, '62-03-19', 'IT', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'กเกด้กด', '1', '1', 0, '', '', ''),
(154, '62-03-19', 'IT', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'dgfdhfk', '1', '2', 0, '', '', ''),
(155, '62-03-19', 'IT', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'h65u', '5', '3', 0, '', '', ''),
(156, '62-03-19', 'IT', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'h65u', '5', '3', 0, '', '', ''),
(157, '62-03-19', 'IT', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'h65u', '5', '3', 0, '', '', ''),
(158, '62-03-19', 'IT', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'fghhjkl', '1', '2', 0, '', '', ''),
(159, '62-03-19', 'IT', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'gjj', '2', '1', 0, '', '', ''),
(160, '62-03-19', 'jjyu', 'ประตู', 'ประตู', 'ประตู', 'bfgb', '1', '', 0, '', '', ''),
(161, '62-03-19', 'IT', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'nmjhkl', '1', '1', 0, '', '', ''),
(162, '62-03-19', 'ht', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'jyuku', '3', '4', 0, '', '', ''),
(163, '62-03-19', 'af', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'hki;o', '1', '2', 0, '', '', ''),
(164, '62-03-19', 'af', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'hki;o', '1', '2', 0, '', '', ''),
(165, '62-03-20', 'IT', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'ตู้เก็บเอกสาร', 'tfjf', '1', '2', 0, '', '', ''),
(166, '62-04-06', 'IT', 'เก้าอี้', 'เก้าอี้', 'เก้าอี้', '', '1', '1', 0, '', '', ''),
(167, '62-04-14', 'fj', 'หลอดไฟ', 'หลอดไฟ', 'หลอดไฟ', 'fhf', '1', '1', 0, '', '', ''),
(168, '62-04-15', 'yyrt', 'หลอดไฟ', 'หลอดไฟ', 'หลอดไฟ', 'tyrr', '4', '2', 0, '', '', ''),
(169, '62-04-15', 'ghfgj', 'แอร์', 'แอร์', 'แอร์', 'gfhfgj', 'ตึกอธิการบดี', '1', 0, '', '', ''),
(170, '62-04-18', 'hjjk', 'หลอดไฟ', 'หลอดไฟ', 'หลอดไฟ', 'jgj', 'อาคารเรียนรวม 3', '4', 0, '', '', ''),
(171, '62-04-18', 'IT', 'ปลั๊กไฟ', 'ปลั๊กไฟ', 'ปลั๊กไฟ', 'low', 'ตึกอธิการบดี', '4', 878, '', '', ''),
(172, '62-04-18', 'IT', 'ปลั๊กไฟ', 'ปลั๊กไฟ', 'ปลั๊กไฟ', 'low', 'ตึกอธิการบดี', '4', 878, '', '', ''),
(173, '62-04-18', 'r6r', 'หลอดไฟ', 'หลอดไฟ', 'หลอดไฟ', '66r6r', 'อาคารเรียนรวม 2', '1', 0, '', '', ''),
(174, '62-04-18', 'IT', 'เก้าอี้', 'เก้าอี้', 'เก้าอี้', 'uuuu', 'อาคารเรียนรวม 3', '3', 0, '', '', ''),
(175, '62-04-18', 'IT', 'เก้าอี้', 'เก้าอี้', 'เก้าอี้', 'uuuu', 'อาคารเรียนรวม 3', '3', 0, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `placename` varchar(30) NOT NULL,
  `place` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`placename`, `place`) VALUES
('ตึกกิจกรรมนักศึกษา', 1),
('ตึกอธิการบดี', 2),
('ศูนย์กีฬา', 3),
('หอพักนักศึกษา', 4),
('หอพักบุคลากร', 5),
('อาคารเรียนรวม 1', 6),
('อาคารเรียนรวม 2', 8),
('อาคารเรียนรวม 3', 9),
('โรงอาหาร', 10);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(2) NOT NULL,
  `name` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'ไฟฟ้า'),
(2, 'ตัวอาคาร'),
(3, 'ครุภัณฑ์');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `floor`
--
ALTER TABLE `floor`
  ADD PRIMARY KEY (`rep_floor`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `floor`
--
ALTER TABLE `floor`
  MODIFY `rep_floor` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=176;
--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
