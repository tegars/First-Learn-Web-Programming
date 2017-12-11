-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2016 at 03:54 
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `MyPlugin`
--

-- --------------------------------------------------------

--
-- Table structure for table `ckeditor`
--

CREATE TABLE IF NOT EXISTS `ckeditor` (
`id` int(11) NOT NULL,
  `coretan` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ckeditor`
--

INSERT INTO `ckeditor` (`id`, `coretan`) VALUES
(5, '<p>hallo <strong>tegar</strong></p>\r\n'),
(6, '<p>testing <em>teman</em></p>');

-- --------------------------------------------------------

--
-- Table structure for table `summernote`
--

CREATE TABLE IF NOT EXISTS `summernote` (
`id` int(11) NOT NULL,
  `coretan` text
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `summernote`
--

INSERT INTO `summernote` (`id`, `coretan`) VALUES
(1, 'testing data'),
(4, '<p>halo swasono</p>'),
(5, '<p>hallo <b>tegar oke </b>sampai jumpa</p>');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ckeditor`
--
ALTER TABLE `ckeditor`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `summernote`
--
ALTER TABLE `summernote`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ckeditor`
--
ALTER TABLE `ckeditor`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `summernote`
--
ALTER TABLE `summernote`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
