-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 08, 2019 at 03:57 AM
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
-- Table structure for table `amount`
--

CREATE TABLE `amount` (
  `ManCode` varchar(5) NOT NULL,
  `MonthLyCost` int(11) NOT NULL,
  `CompanyInsurance` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('003', '434 Pham Dinh Chieu', 'Pham', 'Nam', '452452345', 'PhamNam1999@gmail.com', 'IT', 'Other', 'Web Development ', '04-03-1999', '5425454645', '9807708798', 'Kinh', 'Vietname', 'Christian', 'married', 'Bachelor', 'UET-VNU', '1'),
('1', '05 trang thi', 'Cao', 'Nhat', '094352454', 'caonhat999@gmail.com', 'IT', 'Male', 'Software Development', '10-06-1999', '4313244132', '54524523', 'Kinh', 'Vietnam', 'Buddhist', 'Single', 'Bachalor', 'UET-VNU', '0');

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
('1', 500000000);

-- --------------------------------------------------------

--
-- Table structure for table `Login`
--

CREATE TABLE `Login` (
  `EmployeeNumber` varchar(5) NOT NULL,
  `password` varchar(5) NOT NULL,
  `IsManager` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Login`
--

INSERT INTO `Login` (`EmployeeNumber`, `password`, `IsManager`) VALUES
('003', 'newpa', 0),
('1', '54321', 1);

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
('003', 20000000, 500000, 1000000, 21500000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amount`
--
ALTER TABLE `amount`
  ADD PRIMARY KEY (`ManCode`);

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
-- Indexes for table `salary`
--
ALTER TABLE `salary`
  ADD PRIMARY KEY (`EmployeeCode`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `Login`
--
ALTER TABLE `Login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`EmployeeNumber`) REFERENCES `employee_information` (`EmployeeCode`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `salary`
--
ALTER TABLE `salary`
  ADD CONSTRAINT `salary_ibfk_1` FOREIGN KEY (`EmployeeCode`) REFERENCES `employee_information` (`EmployeeCode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
