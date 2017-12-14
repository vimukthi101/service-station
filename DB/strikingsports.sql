/*
SQLyog Ultimate v8.55 
MySQL - 5.5.5-10.1.8-MariaDB : Database - service_station
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`service_station` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `service_station`;

/*Table structure for table `service_schedule` */

DROP TABLE IF EXISTS `service_schedule`;

CREATE TABLE `service_schedule` (
  `service_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `phone_no` varchar(10) NOT NULL,
  `vehicle_no` varchar(15) NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `vehicle_type` varchar(10) NOT NULL,
  `vehicle_model` varchar(200) NOT NULL,
  `point` varchar(5) NOT NULL,
  `end_time` time DEFAULT NULL,
  PRIMARY KEY (`service_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
