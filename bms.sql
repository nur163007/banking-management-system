-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2020 at 04:40 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms`
--

-- --------------------------------------------------------

--
-- Table structure for table `active_loan`
--

CREATE TABLE `active_loan` (
  `sl_no` int(20) UNSIGNED NOT NULL,
  `serial_no` int(20) UNSIGNED NOT NULL,
  `loan_type` varchar(500) NOT NULL,
  `amount` double(50,2) NOT NULL,
  `start_date` varchar(100) NOT NULL,
  `end_date` varchar(100) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `interest_rate` varchar(100) NOT NULL,
  `payable_amount` double(50,2) NOT NULL,
  `emi_m` double(50,2) NOT NULL,
  `emi_q` double(50,2) NOT NULL,
  `emi_y` double(50,2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `card`
--

CREATE TABLE `card` (
  `s_no` int(20) UNSIGNED NOT NULL,
  `account_no` int(50) UNSIGNED NOT NULL,
  `card_no` int(100) UNSIGNED NOT NULL,
  `card_type` varchar(300) NOT NULL,
  `card_limit` double(50,2) NOT NULL,
  `apply_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remark` varchar(200) NOT NULL,
  `status` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_account`
--

CREATE TABLE `customer_account` (
  `customer_name` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `phone_no` int(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(200) NOT NULL,
  `post_code` int(30) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `maritial_status` varchar(50) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `educational_qualification` varchar(300) NOT NULL,
  `citizen` varchar(50) NOT NULL,
  `existing_account` varchar(50) NOT NULL,
  `income` double(50,2) NOT NULL,
  `account_type` varchar(200) NOT NULL,
  `account_no` int(100) UNSIGNED NOT NULL,
  `pin_code` varchar(50) NOT NULL,
  `service` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL,
  `token` varchar(150) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_account`
--

INSERT INTO `customer_account` (`customer_name`, `date_of_birth`, `phone_no`, `email`, `address`, `city`, `post_code`, `gender`, `maritial_status`, `religion`, `educational_qualification`, `citizen`, `existing_account`, `income`, `account_type`, `account_no`, `pin_code`, `service`, `file`, `token`, `status`) VALUES
('tanzin lia', '09-06-1995', 1712048535, 'tanzin.lia@gmail.com', 'dhaka', 'dhaka', 1215, 'female', 'married', 'islam', 'graduate', 'no', 'no', 15000.00, 'current account', 1078674303, '12345', 'mobile banking', 'received_1327758210698095.jpeg', '8df707a948fac1b4a0f97aa554886ec8', 'Approved'),
('Nur Mohammad', '25-05-1996', 1768476053, 'nur.mohd1996@gmail.com', 'Mymensingh, Dhaka, Bangladesh', 'Mymensingh', 2210, 'male', 'unmarried', 'islam', 'graduate', 'no', 'no', 22000.00, 'savings account', 1081766745, '123456', 'cheque book', '20191116_150435.jpg', '598b3e71ec378bd83e0a727608b5db01', 'Terminated');

-- --------------------------------------------------------

--
-- Table structure for table `customer_fund`
--

CREATE TABLE `customer_fund` (
  `transection_no` int(20) NOT NULL,
  `payee_account_no` int(50) NOT NULL,
  `account_no` int(100) UNSIGNED NOT NULL,
  `customer_name` varchar(150) NOT NULL,
  `account_type` varchar(300) NOT NULL,
  `term` varchar(100) NOT NULL,
  `amount` double(50,2) NOT NULL,
  `deposit` varchar(50) NOT NULL,
  `transfer` varchar(100) NOT NULL,
  `withdrawl` varchar(50) NOT NULL,
  `remark` varchar(50) NOT NULL,
  `remark1` varchar(50) NOT NULL,
  `remark2` varchar(50) NOT NULL,
  `branch` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_fund`
--

INSERT INTO `customer_fund` (`transection_no`, `payee_account_no`, `account_no`, `customer_name`, `account_type`, `term`, `amount`, `deposit`, `transfer`, `withdrawl`, `remark`, `remark1`, `remark2`, `branch`) VALUES
(1, 1078674303, 1078674303, 'tanzin lia', 'current account', '1y', 0.00, '', '', '', '', '', '', ''),
(2, 1081766745, 1081766745, 'Nur Mohammad', 'savings account', '1y', 0.00, '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `serial_no` int(20) UNSIGNED NOT NULL,
  `customer_name` varchar(200) NOT NULL,
  `f_name` varchar(150) NOT NULL,
  `m_name` varchar(150) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `pre_address` varchar(500) NOT NULL,
  `per_address` varchar(500) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `maritial_status` varchar(55) NOT NULL,
  `education` varchar(200) NOT NULL,
  `occupation` varchar(200) NOT NULL,
  `income` double(50,2) NOT NULL,
  `gurantor_name` varchar(100) NOT NULL,
  `g_occupation` varchar(60) NOT NULL,
  `g_address` varchar(400) NOT NULL,
  `g_file` varchar(300) NOT NULL,
  `account_no` int(15) NOT NULL,
  `loan_type` varchar(200) NOT NULL,
  `term` varchar(100) NOT NULL,
  `amount` double(50,2) NOT NULL,
  `appli_file` varchar(100) NOT NULL,
  `bill_file` varchar(100) NOT NULL,
  `apply_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payee`
--

CREATE TABLE `payee` (
  `serial_no` int(20) NOT NULL,
  `payee_name` varchar(150) NOT NULL,
  `payee_account_no` int(50) NOT NULL,
  `remark` varchar(200) NOT NULL,
  `phone_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `employee_id` int(20) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `mobile_no` int(20) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `token` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`employee_id`, `name`, `branch`, `designation`, `password`, `date_of_birth`, `address`, `mobile_no`, `email`, `token`, `status`) VALUES
(111075, 'Nur mohammad', 'Banani Branch', 'manager', '12345', '25-05-1996', 'Dhaka,Bangladesh', 1768476053, 'nur.mohd1996@gmail.com', 'fccb3cdc9acc14a6e70a12f74560c026', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `transection`
--

CREATE TABLE `transection` (
  `transection_id` int(10) UNSIGNED NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `remark` varchar(150) NOT NULL,
  `debit` double(50,2) NOT NULL,
  `credit` double(50,2) NOT NULL,
  `balance` double(150,2) NOT NULL,
  `phone_no` int(20) NOT NULL,
  `term` varchar(100) NOT NULL,
  `deposit` varchar(50) NOT NULL,
  `transfer` varchar(50) NOT NULL,
  `withdrawl` varchar(50) NOT NULL,
  `transection_no` int(50) NOT NULL,
  `payee_account_no` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `active_loan`
--
ALTER TABLE `active_loan`
  ADD PRIMARY KEY (`sl_no`),
  ADD KEY `serial_no` (`serial_no`);

--
-- Indexes for table `card`
--
ALTER TABLE `card`
  ADD PRIMARY KEY (`s_no`),
  ADD UNIQUE KEY `s_no` (`s_no`),
  ADD UNIQUE KEY `card_no` (`card_no`),
  ADD KEY `account_no` (`account_no`);

--
-- Indexes for table `customer_account`
--
ALTER TABLE `customer_account`
  ADD PRIMARY KEY (`account_no`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_no` (`phone_no`),
  ADD UNIQUE KEY `account_no` (`account_no`);

--
-- Indexes for table `customer_fund`
--
ALTER TABLE `customer_fund`
  ADD PRIMARY KEY (`transection_no`),
  ADD UNIQUE KEY `transection_no` (`transection_no`),
  ADD UNIQUE KEY `account_no` (`account_no`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`serial_no`),
  ADD KEY `phone_no` (`phone_no`) USING BTREE;

--
-- Indexes for table `payee`
--
ALTER TABLE `payee`
  ADD PRIMARY KEY (`serial_no`),
  ADD KEY `serial_no` (`serial_no`) USING BTREE,
  ADD KEY `payee_account_no` (`payee_account_no`) USING BTREE;

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`employee_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `employee_id` (`employee_id`),
  ADD UNIQUE KEY `mobile_no` (`mobile_no`),
  ADD KEY `email_2` (`email`) USING BTREE;
ALTER TABLE `registration` ADD FULLTEXT KEY `email_3` (`email`);
ALTER TABLE `registration` ADD FULLTEXT KEY `last_name` (`designation`);

--
-- Indexes for table `transection`
--
ALTER TABLE `transection`
  ADD PRIMARY KEY (`transection_id`),
  ADD KEY `transection_no` (`transection_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `active_loan`
--
ALTER TABLE `active_loan`
  MODIFY `sl_no` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `card`
--
ALTER TABLE `card`
  MODIFY `s_no` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer_fund`
--
ALTER TABLE `customer_fund`
  MODIFY `transection_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `serial_no` int(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payee`
--
ALTER TABLE `payee`
  MODIFY `serial_no` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transection`
--
ALTER TABLE `transection`
  MODIFY `transection_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `active_loan`
--
ALTER TABLE `active_loan`
  ADD CONSTRAINT `active_loan_ibfk_1` FOREIGN KEY (`serial_no`) REFERENCES `loan` (`serial_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `card`
--
ALTER TABLE `card`
  ADD CONSTRAINT `card_ibfk_1` FOREIGN KEY (`account_no`) REFERENCES `customer_account` (`account_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer_fund`
--
ALTER TABLE `customer_fund`
  ADD CONSTRAINT `customer_fund_ibfk_1` FOREIGN KEY (`account_no`) REFERENCES `customer_account` (`account_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transection`
--
ALTER TABLE `transection`
  ADD CONSTRAINT `transection_ibfk_1` FOREIGN KEY (`transection_no`) REFERENCES `customer_fund` (`transection_no`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
