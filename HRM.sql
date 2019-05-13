-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 13, 2019 at 09:40 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `HRM`
--

-- --------------------------------------------------------

--
-- Table structure for table `absence_bonus`
--

CREATE TABLE `absence_bonus` (
  `emID` varchar(5) NOT NULL,
  `absence_allow` int(11) NOT NULL,
  `late_allow` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absence_bonus`
--

INSERT INTO `absence_bonus` (`emID`, `absence_allow`, `late_allow`) VALUES
('001', 5, 5),
('002', 5, 5),
('003', 5, 5),
('004', 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `employee_information`
--

CREATE TABLE `employee_information` (
  `EmployeeCode` varchar(5) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `PhoneNumber` varchar(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `JobPosition` varchar(50) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `DateOfBirth` varchar(15) NOT NULL,
  `IdentityNumber` varchar(10) NOT NULL,
  `PassportNumber` varchar(10) NOT NULL,
  `Ethnic` varchar(50) NOT NULL,
  `Nationality` varchar(100) NOT NULL,
  `Religion` varchar(10) NOT NULL,
  `Marriage` varchar(10) NOT NULL,
  `Degree` varchar(50) NOT NULL,
  `University/College` varchar(50) NOT NULL,
  `ManagerCode` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_information`
--

INSERT INTO `employee_information` (`EmployeeCode`, `Address`, `LastName`, `FirstName`, `PhoneNumber`, `email`, `JobPosition`, `Gender`, `Department`, `DateOfBirth`, `IdentityNumber`, `PassportNumber`, `Ethnic`, `Nationality`, `Religion`, `Marriage`, `Degree`, `University/College`, `ManagerCode`) VALUES
('001', '10TrangThi-Hanoi', 'Cao Minh', 'Nhat', '0982435324', 'caonhat99@gmail.com', 'IT', 'Male', 'Software Development', '10-06-1999', '54135134', '51345123', 'Kinh', 'Vietnam', 'Buddhist', 'single', 'Bachelor In Computer Science', 'UET-VNU', ''),
('002', '35 Phu Li - Hanoi', 'PhamHoang', 'Nam', '09523451', 'PhamNam999@gmail.com', 'IT', 'Male', 'Software Development', '24-6-1999', '67353546', '74567547', 'Kinh', 'VietNam', 'None', 'Married', 'Bachelor In Computer engineering', 'UET-VNU', '001'),
('003', '13 DE SONG HONG', 'DONG THI', 'Tien', '096078345', 'MrMoney99xx@gmail.com', 'Robotic Modeling', 'Male', 'Software Development', '30-02-1999', '420545635', '7354634', 'Tay', 'Vietnam', 'Other', 'Single', 'Robotic specialist', 'Kingstons', '001'),
('004', '502 Luong Yen', 'Nguyen Minh ', 'Thai', '09425234', 'rambo553@gmail.com', 'Web Developer', 'Male', 'SoftWare Engineering', '03-05-1999', '134435345', '2452345', 'Kinh', 'Vietnam', 'Buddhist', 'married', 'Bachelor of softeware engineering', 'Back Khoa', '0'),
('005', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `Funds`
--

CREATE TABLE `Funds` (
  `ManCode` varchar(5) NOT NULL,
  `fund money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Funds`
--

INSERT INTO `Funds` (`ManCode`, `fund money`) VALUES
('001', 110000000);

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `EmployeeNumber` varchar(5) NOT NULL,
  `password` varchar(10) NOT NULL,
  `IsManager` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`EmployeeNumber`, `password`, `IsManager`) VALUES
('001', 'Nhatc', 1),
('002', '12346', 0),
('003', '12347', 0),
('004', 'ThaiN', 0),
('005', 'nhat', 0);

-- --------------------------------------------------------

--
-- Table structure for table `moneyPaid`
--

CREATE TABLE `moneyPaid` (
  `EmployeeCode` varchar(5) NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `moneyPaid`
--

INSERT INTO `moneyPaid` (`EmployeeCode`, `Total`) VALUES
('001', 0),
('002', 0),
('003', 0),
('004', 0);

-- --------------------------------------------------------

--
-- Table structure for table `salary`
--

CREATE TABLE `salary` (
  `EmployeeCode` varchar(5) NOT NULL,
  `basic` int(11) NOT NULL,
  `bonus` int(11) NOT NULL,
  `Insurance` int(11) NOT NULL,
  `Total Net` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `salary`
--

INSERT INTO `salary` (`EmployeeCode`, `basic`, `bonus`, `Insurance`, `Total Net`) VALUES
('001', 35000000, 2000000, 10000000, 45200000),
('002', 20000000, 1000000, 15000000, 36000000),
('003', 25000000, 500000, 10000000, 35500000),
('004', 0, 0, 15000000, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absence_bonus`
--
ALTER TABLE `absence_bonus`
  ADD PRIMARY KEY (`emID`);

--
-- Indexes for table `employee_information`
--
ALTER TABLE `employee_information`
  ADD UNIQUE KEY `EmployeeCode` (`EmployeeCode`,`IdentityNumber`,`PassportNumber`);

--
-- Indexes for table `Funds`
--
ALTER TABLE `Funds`
  ADD PRIMARY KEY (`ManCode`);

--
-- Indexes for table `Login`
--
ALTER TABLE `Login`
  ADD PRIMARY KEY (`EmployeeNumber`);

--
-- Indexes for table `moneyPaid`
--
ALTER TABLE `moneyPaid`
  ADD PRIMARY KEY (`EmployeeCode`);

--
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`EmployeeCode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `absence_bonus`
--
ALTER TABLE `absence_bonus`
  ADD CONSTRAINT `absence_bonus_ibfk_1` FOREIGN KEY (`emID`) REFERENCES `employee_information` (`EmployeeCode`);

--
-- Constraints for table `Funds`
--
ALTER TABLE `Funds`
  ADD CONSTRAINT `funds_ibfk_1` FOREIGN KEY (`ManCode`) REFERENCES `employee_information` (`EmployeeCode`);

--
-- Constraints for table `Login`
--
ALTER TABLE `Login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`EmployeeNumber`) REFERENCES `employee_information` (`EmployeeCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `moneyPaid`
--
ALTER TABLE `moneyPaid`
  ADD CONSTRAINT `moneypaid_ibfk_1` FOREIGN KEY (`EmployeeCode`) REFERENCES `employee_information` (`EmployeeCode`);

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`EmployeeCode`) REFERENCES `employee_information` (`EmployeeCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
