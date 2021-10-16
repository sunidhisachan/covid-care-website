-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 06:12 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_no` int(30) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `f_name`, `l_name`, `email`, `phone_no`, `message`) VALUES
(1, 'ABC', 'XYZ', 'abc@xyz.com', 874562310, 'Hii');

-- --------------------------------------------------------

--
-- Table structure for table `hospital_details`
--

CREATE TABLE `hospital_details` (
  `ID` int(20) NOT NULL,
  `h_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone_no` int(25) NOT NULL,
  `oxygen_beds` int(20) NOT NULL,
  `non_oxygen_beds` int(20) NOT NULL,
  `icu_w_vent` int(20) NOT NULL,
  `icu_wt_vent` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital_details`
--

INSERT INTO `hospital_details` (`ID`, `h_name`, `address`, `phone_no`, `oxygen_beds`, `non_oxygen_beds`, `icu_w_vent`, `icu_wt_vent`) VALUES
(1, 'Hospital 1', 'Pimpri', 1234512305, 10, 8, 10, 7),
(2, 'Hospital 2', 'Pimrpi-Chinchwad', 1234567890, 10, 2, 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `medical_details`
--

CREATE TABLE `medical_details` (
  `ID` int(20) NOT NULL,
  `m_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone_no` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medical_details`
--

INSERT INTO `medical_details` (`ID`, `m_name`, `address`, `phone_no`) VALUES
(1, 'Medical 1', 'Pimpri', 987654321),
(2, 'Medical 2', 'Pune', 1234567890);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospital_details`
--
ALTER TABLE `hospital_details`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `medical_details`
--
ALTER TABLE `medical_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hospital_details`
--
ALTER TABLE `hospital_details`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `medical_details`
--
ALTER TABLE `medical_details`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
