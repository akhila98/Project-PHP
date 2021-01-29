-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2020 at 06:51 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afterlife`
--

-- --------------------------------------------------------

--
-- Table structure for table `order1`
--

CREATE TABLE `order1` (
  `o_id` int(10) NOT NULL,
  `u_id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL,
  `status` varchar(50) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` varchar(10) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order1`
--

INSERT INTO `order1` (`o_id`, `u_id`, `r_id`, `status`, `location`, `date`, `comment`, `service`) VALUES
(5, 0, 5, 'Approved', 'mulund', '21/10/2020', '', 'Ambulance srvice'),
(10, 0, 5, 'Approved', 'kalwa', '2020-10-24', '', 'Catering'),
(11, 0, 6, 'Pending', 'C-502,Odyssey CHSL , Lodha Paradise ,Majiwade Thane(W).', '2020-10-21', '', 'Prayer meet'),
(12, 0, 7, 'Done', 'Thane', '2020-10-22', 'Done', 'Prayer meet');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(10) NOT NULL,
  `s_id` int(10) NOT NULL,
  `c_id` int(10) NOT NULL,
  `r_id` int(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `Status` varchar(10) NOT NULL,
  `Location` varchar(100) NOT NULL,
  `services` varchar(200) NOT NULL,
  `c_name` varchar(50) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `s_id`, `c_id`, `r_id`, `date`, `Status`, `Location`, `services`, `c_name`, `comment`) VALUES
(1, 2, 1, 0, '20/10/2020', 'Done', 'thane', 'ambulance', '', ''),
(2, 3, 1, 0, '21/10/2020', 'Done', 'thane', 'catering', '', ''),
(3, 1, 2, 0, '30/04/2020', 'Pending', 'Mumbai', 'Prayer meet', '', ''),
(4, 3, 3, 0, '30/06/2020', 'Pending', 'Pune', 'Catering', '', ''),
(5, 2, 4, 0, '18/04/2020', 'Done', 'Mumbai', 'Catering', '', 'Done');

-- --------------------------------------------------------

--
-- Table structure for table `regi`
--

CREATE TABLE `regi` (
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `rd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `regiid` int(11) NOT NULL,
  `addr` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `regi`
--

INSERT INTO `regi` (`fname`, `lname`, `rd`, `email`, `contact`, `regiid`, `addr`) VALUES
('vasavi', 'Murali', 'myself', 'vasavimurali06@gmail.com', '8169288842', 3, 'mulund'),
('vasavi', 'Murali', 'myself', 'vasavimurali06@gmail.com', '8169288842', 4, 'mulund'),
('Akhila', 'nair', 'myself', 'nairakhila11@gmail.com', '9619257110', 5, 'thane'),
('Akash ', 'Nair', 'Brother', 'nairakhila98@gmail.com', '9619257110', 6, 'C-502,Odyssey CHSL, Lodha Paradise,Thane West'),
('sushmita', 'rai', 'Friend', 'rai.sush60@gmail.com', '9004104258', 7, 'C-502 , Odyssey CHSL,Lodha paradise,Thane west');

-- --------------------------------------------------------

--
-- Table structure for table `service_provider`
--

CREATE TABLE `service_provider` (
  `s_id` int(10) NOT NULL,
  `otp` int(11) NOT NULL,
  `s_name` varchar(100) NOT NULL,
  `s_emailid` varchar(100) NOT NULL,
  `s_dob` varchar(10) NOT NULL,
  `s_experience` longblob NOT NULL,
  `s_homeaddress` varchar(200) NOT NULL,
  `s_workaddress` varchar(200) NOT NULL,
  `s_contactno` varchar(12) NOT NULL,
  `s_gstno` int(30) NOT NULL,
  `s_licenseno` int(50) NOT NULL,
  `s_occupation` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `service_provider`
--

INSERT INTO `service_provider` (`s_id`, `otp`, `s_name`, `s_emailid`, `s_dob`, `s_experience`, `s_homeaddress`, `s_workaddress`, `s_contactno`, `s_gstno`, `s_licenseno`, `s_occupation`) VALUES
(1, 95281, 'akhila', 'nairakhila98@gmail.com', '0000-00-00', '', 'thane', 'mumbai', '9619257110', 123456, 234561, ''),
(2, 95281, 'Akhila', 'nairakhila98@gmail.com', '22/08/1997', '', 'nknzkz xn', 'zbhhjjhjnbbhbhbjhj', '9619257110', 123456, 784211, ''),
(3, 0, 'vasvai', 'vasavimurali06@gmail.com', '1998-05-06', 0x66696c65732f70726f636573732e4a5047, 'mulund', 'thane', '9867856455', 45126, 156551, 'Ambulance service'),
(16, 0, 'Akhila', '', '', '', '', '', '', 0, 0, 'Catering,Prayer meet'),
(17, 0, 'Akhila', 'nairakhila11@gmail.com', '1998-04-29', '', 'thanem', 'mumbai', '9619257110', 78459666, 4785423, 'Catering,Prayer meet'),
(18, 0, 'Akash nair', 'nairakhila98@gmail.com', '1992-12-27', '', 'Thane', 'mumbai', '', 124578, 326598, 'Catering,Prayer meet'),
(20, 0, '', '', '', '', '', '', '', 0, 0, ''),
(21, 0, '', 'nairbaby25@gmail.com', '1962-01-25', '', 'C-1001,Westgate,Lodha Luxuria,Thane west', 'C-1001,Westgate,Lodha Luxuria,Thane west', '', 8975466, 124578, 'Catering,Prayer meet'),
(22, 0, 'Vasavi', 'vasavimurali06@gmail.com', '1998-05-06', '', 'Mulund', 'Mulund', '', 784512, 326598, 'Catering,Prayer meet');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Demisedname` varchar(50) NOT NULL,
  `Dob` varchar(10) NOT NULL,
  `Dod` varchar(10) NOT NULL,
  `Cause_of_death` varchar(200) NOT NULL,
  `Medical_history` varchar(200) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Address` varchar(200) NOT NULL,
  `Location_of_death` varchar(200) NOT NULL,
  `Occupation` varchar(200) NOT NULL,
  `Religion` varchar(200) NOT NULL,
  `Organdonation` varchar(200) NOT NULL,
  `Contact_number` varchar(10) NOT NULL,
  `Alternate_no` varchar(10) NOT NULL,
  `Email_id` varchar(50) NOT NULL,
  `Info` varchar(500) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `user_id` int(11) NOT NULL,
  `regiid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Demisedname`, `Dob`, `Dod`, `Cause_of_death`, `Medical_history`, `Gender`, `Address`, `Location_of_death`, `Occupation`, `Religion`, `Organdonation`, `Contact_number`, `Alternate_no`, `Email_id`, `Info`, `name`, `phone_no`, `user_id`, `regiid`) VALUES
('mohan', '0000-00-00', '0000-00-00', 'heart attack', 'no', 'male', '0', 'thane', 'retired', 'hindu', 'no', '986785645', '0', 'nairakhila98@gmail.c', '', 'akhil', '961925711', 1, 0),
('imran khan', '21/01/1975', '29/04/2020', 'Normal death', 'Cancer', 'male', 'Mumbai', 'Mumbai', 'Actor', 'Muslim', 'no', '987564256', '0', 'imankhan@gmail.com', '', 'iman khan', '986574566', 2, 0),
('christina joseph', '14/04/1981', '20/06/2020', 'Accident', 'Nil', 'Female', 'Pune', 'Pune', 'Baker', 'Christian', 'yes', '784596123', '0', 'joesph@gmail.com', '', 'joesph', '789456121', 3, 0),
('Santha', '25/01/1889', '16/04/2020', 'Normal', 'No', 'Female', 'Mumbai', 'Mumbai', 'Housewife', 'Hindu', 'no', '9867856455', '0', 'nairakhila98@gmail.com', '', 'Baby nair', '9619857455', 4, 0),
('vasavi', '1998-05-06', '2020-05-06', 'Corona', '', 'female', 'Mulund', 'Mulund', '', 'HINDU', '', '8169288842', '', '', '', '', '', 5, 0),
('Akhila Nair', '1998-04-29', '2020-04-29', 'Corona', '', 'female', 'C-502,Odyssey CHSL , Lodha Paradise ,Majiwade Thane(W).', 'C-502,Odyssey CHSL , Lodha Paradise ,Majiwade Thane(W).', '', 'HINDU', '', '9619257110', '', '', '', '', '', 6, 0),
('Akhila', '1998-04-29', '2020-10-21', 'Corona', '', 'female', 'Thane', 'Thane', '', 'HINDU', '', '9867854655', '', '', '', '', '', 7, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user1`
--

CREATE TABLE `user1` (
  `user_id` int(10) NOT NULL,
  `regiid` int(10) NOT NULL,
  `Demisedname` varchar(50) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `dod` varchar(10) NOT NULL,
  `Cause_of_death` varchar(100) NOT NULL,
  `Medical_history` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Location_of_Death` varchar(100) NOT NULL,
  `Occupation` varchar(100) NOT NULL,
  `Religion` varchar(100) NOT NULL,
  `Contact_number` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `order1`
--
ALTER TABLE `order1`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `u_id` (`u_id`),
  ADD KEY `r_id` (`r_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`),
  ADD KEY `s_id` (`s_id`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `regi`
--
ALTER TABLE `regi`
  ADD PRIMARY KEY (`regiid`);

--
-- Indexes for table `service_provider`
--
ALTER TABLE `service_provider`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user1`
--
ALTER TABLE `user1`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `regiid` (`regiid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `order1`
--
ALTER TABLE `order1`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `regi`
--
ALTER TABLE `regi`
  MODIFY `regiid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service_provider`
--
ALTER TABLE `service_provider`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user1`
--
ALTER TABLE `user1`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order1`
--
ALTER TABLE `order1`
  ADD CONSTRAINT `order1_ibfk_3` FOREIGN KEY (`r_id`) REFERENCES `regi` (`regiid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`s_id`) REFERENCES `service_provider` (`s_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`c_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user1`
--
ALTER TABLE `user1`
  ADD CONSTRAINT `user1_ibfk_1` FOREIGN KEY (`regiid`) REFERENCES `user1` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
