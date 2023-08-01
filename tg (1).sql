-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 01:48 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tg`
--

-- --------------------------------------------------------

--
-- Table structure for table `manufaturer`
--

CREATE TABLE `manufaturer` (
  `id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `stock_id` int(225) DEFAULT NULL,
  `model_id` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `manufaturer`
--

INSERT INTO `manufaturer` (`id`, `Name`, `stock_id`, `model_id`) VALUES
(1, 'TOYOTA', 1, NULL),
(2, 'SUZUKI(28,665)', 1, 14),
(3, 'SUNZU', NULL, 6),
(4, 'RAVER', NULL, 7),
(5, 'SUNZU', NULL, 6),
(6, 'RAVER', NULL, 7),
(7, 'HINI(1,482)', 6, 7),
(8, 'BMW (13,205)', 7, 15);

-- --------------------------------------------------------

--
-- Table structure for table `model`
--

CREATE TABLE `model` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `numberofvehicles` int(11) DEFAULT NULL,
  `price_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `model`
--

INSERT INTO `model` (`id`, `name`, `numberofvehicles`, `price_name`) VALUES
(6, 'COROLLA', 20, '5000000'),
(7, 'CROWN', 3, '11000000'),
(12, 'COMO(114)', 20, '4567800'),
(13, 'GALA(3)', 3, '654780000'),
(14, 'Canter', 44, '40000000'),
(15, 'Alphard', 605, '35000000'),
(16, '117Couple(7)', 8, '125000000'),
(17, '114(14)', 2, '40000000'),
(18, '02Bed30(1)', 1, '40000000'),
(19, '15000(2)', 2, '25000000');

-- --------------------------------------------------------

--
-- Table structure for table `price`
--

CREATE TABLE `price` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `model_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `price`
--

INSERT INTO `price` (`id`, `name`, `model_id`) VALUES
(1, 'Tsh12000000', 1),
(2, 'Tsh15000000', 1),
(3, 'Tsh35000000', 15),
(4, 'Tsh16000000', 14),
(5, 'Tsh35000000', 15),
(6, 'Tsh40000000', 14),
(7, 'Tsh14000000', NULL),
(8, 'Tsh12500000', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `PhoneNumber` int(255) NOT NULL,
  `userName` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `PhoneNumber`, `userName`, `password`, `Email`, `company`) VALUES
(1, 673090766, 'Peter', 'Charles', NULL, NULL),
(2, 621027293, 'frola', 'frola', NULL, NULL),
(3, 621027293, 'frola', 'frola', NULL, NULL),
(4, 123, '', '', NULL, NULL),
(5, 123, '0712457724', '', NULL, NULL),
(6, 123, '0712457724', '', NULL, NULL),
(7, 0, '', '', ' ', ''),
(9, 1234, '0712457724', '0766666666', 'kila@gmail.com ', 'kilakona'),
(10, 1234, '0712457728', '0766666666', 'kila@gmail.com8 ', 'kilakona6'),
(12, 1234, '071245772476', '0712457727', 'kilal@gmail.com ', 'kilakonah'),
(13, 0, 'frola', '0621027293', 'kila@gmail.com ', 'frolaa');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `id` int(11) NOT NULL,
  `type_id` int(255) DEFAULT NULL,
  `price_id` int(224) DEFAULT NULL,
  `image` varchar(100) NOT NULL,
  `manufacturer_id` int(40) DEFAULT NULL,
  `model_id` int(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`id`, `type_id`, `price_id`, `image`, `manufacturer_id`, `model_id`) VALUES
(10, 1, 1, '64ae4ff71787f5.73440579.jpg', 0, 0),
(11, 1, 1, '64ae506563c905.55485629.jpg', 0, 0),
(13, 8, 6, '64ae5527cd42c0.69880083.jpg', 0, 0),
(14, 8, 6, '64ae553f04d7e5.18893822.jpg', 0, 0),
(15, 7, 5, '64ae555a81a3c4.58392492.jpg', 0, 0),
(16, 4, 5, '64ae5578242130.75643939.jpg', 0, 0),
(17, 6, 5, '64ae55a1f274f0.86637990.jpg', 0, 0),
(18, 6, 5, '64ae55c505e5b6.95544742.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `id` int(40) NOT NULL,
  `name` varchar(243) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`id`, `name`) VALUES
(1, 'BUS'),
(19, 'Convertible'),
(2, 'COUPE'),
(3, 'HATCHBACK'),
(18, 'Machinery'),
(4, 'MINIVANI'),
(5, 'NISSAN'),
(20, 'Others'),
(6, 'PICK UP '),
(7, 'SUV'),
(17, 'Tractor'),
(8, 'WAGON');

-- --------------------------------------------------------

--
-- Table structure for table `year`
--

CREATE TABLE `year` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `year`
--

INSERT INTO `year` (`id`, `name`) VALUES
(38, '1992'),
(1, '2005'),
(2, '2006'),
(3, '2007'),
(4, '2008'),
(5, '2009'),
(6, '2010'),
(7, '2011'),
(8, '2012'),
(9, '2013'),
(10, '2014'),
(11, '2015'),
(12, '2016'),
(13, '2017'),
(14, '2018'),
(15, '2019'),
(31, '2020'),
(32, '2021'),
(37, '2031');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `manufaturer`
--
ALTER TABLE `manufaturer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `model_id` (`model_id`);

--
-- Indexes for table `model`
--
ALTER TABLE `model`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `price`
--
ALTER TABLE `price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `company` (`company`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `year`
--
ALTER TABLE `year`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `manufaturer`
--
ALTER TABLE `manufaturer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `model`
--
ALTER TABLE `model`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `price`
--
ALTER TABLE `price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `stock`
--
ALTER TABLE `stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `year`
--
ALTER TABLE `year`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `manufaturer`
--
ALTER TABLE `manufaturer`
  ADD CONSTRAINT `manufaturer_ibfk_1` FOREIGN KEY (`model_id`) REFERENCES `model` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
