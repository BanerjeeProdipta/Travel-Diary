-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2019 at 12:54 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(5) NOT NULL,
  `uname` varchar(20) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `url` varchar(10000) NOT NULL,
  `file` varchar(100) NOT NULL,
  `location` varchar(20) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `uname`, `Email`, `url`, `file`, `location`, `description`) VALUES
(62, 'PRODIPTA banerjee', 'pro@gmail.com', './Controller/uploads/download (1).jpg', 'download (1).jpg', 'Australia', 'hi'),
(63, 'saqif haque', 'saqif@gmail.com', './Controller/uploads/download (18).jpg', 'download (18).jpg', 'Australia', 'asdas'),
(65, 'saqif haque', 'saqif@gmail.com', './Controller/uploads/download (12).jpg', 'download (12).jpg', 'Nepal', 'nepelelee'),
(67, 'saqif haque', 'saqif@gmail.com', './Controller/uploads/download (13).jpg', 'download (13).jpg', 'Australia', '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Id` int(20) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `u_type` varchar(10) NOT NULL,
  `profilepic` varchar(1000) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Id`, `fname`, `lname`, `dob`, `gender`, `phone`, `email`, `pass`, `u_type`, `profilepic`, `Status`) VALUES
(1, 'Aseer', 'Hamim', '1997-03-18', 'male', '01845435118', 'asirhamim@yahoo.com', '202cb962ac59075b964b07152d234b70', 'user', '', 'banned'),
(4, 'Banerjee', 'Prodipta', '1995-09-17', 'femal', '01873980000', 'prodiptaj@ymail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'admin', './Controller/Profilepic/download (8).jpg', ''),
(34, 'saqif', 'haque', '2019-12-11', 'male', '01845435118', 'saq@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', '', 'banned'),
(35, 'saqif', 'haque', '2019-12-04', 'femal', '01845435112', 'saqif@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'user', './Controller/Profilepic/download (5).jpg', ''),
(36, 'Asir', 'Hameem', '2019-12-04', 'male', '01845435119', 'asirhameem@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', '', ''),
(37, 'PRODIPTA', 'banerjee', '2019-12-12', 'femal', '01716401014', 'pro@gmail.com', '250cf8b51c773f3f8dc8b4be867a9a02', 'user', './Controller/Profilepic/download (7).jpg', 'banned'),
(38, 'Hanky', 'Panky', '2019-12-12', 'male', '01845435111', 'hankypanky@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', '', ''),
(39, 'saqif', 'sad', '2019-12-04', 'male', '01845435117', 'saqif1@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', '', ''),
(41, 'prodipta', 'banerjee', '2019-12-12', 'female', '09736451345', 'prodipta@ymail.com', '202cb962ac59075b964b07152d234b70', 'user', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
