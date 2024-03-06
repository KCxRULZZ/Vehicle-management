-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 03:32 PM
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
-- Database: `safe_drive`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_username` varchar(20) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`, `admin_password`, `admin_email`) VALUES
(1, 'M.K.C.FERNANDO', 'IT22346254', 'Insurance123', 'kaveeshafernando@gmail.com'),
(2, 'D.M.R.M.Dissanayaka', 'IT22889706', 'Insurance124', 'Ruvinidissanayaka@gmail.com'),
(3, 'K.G.H.D.Jayarathna', 'IT22890214', 'Insurance125', 'Hashinijayarathna@gmail.com'),
(4, 'V.B.L.M.Senarathna', 'IT22885050', 'Insurance126', 'LinaraSenarathna@gmail.com'),
(5, 'U.I.Hewavitharana', 'IT22896872 ', 'Insurance127', 'InduwariHewavitharana@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `claim`
--

CREATE TABLE `claim` (
  `claim_id` varchar(20) NOT NULL,
  `date_field` date NOT NULL,
  `amount` float DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `vehicle_id` varchar(20) DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone` int(11) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `gender`, `phone`, `comment`) VALUES
(2, 'linara', 'linara57@gmial.com', 'female', 65386387, 'not satisfied');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `manager_id` varchar(20) NOT NULL,
  `manager_name` varchar(255) DEFAULT NULL,
  `manager_username` varchar(255) DEFAULT NULL,
  `manager_password` varchar(255) DEFAULT NULL,
  `manager_email` varchar(255) DEFAULT NULL,
  `admin_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `newcontact`
--

CREATE TABLE `newcontact` (
  `id` int(10) NOT NULL,
  `rnum` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cont` int(10) NOT NULL,
  `question` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newcontact`
--

INSERT INTO `newcontact` (`id`, `rnum`, `fname`, `email`, `cont`, `question`) VALUES
(25, '004', 'gamini senarathna ', 'gaminisenarath@gmail.com', 2147483647, ' gghjjjujhg'),
(26, '0055', 'Suranjika sesnarathna', 'suranjiksasenarathna@gmail.co', 75678909, ' suswus hsujsuh'),
(29, 'sd', 'sd', 'sdsd@d.d', 56565, ' sdsd'),
(44, 'sd', 'sdomer', 'sdsd@d.d', 56565, ' sdsd');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` varchar(20) NOT NULL,
  `policy_id` varchar(20) DEFAULT NULL,
  `premium_amount` float DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `policy`
--

CREATE TABLE `policy` (
  `policy_id` varchar(20) NOT NULL,
  `vehicle_type` varchar(255) NOT NULL,
  `premium_amount` varchar(20) DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `policy_id` varchar(20) NOT NULL,
  `NIC` varchar(15) NOT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `fullname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `mobile` int(10) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `nic_issue_date` varchar(255) NOT NULL,
  `nationality` varchar(252) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin_ID` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`fullname`, `dob`, `email`, `address`, `gender`, `mobile`, `nic`, `nic_issue_date`, `nationality`, `username`, `password`, `admin_ID`) VALUES
('Mihindukulasuriya Kaveesha Chamikara Fernando', '2001-09-15', 'darkthunder886@gmail.com', '108/84 Kurunduwatta Chilaw', 'Female', 712317891, '6903812064', '2023-06-15', 'sri_lankan', 'kcrulzz886125         ', '$2y$10$mbWe0aEiQfIsagRtIYE2eOLOekFUxBbwtH0QQMgkxz05DOi/vZqWq', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_email`
--

CREATE TABLE `user_email` (
  `NIC` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_mobile_number`
--

CREATE TABLE `user_mobile_number` (
  `NIC` varchar(15) NOT NULL,
  `mobile_number` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

CREATE TABLE `vehicle` (
  `vehicle_id` varchar(20) NOT NULL,
  `year` int(11) NOT NULL,
  `model` varchar(255) NOT NULL,
  `registration_number` varchar(10) NOT NULL,
  `make_country` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `chassy_number` varchar(255) NOT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `admin_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `claim`
--
ALTER TABLE `claim`
  ADD PRIMARY KEY (`claim_id`),
  ADD KEY `claim_fK1` (`NIC`),
  ADD KEY `claim_fK2` (`vehicle_id`),
  ADD KEY `claim_fK3` (`admin_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`manager_id`),
  ADD KEY `manager_fk` (`admin_id`);

--
-- Indexes for table `newcontact`
--
ALTER TABLE `newcontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`),
  ADD KEY `pament_fK` (`policy_id`);

--
-- Indexes for table `policy`
--
ALTER TABLE `policy`
  ADD PRIMARY KEY (`policy_id`),
  ADD KEY `policy_fK` (`NIC`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`policy_id`,`NIC`),
  ADD KEY `request_fK1` (`NIC`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`nic`),
  ADD KEY `user_fK` (`admin_ID`);

--
-- Indexes for table `user_email`
--
ALTER TABLE `user_email`
  ADD PRIMARY KEY (`NIC`,`email`);

--
-- Indexes for table `user_mobile_number`
--
ALTER TABLE `user_mobile_number`
  ADD PRIMARY KEY (`NIC`,`mobile_number`);

--
-- Indexes for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD PRIMARY KEY (`vehicle_id`),
  ADD KEY `vehicle_fK1` (`NIC`),
  ADD KEY `vehicle_fK2` (`admin_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newcontact`
--
ALTER TABLE `newcontact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `claim`
--
ALTER TABLE `claim`
  ADD CONSTRAINT `claim_fK1` FOREIGN KEY (`NIC`) REFERENCES `users` (`nic`),
  ADD CONSTRAINT `claim_fK2` FOREIGN KEY (`vehicle_id`) REFERENCES `vehicle` (`vehicle_id`),
  ADD CONSTRAINT `claim_fK3` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `manager`
--
ALTER TABLE `manager`
  ADD CONSTRAINT `manager_fk` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `pament_fK` FOREIGN KEY (`policy_id`) REFERENCES `policy` (`policy_id`);

--
-- Constraints for table `policy`
--
ALTER TABLE `policy`
  ADD CONSTRAINT `policy_fK` FOREIGN KEY (`NIC`) REFERENCES `users` (`nic`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_fK1` FOREIGN KEY (`NIC`) REFERENCES `users` (`nic`),
  ADD CONSTRAINT `request_fK2` FOREIGN KEY (`policy_id`) REFERENCES `policy` (`policy_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_fK` FOREIGN KEY (`admin_ID`) REFERENCES `admin` (`admin_id`);

--
-- Constraints for table `user_email`
--
ALTER TABLE `user_email`
  ADD CONSTRAINT `user_email_fk` FOREIGN KEY (`NIC`) REFERENCES `users` (`nic`);

--
-- Constraints for table `user_mobile_number`
--
ALTER TABLE `user_mobile_number`
  ADD CONSTRAINT `user_mobile_number_fk` FOREIGN KEY (`NIC`) REFERENCES `users` (`nic`);

--
-- Constraints for table `vehicle`
--
ALTER TABLE `vehicle`
  ADD CONSTRAINT `vehicle_fK1` FOREIGN KEY (`NIC`) REFERENCES `users` (`nic`),
  ADD CONSTRAINT `vehicle_fK2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
