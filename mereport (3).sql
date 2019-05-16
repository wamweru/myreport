-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 08:59 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mereport`
--

-- --------------------------------------------------------

--
-- Table structure for table `1north`
--

CREATE TABLE `1north` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1north`
--

INSERT INTO `1north` (`id`, `name`, `nemis`) VALUES
(1, 'Joy Wangu', 'NMU789'),
(2, 'Faith Mwambunu', 'NM90OI'),
(3, 'Joel Wanyama', 'N90IOM'),
(5, 'Faith Mwambunu', 'NM90OI'),
(6, 'Joel Wanyama', 'N90IOM'),
(7, 'Peninah', '4south'),
(8, 'Fridah Nyakoe', 'MDK89I'),
(9, 'Saumu Alif', 'Z26W8D');

-- --------------------------------------------------------

--
-- Table structure for table `1northcat1`
--

CREATE TABLE `1northcat1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL,
  `mathematics` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `kiswahili` int(3) NOT NULL,
  `genscience` int(3) NOT NULL,
  `sst` int(3) NOT NULL,
  `mean` int(4) NOT NULL,
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1northcat1`
--

INSERT INTO `1northcat1` (`id`, `name`, `nemis`, `mathematics`, `english`, `kiswahili`, `genscience`, `sst`, `mean`, `position`) VALUES
(1, 'Joy Wangu', 'NMU789', 78, 89, 50, 56, 90, 73, 8),
(2, 'Joel Wanyama', 'N901OM', 89, 67, 34, 90, 67, 68, 30);

-- --------------------------------------------------------

--
-- Table structure for table `1south`
--

CREATE TABLE `1south` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `1south`
--

INSERT INTO `1south` (`id`, `name`, `class`, `nemis`) VALUES
(1, 'Peninah', '', '4south'),
(2, 'Fridah Nyakoe', '', 'MDK89I'),
(3, 'Saumu Alif', '', 'Z26W8D');

-- --------------------------------------------------------

--
-- Table structure for table `1southcat1`
--

CREATE TABLE `1southcat1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL,
  `mathematics` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `kiswahili` int(3) NOT NULL,
  `genscience` int(3) NOT NULL,
  `sst` int(3) NOT NULL,
  `mean` int(4) NOT NULL,
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2north`
--

CREATE TABLE `2north` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `2north`
--

INSERT INTO `2north` (`id`, `name`, `nemis`) VALUES
(1, 'Mary Njeri', 'QWE123');

-- --------------------------------------------------------

--
-- Table structure for table `2northcat1`
--

CREATE TABLE `2northcat1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL,
  `mathematics` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `kiswahili` int(3) NOT NULL,
  `genscience` int(3) NOT NULL,
  `sst` int(3) NOT NULL,
  `mean` int(4) NOT NULL,
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2south`
--

CREATE TABLE `2south` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `2southcat1`
--

CREATE TABLE `2southcat1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL,
  `mathematics` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `kiswahili` int(3) NOT NULL,
  `genscience` int(3) NOT NULL,
  `sst` int(3) NOT NULL,
  `mean` int(4) NOT NULL,
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `3north`
--

CREATE TABLE `3north` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `3northcat1`
--

CREATE TABLE `3northcat1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL,
  `mathematics` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `kiswahili` int(3) NOT NULL,
  `genscience` int(3) NOT NULL,
  `sst` int(3) NOT NULL,
  `mean` int(4) NOT NULL,
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `3south`
--

CREATE TABLE `3south` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `3southcat1`
--

CREATE TABLE `3southcat1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL,
  `mathematics` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `kiswahili` int(3) NOT NULL,
  `genscience` int(3) NOT NULL,
  `sst` int(3) NOT NULL,
  `mean` int(4) NOT NULL,
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `4north`
--

CREATE TABLE `4north` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `4northcat1`
--

CREATE TABLE `4northcat1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL,
  `mathematics` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `kiswahili` int(3) NOT NULL,
  `genscience` int(3) NOT NULL,
  `sst` int(3) NOT NULL,
  `mean` int(4) NOT NULL,
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `4south`
--

CREATE TABLE `4south` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `4southcat1`
--

CREATE TABLE `4southcat1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `nemis` varchar(6) NOT NULL,
  `mathematics` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `kiswahili` int(3) NOT NULL,
  `genscience` int(3) NOT NULL,
  `sst` int(3) NOT NULL,
  `mean` int(4) NOT NULL,
  `position` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `form1`
--

CREATE TABLE `form1` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `admno` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `mathematics` int(3) NOT NULL,
  `english` int(3) NOT NULL,
  `kiswahili` int(3) NOT NULL,
  `science` int(3) NOT NULL,
  `socialstudies` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `form1`
--

INSERT INTO `form1` (`id`, `name`, `admno`, `class`, `mathematics`, `english`, `kiswahili`, `science`, `socialstudies`) VALUES
(1, 'James Kamau Maina', '0001', 'Form 1   ', 90, 70, 50, 90, 76);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `yearofadm` int(100) NOT NULL,
  `admno` varchar(100) NOT NULL,
  `nemis` varchar(8) DEFAULT NULL,
  `class` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `yearofadm`, `admno`, `nemis`, `class`) VALUES
(1, 'James Kamau Maina', 2019, '0001', 'NM567YI', '1North'),
(2, 'Theresa Akoth Otieno', 2019, '0002', 'NYTE908I', '3North'),
(3, 'Samwel Njuguna', 2017, '126', 'NB56JDID', '4North'),
(6, 'Joshua Kahaki', 2017, '124', NULL, '4South'),
(7, 'Jeremiah Evanson', 2017, '125', NULL, '3South'),
(8, 'Ephraim Juma', 2017, '127', 'N5U8III9', '1South'),
(9, 'Faith Muroki', 2017, '128', 'NUT67UKK', '4South'),
(10, 'Partrick Kiama', 2019, '129', 'NRP7899S', '2North'),
(11, 'Ali Juma', 2018, '130', 'NJO86959', '2South');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `tscno` varchar(100) NOT NULL,
  `department` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `name`, `tscno`, `department`) VALUES
(1, 'Joe Maina', 'tsc12345', 'Mathematics'),
(3, 'Jane Wangu', 'tsc23456', 'Deputy Principal'),
(4, 'Peninah', 'tsc1234', 'Deans'),
(5, 'Mercy Kahaki', 'tsc123456', 'Principal');

-- --------------------------------------------------------

--
-- Table structure for table `term1`
--

CREATE TABLE `term1` (
  `id` int(11) NOT NULL,
  `event` varchar(100) NOT NULL,
  `date` varchar(15) NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term1`
--

INSERT INTO `term1` (`id`, `event`, `date`, `time`) VALUES
(3, 'Opening Day', '2019-01-08', '11:00Am'),
(5, 'Closing', '2019-04-05', '08:00');

-- --------------------------------------------------------

--
-- Table structure for table `term2`
--

CREATE TABLE `term2` (
  `id` int(11) NOT NULL,
  `event` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `term2`
--

INSERT INTO `term2` (`id`, `event`, `date`, `time`) VALUES
(1, 'Opening Day', '2019-04-29', '11:00'),
(2, 'Mid term', '2019-06-14', '07:00');

-- --------------------------------------------------------

--
-- Table structure for table `term3`
--

CREATE TABLE `term3` (
  `id` int(11) NOT NULL,
  `event` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_excel`
--

CREATE TABLE `test_excel` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test_excel`
--

INSERT INTO `test_excel` (`id`, `name`, `class`) VALUES
(10, 'Joy', '1 y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `1north`
--
ALTER TABLE `1north`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1northcat1`
--
ALTER TABLE `1northcat1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1south`
--
ALTER TABLE `1south`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `1southcat1`
--
ALTER TABLE `1southcat1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2north`
--
ALTER TABLE `2north`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2northcat1`
--
ALTER TABLE `2northcat1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2south`
--
ALTER TABLE `2south`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `2southcat1`
--
ALTER TABLE `2southcat1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3north`
--
ALTER TABLE `3north`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3northcat1`
--
ALTER TABLE `3northcat1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3south`
--
ALTER TABLE `3south`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `3southcat1`
--
ALTER TABLE `3southcat1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `4north`
--
ALTER TABLE `4north`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `4northcat1`
--
ALTER TABLE `4northcat1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `4south`
--
ALTER TABLE `4south`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `4southcat1`
--
ALTER TABLE `4southcat1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form1`
--
ALTER TABLE `form1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admno` (`admno`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term1`
--
ALTER TABLE `term1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term2`
--
ALTER TABLE `term2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `term3`
--
ALTER TABLE `term3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_excel`
--
ALTER TABLE `test_excel`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `1north`
--
ALTER TABLE `1north`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `1northcat1`
--
ALTER TABLE `1northcat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `1south`
--
ALTER TABLE `1south`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `1southcat1`
--
ALTER TABLE `1southcat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2north`
--
ALTER TABLE `2north`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `2northcat1`
--
ALTER TABLE `2northcat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2south`
--
ALTER TABLE `2south`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `2southcat1`
--
ALTER TABLE `2southcat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `3north`
--
ALTER TABLE `3north`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `3northcat1`
--
ALTER TABLE `3northcat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `3south`
--
ALTER TABLE `3south`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `3southcat1`
--
ALTER TABLE `3southcat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `4north`
--
ALTER TABLE `4north`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `4northcat1`
--
ALTER TABLE `4northcat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `4south`
--
ALTER TABLE `4south`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `4southcat1`
--
ALTER TABLE `4southcat1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form1`
--
ALTER TABLE `form1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `term1`
--
ALTER TABLE `term1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `term2`
--
ALTER TABLE `term2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `term3`
--
ALTER TABLE `term3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `test_excel`
--
ALTER TABLE `test_excel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
