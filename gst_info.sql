-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2021 at 11:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `err_404`
--

-- --------------------------------------------------------

--
-- Table structure for table `gst_info`
--

CREATE TABLE `gst_info` (
  `id` int(11) NOT NULL,
  `invoice_no` varchar(100) NOT NULL,
  `invoice_date` date NOT NULL,
  `pnr_no` varchar(11) NOT NULL,
  `passenger_name` varchar(100) NOT NULL,
  `passenger_add` varchar(200) NOT NULL,
  `gst_no` varchar(200) NOT NULL,
  `gst_name` varchar(200) NOT NULL,
  `flight_no` int(11) NOT NULL,
  `flight_date` date NOT NULL,
  `flight_from` varchar(100) NOT NULL,
  `flight_to` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gst_info`
--

INSERT INTO `gst_info` (`id`, `invoice_no`, `invoice_date`, `pnr_no`, `passenger_name`, `passenger_add`, `gst_no`, `gst_name`, `flight_no`, `flight_date`, `flight_from`, `flight_to`) VALUES
(1, 'FHSD210200002600', '2021-01-07', 'XAQFLK', 'FMLAN MD', '', '27AADQA8693L1ZX', '8788438099', 1543, '2021-02-02', 'HYD', 'BLR'),
(2, 'FQQU210200003697', '0000-00-00', 'ZUVFFS', 'NaQhu	LaEna KFLan', '', '36AAKQA1860H2ZX', 'AllvSFXfEZaLeFXluEFXnFALFvaEeLFmFEe', 536, '2021-03-03', 'HYD', 'CCU'),
(3, 'FMLL210200005499', '2020-11-10', 'UZ9EAV', 'EeFEFnL	EeFE', '', '07AAMQX5420A2Z2', 'EaFeMSULEE', 3355, '2021-06-10', 'CCU', 'MAA'),
(4, 'FANQ210200001443', '0000-00-00', 'Z65H5Q', 'NASAK	MFLA', '', '19AAMEE2222Q1Z3', 'FQM ELavel FXluEFXnF (FndFa) AvE LEd', 675, '2021-02-01', 'BLR', 'DEL'),
(5, 'FANQ210200001443', '2021-01-13', 'U268VA', 'ALLaZal	FhZeEa', '', '27AAAQK7308N1Z8', 'MFLLAFXFE LFMFEED', 729, '2021-05-15', 'PNQ', 'DEL'),
(6, 'FDEL210200005635', '0000-00-00', 'U268VA', 'ALLaZal	DaLFh', '', '27AAAQK7308N1Z8', 'MFLLAFXFE LFMFEED', 729, '2021-05-15', 'PNQ', 'DEL'),
(7, 'FMAA210200002179', '0000-00-00', 'XVFVHV', 'F5 Nav EeFEFnL	F5 Nav EeFEFnL', '', '97AAMQL8542K1Z4', 'AMQD LED', 995, '2021-02-20', 'DEL', 'BLR'),
(8, 'FMAA210200002179', '0000-00-00', 'A64EZN', 'KumaL	AeeSuFh', '', '27AALQQ6570J1ZQ', 'QXMAX EXAELE FNDFA ALFVAEE LFMFEED', 1426, '2021-02-05', 'PNQ', 'JAI'),
(9, 'FMAA210200002179', '2020-10-06', 'DV2LKF', 'EMA	F', '', '19AMEFA7426M1Z2', 'AFL FQ', 966, '2021-03-12', 'DEL', 'IXB'),
(10, 'FMAA210200002179', '0000-00-00', 'L2V1QM', 'FEAE	EXELA', '', '27AAMQM0984E1ZV', 'MalmeL LaZLFe and QX LEd', 0, '2021-02-04', 'GAU', 'BOM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gst_info`
--
ALTER TABLE `gst_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gst_info`
--
ALTER TABLE `gst_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
