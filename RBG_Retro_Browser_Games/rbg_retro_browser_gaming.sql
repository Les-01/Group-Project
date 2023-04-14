-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2023 at 10:15 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `game_tbl`
--

CREATE TABLE `game_tbl` (
  `game_id` int(3) NOT NULL,
  `game_name` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `game_tbl`
--

INSERT INTO `game_tbl` (`game_id`, `game_name`) VALUES
(1, 'Snake'),
(2, 'Noughts and Crosses'),
(3, 'The Maze');

-- --------------------------------------------------------

--
-- Table structure for table `highscore_tbl`
--

CREATE TABLE `highscore_tbl` (
  `score_id` int(10) NOT NULL,
  `score` varchar(20) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `User_ID` int(10) NOT NULL,
  `game_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `highscore_tbl`
--

INSERT INTO `highscore_tbl` (`score_id`, `score`, `user_name`, `User_ID`, `game_id`) VALUES
(12, '5:20', 'Alan', 2, 2),
(13, '12:12', 'Bruce', 6, 2),
(14, '7:39', 'Les', 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `image_tbl`
--

CREATE TABLE `image_tbl` (
  `Image_ID` int(10) NOT NULL,
  `Image_Title` varchar(50) NOT NULL,
  `Image_Dir` varchar(50) NOT NULL,
  `User_ID` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8 COLLATE=hp8_english_ci;

--
-- Dumping data for table `image_tbl`
--

INSERT INTO `image_tbl` (`Image_ID`, `Image_Title`, `Image_Dir`, `User_ID`) VALUES
(14, 'ME', '../Images/Me.jpg', 10),
(9, 'OLLIE', '../Images/Ollie.jpg', 5);

-- --------------------------------------------------------

--
-- Table structure for table `snake_highscore_tbl`
--

CREATE TABLE `snake_highscore_tbl` (
  `score_id` int(10) NOT NULL,
  `score` int(10) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `User_ID` int(10) NOT NULL,
  `game_id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snake_highscore_tbl`
--

INSERT INTO `snake_highscore_tbl` (`score_id`, `score`, `user_name`, `User_ID`, `game_id`) VALUES
(1, 10, 'Alan', 2, 1),
(2, 55, 'Bruce', 6, 1),
(3, 25, 'Bob', 17, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `User_ID` int(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Fname` varchar(20) NOT NULL,
  `Sname` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gamer_Score` varchar(9999) NOT NULL,
  `Tier` text NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=hp8 COLLATE=hp8_english_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`User_ID`, `Username`, `Fname`, `Sname`, `Email`, `Gamer_Score`, `Tier`, `Password`) VALUES
(1, 'Beanz', 'Baked', 'Beans', 'Beany@helper.com', '0', 'User', '202cb962ac59075b964b07152d234b70'),
(2, 'Donny', 'Donald', 'Duck', 'donny@support.com', '0', 'User', '202cb962ac59075b964b07152d234b70'),
(5, 'Tester', 'Tester', 'Tester', 'Tester@support.com', '10', 'Tester', '4a7d1ed414474e4033ac29ccb8653d9b'),
(6, 'Admin', 'Admin', 'Tester', 'admin@support.com', 'MAX', 'Admin', '4a7d1ed414474e4033ac29ccb8653d9b'),
(10, 'Skuddz', 'Charles', 'Skudder', 'skudds@support.com', '101', 'User', '4a7d1ed414474e4033ac29ccb8653d9b'),
(15, 'Roccat', 'MK', 'Pro', 'roccat@mkpro.com', '0', 'User', '202cb962ac59075b964b07152d234b70'),
(16, 'User', 'User', 'User', 'user@support.com', '0', 'User', '4a7d1ed414474e4033ac29ccb8653d9b'),
(17, 'Venom', 'Ven', 'om', 'Venom@venom.com', '0', 'User', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game_tbl`
--
ALTER TABLE `game_tbl`
  ADD PRIMARY KEY (`game_id`);

--
-- Indexes for table `highscore_tbl`
--
ALTER TABLE `highscore_tbl`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `image_tbl`
--
ALTER TABLE `image_tbl`
  ADD PRIMARY KEY (`Image_ID`);

--
-- Indexes for table `snake_highscore_tbl`
--
ALTER TABLE `snake_highscore_tbl`
  ADD PRIMARY KEY (`score_id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`User_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `game_tbl`
--
ALTER TABLE `game_tbl`
  MODIFY `game_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `highscore_tbl`
--
ALTER TABLE `highscore_tbl`
  MODIFY `score_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `image_tbl`
--
ALTER TABLE `image_tbl`
  MODIFY `Image_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `snake_highscore_tbl`
--
ALTER TABLE `snake_highscore_tbl`
  MODIFY `score_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `User_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
