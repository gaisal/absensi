-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2023 at 09:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `absen_sidik_jari`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `serialnumber` double NOT NULL,
  `gender` varchar(10) NOT NULL,
  `kelas` varchar(5) NOT NULL,
  `jurusan` varchar(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fingerprint_id` int(11) NOT NULL,
  `fingerprint_select` tinyint(1) NOT NULL DEFAULT 0,
  `user_date` date NOT NULL,
  `time_in` time NOT NULL,
  `del_fingerid` tinyint(1) NOT NULL DEFAULT 0,
  `add_fingerid` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `serialnumber`, `gender`, `kelas`, `jurusan`, `email`, `fingerprint_id`, `fingerprint_select`, `user_date`, `time_in`, `del_fingerid`, `add_fingerid`) VALUES
(2, 'ade', 23456, 'Male', '11', 'IPS', 'ade@gmail.com', 2, 1, '2023-07-22', '21:37:00', 0, 1),
(3, 'faizal', 34567, 'Laki laki', '11', 'ipa', 'faisal@gmail.com', 1, 0, '2023-07-05', '02:00:00', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users_logs`
--

CREATE TABLE `users_logs` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `serialnumber` double NOT NULL,
  `fingerprint_id` int(5) NOT NULL,
  `checkindate` date NOT NULL,
  `timein` time NOT NULL,
  `timeout` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users_logs`
--

INSERT INTO `users_logs` (`id`, `username`, `serialnumber`, `fingerprint_id`, `checkindate`, `timein`, `timeout`) VALUES
(1, 'faizal', 34567, 1, '2023-07-21', '04:10:10', '04:14:23'),
(2, 'faizal', 34567, 1, '2023-07-23', '04:14:28', '04:18:27'),
(3, 'faizal', 34567, 1, '2023-07-21', '04:22:09', '04:22:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fingerprint_id` (`fingerprint_id`);

--
-- Indexes for table `users_logs`
--
ALTER TABLE `users_logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fingerprint_id` (`fingerprint_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users_logs`
--
ALTER TABLE `users_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
