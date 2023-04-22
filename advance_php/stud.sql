-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2023 at 05:06 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stud`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(3) NOT NULL,
  `contact_num` int(10) NOT NULL,
  `contact_msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_num`, `contact_msg`) VALUES
(1, 997994525, 'hi'),
(2, 78945612, 'mi'),
(3, 99856411, 'mikl'),
(4, 2147483647, 'awsome!!'),
(5, 982592632, 'hello'),
(6, 95641237, 'mnb'),
(7, 95641237, 'mnb'),
(8, 7412589, 'hkjk');

-- --------------------------------------------------------

--
-- Table structure for table `course_info`
--

CREATE TABLE `course_info` (
  `course_id` int(3) NOT NULL,
  `course_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_info`
--

INSERT INTO `course_info` (`course_id`, `course_name`) VALUES
(1, 'php'),
(2, 'laravel'),
(3, 'react'),
(4, 'js');

-- --------------------------------------------------------

--
-- Table structure for table `loginn_info`
--

CREATE TABLE `loginn_info` (
  `login_id` int(3) NOT NULL,
  `login_uname` varchar(500) NOT NULL,
  `login_pass` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loginn_info`
--

INSERT INTO `loginn_info` (`login_id`, `login_uname`, `login_pass`) VALUES
(1, 'admin', '456'),
(2, 'superadmin', 'mitz144');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `login_id` int(3) NOT NULL,
  `login_uname` varchar(500) NOT NULL,
  `login_pass` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stud_info`
--

CREATE TABLE `stud_info` (
  `stud_id` int(3) NOT NULL,
  `stud_name` varchar(50) NOT NULL,
  `stud_email` varchar(50) NOT NULL,
  `stud_num` int(10) NOT NULL,
  `stud_course` varchar(100) NOT NULL,
  `stud_img` varchar(100) NOT NULL,
  `stud_city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stud_info`
--

INSERT INTO `stud_info` (`stud_id`, `stud_name`, `stud_email`, `stud_num`, `stud_course`, `stud_img`, `stud_city`) VALUES
(1, 'mitzz', 'mitz144@gmail.com', 123456, 'Select your course', '', 'surat'),
(5, 'hiral', 'hiral123@gmail.com', 997994525, 'js', '', 'navsari'),
(28, 'kl', 'df2@gmail.com', 789466, 'laravel', 'photo_2022-04-13_21-51-31.jpg', 'portrait-attractive-shy-cheerful-girl-260nw-195436'),
(30, 'my', 'mithun@gmail.com', 78945612, 'js', 'WIN_20220127_03_13_41_Pro.jpg', 'dfdf'),
(31, 'pinal', 'pin@gmail.com', 456123, 'php', '08565b53b760e442503d8583a2551f94.jpg', 'surat'),
(32, 'hj', 'kl@gmail.com', 12345578, 'php', 'portrait-attractive-shy-cheerful-girl-260nw-1954360084.webp', 'surat2'),
(33, 'gomitz', 'go1@gmail.com', 124567, 'laravel', '607055d6-6ca3-4242-9f12-1d2e39cb2ef2.jpg', 'damann'),
(34, 'ji', 'ji@gmail.com', 456123, 'react', '5ade9517-8028-4b90-ac6c-88c9eba9b237.jpg', 'hj'),
(35, 'mk', 'jk@gmail.com', 45623, '', 'b2cee8fa-1f4b-4c1c-b883-f0eb875d4a9b.jpg', 'kl'),
(36, 'kl', 'kl@gmail.com', 4562, '', 'b2cee8fa-1f4b-4c1c-b883-f0eb875d4a9b.jpg', 'mk'),
(37, 'lopk', 'lo@gmail.com', 78945, 'php', '7c30efeb-0b74-42cb-8ee5-325e99b63bff.jpg', 'kl'),
(38, 'kl', 'kl@gmail.com', 789456, 'react', '8b865dc8-6605-4c01-8dda-e34393df65f0.jpg', 'jamngr');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `course_info`
--
ALTER TABLE `course_info`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `loginn_info`
--
ALTER TABLE `loginn_info`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `stud_info`
--
ALTER TABLE `stud_info`
  ADD PRIMARY KEY (`stud_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `course_info`
--
ALTER TABLE `course_info`
  MODIFY `course_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `loginn_info`
--
ALTER TABLE `loginn_info`
  MODIFY `login_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `login_id` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `stud_info`
--
ALTER TABLE `stud_info`
  MODIFY `stud_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
