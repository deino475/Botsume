-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Nov 05, 2016 at 09:24 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `botsume`
--

-- --------------------------------------------------------

--
-- Table structure for table `facebook`
--

CREATE TABLE `facebook` (
  `id` int(13) NOT NULL,
  `botid` text NOT NULL,
  `apitoken` text NOT NULL,
  `webhook` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `facebook`
--

INSERT INTO `facebook` (`id`, `botid`, `apitoken`, `webhook`) VALUES
(1, '', '', ''),
(2, '', '', ''),
(3, '91430bac-9000-11e6-b750-c95758b58475', 'dqjwioxnwiqix', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `facebook`
--
ALTER TABLE `facebook`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `facebook`
--
ALTER TABLE `facebook`
  MODIFY `id` int(13) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;