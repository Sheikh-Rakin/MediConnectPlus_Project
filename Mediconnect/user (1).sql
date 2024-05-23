-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2023 at 08:25 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medi`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `nid` bigint(20) NOT NULL,
  `surnname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood` varchar(5) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fullname`, `email`, `phone`, `dob`, `gender`, `nid`, `surnname`, `address`, `blood`, `photo`, `password`) VALUES
(9, 'abcd', 'tushartanzim1999@gmail.com', 1738751032, '2023-08-04', 'm', 98765543, '', '', '', 'defaultprofilepic.png', '2qfwefegerger'),
(11, 'abcd', 'tushartanzimz1999@gmail.com', 1738751032, '2023-08-04', 'm', 98765543, '', '', '', '', 'sfw'),
(12, 'sojib', 'sojib@gmail.com', 123, '2011-01-01', 'Female', 12345, '', '', '', '', '12345'),
(13, 'John Doe', 'johndoe@example.com', 1, '2023-08-05', 'Male', 123456789, '', '', '', '', '1234'),
(14, 'kader', 'kader@gmail.com', 1234, '2023-08-18', 'Male', 123456, '', '', '', '', '123'),
(15, 'rakin', 'rakin@mail.com', 123456, '2023-08-23', 'Male', 98765543, '', '', '', '', '12345'),
(16, 'rakin', 'rakin1@mail.com', 123456, '2023-08-23', 'Male', 98765543, '', '', '', '', '12345'),
(17, 'rakin', 'rakin12@mail.com', 123456, '2023-08-23', 'Female', 1734567, 'shekh', 'badda,dhaka,bangladesh', 'AB+', 'defaultprofilepic.png', '12345'),
(18, 'rakin', 'rakin132@mail.com', 123456, '2023-08-23', 'Male', 98765543, '', '', '', '', '12345'),
(19, 'rakin', 'rakin1632@mail.com', 123456, '2023-08-23', 'Male', 98765543, '', '', '', '', '12345'),
(20, 'kader', 'kadersekh@mail.com', 1768656421, '2023-08-31', 'Female', 10908907, 'chele', 'kazipara,', 'D+', 'defaultprofilepic.png', '123');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
