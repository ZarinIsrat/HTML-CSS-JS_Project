-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2018 at 09:28 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `medi_id` int(200) NOT NULL,
  `medi_Name` varchar(200) NOT NULL,
  `medi_Generic_name` varchar(200) NOT NULL,
  `medi_Catagory` varchar(200) NOT NULL,
  `medi_price` int(200) NOT NULL,
  `medi_Company` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medi_id`, `medi_Name`, `medi_Generic_name`, `medi_Catagory`, `medi_price`, `medi_Company`) VALUES
(102, 'napa', 'asdf', 'fgrhtuj', 0, '34'),
(103, 'aaa', 'asdf', 'hjgfyt', 34, 'fgrhtuj'),
(104, 'kjbk', 'asdf', 'hjgfyt', 100, 'fgrhtuj');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `First_Name` varchar(100) NOT NULL,
  `Last_Name` varchar(100) NOT NULL,
  `Dob` date NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Phone` int(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `Area` varchar(100) NOT NULL,
  `Type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `First_Name`, `Last_Name`, `Dob`, `Gender`, `Phone`, `Email`, `Password`, `Area`, `Type`) VALUES
(1, 'Noor', 'Islam', '2018-08-09', 'Male', 56789, 'islamisd@gmail.com', '123', '123', 'Admin'),
(3, 'Zarin', 'Dola', '2018-08-10', 'Female', 99999, 'zarin@gmail.com', '999', '', 'Customer'),
(4, 'zarin', 'Israt', '2018-08-11', 'Male', 987654, 'zarin@gmail.com', '123', '', 'Distributor'),
(6, '0', 'Israt', '2018-08-18', 'Male', 987654, 'zarin@gmail.com', 'qqqqq', '', 'Customer'),
(7, 'ALAMIN_SIR', 'alu', '2018-08-17', 'Male', 987654, 'zarin@gmail.com', '1234', '', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medi_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `medi_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
