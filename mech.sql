-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2018 at 05:19 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mech`
--

-- --------------------------------------------------------

--
-- Table structure for table `myusers`
--

CREATE TABLE `myusers` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `License` int(11) NOT NULL,
  `Registration` int(11) NOT NULL,
  `Dt` date NOT NULL,
  `Mechanix` varchar(50) NOT NULL,
  `Vacancy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myusers`
--

INSERT INTO `myusers` (`ID`, `Name`, `Address`, `Phone`, `License`, `Registration`, `Dt`, `Mechanix`, `Vacancy`) VALUES
(33, 'Tanzim', '592 Kajla', 1737102299, 1231231231, 2147483647, '2018-01-25', 'Ricky Ponting', 5),
(34, 'Tahsina', 'Badda, Dhaka', 1779410830, 194732748, 2147483647, '2018-03-25', 'Shane Bond', 5),
(35, 'Imam', 'Baishakhi Sharani ', 1719381510, 123123, 123123123, '2018-08-26', 'Harshell Gibbs', 5),
(36, 'Safat', 'TB Gate', 17875877, 2147483647, 123123123, '0000-00-00', 'Sachin Tendulker', 5),
(37, 'Burhan', 'aqwfewf', 123123, 123123123, 12312312, '2018-01-31', 'Sachin Tendulker', 5),
(38, 'Imam', 'Baishakhi Sharani', 1719381510, 12896189, 8768, '0000-00-00', 'Shane Bond', 5),
(39, 'Tarik Aziz', '334 rHajman', 1273896, 8687, 97987576, '2018-02-07', 'Brian Lara', 5),
(40, 'Shakib', 'Banani,Dhaka', 6, 23423, 23423432, '0000-00-00', 'Ricky Ponting', 5),
(41, 'Tahsina', '254324dfb', 234234, 234234, 234234, '0000-00-00', 'Sachin Tendulker', 5),
(42, 'Behroz Newaz Khan', 'Gulshan 50k', 175878967, 2147483647, 2147483647, '0000-00-00', 'Brian Lara', 5),
(43, 'Imam Ush Shaheed', 'Adarsha nagari Badda ', 1719381510, 1092687126, 2147483647, '2018-03-08', 'Shane Bond', 5),
(44, 'asdsdas', 'asdasd', 123123123, 123123, 123132, '2018-01-31', 'Ricky Ponting', 5),
(45, 'asdasda', 'asdasd', 12123123, 123123, 123123, '2018-01-31', 'Ricky Ponting', 5),
(46, 'feewf', '`12`12', 12121, 141231, 11212, '2018-01-31', 'Ricky Ponting', 5),
(47, 'adfsdsf', 'asfdsf', 1212, 121212121, 1212132, '2018-01-31', 'Ricky Ponting', 5),
(48, 'Tanzim', 'Badda 1212', 2147483647, 2147483647, 2147483647, '2018-06-06', 'Ricky Ponting', 5),
(49, 'Julekha', 'Bandhobpur', 87589709, 124124, 123123, '2018-06-02', 'Ricky Ponting', 5),
(50, 'Gabay', 'Ghana', 7709789, 124, 97678709, '2018-06-02', 'Ricky Ponting', 5),
(51, 'Torres', 'Soain 12312', 1297368, 659090, 2147483647, '2018-06-02', 'Ricky Ponting', 5),
(52, 'Xavi', 'Barca', 89908778, 2147483647, 8674598, '2018-06-02', 'Sachin Tendulker', 5),
(53, 'Tahdina Naz needn', 'Kajla', 125189237, 2147483647, 2147483647, '2018-02-21', 'Ricky Ponting', 5);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `Id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `License` int(11) NOT NULL,
  `Registration` int(11) NOT NULL,
  `Dt` date NOT NULL,
  `Vacancy` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `Phone` int(11) NOT NULL,
  `License` int(11) NOT NULL,
  `Registration` int(11) NOT NULL,
  `Date` date NOT NULL,
  `Vacancy` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `myusers`
--
ALTER TABLE `myusers`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `myusers`
--
ALTER TABLE `myusers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
