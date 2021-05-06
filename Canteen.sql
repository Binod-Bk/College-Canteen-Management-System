-- phpMyAdmin SQL Dump
-- version 5.0.4deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 06, 2021 at 05:08 PM
-- Server version: 10.5.9-MariaDB-1
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `canteen`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `foodItems`
--

CREATE TABLE `foodItems` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Price` int(11) DEFAULT NULL,
  `Quantity` varchar(50) NOT NULL,
  `Photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `foodItems`
--

INSERT INTO `foodItems` (`id`, `Name`, `Price`, `Quantity`, `Photo`) VALUES
(16, 'Momo', 60, 'per plate', 'i3.jpg'),
(17, 'Pani Puri', 30, 'per plate', 'i3.jpg'),
(18, 'chana', -25, 'per plate', 'zchana.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `student_name` varchar(50) DEFAULT NULL,
  `food_name` varchar(50) DEFAULT NULL,
  `semester` varchar(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `total_bill` int(11) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `date_ordered` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `student_name`, `food_name`, `semester`, `quantity`, `total_bill`, `sid`, `date_ordered`) VALUES
(3, 'sana', 'Momo', 'BBM 5th', 3, 240, 2, '2021-04-18'),
(4, 'sana', 'Momo', 'BBM 5th', 8, 480, 2, '2021-04-18'),
(5, 'sana', 'Pani Puri', 'BBM 5th', 8, 240, 2, '2021-04-18'),
(6, 'binod', 'Pani Puri', 'BCA 1st', 4, 120, 1, '2021-04-18'),
(7, 'ram', 'chana', 'BCA 3rd', 5, -125, 7, '2021-04-18');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Quantity` varchar(50) DEFAULT NULL,
  `Photo` varchar(50) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `Name`, `Price`, `Quantity`, `Photo`, `stock`) VALUES
(26, 'Momo', 60, 'per plate', 'i3.jpg', 100),
(27, 'Pani Puri', 30, 'per plate', 'i3.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Contact` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Semester` varchar(50) NOT NULL,
  `Question` varchar(50) NOT NULL,
  `Ans` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `Name`, `Contact`, `Email`, `Password`, `Semester`, `Question`, `Ans`) VALUES
(1, 'binod', '980804399', 'binod@gmail.com', '8520', 'BCA 1st', 'What is your Favourite Game??', 'basketball'),
(2, 'sana', '9841713421', 'sanaya@gmail.com', '2580', 'BBM 5th', 'What is your Nickname??', 'basketball'),
(3, 'binitadon', '9808044399', 'binita@gmail.com', '12345', 'BIM 6th', 'What is your Nickname??', 'binidon'),
(4, 'rita', '9841713421', 'rita@gmail.com', '12345', 'Bsc Csit 4th', 'What is your Nickname??', 'ritu'),
(5, 'bipin', '9841713421', 'binod', '12345', 'BCA 3rd', 'What is your Favourite Game??', 'tt'),
(6, 'tara', '9841713421', 'binod', '12345', 'Bsc Csit 1st', 'What is your Nickname??', 'tara'),
(7, 'ram', '9841713421', 'ram@gmail.com', '12345', 'BCA 3rd', 'What is your Favourite Game??', 'tt');

-- --------------------------------------------------------

--
-- Table structure for table `stuorder`
--

CREATE TABLE `stuorder` (
  `id` int(11) NOT NULL,
  `Oname` varchar(50) DEFAULT NULL,
  `Price` int(11) DEFAULT NULL,
  `Quantity` varchar(50) DEFAULT NULL,
  `studentOrder` int(11) DEFAULT NULL,
  `Photo` varchar(50) DEFAULT NULL,
  `sid` int(11) DEFAULT NULL,
  `total_bill` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stuorder`
--

INSERT INTO `stuorder` (`id`, `Oname`, `Price`, `Quantity`, `studentOrder`, `Photo`, `sid`, `total_bill`) VALUES
(30, 'Momo', 60, 'per plate', 5, 'i3.jpg', 7, 300),
(31, 'chana', -25, 'per plate', 1, 'zchana.jpg', 7, -25),
(32, 'Momo', 60, 'per plate', 1, 'i3.jpg', 7, 60),
(33, 'Momo', 60, 'per plate', 50000, 'i3.jpg', 1, 3000000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodItems`
--
ALTER TABLE `foodItems`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stuorder`
--
ALTER TABLE `stuorder`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sid` (`sid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `foodItems`
--
ALTER TABLE `foodItems`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `stuorder`
--
ALTER TABLE `stuorder`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stuorder`
--
ALTER TABLE `stuorder`
  ADD CONSTRAINT `stuorder_ibfk_1` FOREIGN KEY (`sid`) REFERENCES `students` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
