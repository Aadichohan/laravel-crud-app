-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2022 at 09:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `father_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `contact_no` varchar(13) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `father_name`, `email`, `contact_no`, `address`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Ahad', 'aaaa', 'abdulahad@ail.com', '12312312333', '60/4 Orangabad NZ', 'Karachi', '2022-12-06', '2022-12-06'),
(2, 'Abdul Ahad', 'aaaa', 'abdulahad@g.com', '12312312333', '60/4 Orangabad Nazimabad', 'Karachi', '2022-12-06', '2022-12-06'),
(3, 'Abdul Ahad', 'aaaa', 'abdulahad@ail.com', '12312312333', '60/4 Orangabad Nz', 'Karachi', '2022-12-06', '2022-12-06'),
(4, 'Abdul Ahad', 'aaaa', 'abdulahad@ail.com', '12312312333', '60/4 Orangabad Nz', 'Karachi', '2022-12-06', '2022-12-06'),
(5, 'Abdul Ahad Shahid', 'Shahid', 'iam@aadi.chohan', '03161592086', '60/4 Orangabad  Karachi', 'Karachi', '2022-12-06', '2022-12-06');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `password` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `company` varchar(20) NOT NULL,
  `mobile` varchar(13) NOT NULL,
  `city` varchar(20) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `username`, `email`, `password`, `address`, `company`, `mobile`, `city`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Ahad', 'abdulahaad1409a', 'abdulahad@gmail.com', '12345678', '60/4 Orangabad  Nz', 'ABCD', '+923162592086', 'Karachi', '2022-12-05', '2022-12-06'),
(2, 'Abdul Ahad', 'AbdulAhad', 'abdulahaad1409a@gmail.com', '123456', '60/4 Orangabad Nazimabad Block 3', 'ABC', '+923162592086', 'Karachi', '2022-12-05', '2022-12-05'),
(3, 'Abdul Ahad', 'AbdulAhad', 'abdulahaad1409a@gmail.com', '123456', '60/4 Orangabad Nazimabad Block 3', 'ABC', '+923162592086', 'Karachi', '2022-12-05', '2022-12-05'),
(4, 'Abdul Ahad', 'AbdulAhad', 'abdulahaad1409a@gmail.com', '123456', '60/4 Orangabad Nazimabad Block 3', 'ABC', '+923162592086', 'Karachi', '2022-12-05', '2022-12-05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
