-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2020 at 05:20 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(99) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `idnum` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fname`, `lname`, `idnum`, `email`, `password`) VALUES
(21, 'Aakash', 'Singh', 5566, 'aakashsingh@gmail.com', 'aakash5566'),
(22, 'Nitin', 'Tyagi', 10031, 'nitintyagi@gmail.com', 'nitin10031'),
(23, 'Ayush', 'Garg', 10019, 'ayushgarg@gmail.com', 'ayush10019'),
(24, 'Chakshu', 'Tyagi', 10901, 'Chakshu@gmail.com', 'chakshu10901'),
(25, 'Olatayo', 'John', 10049, 'olatayojohn@gmail.com', 'olatayo10049');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(99) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `postal_code` int(10) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `addhar` bigint(15) NOT NULL,
  `gender` bit(1) NOT NULL,
  `marital_status` bit(1) DEFAULT NULL,
  `blood_type` varchar(5) NOT NULL,
  `current_problem` mediumtext NOT NULL,
  `medical_conditions` mediumtext NOT NULL,
  `emergency_name` tinytext NOT NULL,
  `emergency_relationship` tinytext NOT NULL,
  `emergency_mobile` varchar(15) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `rpwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `fname`, `mname`, `lname`, `address`, `city`, `state`, `postal_code`, `mobile`, `email`, `addhar`, `gender`, `marital_status`, `blood_type`, `current_problem`, `medical_conditions`, `emergency_name`, `emergency_relationship`, `emergency_mobile`, `pwd`, `rpwd`) VALUES
(3, 'Aakash', NULL, 'Singh', '', 'Ghaziabad', 'U.P', 200218, '6554389091', 'aakashsingh@gmail.com', 678654327897654, b'0', b'0', 'AB+', 'Broken ribs\r\nDislocated shoulder', 'null', 'Ankit', 'Brother', '8997543270', 'aakash5566', 'aakash5566'),
(4, 'Priyansh', NULL, 'Tyagi', '', 'Delhi', 'NULL', 255218, '6554389091', 'priyansh@gmail.com', 678654327897654, b'0', b'0', 'A+', 'Swollen eye', 'null', 'Ajay', 'Uncle', '6967546670', 'priyansh6', 'priyansh6');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
