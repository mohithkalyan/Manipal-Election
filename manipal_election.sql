-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2016 at 02:24 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `manipal_election`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Name` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Role` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Username`, `Password`, `Role`) VALUES
('manu', 'manu123', '123456', 'Admin'),
('Vikram', 'vikram123', '123456', 'Associate');

-- --------------------------------------------------------

--
-- Table structure for table `builtin`
--

CREATE TABLE `builtin` (
  `Reg_no` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Password` varchar(13) NOT NULL,
  `Cgpa` float NOT NULL,
  `C_reg_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `builtin`
--

INSERT INTO `builtin` (`Reg_no`, `Name`, `Password`, `Cgpa`, `C_reg_no`) VALUES
(140299373, 'Karthik Sharma', '123456', 7.8, NULL),
(140299384, 'Deepika Kumar', '123456', 8.1, NULL),
(140299673, 'Rani Rahul', '123456', 8.1, NULL),
(140299674, 'Jeremy Goddard', '123456', 5, NULL),
(142776272, 'Wardhan Jakhad', '123456', 7.3, NULL),
(142782367, 'Mohnish Pandya', '123456', 8.3, NULL),
(143278774, 'Ganesh Anand', '123456', 7, NULL),
(145243627, 'Isha Mohan', '123456', 6.7, NULL),
(145672372, 'Nathan Nile', '123456', 7.7, NULL),
(145672837, 'Harry Kane', '123456', 6.7, NULL),
(146273626, 'Bill Thornton', '123456', 7.9, NULL),
(147637827, 'Harry Potter', '123456', 7.9, NULL),
(147673756, 'Divya Kumar', '123456', 6.8, NULL),
(147827382, 'Woody Allen', '123456', 8.1, NULL),
(148273922, 'Kenneth Seb', '123456', 8.7, NULL),
(148278374, 'Fernando Alonso', '123456', 9.2, NULL),
(148293828, 'Robin Williams', '123456', 7, NULL),
(148675373, 'Cal Al', '123456', 8.8, NULL),
(148738279, 'Husain Munim', '123456', 7.9, NULL),
(149000402, 'Bart Simpson', '123456', 7.5, NULL),
(149003999, 'Palak Verma', '123456', 7.6, NULL),
(149028737, 'Zoro Roronoa', '123456', 9.6, NULL),
(149033892, 'Tara Mehra', '123456', 8.9, NULL),
(149056728, 'Varun Shrivastav', '123456', 7.3, NULL),
(149082384, 'James Lannister', '123456', 7.9, NULL),
(149100018, 'Virat Kohli', '123456', 10, NULL),
(149102938, 'Shane Morris', '123456', 5.8, NULL),
(149105044, 'Niketa Jaiswal', '123456', 9, NULL),
(149105046, 'Juzer Khamosi', '123456', 8, NULL),
(149105048, 'Kanika Gera', '123456', 9.5, NULL),
(149105049, 'Ron Weasely', '123456', 8.9, NULL),
(149105058, 'Raj Koothrapali', '123456', 9.6, NULL),
(149105070, 'Sheldon Cooper', '123456', 9.9, NULL),
(149105072, 'Mohith Kalyan', '123456', 7, NULL),
(149105106, 'Shrey Sikka', '123456', 6.2, NULL),
(149105129, 'Shivank Mishra', '123456', 8, NULL),
 (149106784, 'Amy Sharma', '123456', 9, NULL),
(149107777, 'Aaron Schwartz', '123456', 9.7, NULL),
(149108301, 'Marcus Brownlee', '123456', 6.5, NULL),
(149112193, 'Arpit Gupta', '123456', 7.7, NULL),
(149120043, 'Vinita Tendulkar', '123456', 9.1, NULL),
(149129507, 'Sean Parker', '123456', 6.8, NULL),
(149140911, 'Juzer Khamosi', '123456', 9.8, NULL),
(149149293, 'Elon Musk', '123456', 7.47, NULL),
(149191010, 'Jamie Vardy', '123456', 9.4, NULL),
(149273827, 'Abraham Villiers', '123456', 9.3, NULL),
(149283728, 'Nilofer Saifee', '123456', 9.1, NULL),
(149283782, 'Michael Schumacher', '123456', 7.6, NULL),
(149348786, 'Mohammad Amir', '123456', 5.6, NULL),
(149666666, 'Homer Simpson', '123456', 10, NULL),
(149893742, 'Lokesh Lalani', '123456', 8.5, NULL),
(149894953, 'Samuel Jackson', '123456', 8.3, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `C_name` varchar(20) NOT NULL,
  `C_reg_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`C_name`, `C_reg_no`) VALUES
('Deepika Kumar', 140299384),
('Ritesh', 149056728),
('james', 149082384),
('Mohith', 149105072);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Name` varchar(20) NOT NULL,
  `Cgpa` float NOT NULL,
  `Password` varchar(13) NOT NULL,
  `C_reg_no` int(11) DEFAULT NULL,
  `username` int(11) NOT NULL,
  `register_check` int(1) DEFAULT NULL,
  `email_id` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Name`, `Cgpa`, `Password`, `C_reg_no`, `username`, `register_check`, `email_id`) VALUES
('Karthik Sharma', 6.8, '123', NULL, 140299373, NULL, 'karthik@gmail.com'),
('Deepika Kumar', 8, '123', 140299384, 140299384, 1, 'Deepika@gmail.com'),
('Mohith', 7.8, '123456', 149105072, 149105072, 1, 'mohith@gmail.com'),
('juzer', 6.7, '123456', 149105072, 149105046, NULL, 'juzer@muj.com'),
('james', 8.9, '123', 149082384, 149082384, 1, 'games@games.com'),
('gsdrg', 6, '123', 149105072, 140299674, NULL, 'gsdrg@gmail.com'),
('Ritesh', 8.9, '123456', 149105072, 149056728, 1, 'Ritesh@gmail.com'),
('surya', 5.6, '123456', 149056728, 149033892, NULL, 'surya@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Username`);

--
-- Indexes for table `builtin`
--
ALTER TABLE `builtin`
  ADD PRIMARY KEY (`Reg_no`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`C_reg_no`),
  ADD UNIQUE KEY `C_reg_no` (`C_reg_no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
