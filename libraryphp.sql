-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2020 at 06:56 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `libraryphp`
--

-- --------------------------------------------------------

--
-- Table structure for table `addbook`
--

CREATE TABLE `addbook` (
  `b_id` int(20) NOT NULL,
  `b_name` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `category` varchar(50) NOT NULL,
  `book_type` varchar(50) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addbook`
--

INSERT INTO `addbook` (`b_id`, `b_name`, `date`, `category`, `book_type`, `publisher`, `price`) VALUES
(1, 'Bangla 101', '2020-01-24', 'History', 'Read Only', 'jonota', '250'),
(2, 'English', '2020-03-09', 'Language', 'Borrow', 'jonota', '150'),
(3, 'Math', '2020-03-04', 'Technology', 'Borrow', 'anupom', '500');

-- --------------------------------------------------------

--
-- Table structure for table `addmember`
--

CREATE TABLE `addmember` (
  `m_id` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `b_date` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `m_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addmember`
--

INSERT INTO `addmember` (`m_id`, `m_name`, `b_date`, `gender`, `address`, `email`, `contact`, `m_type`) VALUES
('1', 'shadhin', '2020-03-12', 'Male', '46/b/1', 'shadhinmonzur18@gmail.com', '01973829988', 'Student'),
('2', 'shojol', '2020-01-13', 'Male', '45/d/d', 'shajol@gmail.com', '01973829988', 'Other'),
('3', 'jebon', '2018-04-11', 'Male', 'd/b/3', 'jebon@gmail.com', '018282', 'Student');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `email`, `password`, `name`, `type`) VALUES
(3, 'sh@diu.edu.bd', '1234', 'shadhin', 'Admin'),
(4, 'shajol@diu.edu.bd', '12345', 'shajol', 'User'),
(5, 'arif@diu.edu', '123456', 'Arif', 'User'),
(6, 'jebon@edu.bd', '1234567', 'jebon', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `borrowID` int(50) NOT NULL,
  `m_id` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_address` varchar(50) NOT NULL,
  `m_contract` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `borrow_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`borrowID`, `m_id`, `m_name`, `m_address`, `m_contract`, `b_id`, `b_name`, `borrow_date`) VALUES
(6, '1', 'shadhin', '46/b/1', '01973829988', '3', 'Math', '2020-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `returnbook`
--

CREATE TABLE `returnbook` (
  `returnID` int(50) NOT NULL,
  `m_id` varchar(50) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `m_address` varchar(50) NOT NULL,
  `m_contract` varchar(50) NOT NULL,
  `b_id` varchar(50) NOT NULL,
  `b_name` varchar(50) NOT NULL,
  `return_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `returnbook`
--

INSERT INTO `returnbook` (`returnID`, `m_id`, `m_name`, `m_address`, `m_contract`, `b_id`, `b_name`, `return_date`) VALUES
(70, '1', 'shadhin', '46/b/1', '01973829988', '1', 'bangla 101', '0000-00-00'),
(72, '3', 'jebon', 'd/b/3', '018282', '1', 'bangla 101', '0000-00-00'),
(73, '2', 'shojol', '45/d/d', '01973829988', '3', 'English', '2020-03-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addbook`
--
ALTER TABLE `addbook`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `addmember`
--
ALTER TABLE `addmember`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`borrowID`);

--
-- Indexes for table `returnbook`
--
ALTER TABLE `returnbook`
  ADD PRIMARY KEY (`returnID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `borrowID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `returnbook`
--
ALTER TABLE `returnbook`
  MODIFY `returnID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
