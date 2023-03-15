-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 14, 2023 at 08:50 PM
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `image_tbl`
--

INSERT INTO `image_tbl` (`Image_ID`, `Image_Title`, `Image_Dir`, `User_ID`) VALUES
(1, 'BLACK BLOCKS', '../Images/3d-black-cube-4r-2560x1440.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

DROP TABLE IF EXISTS `user_tbl`;
CREATE TABLE IF NOT EXISTS `user_tbl` (
  `User_ID` int(10) NOT NULL AUTO_INCREMENT,
  `Username` varchar(30) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gamer_Score` varchar(9999) NOT NULL,
  `Tier` text NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`User_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=hp8;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`User_ID`, `Username`, `Fname`, `Sname`, `Email`, `Gamer_Score`, `Tier`, `Password`) VALUES
(1, 'Beanz', 'Baked', 'Beans', 'Beany@helper.com', '0', 'User', '202cb962ac59075b964b07152d234b70'),
(2, 'Donny', 'Donald', 'Duck', 'donny@support.com', '0', 'User', '202cb962ac59075b964b07152d234b70'),
(5, 'Tester', 'Tester', 'Tester', 'Tester@support.com', '10', 'Tester', '4a7d1ed414474e4033ac29ccb8653d9b'),
(6, 'Admin', 'Admin', 'Tester', 'admin@support.com', 'MAX', 'Admin', '4a7d1ed414474e4033ac29ccb8653d9b'),
(10, 'User', 'User', 'Tester', 'user@support.com', '101', 'User', '4a7d1ed414474e4033ac29ccb8653d9b'),
(15, 'Roccat', 'MK', 'Pro', 'roccat@mkpro.com', '0', 'User', '202cb962ac59075b964b07152d234b70');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
