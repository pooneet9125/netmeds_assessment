-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 08:53 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_labs`
--

-- --------------------------------------------------------

--
-- Table structure for table `baskets`
--

CREATE TABLE `baskets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  `common_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` int(11) NOT NULL,
  `testId` varchar(255) DEFAULT NULL,
  `testName` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `best_seller` varchar(255) DEFAULT NULL,
  `testCount` int(10) DEFAULT NULL,
  `included_test` varchar(255) DEFAULT NULL,
  `url` varchar(255) DEFAULT NULL,
  `minPrice` int(10) DEFAULT NULL,
  `labName` varchar(255) DEFAULT NULL,
  `fasting` tinyint(1) DEFAULT NULL,
  `availableAt` tinyint(1) DEFAULT NULL,
  `popular` tinyint(1) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `objectID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `testId`, `testName`, `type`, `best_seller`, `testCount`, `included_test`, `url`, `minPrice`, `labName`, `fasting`, `availableAt`, `popular`, `category`, `objectID`) VALUES
(1, 'DIANM11', 'COVID-19 Test', 'Test', '', 1, '', 'covid-19-test', 4500, 'Metropolis', 0, 1, 0, 'path', 6045500),
(2, 'DIA2044', 'Eye Test- Vision Express', 'Test', '', 1, '', 'eye_test', 49, 'Vision Express', 0, 1, 0, 'path', 4562),
(3, 'DIAR894', 'Yttrium Therapy', 'Test', '', 1, '', 'Yttrium-Therapy-test-cost', 17500, '', 0, 2, 0, 'radio', 4461302),
(4, 'DIAR893', 'X Ray Wrist Lateral View', 'Test', '', 1, '', 'X-Ray-Wrist-Lateral-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461292),
(5, 'DIAR892', 'X Ray Wrist AP View', 'Test', '', 1, '', 'X-Ray-Wrist-AP-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461282),
(6, 'DIAR891', 'X Ray Wrist AP and Lateral View', 'Test', '', 1, '', 'X-Ray-Wrist-AP-and-Lateral-View-test-cost', 240, '', 0, 2, 0, 'radio', 4461272),
(7, 'DIAR890', 'X Ray Whole Spine Lateral View', 'Test', '', 1, '', 'X-Ray-Whole-Spine-Lateral-View-test-cost', 320, '', 0, 2, 0, 'radio', 4461262),
(8, 'DIAR889', 'X Ray Whole Spine Lateral and AP View', 'Test', '', 1, '', 'X-Ray-Whole-Spine-Lateral-and-AP-View-test-cost', 560, '', 0, 2, 0, 'radio', 4461252),
(9, 'DIAR888', 'X Ray Whole Spine AP View', 'Test', '', 1, '', 'X-Ray-Whole-Spine-AP-View-test-cost', 320, '', 0, 2, 0, 'radio', 4461242),
(10, 'DIAR887', 'X Ray Water View', 'Test', '', 1, '', 'X-Ray-Water-View-test-cost', 145, '', 0, 2, 0, 'radio', 4461232),
(11, 'DIAR886', 'X Ray Tm Joint Lateral View', 'Test', '', 1, '', 'X-Ray-Tm-Joint-Lateral-View-test-cost', 162, '', 0, 2, 0, 'radio', 4461222),
(12, 'DIAR885', 'X Ray Tm Joint AP View', 'Test', '', 1, '', 'X-Ray-Tm-Joint-AP-View-test-cost', 162, '', 0, 2, 0, 'radio', 4461212),
(13, 'DIAR884', 'X Ray Tm Joint AP and Lateral View', 'Test', '', 1, '', 'X-Ray-Tm-Joint-AP-and-Lateral-View-test-cost', 280, '', 0, 2, 0, 'radio', 4461202),
(14, 'DIAR883', 'X Ray Thumb Lateral View', 'Test', '', 1, '', 'X-Ray-Thumb-Lateral-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461192),
(15, 'DIAR882', 'X Ray Thumb Lateral and AP View', 'Test', '', 1, '', 'X-Ray-Thumb-Lateral-and-AP-View-test-cost', 240, '', 0, 2, 0, 'radio', 4461182),
(16, 'DIAR881', 'X Ray Thumb AP View', 'Test', '', 1, '', 'X-Ray-Thumb-AP-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461172),
(17, 'DIAR880', 'X Ray Thigh Lateral View', 'Test', '', 1, '', 'X-Ray-Thigh-Lateral-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461162),
(18, 'DIAR879', 'X Ray Thigh AP View', 'Test', '', 1, '', 'X-Ray-Thigh-AP-View-test-cost', 120, '', 0, 2, 0, 'radio', 4461152),
(19, 'DIAR878', 'X Ray Thigh AP and Lateral View', 'Package', '', 1, '', 'X-Ray-Thigh-AP-and-Lateral-View-test-cost', 240, '', 0, 2, 0, 'radio', 4461142),
(20, 'DIAR877', 'X ray Temp', 'Package', '', 1, '', 'X-ray-Temp-test-cost', 0, '', 0, 2, 0, 'radio', 4461132),
(21, 'DIAR877', 'X ray Temp', 'Package', '', 1, '', 'X-ray-Temp-test-cost', 0, '', 0, 2, 0, 'radio', 4461132),
(22, 'DIAR877', 'X ray Temp', 'Package', '', 1, '', 'X-ray-Temp-test-cost', 0, '', 0, 2, 0, 'radio', 4461132),
(23, 'DIAR877', 'X ray Temp', 'Package', '', 1, '', 'X-ray-Temp-test-cost', 0, '', 0, 2, 0, 'radio', 4461132),
(24, 'DIAR877', 'X ray Temp', 'Package', '', 1, '', 'X-ray-Temp-test-cost', 0, '', 0, 2, 0, 'radio', 4461132);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Vineet Verma', 'ervineet.k2591@gmail.com', '8hicprSY6ct6uPaOxyRxaXI7GoKxYlB8C19mkakHOk5OLHuToOC8X2SEVmJ3CUXFEAh2bZ1fd2zBpYgxvFQ58w==');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baskets`
--
ALTER TABLE `baskets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`test_id`),
  ADD KEY `common_id` (`common_id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baskets`
--
ALTER TABLE `baskets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
