-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2018 at 01:33 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roktim`
--

-- --------------------------------------------------------

--
-- Table structure for table `player`
--

CREATE TABLE `player` (
  `sl_no` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `mname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `fa_name` varchar(255) NOT NULL,
  `mo_name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `loc_id` varchar(255) NOT NULL,
  `preset_house` varchar(255) NOT NULL,
  `present_street` varchar(255) NOT NULL,
  `present_post_code` varchar(255) NOT NULL,
  `present_thana` varchar(255) NOT NULL,
  `present_district` varchar(255) NOT NULL,
  `permanent_house` varchar(255) NOT NULL,
  `permanent_street` varchar(255) NOT NULL,
  `permanent_post_code` varchar(255) NOT NULL,
  `permanent_thana` varchar(255) NOT NULL,
  `permanent_district` varchar(255) NOT NULL,
  `previous_club_name` varchar(255) NOT NULL,
  `previous_from` varchar(255) NOT NULL,
  `previous_to` varchar(255) NOT NULL,
  `previous_run` varchar(255) NOT NULL,
  `previous_wicket` varchar(255) NOT NULL,
  `previous_leader` varchar(255) NOT NULL,
  `best_performance_club_name` varchar(255) NOT NULL,
  `best_performance_opponenet_club` varchar(255) NOT NULL,
  `best_performance_event` varchar(255) NOT NULL,
  `best_performance_match` varchar(255) NOT NULL,
  `best_performance_run` varchar(255) NOT NULL,
  `best_performance_wicket` varchar(255) NOT NULL,
  `educational_name` varchar(255) NOT NULL,
  `educational_institute` varchar(255) NOT NULL,
  `educational_board` varchar(255) NOT NULL,
  `educational_year` varchar(255) NOT NULL,
  `educational_result` varchar(255) NOT NULL,
  `membership_id` varchar(255) NOT NULL,
  `membership_name` varchar(255) NOT NULL,
  `membership_type` varchar(255) NOT NULL,
  `membership_registration_date` varchar(255) NOT NULL,
  `membership_expiry_year` varchar(255) NOT NULL,
  `created_at` timestamp(5) NOT NULL DEFAULT CURRENT_TIMESTAMP(5)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `player`
--
ALTER TABLE `player`
  ADD PRIMARY KEY (`sl_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `player`
--
ALTER TABLE `player`
  MODIFY `sl_no` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
