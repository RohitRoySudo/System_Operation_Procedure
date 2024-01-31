-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2023 at 07:15 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rohit`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `emp_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `start_date` varchar(55) NOT NULL,
  `department` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `manager` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mon_num` varchar(55) NOT NULL,
  `orientation` varchar(255) NOT NULL,
  `dates` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `emp_id`, `name`, `start_date`, `department`, `job_title`, `manager`, `email`, `mon_num`, `orientation`, `dates`) VALUES
(6, '234234234', 'Raj tech', '2023-07-22', 'Web Developer', 'Senior Web Developer', 'Kajal Singh', 'mastertechitcompany@gmail.com', '878888878', '2023-07-23', '23-07-2023'),
(7, '234234234', 'Kiram tech', '2023-07-23', 'Web Developer', 'Senior Web Developer', 'Kajal Singh', 'mastertechitcompany@gmail.com', '878888878', '2023-07-23', '22-07-2023'),
(8, '234234234', 'Radhab', '2023-07-23', 'Web Developer', 'Senior Web Developer', 'Kajal Singh', 'mastertechitcompany@gmail.com', '878888878', '2023-07-23', '23-07-2023'),
(10, '', '', '', '', '', '', '', '', '', '24-07-2023');

-- --------------------------------------------------------

--
-- Table structure for table `hiring`
--

CREATE TABLE `hiring` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `resume_nm` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `resume` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `id` int(11) NOT NULL,
  `policy_num` varchar(255) NOT NULL,
  `policy_nm` varchar(255) NOT NULL,
  `accept_policy` varchar(255) NOT NULL,
  `upload_policy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `policy`
--

INSERT INTO `policy` (`id`, `policy_num`, `policy_nm`, `accept_policy`, `upload_policy`) VALUES
(6, '1965', 'HRM', 'ACCEPT POLICY', '9712SOP Dashboard.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `vacancy`
--

CREATE TABLE `vacancy` (
  `id` int(55) NOT NULL,
  `position` varchar(255) NOT NULL,
  `availibility` varchar(55) NOT NULL,
  `vacancy_info` text NOT NULL,
  `dates` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vacancy`
--

INSERT INTO `vacancy` (`id`, `position`, `availibility`, `vacancy_info`, `dates`) VALUES
(17, 'Web Developer', '10', '<p>Required senior web developer , urgent with 5 years experience in PHP. contact fast . mail us at info@mastertechitsolutions.in</p>', '23-07-2023'),
(18, 'Software Engineer', '10', '<p>Required senior web developer , urgent with 5 years experience in PHP. contact fast . mail us at info@mastertechitsolutions.in</p>', '22-07-2023'),
(19, 'Web Developer', '10', '<p>Required senior web developer , urgent with 5 years experience in PHP. contact fast . mail us at info@mastertechitsolutions.in</p>', '23-07-2023'),
(20, 'Software Engineer', '10', '<p>Required senior web developer , urgent with 5 years experience in PHP. contact fast . mail us at info@mastertechitsolutions.in</p>', '21-07-2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hiring`
--
ALTER TABLE `hiring`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vacancy`
--
ALTER TABLE `vacancy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `hiring`
--
ALTER TABLE `hiring`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `policy`
--
ALTER TABLE `policy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `vacancy`
--
ALTER TABLE `vacancy`
  MODIFY `id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
