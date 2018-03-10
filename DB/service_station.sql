-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2018 at 02:40 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `service_station`
--

-- --------------------------------------------------------

--
-- Table structure for table `service_schedule`
--

CREATE TABLE `service_schedule` (
  `service_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `vehicle_no` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `vehicle_type` varchar(10) NOT NULL,
  `vehicle_model` varchar(200) NOT NULL,
  `point` varchar(5) NOT NULL,
  `end_time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_schedule`
--

INSERT INTO `service_schedule` (`service_id`, `first_name`, `last_name`, `phone_no`, `vehicle_no`, `date`, `start_time`, `vehicle_type`, `vehicle_model`, `point`, `end_time`) VALUES
(17, 'vimukthi', 'xax', '0711790372', 'xx-0000', '2018-03-12', '12:00:00', 'car', 'Peugeot', '2', '14:30:00'),
(18, 'vimukthi', 'xax', '0711790372', 'xx-0000', '2018-03-12', '12:00:00', 'car', 'Renault', '1', '14:30:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service_schedule`
--
ALTER TABLE `service_schedule`
  ADD PRIMARY KEY (`service_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service_schedule`
--
ALTER TABLE `service_schedule`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
