-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: h50wxc
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `bonsai`
--

DROP TABLE IF EXISTS `bonsai`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bonsai` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nev` varchar(40) DEFAULT NULL,
  `ar` int(11) DEFAULT NULL,
  `fajta` varchar(40) DEFAULT NULL,
  `tipus` varchar(20) DEFAULT NULL,
  `magassag` int(11) DEFAULT NULL,
  `eletkor` int(11) DEFAULT NULL,
  `img` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bonsai`
--

LOCK TABLES `bonsai` WRITE;
/*!40000 ALTER TABLE `bonsai` DISABLE KEYS */;
INSERT INTO `bonsai` VALUES (6,'Ficus Ginseng',9699,'Kinai','Lombhullato',40,5,'img/Ficus_Ginseng/650976658241146_1.jpg'),(12,'Ulmus',4300,'Kinai','Lombhullato',25,5,'img/Ulmus/852742438IMG_20210314_113852-scaled.jpg'),(13,'Podocarpus',9500,'Kinai','Orokzold',30,5,'img/Podocarpus/161134484520200319_144117_HDR-rotated.jpg'),(15,'Ligustrum chinensis',21700,'Kinai','Orokzold',35,6,'img/Ligustrum_chinensis/160942042720200319_142929.jpg'),(16,'Pinus parviflora',22500,'Japan','Orokzold',60,16,'img/Pinus_parviflora/19563531758018811.jpg');
/*!40000 ALTER TABLE `bonsai` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu`
--

DROP TABLE IF EXISTS `menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `link` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu`
--

LOCK TABLES `menu` WRITE;
/*!40000 ALTER TABLE `menu` DISABLE KEYS */;
INSERT INTO `menu` VALUES (1,'profil',1),(2,'bonsai fak',2),(3,'uj bonsai fa',3),(4,'bonsai fa torlese',4),(5,'bonsai fa modositasa',5),(6,'kereses',6);
/*!40000 ALTER TABLE `menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(40) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `passwd` varchar(32) DEFAULT NULL,
  `img` text DEFAULT NULL,
  `authority` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'admin','admin@admin.hu','827ccb0eea8a706c4c34a16891f84e7b','img/admin/1360235645tenor.png','admin'),(4,'Husky','husky@dogs.hu','d3d331572cdf7569e2f2bf836105faab','img/Husky/1994256558puppy.jpg','user');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-05-10 15:11:22
