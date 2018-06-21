-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 21, 2018 at 07:36 AM
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
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `second`
--

CREATE TABLE `second` (
  `c_name` varchar(30) NOT NULL,
  `c_mail` varchar(30) NOT NULL,
  `c_mob` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `second`
--

INSERT INTO `second` (`c_name`, `c_mail`, `c_mob`, `dob`, `gender`) VALUES
('candidate_name', 'candidate_mail', 'candidate_', '0000-00-00', 'candidate_'),
('candidate_name', 'candidate_mail', 'candidate_', '0000-00-00', 'candidate_'),
('ankit', '', '', '0000-00-00', ''),
('ankit', '', '', '2017-05-16', ''),
('', '', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `table_no`
--

CREATE TABLE `table_no` (
  `table_num` int(5) NOT NULL,
  `status` int(5) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `table_no`
--

INSERT INTO `table_no` (`table_num`, `status`) VALUES
(1, 1),
(2, 1),
(3, 0),
(4, 0),
(5, 0),
(6, 0),
(7, 0),
(88, 0),
(98, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_no`
--
ALTER TABLE `table_no`
  ADD PRIMARY KEY (`table_num`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
