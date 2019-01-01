-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 08:38 AM
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
  `medi_Company` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`medi_id`, `medi_Name`, `medi_Generic_name`, `medi_Catagory`, `medi_price`, `medi_Company`, `amount`) VALUES
(105, 'napa', 'asdf', 'hjgfyt', 34, 'fgrhtuj', 791),
(106, 'laymen', 'lala', 'hjgfyt', 190, 'sqare', 89);

-- --------------------------------------------------------

--
-- Table structure for table `order_table`
--

CREATE TABLE `order_table` (
  `order_id` int(100) NOT NULL,
  `medi_Name` varchar(100) NOT NULL,
  `medi_Amount` int(100) NOT NULL,
  `customer_id` int(100) NOT NULL,
  `distributor_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_table`
--

INSERT INTO `order_table` (`order_id`, `medi_Name`, `medi_Amount`, `customer_id`, `distributor_id`) VALUES
(1, 'napa', 10, 1, 4),
(4, 'napa', 2, 3, 4),
(5, 'aaa', 2, 3, 4),
(6, 'napa', 8, 8, 4),
(7, 'aaa', 5, 8, 4),
(8, 'napa', 10, 12, 0),
(9, 'aaa', 16, 12, 11),
(10, 'aaa', 8, 13, 0),
(11, 'napa', 6, 3, 0),
(12, 'napa', 6, 3, 0),
(13, 'napa', 17, 3, 0),
(14, 'napa', 10, 0, 0),
(15, 'napa', 5, 0, 0),
(16, 'napa', 20, 0, 0),
(17, 'napa', 10, 0, 0),
(18, 'napa', 19, 3, 0),
(19, 'laymen', 1, 3, 0),
(20, 'napa', 3, 3, 0),
(21, 'napa', 7, 3, 0);

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
(11, 'ammi', 'jan', '2018-09-13', 'Female', 987654, 'zarin@gmail.com', '12345', 'mirpur', 'Distributor'),
(12, 'lalu', 'Israt', '2018-09-06', 'Male', 987654, 'zarin@gmail.com', '12345', 'Mirpur', 'Customer'),
(14, 'ALAMIN_SIR', 'ISRAT', '2018-09-20', 'Male', 987654, 'zarin@gmail.com', '123', 'uttara', 'Distributor'),
(15, 'ALU', 'SIR', '2018-09-19', 'Male', 987654, 'zarin@gmail.com', '12', 'uttara', 'Distributor'),
(16, 'noor', 'ISRAT', '2018-09-14', 'Male', 987654, 'zarin@gmail.com', '12345', 'uttara', 'Customer'),
(17, 'Alamin', 'sir', '2018-09-15', 'Male', 987654, 'zarin@gmail.com', '12345', 'uttara', 'Customer'),
(18, 'jannat', 'ISRAT', '2018-09-13', 'Female', 1711375751, 'zarin@gmail.com', '123', 'Mirpur', 'Customer'),
(19, 'Noor', 'Islam', '2018-09-20', 'Male', 987654, 'islam@gmail.com', '123', 'uttara', 'Distributor'),
(20, 'Noor', 'Islam', '2018-09-20', 'Male', 987654, 'islam@gmail.com', '123', 'uttara', 'Distributor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`medi_id`);

--
-- Indexes for table `order_table`
--
ALTER TABLE `order_table`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `customer_id_2` (`customer_id`);

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
  MODIFY `medi_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `order_table`
--
ALTER TABLE `order_table`
  MODIFY `order_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
