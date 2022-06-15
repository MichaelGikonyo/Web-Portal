-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2021 at 10:18 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_platform`
--

-- --------------------------------------------------------

--
-- Table structure for table `autospare`
--

CREATE TABLE `autospare` (
  `id` int(255) NOT NULL,
  `ExpenItem` varchar(255) NOT NULL,
  `ExpenDetail` varchar(255) NOT NULL,
  `ExpenQuantity` int(255) NOT NULL,
  `ExpenPrice` int(255) NOT NULL,
  `ExpenAmount` int(255) NOT NULL,
  `reff_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autospare`
--

INSERT INTO `autospare` (`id`, `ExpenItem`, `ExpenDetail`, `ExpenQuantity`, `ExpenPrice`, `ExpenAmount`, `reff_id`) VALUES
(4, ' bv', 'bvc', 0, 5, 5, 484),
(5, 'suspe', 're', 3, 2, 9, 484);

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` int(255) NOT NULL,
  `ExpenItem` varchar(255) NOT NULL,
  `ExpenDetail` varchar(255) NOT NULL,
  `ExpenQuantity` int(255) NOT NULL,
  `ExpenPrice` int(255) NOT NULL,
  `ExpenAmount` int(255) NOT NULL,
  `reff_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id`, `ExpenItem`, `ExpenDetail`, `ExpenQuantity`, `ExpenPrice`, `ExpenAmount`, `reff_id`) VALUES
(4, 'bv', 'vd', 2, 2, 2, 484),
(5, 'raw', 'wa', 4, 5, 20, 484);

-- --------------------------------------------------------

--
-- Table structure for table `communication`
--

CREATE TABLE `communication` (
  `id` int(255) NOT NULL,
  `ExpenItem` varchar(255) NOT NULL,
  `ExpenDetail` varchar(255) NOT NULL,
  `ExpenQuantity` int(255) NOT NULL,
  `ExpenPrice` int(255) NOT NULL,
  `ExpenAmount` int(255) NOT NULL,
  `reff_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `communication`
--

INSERT INTO `communication` (`id`, `ExpenItem`, `ExpenDetail`, `ExpenQuantity`, `ExpenPrice`, `ExpenAmount`, `reff_id`) VALUES
(4, 'bg', 'v', 4, 4, 4, 484),
(5, 'saf', 'cred', 3, 20, 60, 484);

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

CREATE TABLE `details` (
  `id` int(11) NOT NULL,
  `location` text NOT NULL,
  `clientName` varchar(40) NOT NULL,
  `dater` date NOT NULL,
  `dated` date NOT NULL,
  `UploadTime` timestamp(6) NOT NULL DEFAULT current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `location`, `clientName`, `dater`, `dated`, `UploadTime`) VALUES
(484, 'Thika', 'Klob ltd', '2020-12-02', '2020-12-23', '2021-01-04 07:09:49.392067');

-- --------------------------------------------------------

--
-- Table structure for table `drillfoam`
--

CREATE TABLE `drillfoam` (
  `id` int(255) NOT NULL,
  `ExpenItem` varchar(255) NOT NULL,
  `ExpenDetail` varchar(255) NOT NULL,
  `ExpenQuantity` int(255) NOT NULL,
  `ExpenPrice` int(255) NOT NULL,
  `ExpenAmount` int(255) NOT NULL,
  `reff_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drillfoam`
--

INSERT INTO `drillfoam` (`id`, `ExpenItem`, `ExpenDetail`, `ExpenQuantity`, `ExpenPrice`, `ExpenAmount`, `reff_id`) VALUES
(4, 'bv', 'vd', 0, 2, 2, 484),
(5, 'crystal', 'cry', 3, 700, 2100, 484);

-- --------------------------------------------------------

--
-- Table structure for table `drillfuel`
--

CREATE TABLE `drillfuel` (
  `id` int(255) NOT NULL,
  `ExpenItem` varchar(255) NOT NULL,
  `ExpenDetail` varchar(255) NOT NULL,
  `ExpenQuantity` int(255) NOT NULL,
  `ExpenPrice` int(255) NOT NULL,
  `ExpenAmount` int(255) NOT NULL,
  `reff_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `drillfuel`
--

INSERT INTO `drillfuel` (`id`, `ExpenItem`, `ExpenDetail`, `ExpenQuantity`, `ExpenPrice`, `ExpenAmount`, `reff_id`) VALUES
(4, ' v', 'bv', 2, 2, 2, 484),
(5, 'Petro', 'refill', 20, 100, 2000, 484);

-- --------------------------------------------------------

--
-- Table structure for table `filekey`
--

CREATE TABLE `filekey` (
  `id` int(255) NOT NULL,
  `orid` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `filekey`
--

INSERT INTO `filekey` (`id`, `orid`) VALUES
(488, 461);

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` int(255) NOT NULL,
  `img_pdf` varchar(255) NOT NULL,
  `reff_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`id`, `img_pdf`, `reff_id`) VALUES
(845, 'FILES/-pexels-snapwire-34950 - Copy - Copy.jpg', 484),
(846, 'FILES/484-advent-5784271_1920.jpg', 484);

-- --------------------------------------------------------

--
-- Table structure for table `login_user`
--

CREATE TABLE `login_user` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login_user`
--

INSERT INTO `login_user` (`id`, `name`, `user_name`, `password`) VALUES
(1, 'Mikels', 'mikels@coseke.com', '25d55ad283aa400af464c76d713c07ad'),
(2, 'Nicholas', 'nicholas@aquifer.com', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `miscell`
--

CREATE TABLE `miscell` (
  `id` int(255) NOT NULL,
  `ExpenItem` varchar(255) NOT NULL,
  `ExpenDetail` varchar(255) NOT NULL,
  `ExpenQuantity` varchar(255) NOT NULL,
  `ExpenPrice` int(255) NOT NULL,
  `ExpenAmount` int(255) NOT NULL,
  `reff_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `miscell`
--

INSERT INTO `miscell` (`id`, `ExpenItem`, `ExpenDetail`, `ExpenQuantity`, `ExpenPrice`, `ExpenAmount`, `reff_id`) VALUES
(4, 'other', 'rother', '1', 13, 143, 484);

-- --------------------------------------------------------

--
-- Table structure for table `move`
--

CREATE TABLE `move` (
  `id` int(255) NOT NULL,
  `ExpenItem` varchar(255) NOT NULL,
  `ExpenDetail` varchar(255) NOT NULL,
  `ExpenQuantity` int(255) NOT NULL,
  `ExpenPrice` int(255) NOT NULL,
  `ExpenAmount` int(255) NOT NULL,
  `reff_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `move`
--

INSERT INTO `move` (`id`, `ExpenItem`, `ExpenDetail`, `ExpenQuantity`, `ExpenPrice`, `ExpenAmount`, `reff_id`) VALUES
(8, 'Staff', 'to site', 3, 50, 150, 484),
(13, 'qq', 'rum run', 5, 20, 100, 484);

-- --------------------------------------------------------

--
-- Table structure for table `pdf`
--

CREATE TABLE `pdf` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `filekey` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pdf`
--

INSERT INTO `pdf` (`id`, `filename`, `filekey`) VALUES
(34, 'FILES/12-ashampoo_licenses.pdf', 12),
(35, 'FILES/12-flowers-324175_1920.jpg', 12),
(36, 'FILES/12-bird-349026_1920.jpg', 12);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autospare`
--
ALTER TABLE `autospare`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communication`
--
ALTER TABLE `communication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `details`
--
ALTER TABLE `details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drillfoam`
--
ALTER TABLE `drillfoam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drillfuel`
--
ALTER TABLE `drillfuel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `filekey`
--
ALTER TABLE `filekey`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_user`
--
ALTER TABLE `login_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `miscell`
--
ALTER TABLE `miscell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `move`
--
ALTER TABLE `move`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pdf`
--
ALTER TABLE `pdf`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autospare`
--
ALTER TABLE `autospare`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `communication`
--
ALTER TABLE `communication`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `details`
--
ALTER TABLE `details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=485;

--
-- AUTO_INCREMENT for table `drillfoam`
--
ALTER TABLE `drillfoam`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `drillfuel`
--
ALTER TABLE `drillfuel`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `filekey`
--
ALTER TABLE `filekey`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=489;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=847;

--
-- AUTO_INCREMENT for table `login_user`
--
ALTER TABLE `login_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `miscell`
--
ALTER TABLE `miscell`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `move`
--
ALTER TABLE `move`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `pdf`
--
ALTER TABLE `pdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
