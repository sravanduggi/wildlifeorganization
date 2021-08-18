-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2020 at 01:05 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wildlife_organisation`
--

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `department_id` int(3) NOT NULL,
  `department_name` varchar(32) NOT NULL,
  `HOD_id` int(5) NOT NULL,
  `No_of_employees` int(6) NOT NULL,
  `funding` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`department_id`, `department_name`, `HOD_id`, `No_of_employees`, `funding`) VALUES
(101, 'Administration', 10345, 15, 150000),
(102, 'Finance', 10346, 10, 150000),
(103, 'Tourism', 10347, 10, 150000),
(104, 'Research', 10348, 10, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_id` int(5) NOT NULL,
  `Employee_name` varchar(32) NOT NULL,
  `Salary` int(6) NOT NULL,
  `department_id` int(3) NOT NULL,
  `Phone_no` varchar(10) NOT NULL,
  `password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_id`, `Employee_name`, `Salary`, `department_id`, `Phone_no`, `password`) VALUES
(10345, 'Raja Sekhar', 70000, 101, '7660900762', 'raja'),
(10346, 'Krishna Chaitanya', 70000, 102, '8765432109', 'Krishna'),
(10347, 'Siva Pranav', 70000, 103, '7654321098', 'Siva'),
(10348, 'Teja Chowdary', 70000, 104, '6543210987', 'Teja'),
(20345, 'Kiran Chakravarty', 50000, 101, '9848355665', 'kiran'),
(20346, 'Sai Rakshith', 50000, 102, '9876054321', 'Sai'),
(20347, 'Sai Harshith', 50000, 103, '9876543210', 'Sai'),
(20348, 'Lokesh', 50000, 104, '1234567890', 'Lokesh');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `hotspot_id` int(3) NOT NULL,
  `expenditure` int(7) NOT NULL,
  `income` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`hotspot_id`, `expenditure`, `income`) VALUES
(200, 100000, 150000),
(201, 100000, 150000),
(202, 100000, 150000),
(203, 100000, 150000);

-- --------------------------------------------------------

--
-- Table structure for table `hotspot`
--

CREATE TABLE `hotspot` (
  `hotspot_id` int(3) NOT NULL,
  `hotspot_name` varchar(32) NOT NULL,
  `Chairman` int(5) NOT NULL,
  `HQ_name` varchar(32) NOT NULL,
  `funding` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hotspot`
--

INSERT INTO `hotspot` (`hotspot_id`, `hotspot_name`, `Chairman`, `HQ_name`, `funding`) VALUES
(200, 'The himalayas', 10345, 'Shimla', 150000),
(201, 'Indo Burma Region', 10346, 'Kolkata', 150000),
(202, 'The Western Ghats', 10347, 'Mumbai', 150000),
(203, 'Sundalands', 10348, 'Sumatra', 150000);

-- --------------------------------------------------------

--
-- Table structure for table `leave_request`
--

CREATE TABLE `leave_request` (
  `leave_id` int(7) NOT NULL,
  `employee_id` int(5) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `place` varchar(32) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leave_request`
--

INSERT INTO `leave_request` (`leave_id`, `employee_id`, `from_date`, `to_date`, `place`, `status`) VALUES
(1, 20345, '2020-05-31', '2020-06-12', 'gwefwef', 1),
(2, 20345, '2020-07-31', '2020-05-06', 'ygscausgdcj', -1),
(3, 20345, '2020-06-04', '2020-08-07', 'jgecX', 1),
(4, 20345, '2020-06-04', '2020-08-09', 'dharmavaram', -1),
(5, 20345, '2020-05-31', '2020-09-09', 'xyz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `project_id` int(4) NOT NULL,
  `project_name` varchar(32) NOT NULL,
  `project_manager` int(5) NOT NULL,
  `funds` int(7) NOT NULL,
  `due_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`project_id`, `project_name`, `project_manager`, `funds`, `due_date`) VALUES
(2009, 'Save Asian Lions', 20346, 50000, '2021-04-06'),
(2012, 'Save Rhino', 10346, 20000, '2020-05-28'),
(2020, 'Save Tiger', 10345, 200000, '2020-06-24');

-- --------------------------------------------------------

--
-- Table structure for table `tourism`
--

CREATE TABLE `tourism` (
  `hotspot_id` int(3) NOT NULL,
  `No_of_tourists` int(7) NOT NULL,
  `income` int(7) NOT NULL,
  `expenditure` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tourism`
--

INSERT INTO `tourism` (`hotspot_id`, `No_of_tourists`, `income`, `expenditure`) VALUES
(200, 1500, 400000, 200000),
(201, 1500, 400000, 200000),
(202, 1500, 400000, 200000),
(203, 1500, 400000, 200000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD UNIQUE KEY `d` (`department_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `e` (`Employee_id`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD UNIQUE KEY `f` (`hotspot_id`);

--
-- Indexes for table `hotspot`
--
ALTER TABLE `hotspot`
  ADD UNIQUE KEY `h` (`hotspot_id`);

--
-- Indexes for table `leave_request`
--
ALTER TABLE `leave_request`
  ADD UNIQUE KEY `lr` (`leave_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD UNIQUE KEY `p` (`project_id`);

--
-- Indexes for table `tourism`
--
ALTER TABLE `tourism`
  ADD UNIQUE KEY `t` (`hotspot_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
