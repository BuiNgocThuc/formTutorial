-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2023 at 08:58 AM
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
-- Database: `formtutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `ID` int(11) NOT NULL,
  `USERNAME` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  `PHONE` int(11) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`ID`, `USERNAME`, `PASSWORD`, `PHONE`, `ADDRESS`, `EMAIL`, `STATUS`) VALUES
(3, 'admin', '123', 987654321, '11/22/33', 'abc@gmail.com', 1),
(4, 'customer', '12345', 978654321, '11/77/88', 'cus@yahoo.vn', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `USER_ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL,
  `AGE` int(11) NOT NULL,
  `PHONE` varchar(12) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `EMAIL` varchar(100) NOT NULL,
  `DOB` date NOT NULL,
  `GENDER` varchar(5) NOT NULL,
  `DEGREE` varchar(20) NOT NULL,
  `HOBBIES` varchar(50) NOT NULL,
  `NOTE` varchar(255) DEFAULT NULL,
  `STATUS` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`USER_ID`, `NAME`, `AGE`, `PHONE`, `ADDRESS`, `EMAIL`, `DOB`, `GENDER`, `DEGREE`, `HOBBIES`, `NOTE`, `STATUS`) VALUES
(4, 'Nguyễn Văn A', 20, '0987654312', '11/22/33', 'A@gmail.com', '2023-05-11', 'NAM', 'Bachelor', 'Gym, Book, Game', 'NULL', 1),
(5, 'Bùi Thị B', 20, '0897564231', '1/2/3', 'B@gmail.com', '2023-05-05', 'NỮ', 'Bachelor', 'Other', 'NULL', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`USER_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `USER_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
