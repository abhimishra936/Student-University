-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 03, 2019 at 10:03 PM
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
-- Database: `student_university`
--
CREATE DATABASE IF NOT EXISTS `student_university` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `student_university`;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `enroll` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `fathername` varchar(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `batch` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`enroll`, `name`, `fathername`, `program`, `batch`, `dob`, `email`, `mobile`) VALUES
('A91404817008', 'Priyadarshi Guha', 'Deb Kumar Guha', 'BCA', '2017-20', '2000-02-28', 'priyadarshiguha@gmail.com', '8777832853'),
('A91404817028', 'Abhishek Mishra', 'Mishra', 'BCA', '2017-20', '1999-08-28', 'abhishekmishra@gmail.com', '1234567890'),
('A91404817042', 'Diamond Pal', 'Pal', 'BCA', '2017-20', '1999-03-18', 'diamondpal@gmail.com', '1234567890'),
('A91404817046', 'Souvik Nandi', 'Nandi', 'BCA', '2017-20', '2019-09-04', 'souviknandi@gmail.com', '1234567890');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `username`, `password`, `email`) VALUES
('Priyadarshi', 'priyadarshiguha', '$2y$10$NZXdoEmcLM38I35NUXvVtOQl98aRVnvTJ0diIfypaQyWp7DUrAKQm', 'priyadarshiguha@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`enroll`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
