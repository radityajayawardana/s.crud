-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2023 at 02:42 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mycrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `host`
--

CREATE TABLE `host` (
  `id` int(11) NOT NULL,
  `np` varchar(50) NOT NULL,
  `disk` varchar(100) NOT NULL,
  `band` varchar(100) NOT NULL,
  `sq` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `link` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `host`
--

INSERT INTO `host` (`id`, `np`, `disk`, `band`, `sq`, `harga`, `link`) VALUES
(1, 'Pemula', '5GB SSD', '50GB Bandwidth', '50 Database', 8000, ''),
(2, 'Agak Jago', '10GB SSD', '100GB Bandwidth', '100 Database', 15000, ''),
(3, 'Jago dikit', '20GB SSD', '200GB Bandwidth', '200 Database', 20000, ''),
(6, 'S.Kom', '50GB SSD Enterprise', 'Unlimited Bandwidth', '500 Database', 49500, ''),
(7, 'Sarjana CRUD', '2TB HDD Enterprise', 'Unlimited Bandwidth', 'Unlimited Database', 85900, ''),
(8, 'Sepuh GNU', '500GB SSD Enterprise', 'Unlimited Bandwidth', 'Unlimited Database', 189050, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `host`
--
ALTER TABLE `host`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `host`
--
ALTER TABLE `host`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
