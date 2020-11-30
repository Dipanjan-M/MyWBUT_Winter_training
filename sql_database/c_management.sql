-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 05:48 PM
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
-- Database: `c_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(4) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `cat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `bname`, `cat`) VALUES
(1, 'Data Structure And Algorithm', 'CS-302'),
(2, 'Physics-II', 'ph-301'),
(3, 'Mathematics-III', 'M-401'),
(4, 'Values and Business And Profes', 'HU-301');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(3) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `cname`) VALUES
(1, 'B.Tech in Computer science and engineering'),
(2, 'B.Tech in Information Technology'),
(3, 'B.Tech in Electronics and Telecommunication Engine'),
(4, 'B.Tech in Electrical Engineering'),
(5, 'B.Tech in Civil Engineering'),
(6, 'B.Tech in Mechanical Engineering'),
(7, 'B.Tech in Electrical & Electronics Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `id` int(2) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `doj` date NOT NULL,
  `post` varchar(20) NOT NULL,
  `salary` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`id`, `name`, `email`, `phone`, `doj`, `post`, `salary`) VALUES
(1, 'Arun Sarkar', 'asarkar_005@gmail.com', '8451383513', '2009-02-12', 'Admin', 60000),
(2, 'Sourav Das', 'sdas@gmail.com', '8564789632', '2012-11-15', 'Non-Admin', 30000),
(3, 'Abhirup Jana', 'ajana@gmail.com', '7849553135', '2015-06-17', 'Non-Admin', 25000),
(4, 'Bibek Gupta', 'bgupta@gmail.com', '7489562846', '2016-09-21', 'Admin', 40000);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `c_id` int(2) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `doa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `c_id`, `email`, `phone`, `doa`) VALUES
(1, 'Dipanjan Maity', 1, 'dipanjanmaity08@gmail.com', '9836512547', '2017-03-16'),
(2, 'Hiron Saha', 1, 'hiron@gmail.com', '6240859645', '2017-03-16'),
(3, 'Rahul Shinha', 3, 'rahul@gmail.com', '8945863215', '2018-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `tutors`
--

CREATE TABLE `tutors` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `doj` date NOT NULL,
  `trend` varchar(15) NOT NULL,
  `cat` varchar(10) NOT NULL,
  `sal` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutors`
--

INSERT INTO `tutors` (`id`, `name`, `email`, `phone`, `doj`, `trend`, `cat`, `sal`) VALUES
(1, 'Esha Bose', 'ebose@gmail.com', '9863154785', '2018-01-01', 'Basic Science', 'Full_time', 50000),
(2, 'Priyanka Goshwami', 'pg01@gmail.com', '8465487465', '2018-03-02', 'CSE', 'Full_time', 50000),
(3, 'Janhabi Dutta', 'jdutta@gmail.com', '9846513845', '2017-05-04', 'CSE', 'Full_time', 50000),
(4, 'Suprabhat Maity', 'smaity@gmail.com', '8945863215', '2016-08-02', 'CSE', 'Full_time', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(3) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'abc', 'abc@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'Admin MIT', 'admin@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`,`cname`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tutors`
--
ALTER TABLE `tutors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `others`
--
ALTER TABLE `others`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tutors`
--
ALTER TABLE `tutors`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
