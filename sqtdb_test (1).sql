-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 17, 2018 at 01:56 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sqtdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `sqtdb_test`
--

CREATE TABLE `sqtdb_test` (
  `Id` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `picture` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sqtdb_test`
--

INSERT INTO `sqtdb_test` (`Id`, `name`, `email`, `password`, `picture`) VALUES
('', '', '', 'sde', 'photos/'),
('Davematics', 'Ogwuche David', 'davgwuche@gmail.com', '1234567', 'photos/'),
('Davematics7', '', '', '', 'photos/'),
('Davematics7vghuji', 'Ogwuche David', 'davgwuche@gmail.com', '12', 'photos/'),
('Davematicsfghj', '', 'agroexpandw@gmail.com', '12345', 'photos/');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sqtdb_test`
--
ALTER TABLE `sqtdb_test`
  ADD PRIMARY KEY (`Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
