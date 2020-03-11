/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.4.11-MariaDB : Database - inventory
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`inventory` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `inventory`;

/*Table structure for table `barang` */

DROP TABLE IF EXISTS `barang`;

CREATE TABLE `barang` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_sku` varchar(11) DEFAULT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `stok_awal` int(11) DEFAULT NULL,
  `cogs` int(11) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `no_sku` (`no_sku`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4;

/*Data for the table `barang` */

insert  into `barang`(`id`,`no_sku`,`nama_barang`,`stok_awal`,`cogs`,`status`) values (1,'SH0001','SANDAL SEHAT',50,20000,'Active'),(2,'SH0002','THERAFLEX',10,15000,'Archive'),(3,'RT0003','PEMBERSIH SEKAT KERAMIK',10,15000,'Archive'),(4,'SH0223777','Tile Reform',20,25000,'Active'),(5,'SH0223333','Sekukuku',20,25000,'Active'),(6,'SH0223777','Sekukuku',20,25000,'Active'),(8,'SH0223777','SANDAL SEHAT',20,25000,'Active'),(9,'SH0223777','Tile Reform',20,25000,'Active'),(10,'SH0223777','Tile Reform',20,25000,'Active'),(11,'SH0223777','Sekulumu',1000,2250,'Active'),(12,'SH0223777','Tile Reform',1000,25000,'Active'),(13,'SH0223777','Sukuus',20,25000,'Active'),(14,'SH0223','sugus',1000,25000,'Active'),(15,'SH0223','Tile Reform',20,2250,'Active'),(16,'SH0223777','oooooooo',20,25000,'Active'),(17,'SH0223777','Tile Reform',1000,25000,'active'),(19,'SH0223777','Kaka',20,25000,'active');

/*Table structure for table `config` */

DROP TABLE IF EXISTS `config`;

CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_app` varchar(255) DEFAULT NULL,
  `icon_app` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `config` */

insert  into `config`(`id`,`name_app`,`icon_app`) values (1,'System Dwg','logo.icon.png');

/*Table structure for table `purchase` */

DROP TABLE IF EXISTS `purchase`;

CREATE TABLE `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_sku` varchar(11) DEFAULT NULL,
  `tanggal_beli` datetime DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `no_sku` (`no_sku`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `purchase` */

insert  into `purchase`(`id`,`no_sku`,`tanggal_beli`,`qty`,`keterangan`) values (1,'0','2020-02-12 20:01:03',20,NULL);

/*Table structure for table `return` */

DROP TABLE IF EXISTS `return`;

CREATE TABLE `return` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_sku` int(11) DEFAULT NULL,
  `tanggal_return` datetime DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `return` */

/*Table structure for table `sales` */

DROP TABLE IF EXISTS `sales`;

CREATE TABLE `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_sales` int(11) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `tlp` varchar(15) DEFAULT NULL,
  `no_sku` varchar(11) DEFAULT NULL,
  `harga_satuan` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `ongkir` int(11) DEFAULT NULL,
  `discount` int(11) DEFAULT NULL,
  `payment` varchar(10) DEFAULT NULL,
  `status` enum('Completed','Cancel') DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;

/*Data for the table `sales` */

insert  into `sales`(`id`,`id_sales`,`nama`,`tlp`,`no_sku`,`harga_satuan`,`qty`,`ongkir`,`discount`,`payment`,`status`,`tanggal_beli`,`keterangan`) values (1,7987778,'Mohamad Ricky','089877665677','SH001',179000,2,59000,10000,'cod','Completed','2020-02-12',NULL);

/*Table structure for table `todos` */

DROP TABLE IF EXISTS `todos`;

CREATE TABLE `todos` (
  `id_todos` int(1) NOT NULL AUTO_INCREMENT,
  `user_agent` varchar(20) DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `user_recived` varchar(20) DEFAULT NULL,
  `subject_todos` varchar(255) DEFAULT NULL,
  `message_todos` text DEFAULT NULL,
  `status` int(1) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `due_date` datetime DEFAULT NULL,
  `date_completed` datetime DEFAULT NULL,
  PRIMARY KEY (`id_todos`)
) ENGINE=InnoDB AUTO_INCREMENT=132 DEFAULT CHARSET=utf8mb4;

/*Data for the table `todos` */

insert  into `todos`(`id_todos`,`user_agent`,`date_created`,`user_recived`,`subject_todos`,`message_todos`,`status`,`note`,`due_date`,`date_completed`) values (128,'DWG02201','2020-03-12 02:42:46','DWG02201','#NJV029837292','testttt',0,NULL,'2020-03-12 23:59:00','0000-00-00 00:00:00'),(129,'DWG02201','2020-03-12 02:43:11','DWG03205','#NJV029837292','testttt',1,NULL,'2020-03-12 23:59:00','2020-03-12 04:12:11'),(130,'DWG02201','2020-03-12 03:52:36','DWG02201','#NJV029837292','uyguy',1,NULL,'2020-03-25 23:59:00','2020-03-12 03:58:31'),(131,'DWG02201','2020-03-12 04:11:48','DWG03207','#NJV029837292','njnjknjnjkn',0,NULL,'2020-03-10 23:59:00','0000-00-00 00:00:00');

/*Table structure for table `todos_category` */

DROP TABLE IF EXISTS `todos_category`;

CREATE TABLE `todos_category` (
  `id` int(11) NOT NULL,
  `name_category` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

/*Data for the table `todos_category` */

/*Table structure for table `todos_reply` */

DROP TABLE IF EXISTS `todos_reply`;

CREATE TABLE `todos_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_todos` int(11) DEFAULT NULL,
  `reply_todos` text DEFAULT NULL,
  `date_reply` datetime DEFAULT NULL,
  `flag` enum('2','3') DEFAULT '3',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4;

/*Data for the table `todos_reply` */

insert  into `todos_reply`(`id`,`id_todos`,`reply_todos`,`date_reply`,`flag`) values (19,128,'ok','2020-03-12 04:21:52','3'),(20,129,'ok','2020-03-12 03:50:23','2'),(21,130,'ok','2020-03-12 03:53:38','3');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` varchar(20) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`name`,`email`,`image`,`password`,`role_id`,`is_active`,`date_created`) values ('DWG02201','Mohamad Ricky','admin@dwg.id','default.jpg','$2y$10$LvKjG6Hg0PjjIDjjKk7iDuvKV5Mr2CixeuwSQYKvViJ/aVUq147sO',1,1,1583081659),('DWG03204','Muhamad Bagus N','bagus@dwg.id','default.jpg','$2y$10$XdO.ZaMdcacM6AaD4HlWfuhGi97vhSFFPMnW7HgbPPvLnGME/RJIS',3,1,1583337669),('DWG03205','Yanti Mulyani','yanti@dwg.id','default.jpg','$2y$10$rXFGlxh85QFO.rXqkVwfLelaOxBUcBaOwlFpjK60CUj5AiGixWhbm',3,1,1583337713),('DWG03206','Sarah Nurkhaliza','sarah@dwg.id','default.jpg','$2y$10$g5emfuCzNORe56aotyB/f.qdCQ9vpCEw2qmPPaImexSpf.zeiig1K',1,1,1583337779),('DWG03207','Muhammad Ferdian','ferdi@dwg.id','default.jpg','$2y$10$hMN9gmMCsqL9xvJGtLPnleZoL9YdHsgTdb87Z/1Jb61XIUhk2zE.q',1,1,1583337831),('DWG03208','Sonya','sonya@dwg.id','default.jpg','$2y$10$eKaZOHeabIQR3xUK6TLmieVOePr6XGw1E/AWMgr1aiOd1b1lJiwRG',2,1,1583352050);

/*Table structure for table `user_access_menu` */

DROP TABLE IF EXISTS `user_access_menu`;

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `role_id` (`role_id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `user_access_menu_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`id`),
  CONSTRAINT `user_access_menu_ibfk_2` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

/*Data for the table `user_access_menu` */

insert  into `user_access_menu`(`id`,`role_id`,`menu_id`) values (23,1,1),(24,1,2),(25,1,3),(26,2,1),(27,2,2),(28,3,1);

/*Table structure for table `user_menu` */

DROP TABLE IF EXISTS `user_menu`;

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `user_menu` */

insert  into `user_menu`(`id`,`menu`) values (1,'Todo'),(2,'Warehouse'),(3,'Admin');

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(128) NOT NULL,
  `division` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

/*Data for the table `user_role` */

insert  into `user_role`(`id`,`role`,`division`) values (1,'Admin','Head Officer'),(2,'Warehouse','Warhouse Management'),(3,'cs','Customer Service');

/*Table structure for table `user_sub_menu` */

DROP TABLE IF EXISTS `user_sub_menu`;

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL,
  `position` int(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `menu_id` (`menu_id`),
  CONSTRAINT `user_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `user_menu` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `user_sub_menu` */

insert  into `user_sub_menu`(`id`,`menu_id`,`title`,`url`,`icon`,`is_active`,`position`) values (1,3,'Dashboard','admin','icon-home4 mr-2',0,2),(2,2,'Inventory','user/inventory','icon-home4 mr-2',0,3),(3,2,'In Bound','user/purchase','icon-home4 mr-2',0,4),(4,2,'Return','user/return','icon-home4 mr-2',0,5),(5,2,'Sales','user/sales','icon-home4 mr-2',0,6),(6,1,'Home','todo','icon-home4',1,1),(7,1,'My Todolist','todo/todolist','icon-clipboard2',1,7),(11,3,'Manage User','admin','icon-user',1,8),(13,1,'My Issigned','todo/issign','icon-paperplane',1,9);

/* Function  structure for function  `get_id_user` */

/*!50003 DROP FUNCTION IF EXISTS `get_id_user` */;
DELIMITER $$

/*!50003 CREATE DEFINER=`root`@`localhost` FUNCTION `get_id_user`() RETURNS varchar(8) CHARSET utf8mb4
BEGIN
    DECLARE kode varchar(8);
    
     SELECT RIGHT(MAX(id),2) FROM USER INTO kode;
     SET kode = CONCAT(DATE_FORMAT(CURDATE(),'%m%y'),kode+1);
     SET kode = LPAD(kode,8,'DWG');
    
	
     RETURN kode;
	
    END */$$
DELIMITER ;

/*Table structure for table `v-access` */

DROP TABLE IF EXISTS `v-access`;

/*!50001 DROP VIEW IF EXISTS `v-access` */;
/*!50001 DROP TABLE IF EXISTS `v-access` */;

/*!50001 CREATE TABLE  `v-access`(
 `id` int(11) ,
 `role_id` int(11) ,
 `role` varchar(128) ,
 `menu_id` int(11) ,
 `menu` varchar(128) 
)*/;

/*Table structure for table `v-submenuu` */

DROP TABLE IF EXISTS `v-submenuu`;

/*!50001 DROP VIEW IF EXISTS `v-submenuu` */;
/*!50001 DROP TABLE IF EXISTS `v-submenuu` */;

/*!50001 CREATE TABLE  `v-submenuu`(
 `id` int(11) ,
 `title` varchar(128) ,
 `url` varchar(128) ,
 `icon` varchar(128) ,
 `is_active` int(1) ,
 `position` int(1) ,
 `menu_id` int(11) ,
 `menu` varchar(128) 
)*/;

/*Table structure for table `v-todos` */

DROP TABLE IF EXISTS `v-todos`;

/*!50001 DROP VIEW IF EXISTS `v-todos` */;
/*!50001 DROP TABLE IF EXISTS `v-todos` */;

/*!50001 CREATE TABLE  `v-todos`(
 `id_todos` int(1) ,
 `user_agent` varchar(20) ,
 `name_agent` varchar(128) ,
 `user_recived` varchar(20) ,
 `name_recived` varchar(128) ,
 `subject_todos` varchar(255) ,
 `message_todos` text ,
 `status` int(1) ,
 `reply_todos` text ,
 `date_created` datetime ,
 `date_completed` datetime ,
 `date_reply` datetime ,
 `due_date` datetime ,
 `expired_todos` time ,
 `flag` enum('2','3') 
)*/;

/*Table structure for table `v-userr` */

DROP TABLE IF EXISTS `v-userr`;

/*!50001 DROP VIEW IF EXISTS `v-userr` */;
/*!50001 DROP TABLE IF EXISTS `v-userr` */;

/*!50001 CREATE TABLE  `v-userr`(
 `id` varchar(20) ,
 `name` varchar(128) ,
 `email` varchar(128) ,
 `image` varchar(128) ,
 `password` varchar(256) ,
 `is_active` int(1) ,
 `date_created` int(11) ,
 `role_id` int(11) ,
 `role` varchar(128) 
)*/;

/*View structure for view v-access */

/*!50001 DROP TABLE IF EXISTS `v-access` */;
/*!50001 DROP VIEW IF EXISTS `v-access` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v-access` AS select `user_access_menu`.`id` AS `id`,`user_access_menu`.`role_id` AS `role_id`,`user_role`.`role` AS `role`,`user_access_menu`.`menu_id` AS `menu_id`,`user_menu`.`menu` AS `menu` from ((`user_access_menu` join `user_menu` on(`user_access_menu`.`menu_id` = `user_menu`.`id`)) join `user_role` on(`user_access_menu`.`role_id` = `user_role`.`id`)) */;

/*View structure for view v-submenuu */

/*!50001 DROP TABLE IF EXISTS `v-submenuu` */;
/*!50001 DROP VIEW IF EXISTS `v-submenuu` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v-submenuu` AS select `user_sub_menu`.`id` AS `id`,`user_sub_menu`.`title` AS `title`,`user_sub_menu`.`url` AS `url`,`user_sub_menu`.`icon` AS `icon`,`user_sub_menu`.`is_active` AS `is_active`,`user_sub_menu`.`position` AS `position`,`user_sub_menu`.`menu_id` AS `menu_id`,`user_menu`.`menu` AS `menu` from (`user_sub_menu` join `user_menu` on(`user_sub_menu`.`menu_id` = `user_menu`.`id`)) */;

/*View structure for view v-todos */

/*!50001 DROP TABLE IF EXISTS `v-todos` */;
/*!50001 DROP VIEW IF EXISTS `v-todos` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v-todos` AS select `todos`.`id_todos` AS `id_todos`,`todos`.`user_agent` AS `user_agent`,`xe`.`name` AS `name_agent`,`todos`.`user_recived` AS `user_recived`,`xc`.`name` AS `name_recived`,`todos`.`subject_todos` AS `subject_todos`,`todos`.`message_todos` AS `message_todos`,`todos`.`status` AS `status`,`todos_reply`.`reply_todos` AS `reply_todos`,`todos`.`date_created` AS `date_created`,`todos`.`date_completed` AS `date_completed`,`todos_reply`.`date_reply` AS `date_reply`,`todos`.`due_date` AS `due_date`,timediff(`todos`.`due_date`,current_timestamp()) AS `expired_todos`,`todos_reply`.`flag` AS `flag` from (((`todos` left join `todos_reply` on(`todos`.`id_todos` = `todos_reply`.`id_todos`)) left join `user` `xe` on(`xe`.`id` = `todos`.`user_agent`)) left join `user` `xc` on(`xc`.`id` = `todos`.`user_recived`)) */;

/*View structure for view v-userr */

/*!50001 DROP TABLE IF EXISTS `v-userr` */;
/*!50001 DROP VIEW IF EXISTS `v-userr` */;

/*!50001 CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v-userr` AS select `user`.`id` AS `id`,`user`.`name` AS `name`,`user`.`email` AS `email`,`user`.`image` AS `image`,`user`.`password` AS `password`,`user`.`is_active` AS `is_active`,`user`.`date_created` AS `date_created`,`user`.`role_id` AS `role_id`,`user_role`.`role` AS `role` from (`user` join `user_role` on(`user`.`role_id` = `user_role`.`id`)) */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
