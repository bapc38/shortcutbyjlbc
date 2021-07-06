-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2021 at 09:38 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shortcutdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_account`
--

CREATE TABLE `admin_account` (
  `Admin_ID` int(12) NOT NULL,
  `Admin_Username` varchar(20) NOT NULL,
  `Admin_Mobile` char(11) NOT NULL,
  `Admin_Email` varchar(50) NOT NULL,
  `Admin_Password` varchar(120) NOT NULL,
  `Admin_FName` varchar(50) NOT NULL,
  `Admin_LName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_account`
--

INSERT INTO `admin_account` (`Admin_ID`, `Admin_Username`, `Admin_Mobile`, `Admin_Email`, `Admin_Password`, `Admin_FName`, `Admin_LName`) VALUES
(1, 'shortcut_admin', '09338112038', 'info@shortcut.com', '25e4ee4e9229397b6b17776bfceaf8e7', 'Shortcut', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `contact_query`
--

CREATE TABLE `contact_query` (
  `qryID` int(11) NOT NULL,
  `qry_name` varchar(150) NOT NULL,
  `qry_email` varchar(120) NOT NULL,
  `qry_contactnum` varchar(20) NOT NULL,
  `qry_subject` varchar(150) NOT NULL,
  `message` varchar(350) NOT NULL,
  `date_contacted` timestamp NOT NULL DEFAULT current_timestamp(),
  `is_read` int(11) DEFAULT NULL,
  `qry_schoolname` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `emailad` varchar(250) NOT NULL,
  `datesubmit` timestamp NOT NULL DEFAULT current_timestamp(),
  `newsID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`emailad`, `datesubmit`, `newsID`) VALUES
('briannecastillo38@gmail.com', '2021-07-03 06:07:42', 1),
('jobilllorca@gmail.com', '2021-07-03 11:10:38', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_account`
--
ALTER TABLE `admin_account`
  ADD PRIMARY KEY (`Admin_ID`);

--
-- Indexes for table `contact_query`
--
ALTER TABLE `contact_query`
  ADD PRIMARY KEY (`qryID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`newsID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_query`
--
ALTER TABLE `contact_query`
  MODIFY `qryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `newsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
