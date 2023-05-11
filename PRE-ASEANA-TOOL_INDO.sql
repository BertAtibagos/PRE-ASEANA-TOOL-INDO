/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 10.4.28-MariaDB : Database - preaseana_indo_db
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`preaseana_indo_db` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;

USE `preaseana_indo_db`;

/*Table structure for table `act_history_tbl` */

DROP TABLE IF EXISTS `act_history_tbl`;

CREATE TABLE `act_history_tbl` (
  `time_inserted` timestamp NOT NULL DEFAULT current_timestamp(),
  `user_name` varchar(255) DEFAULT NULL,
  `user_action` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `act_history_tbl` */

/*Table structure for table `archv_businessdt_tbl` */

DROP TABLE IF EXISTS `archv_businessdt_tbl`;

CREATE TABLE `archv_businessdt_tbl` (
  `REG_ID` varchar(100) NOT NULL,
  `YEAR` int(255) NOT NULL,
  `COMPANY_NAME` varchar(255) NOT NULL,
  `DATE_REGISTERED` int(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `REGISTRATION_CODE` varchar(255) NOT NULL,
  `CATEGORY_LIST` varchar(255) NOT NULL,
  `time_inserted` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`REG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `archv_businessdt_tbl` */

/*Table structure for table `businessdt_tbl` */

DROP TABLE IF EXISTS `businessdt_tbl`;

CREATE TABLE `businessdt_tbl` (
  `REG_ID` varchar(100) NOT NULL,
  `YEAR` int(255) NOT NULL,
  `COMPANY_NAME` varchar(255) NOT NULL,
  `DATE_REGISTERED` int(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `REGISTRATION_CODE` varchar(255) NOT NULL,
  `CATEGORY_LIST` varchar(255) NOT NULL,
  `time_inserted` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`REG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `businessdt_tbl` */

/*Table structure for table `login_user` */

DROP TABLE IF EXISTS `login_user`;

CREATE TABLE `login_user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `login_user` */

insert  into `login_user`(`id`,`name`,`user_name`,`password`) values 
(1,'Robert Atibagos','robert','123'),
(2,'Karyle Santos','karyle','321');

/*Table structure for table `samp_tbl` */

DROP TABLE IF EXISTS `samp_tbl`;

CREATE TABLE `samp_tbl` (
  `REG_ID` varchar(100) NOT NULL,
  `YEAR` int(255) NOT NULL,
  `COMPANY_NAME` varchar(255) NOT NULL,
  `DATE_REGISTERED` int(255) NOT NULL,
  `STATUS` varchar(255) NOT NULL,
  `ADDRESS` varchar(255) NOT NULL,
  `REGISTRATION_CODE` varchar(255) NOT NULL,
  `CATEGORY_LIST` varchar(255) NOT NULL,
  `time_inserted` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`REG_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

/*Data for the table `samp_tbl` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
