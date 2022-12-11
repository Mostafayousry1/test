-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 01:34 AM
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
-- Database: `faculity`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `code` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `discpretion` varchar(100) NOT NULL,
  `level` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`code`, `name`, `discpretion`, `level`) VALUES
(1, 'math', 'MATHEMATICS 1', 3),
(2, 'electronics', 'ELECTRONICS', 3),
(3, 'logic', 'LOGIC DESIGN', 4),
(4, 'discrete', 'DISCRITE MATHEMATICS', 4),
(5, 'software', 'Software Engineering1', 4),
(6, 'database', 'Data Base 1', 4),
(7, 'Simulation', 'simulaton', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `age` int(11) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `type`, `username`, `password`, `email`, `fname`, `lname`, `age`, `phone`, `address`, `photo`) VALUES
(1, 'admin', 'admin1', '123', 'tefakong33@gmail.com', 'Mostafa', 'Yousry', 20, '01274242726', '3 fatma roshdy', ''),
(25, 'student', 'student2', '123', 'hossameldienmostafa994@gmail.com', 'Youssef', 'Aymen', 19, '01222932400', '3 Fatma Roshdy', '../uploads/stdimg/download.png'),
(30, 'professor', 'professor1', '123', 'MishelSamir@gmail.com', 'Mishel', 'Samir', 26, '01222932400', '3 Fatma Roshdy', '../uploads/stdimg/download.png'),
(31, 'student', 'student1', '123', 'Mahmoudmedhat@gmail.com', 'Mahmoud ', 'medhat', 20, '0121654651', 'Haram', '../uploads/stdimg/download.png'),
(32, 'student', 'student3', '123', 'SalmaAshraf@gmail.com', 'Salma ', 'Ashraf', 20, '01220321651', 'Helwan', '../uploads/stdimg/download.png'),
(33, 'student', 'student4', '123', 'NancyAdel@gmail.com', 'Nancy', 'Adel', 20, '01245165412', 'Helwan', '../uploads/stdimg/download.png'),
(34, 'student', 'student5', '123', 'YoussefAhmed@gmail.com', 'Youssef', 'Ahmed', 20, '01248941562', 'Helwan', '../uploads/stdimg/download.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
