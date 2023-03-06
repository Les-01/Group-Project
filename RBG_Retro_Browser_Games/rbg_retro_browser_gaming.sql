-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 05, 2023 at 11:15 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rbg_retro_browser_gaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `image_tbl`
--

DROP TABLE IF EXISTS `image_tbl`;
CREATE TABLE IF NOT EXISTS `image_tbl` (
  `Image_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Image_Title` varchar(50) NOT NULL,
  `Image_Dir` varchar(50) NOT NULL,
  `User_ID` int(10) NOT NULL,
  PRIMARY KEY (`Image_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=hp8;

-- --------------------------------------------------------

--
-- Table structure for table `user-tbl`
--

DROP TABLE IF EXISTS `user-tbl`;
CREATE TABLE IF NOT EXISTS `user-tbl` (
  `User_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Rank` text NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `user-tbl`
--

INSERT INTO `user-tbl` (`User_ID`, `Username`, `Fname`, `Sname`, `Email`, `Rank`, `Password`) VALUES
(1, 'Beanz', 'Baked', 'Beans', 'Beany@helper.com', 'User', '202cb962ac59075b964b07152d234b70'),
(2, 'Donny', 'Donald', 'Duck', 'donny@support.com', 'User', '202cb962ac59075b964b07152d234b70'),
(5, 'Tester', 'Tester', 'Tester', 'Tester@support.com', 'Tester', '4a7d1ed414474e4033ac29ccb8653d9b'),
(6, 'Admin', 'Admin', 'Tester', 'admin@support.com', 'Admin', '4a7d1ed414474e4033ac29ccb8653d9b'),
(10, 'User', 'User', 'Tester', 'user@support.com', 'User', '4a7d1ed414474e4033ac29ccb8653d9b');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
