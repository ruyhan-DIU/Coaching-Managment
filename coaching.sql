-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2019 at 08:19 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coaching`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `email`, `password`) VALUES
(1, 'raihan@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `admission`
--

CREATE TABLE `admission` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `studentname` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `birth` date NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` int(100) DEFAULT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `sclass` int(50) NOT NULL,
  `subjects` varchar(100) NOT NULL,
  `student_id` int(100) NOT NULL,
  `payable` int(100) NOT NULL,
  `paid` int(100) NOT NULL,
  `due` int(100) NOT NULL,
  `totalpaid` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admission`
--

INSERT INTO `admission` (`id`, `date`, `studentname`, `fathername`, `mothername`, `birth`, `email`, `phone`, `gender`, `address`, `sclass`, `subjects`, `student_id`, `payable`, `paid`, `due`, `totalpaid`) VALUES
(33, '2019-08-05', 'Ruyhanur Rahaman', 'Mizanur Rahaman', 'Nurun Nahar Begum', '1996-03-27', 'raihan1234sbs@gmail.com', 1851932715, 'Male', 'Mohammadpur Nobodoy', 10, 'Physics,Chemistry,Biology', 101, 0, 0, 0, 0),
(34, '2019-08-05', 'Moniur Rahman', 'Dadu rahman', 'dadi rahman', '1993-01-12', 'moniur@gmail.com', 1687564734, 'Male', 'Mirpur 1 number', 7, 'Physics,Chemistry', 102, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` int(15) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(500) NOT NULL,
  `address` varchar(400) NOT NULL,
  `fatherName` varchar(250) NOT NULL,
  `image` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `phone`, `email`, `password`, `address`, `fatherName`, `image`) VALUES
(23, 'Ruyhanur Rahaman', 1851932715, 'raihan1234sbs@gmail.com', '1234', 'mohammadpur', 'mizan', ''),
(24, 'rudaahshua', 1851932715, 'ruyhanur35-2079@diu.edu.bd', '1234', 'mohammadpurcd', 'mizandada', ''),
(27, 'Pranto', 1850628259, 'pranto@gmail.com', '1234', 'mirpur', 'fakrul alam', 'IMG_20190323_005415.jpg'),
(28, 'qwe', 222, 'ruyhanur35-2079@diu.edu.bd', '1234', 'Mohammadpur Nobodoy', 'mizan', 'IMG_20190323_005415.jpg'),
(29, 'ruyhan', 1851932715, 'jitu@gmail.com', '1234', 'mohammadpur', 'mizan', 'IMG_20190323_005415.jpg'),
(30, 'dhd', 12345, 'nil@gazi.com', '123456', 'ffyjyj', 'ugaeukhfnilogyaudg', 'IMG_20190323_005415.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `id` int(100) NOT NULL,
  `subject1` varchar(100) NOT NULL,
  `mark1` varchar(100) NOT NULL,
  `subject2` varchar(100) NOT NULL,
  `mark2` varchar(100) NOT NULL,
  `subject3` varchar(100) NOT NULL,
  `mark3` varchar(100) NOT NULL,
  `subject4` varchar(100) NOT NULL,
  `mark4` varchar(100) NOT NULL,
  `subject5` varchar(100) NOT NULL,
  `mark5` varchar(100) NOT NULL,
  `student_id1` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `result`
--

INSERT INTO `result` (`id`, `subject1`, `mark1`, `subject2`, `mark2`, `subject3`, `mark3`, `subject4`, `mark4`, `subject5`, `mark5`, `student_id1`) VALUES
(20, 'physics', '41', 'chemistry', '99', 'math', '66', '', '', '', '', 101);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission`
--
ALTER TABLE `admission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission`
--
ALTER TABLE `admission`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
