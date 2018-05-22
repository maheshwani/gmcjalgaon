-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 22, 2018 at 11:40 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gmcjalga_collegedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(500) NOT NULL DEFAULT '',
  `password` varchar(500) NOT NULL DEFAULT '',
  `date` datetime NOT NULL,
  `recStatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `date`, `recStatus`) VALUES
(1, 'gmcjalgaon@gmail.com', '74e928e935a07d133df9e95db3fc1390', '2017-12-08 11:48:40', 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT '',
  `date` date NOT NULL,
  `recStatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `date`, `recStatus`) VALUES
(1, '2018-03-01-125013pm.jpg', '2018-03-01', 1),
(2, '2018-03-23-173343pm.php', '2018-03-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id` int(11) NOT NULL,
  `notification_title` varchar(500) NOT NULL DEFAULT '',
  `notification` varchar(500) NOT NULL DEFAULT '',
  `date` date NOT NULL,
  `recStatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `notification_title`, `notification`, `date`, `recStatus`) VALUES
(1, 'Advertise for rent basis hostel', '2018-01-17-173852pm.pdf', '2018-01-17', 1),
(2, 'Walking interview for assistant professor & senior resident vacant post.', '2018-01-18-164612pm.pdf', '2018-01-18', 1);

-- --------------------------------------------------------

--
-- Table structure for table `quotation`
--

CREATE TABLE `quotation` (
  `id` int(11) NOT NULL,
  `quotation_title` varchar(500) DEFAULT NULL,
  `quotation` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `recStatus` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotation`
--

INSERT INTO `quotation` (`id`, `quotation_title`, `quotation`, `date`, `recStatus`) VALUES
(1, 'Bio Chemicals & Charts List.pdf', '2018-01-10-171314pm.pdf', '2018-01-10', 1),
(2, 'Quation Letter I.pdf', '2018-01-10-171329pm.pdf', '2018-01-10', 1),
(3, 'Specification Final II.pdf', '2018-01-10-171340pm.pdf', '2018-01-10', 1),
(4, 'Open Quotation Notice (Webiste) FOr The Supply of Journals', '2018-01-10-174324pm.pdf', '2018-01-10', 1),
(5, 'Open Quotation Notice For the supply of Books', '2018-01-10-180810pm.pdf', '2018-01-10', 1),
(12, 'Extention for Open quotation of journals', '2018-01-23-114552am.pdf', '2018-01-23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tender`
--

CREATE TABLE `tender` (
  `id` int(11) NOT NULL,
  `tender_title` varchar(500) NOT NULL DEFAULT '',
  `tender` varchar(500) NOT NULL DEFAULT '',
  `date` date NOT NULL,
  `recStatus` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotation`
--
ALTER TABLE `quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tender`
--
ALTER TABLE `tender`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `quotation`
--
ALTER TABLE `quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tender`
--
ALTER TABLE `tender`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
