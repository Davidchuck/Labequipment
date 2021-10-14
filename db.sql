-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2021 at 11:24 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `equipment`
--

-- --------------------------------------------------------

--
-- Table structure for table `equipment_master`
--

CREATE TABLE `equipment_master` (
  `Eqp_NoID` int(11) NOT NULL,
  `Eqp_name` varchar(30) NOT NULL,
  `Serial_No` varchar(50) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Equipment_Status` varchar(20) NOT NULL,
  `Received_on` date NOT NULL,
  `Installation_date` date NOT NULL,
  `Receiving_Condition` varchar(10) NOT NULL,
  `Supplier` varchar(20) NOT NULL,
  `Supplier_phone` int(15) NOT NULL,
  `Supplier_email` varchar(30) NOT NULL,
  `Date_Added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `equipment_master`
--

INSERT INTO `equipment_master` (`Eqp_NoID`, `Eqp_name`, `Serial_No`, `Department`, `Equipment_Status`, `Received_on`, `Installation_date`, `Receiving_Condition`, `Supplier`, `Supplier_phone`, `Supplier_email`, `Date_Added`) VALUES
(1, 'APC 650', '3B1418X17401', 'DATABASE', 'Okay', '2015-01-15', '2015-01-15', 'New', 'Enest Solutions', 738291345, 'xavier@enestsolutions.com', '2021-05-05 09:04:37'),
(2, 'APC 650', '331418X116628', 'DATABASE', 'Okay', '2015-01-15', '2015-01-15', 'New', 'Enest Solutions', 738291345, 'xavier@enestsolutions.com', '2021-05-05 09:04:41'),
(3, 'HP DESKTOP PRO PCIMT', '4CE95017R7', 'DATABASE', 'Okay', '2020-07-14', '2020-07-20', 'New', 'DEXIS', 725321232, 'info@dexis.co.ke', '2021-05-05 09:04:48'),
(4, 'Kyocera TASkalfa 4501i kx', 'L7Q6311318', 'DATABASE', 'Okay', '2018-08-31', '2018-09-03', 'New', 'KYOCERA', 726365138, 'info@groupmfi.com', '2021-05-05 09:04:54'),
(5, 'Vortex Mixer VM 2000', '1201018', 'Virology', 'Okay', '2012-09-01', '2013-01-01', 'New', 'Digisystems', 20609072, 'digilab@ms23.hinet.net', '2021-05-05 09:04:30'),
(6, 'M200sp', '10543', 'Virology', 'Okay', '2012-04-01', '2012-04-01', 'New', 'Abbott', 733612051, '', '2021-05-05 09:04:19'),
(7, 'M200rt', '275021324', 'Virology', 'Okay', '2012-04-01', '2012-04-12', 'New', 'Abbott', 733612051, '', '2021-04-30 09:28:32'),
(8, 'M2000 printer', 'N22106B-02', 'Virology', 'Okay', '2012-04-01', '2012-04-01', 'New', 'HP', 733612051, '', '2021-04-30 09:29:48'),
(9, 'EBA20 Centrifuge', '0107206', 'Virology', 'Okay', '2012-11-09', '2012-11-09', 'New', 'Hettich', 20609072, '', '2021-04-30 09:32:34'),
(10, 'Abbott M-2000 UPS', 'AQ3N3709R', 'Virology', 'Okay', '2012-04-01', '2012-04-01', 'New', 'Abbott', 733612051, '', '2021-04-30 09:56:18'),
(11, 'Abbott M-2000 UPS', 'VH20A10/1125A044', 'Virology', 'Okay', '2012-04-01', '2012-04-01', 'New', 'Abbott', 733612051, '', '2021-04-30 09:57:23'),
(12, 'Abbott M-2000 -CPU', 'CCP6990303/322009', 'Virology', 'Okay', '2012-04-01', '0012-04-01', 'New', 'Abbott', 733612051, '', '2021-04-30 10:02:32'),
(13, 'Abbott M-2000 -CPU', 'S2600063216', 'Virology', 'Okay', '2012-04-01', '2012-04-01', 'New', 'Abbott', 733612051, '', '2021-04-30 10:03:30'),
(14, 'ELTEK THERMOMETER', 'T-31287', 'Virology', 'Okay', '2018-03-12', '2018-03-12', 'New', 'DIASYS', 720410188, '', '2021-04-30 10:04:30'),
(15, 'AIR CONDITIONER VL1 & 2', 'R14A/CE', 'Virology', 'Okay', '2016-03-21', '2016-03-21', 'New', 'SMART CARE', 723254352, '', '2021-04-30 11:34:38'),
(16, 'LABNET PIPETTE 2', '744060243', 'Virology', 'Okay', '2018-02-12', '2018-02-12', 'New', 'LABNET', 721519399, '', '2021-04-30 11:35:36'),
(17, 'UPS VISUAL 2019', 'NBX650CLAF', 'Virology', 'Okay', '2014-02-21', '2014-02-24', 'New', 'APC', 733612051, '', '2021-04-30 11:36:50'),
(18, 'FRIDGE', '322541AL900009F', 'Virology', 'Okay', '2007-02-01', '2007-02-01', 'New', 'SAMSUNG', 723254352, '', '2021-04-30 11:37:55'),
(19, 'CPU', 'TRF4490PLB', 'Virology', 'Okay', '2015-04-30', '2015-04-30', 'New', 'HP, Enest Solutions', 738291345, 'xavier@enestsolutions.com', '2021-04-30 11:39:47'),
(20, 'UPS FacsCalibur', 'JS0944011697', 'Immunology', 'Okay', '2010-03-01', '2010-03-01', 'New', 'HP', 2147483647, '', '2021-05-05 08:50:25'),
(21, 'FRIDGE', 'VG_401', 'Immunology', 'Okay', '1998-07-01', '1998-07-01', 'New', 'Venus', 202252091, '', '2021-05-05 08:51:31'),
(22, 'facsCulibur', 'E97501134', 'Immunology', 'Okay', '2009-03-01', '2009-04-20', 'New', 'Becton Dicken', 2147483647, '', '2021-05-05 08:52:49'),
(23, 'Lab Special Mixer', '0309069', 'Immunology', 'Okay', '2009-03-01', '2009-04-01', 'New', 'LW Scientific', 2026090712, '', '2021-05-05 08:53:49'),
(24, 'Digital Mixer', '160222010', 'Immunology', 'Okay', '2017-09-01', '2017-09-01', 'New', 'Fisher scientific', 737493837, '', '2021-05-05 08:54:51'),
(25, 'CPU Facs Culibur', 'TE4395', 'Immunology', 'Okay', '2009-03-01', '2009-04-20', 'New', 'Apple', 2026090712, '', '2021-05-05 08:56:40'),
(26, 'Pipette', 'R78093A/1143', 'Immunology', 'Okay', '2018-04-04', '2018-04-04', 'New', 'Gilson', 728043653, '', '2021-05-05 08:57:41'),
(27, 'Timer', 'n/a', 'Immunology', 'Okay', '2013-05-14', '2013-05-14', 'New', 'Human', 728043653, '', '2021-05-05 08:58:33'),
(28, 'Presto Facs', 'R6224296', 'Immunology', 'Okay', '2017-10-10', '2017-10-10', 'New', 'BD', 726659989, '', '2021-05-05 08:59:22'),
(29, 'Digital UPS Facs Calibur', 'AS1713241756', 'Immunology', 'Okay', '2018-01-17', '2018-01-17', 'New', 'HP', 726659989, '', '2021-05-05 09:00:21'),
(30, 'Pipette-Immuno', '044050477/1028', 'Immunology', 'Okay', '2015-02-02', '2015-02-02', 'New', 'LABNET', 728043653, '', '2021-05-05 09:01:12'),
(31, 'Pro400 Laserjet', 'PHHBC02023', 'Immunology', 'Okay', '2018-01-17', '2018-01-17', 'New', 'HP', 726659989, '', '2021-05-05 09:02:22'),
(32, 'Humaclot', 'HC-6187', 'Haematology', 'Okay', '2017-04-11', '2017-04-11', 'New', 'Human', 724305085, '', '2021-05-05 09:03:23'),
(33, '224 Totten Server Rack', 'N/A', 'DATABASE', 'Okay', '2017-05-31', '2017-05-31', 'New', 'Dataposit', 729776649, '', '2021-05-05 09:08:31'),
(34, 'HP PRO 3500 Series MT', 'TRF43505LY', 'DATABASE', 'Okay', '2015-01-15', '2015-01-15', 'New', 'Enest Solutions', 738291345, 'xavier@enestsolutions.com', '2021-05-05 09:12:43'),
(35, 'EBA20 Centrifuge', '0013588', 'Haematology', 'Okay', '2003-01-01', '2003-01-01', 'New', 'Hettich', 2026090712, '', '2021-05-05 11:02:28'),
(36, 'MEDONIC', '14633', 'Haematology', 'Okay', '2010-01-01', '2010-01-01', 'New', 'Boule Medical (AB) M', 722909894, '', '2021-05-05 11:03:33'),
(37, 'Epson Printer LX-300+11', 'G8GY451045', 'Haematology', 'Okay', '2010-06-01', '2010-06-01', 'New', 'Epson', 0, '', '2021-05-05 11:04:41'),
(38, 'Hp laserjet printer', 'VNF8w40600', 'Haematology', 'Okay', '2019-12-15', '2019-12-15', 'New', 'HP', 726659989, '', '2021-05-05 11:06:17'),
(39, 'CPU HP pro ', 'DTVHLEM', 'Haematology', 'Okay', '2014-02-24', '2014-02-24', 'New', 'Crown', 723380695, '', '2021-05-05 11:07:35'),
(40, 'UPS Mindray', '121225E1500No2244', 'Haematology', 'Okay', '2014-02-24', '2014-02-24', 'New', 'Crown', 723803695, '', '2021-05-05 11:15:29'),
(41, 'Mindray BC-5300', '33103510', 'Haematology', 'Okay', '2014-04-24', '2014-04-24', 'New', 'Crown', 723803695, '', '2021-05-05 11:12:24'),
(42, 'Multifunctional Roller Mixer', 'N/A', 'Haematology', 'Okay', '2010-06-01', '2010-06-01', 'New', 'N/A', 20609072, '', '2021-05-05 11:14:18'),
(43, 'GeneXpert Machine', '806269', 'MTB', 'Okay', '2015-09-03', '2015-09-03', 'New', 'CEPHEID', 722539294, '', '2021-05-05 11:23:51'),
(44, 'HP Laserjet P3015', 'VNF8H5Y36N', 'MTB', 'Okay', '2015-09-03', '2015-05-03', 'New', 'HP', 722539294, '', '2021-05-05 11:24:55'),
(45, 'HP CPU', 'CZC4062QXQ', 'MTB', 'Okay', '2020-12-15', '2020-12-15', 'Used', 'HP', 722539294, '', '2021-05-05 11:26:42'),
(46, 'APC 950', '3B1509X18539', 'MTB', 'Okay', '2015-09-03', '2015-09-03', 'New', 'HP', 722539294, '', '2021-05-05 11:27:28'),
(47, 'GeneXpert Scanner', '206648302RA', 'MTB', 'Okay', '2015-09-03', '2015-09-03', 'New', 'HP', 722539294, '', '2021-05-05 11:28:14'),
(48, 'Safety Cabinet', '73623', 'Virology', 'Okay', '1998-06-01', '1998-06-01', 'New', 'Nuare', 20609072, '', '2021-05-05 11:35:57'),
(49, 'Incubator Model 310', 'Mso-08', 'Parasitology', 'Okay', '2006-03-01', '2006-03-01', 'OLD', 'USA', 20609072, '', '2021-05-05 11:38:07'),
(50, 'Microscope', 'MSO-USA', 'Parasitology', 'Okay', '2008-12-01', '2008-12-01', 'New', 'Olympus', 20609072, '', '2021-05-05 11:39:02'),
(51, 'Rotator', '1201074', 'Parasitology', 'Okay', '2012-09-11', '2013-01-10', 'New', 'Digisystems', 20609072, '', '2021-05-05 11:41:07'),
(52, 'Chest Freezer', '408TRTX91273', 'Parasitology', 'Okay', '2015-05-04', '2015-05-04', 'New', 'LG', 723254352, '', '2021-05-05 11:42:02'),
(53, 'HP Pro (Home Edition)', 'CZCO467ZC5', 'Parasitology', 'Okay', '2011-10-15', '2011-10-15', 'New', 'HP', 716692699, '', '2021-05-05 11:43:14'),
(54, 'Mindray MR 96A', 'WH-12101754', 'Parasitology', 'Okay', '2012-02-01', '2012-02-01', 'New', 'Crown', 723803695, '', '2021-05-05 11:44:01'),
(55, 'Timer', '7238', 'Parasitology', 'Okay', '2018-01-02', '2018-01-02', 'New', 'Human', 705833602, '', '2021-05-05 11:44:44'),
(56, 'p 200 Pipette', '644050244', 'Parasitology', 'Okay', '2018-06-06', '2018-06-06', 'New', 'LABNET', 728043653, '', '2021-05-05 11:45:29'),
(57, 'DCT-200 Centrifuge', 'CTZ-16070385', 'Parasitology', 'Okay', '2018-08-10', '2018-08-10', 'New', 'Digisystems', 728043653, '', '2021-05-05 11:46:18'),
(58, 'Eltek Temperature Monitoring S', 'EL-12113', 'Parasitology', 'Okay', '2018-03-12', '2018-03-12', 'New', 'DIASYS', 720410188, '', '2021-05-05 11:47:27'),
(59, 'p1000 Labnet', '744060217', 'Parasitology', 'Okay', '2018-08-03', '2018-08-03', 'New', 'LABNET', 728043653, '', '2021-05-05 11:48:06'),
(60, 'BACK UP 750', '3', '3B1807X24579', 'Okay', '2019-04-16', '2019-04-16', 'New', 'APC', 716692699, '', '2021-05-05 12:42:19'),
(61, 'THERMOMETER -2', '062-94-2', 'Parasitology', 'Okay', '2019-06-14', '2019-06-14', 'New', 'Chemoquip', 202655433, '', '2021-05-05 12:43:03'),
(62, 'ESCO CLASS 11 BSC', '2017-124101', 'Parasitology', 'Okay', '2018-01-23', '2018-01-29', 'New', 'Chemoquip', 733641982, '', '2021-05-05 12:43:57'),
(63, 'AIR CONDITIONER -PARASIT', '63229971413', 'Parasitology', 'Okay', '2019-07-16', '2019-07-16', 'New', 'INVENTOR', 733754638, '', '2021-05-05 12:44:47'),
(64, 'Finn pipette', 'V16368', 'Virology', 'Okay', '2015-02-11', '2021-03-01', 'New', 'Thermo Electron', 0, 'info.pipettes@thermo.com', '2021-05-05 12:46:29'),
(65, 'I-CHROMA', 'IR2NX151927', 'Bio-chemistry', 'Okay', '2017-12-20', '2017-12-20', 'New', 'MICROBIOLOGY', 723487399, '', '2021-05-05 13:56:49'),
(66, 'UPS BECKMAN COULTER', '310019979678007200/68', 'Bio-chemistry', 'Okay', '2017-03-31', '2017-03-31', 'New', 'TECHNOMED', 710105761, '', '2021-05-05 13:58:25'),
(67, 'ACCESS 2 IMMUNOASSAY', '505644', 'Bio-chemistry', 'Okay', '2017-03-31', '2017-03-31', 'New', 'BECKMAN COULTER', 708554356, '', '2021-05-05 13:59:22'),
(68, 'CPU HP COMPAQ', '3C851722PK', 'Bio-chemistry', 'Okay', '2014-02-24', '2014-02-24', 'OLD', 'HP', 2147483647, '', '2021-05-05 14:00:40'),
(69, 'FRIDGE', 'GRM342VML', 'Bio-chemistry', 'Okay', '2015-01-08', '2015-01-08', 'New', 'LG ELECTRONICS', 721694614, '', '2021-05-05 14:01:36'),
(70, 'Digital Thermometer', '810-090', 'Virology', 'Okay', '2021-04-16', '2021-04-19', 'New', 'Chemlabs', 2147483647, '', '2021-05-06 06:58:31'),
(71, 'Samsung Microwave Oven', '7MCCA01605', 'Reagent_Preparation ', 'Okay', '1995-01-01', '1995-01-01', 'New', 'SAMSUNG', 202609071, '', '2021-05-06 10:09:49'),
(72, 'Sophos Security Appliance', 'C0804E3RJ8YMD4C', 'DATABASE', 'Okay', '2017-05-31', '2017-05-31', 'New', 'Dataposit', 729776649, '', '2021-05-07 05:10:22'),
(73, 'DLINK DES 10160 SWITCH', 'J009W0712038001', 'DATABASE', 'Okay', '2017-05-31', '2017-05-31', 'New', 'Dataposit', 729776649, '', '2021-05-07 05:12:05'),
(74, 'TRIPPLE 3000 SMART UPS', '2025KY05N6270027', 'DATABASE', 'Okay', '2017-05-31', '2017-05-31', 'New', 'Dataposit', 729776649, '', '2021-05-07 05:16:07'),
(75, 'BACK UPS 650', '3B122680P686', 'DATABASE', 'Okay', '2013-07-13', '2013-07-13', 'New', 'APC', 716692699, '', '2021-05-07 05:17:12'),
(76, 'COMPAQ HP', 'TRF32204BR', 'DATABASE', 'Okay', '2012-07-13', '2013-07-13', 'New', 'HP', 716692699, '', '2021-05-07 05:17:56'),
(77, 'HP PRO', 'TRF43505MM', 'RECEPTION', 'Okay', '2015-06-15', '2017-06-15', 'New', 'HP', 716692699, '', '2021-05-07 05:24:05'),
(78, 'CANON PHOTOCOPIER, PRINTER', 'CD106(21)010420311', 'RECEPTION', 'Okay', '2010-06-01', '2010-06-01', 'New', 'Canon', 716692699, 'xavier@enestsolutions.com', '2021-05-07 05:25:16'),
(79, 'BACKUPS 650', '381325X09009', 'RECEPTION', 'Okay', '2014-05-20', '2014-05-20', 'New', 'APC', 716692699, 'xavier@enestsolutions.com', '2021-05-07 05:26:08'),
(80, 'SANYO MDF-U33V FREEZER', '11010038', 'Virology', 'Okay', '2011-05-12', '2011-05-12', 'New', 'SANYO', 723554125, '', '2021-05-07 11:29:27'),
(81, 'VORTEX VM-1000', '1201023', 'COVID-19', 'Okay', '2012-09-01', '2012-09-01', 'New', 'Digisystems', 202609071, '', '2021-07-19 13:10:51'),
(82, 'SENTOSA SX101', 'S075H1504622', 'COVID-19', 'Okay', '2021-04-16', '2021-04-16', 'New', 'BIO ZEQ KENYA', 2147483647, '', '2021-07-19 13:13:05'),
(83, 'FRIDGE/FREEZER', '0011WFQ00067', 'COVID-19', 'Okay', '2012-01-01', '2012-01-01', 'New', 'LG', 721694614, '', '2021-09-01 13:13:47'),
(84, 'ESCO CLASS 11 BSC', 'ASTMC1048', 'COVID-19', 'Okay', '2011-07-01', '2011-07-01', 'NEW', 'BIOTECH', 20609072, '', '2021-09-01 12:46:51'),
(85, 'MINI-SPIN CENTRIFUGE', '110110110', 'COVID-19', 'Okay', '2012-04-01', '2012-04-01', 'New', 'Fisher scientific', 2147483647, '', '2021-09-01 12:51:42'),
(86, 'DRYBATH', 'BA20BJ0001712', 'COVID-19', 'Okay', '2012-04-01', '2012-04-01', 'New', 'BIOLOGIX', 0, '', '2021-09-01 12:52:48'),
(87, 'ROTOR GENE Q', 'R0214714', 'COVID-19', 'Okay', '2021-04-16', '2021-04-16', 'NEW', 'BIO ZEQ KENYA', 2147483647, '', '2021-09-01 12:54:31'),
(88, 'TOMY MIXER', 'btt0322', 'COVID-19', 'Okay', '2012-04-01', '2012-04-01', 'New', 'TOMY SEIKO', 0, '', '2021-09-01 12:56:35');

-- --------------------------------------------------------

--
-- Table structure for table `servicing_details`
--

CREATE TABLE `servicing_details` (
  `servicing_detailsID` int(10) NOT NULL,
  `EqpNo` varchar(20) NOT NULL,
  `Eqp_NoID` varchar(20) NOT NULL,
  `Eqp_name` varchar(20) NOT NULL,
  `Supplier` varchar(20) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Service_date` date NOT NULL,
  `Serviced_by` varchar(20) NOT NULL,
  `Servicing_engphone` varchar(15) NOT NULL,
  `servicingdue_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `servicing_details`
--

INSERT INTO `servicing_details` (`servicing_detailsID`, `EqpNo`, `Eqp_NoID`, `Eqp_name`, `Supplier`, `Department`, `Service_date`, `Serviced_by`, `Servicing_engphone`, `servicingdue_date`) VALUES
(1, 'EQPNo3', '3', 'HP DESKTOP PRO PCIMT', 'DEXIS', 'DATABASE', '2021-07-28', 'David', '0721111111', '2021-10-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int(3) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `Date_Added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(50) DEFAULT NULL,
  `Active_Status` varchar(5) NOT NULL DEFAULT 'NO'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `fname`, `lname`, `password`, `Date_Added`, `username`, `Active_Status`) VALUES
(1, 'David', 'Irungu', '1', '2021-04-21 08:15:11', 'david', 'YES'),
(2, 'paul', 'Irungu', '$2y$10$E5NhaJeOP/nJ7UhKv0CD7ex1E901ojOIyIYQviXZxXgZ5BfAFzVMu', '2020-12-21 13:52:40', 'admin', 'NO'),
(3, 'david', 'Irungu', '$2y$10$mQzCNahFDWJ2vZR93cvnQ.reJ.EtGJQmPM55JUdJ.Z99PV/XijHdm', '2021-04-21 08:08:10', 'david1', 'NO'),
(4, 'david', 'Irungu', '1234', '2021-04-21 08:09:38', 'david1', 'NO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `equipment_master`
--
ALTER TABLE `equipment_master`
  ADD PRIMARY KEY (`Eqp_NoID`);

--
-- Indexes for table `servicing_details`
--
ALTER TABLE `servicing_details`
  ADD PRIMARY KEY (`servicing_detailsID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `equipment_master`
--
ALTER TABLE `equipment_master`
  MODIFY `Eqp_NoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `servicing_details`
--
ALTER TABLE `servicing_details`
  MODIFY `servicing_detailsID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
