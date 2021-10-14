-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for equipment
CREATE DATABASE IF NOT EXISTS `equipment` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `equipment`;

-- Dumping structure for table equipment.equipment_master
CREATE TABLE IF NOT EXISTS `equipment_master` (
  `Eqp_NoID` int(11) NOT NULL AUTO_INCREMENT,
  `Eqp_name` varchar(30) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `Received_on` date NOT NULL,
  `Installation_date` date NOT NULL,
  `Receiving_Condition` varchar(10) NOT NULL,
  `Supplier` varchar(20) NOT NULL,
  `Supplier_phone` int(15) NOT NULL,
  `Supplier_email` varchar(30) NOT NULL,
  PRIMARY KEY (`Eqp_NoID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table equipment.equipment_master: ~2 rows (approximately)
/*!40000 ALTER TABLE `equipment_master` DISABLE KEYS */;
INSERT INTO `equipment_master` (`Eqp_NoID`, `Eqp_name`, `Department`, `Received_on`, `Installation_date`, `Receiving_Condition`, `Supplier`, `Supplier_phone`, `Supplier_email`) VALUES
	(1, 'MINDARAY', 'HAEMATOLOGY', '2020-12-18', '2020-12-18', 'NEW', 'CROWN', 745212321, '&Supplier_email'),
	(2, 'MINDARAY', 'HAEMATOLOGY', '2020-12-18', '2020-12-18', 'NEW', 'CROWN', 745212321, 'info@crown.co,ke'),
	(3, 'COBAS C111', 'Biochemistry', '2020-01-15', '2020-02-03', 'NEW', 'Technomed', 752125232, 'info@technomend.co.ke');
/*!40000 ALTER TABLE `equipment_master` ENABLE KEYS */;

-- Dumping structure for table equipment.users
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(3) NOT NULL AUTO_INCREMENT,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `password` varchar(500) NOT NULL,
  `Date_Added` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `username` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table equipment.users: ~2 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`userID`, `fname`, `lname`, `password`, `Date_Added`, `username`) VALUES
	(1, 'David', 'Irungu', '$2y$10$HSd7Ypdn1uQmLEv2detPduaE7w/tISJ/3U0rXB3OJosvxjLREIEHe', '2020-12-21 16:36:41', 'david'),
	(2, 'paul', 'Irungu', '$2y$10$E5NhaJeOP/nJ7UhKv0CD7ex1E901ojOIyIYQviXZxXgZ5BfAFzVMu', '2020-12-21 16:52:40', 'admin');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
