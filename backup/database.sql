-- MySQL dump 10.13  Distrib 5.5.35, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: beacon
-- ------------------------------------------------------
-- Server version	5.5.35-0ubuntu0.13.10.2

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `conference`
--

DROP TABLE IF EXISTS `conference`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `conference` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `start_date` date DEFAULT NULL,
  `form_filename` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conference`
--

LOCK TABLES `conference` WRITE;
/*!40000 ALTER TABLE `conference` DISABLE KEYS */;
INSERT INTO `conference` VALUES (1,'Example Conference','all-age','UUUS','2010-05-29','d13057450013723371420ead7d051a5920f14869.pdf','2010-05-29 02:46:59','2010-09-17 09:09:23','2010-09-17 09:09:23'),(2,'conference name','all-age','church name','2010-05-29','86b089f83d809b01476e79b1563375ef0fadf293.pdf','2010-05-29 20:55:48','2010-09-17 08:52:00','2010-09-17 08:52:00'),(3,'?-free','perfectly rational','The Church of Jesus Christ of Latter-Day Saints, Melchizedek Precinct','2010-06-06','dcbfe87478508f631ab8dfe876ac03e589d2d69a.pdf','2010-05-30 01:19:10','2010-09-17 08:51:47','2010-09-17 08:51:47'),(4,'uoeuoeu, or something','spectacular','me','2010-05-30','','2010-05-30 01:24:39','2010-05-30 12:12:17','2010-05-30 12:12:17'),(5,'non-pdf','pdf-free','Adobe Systems, Inc.','2010-05-30','25d0b7300a1234838c85bd611c653937aa25efb6.pdf','2010-05-30 01:38:49','2010-09-17 08:51:51','2010-09-17 08:51:51'),(6,'AwesomeCon','totally awesome','Awesome Church','2010-05-30','8b1512138caa527c2a90c2920e34f9bae04da821.pdf','2010-05-30 01:51:17','2010-09-17 08:51:54','2010-09-17 08:51:54'),(7,'CONopoly','social action ','University UUS','2010-05-31','d1da01c4f61ded9e8ed13af56dca3dbe0a87847b.pdf','2010-05-31 17:54:45','2010-09-17 09:09:31','2010-09-17 09:09:31'),(8,'Beacon Pamphlet','Pamphlet about','Florida District','2011-01-01','827e9152340d817c31c420964fe8b06480f2cb1d.pdf','2010-09-17 08:35:06','2011-09-13 08:31:52',NULL),(9,'Lock-In Schmock-In','Lock-In ','UUUS','2010-09-25','6e0679426b719c3407f5442868e43efe34fb2fa3.pdf','2010-09-17 08:51:23','2011-01-05 08:40:46','2011-01-05 08:40:46'),(10,'Beacon Youth Ministry Advisor Training 2010','Adult','UU Church of Sarasota','2010-10-22','8970eacb63b4f36aaf8177bd2e3bd2f46ac9b32a.pdf','2010-09-19 14:24:34','2011-01-05 08:40:54','2011-01-05 08:40:54'),(11,'Mythologicon ','all-age','Miami Church','2010-12-03','5f7ad518ee0620502cfeed177fa83a135da21b06.pdf','2010-11-28 14:22:41','2011-01-31 08:14:22','2011-01-31 08:14:22'),(12,'Too Sexy for Your Con','all-age','University UU, Orlando','2011-01-14','1557dc9ac0563af1f1f5b7d5579c471e4a58dde7.pdf','2011-01-07 08:11:46','2011-01-31 08:54:09','2011-01-31 08:54:09'),(13,'Here Comes the Con (do do do do) Flyer','Flyer for a','University UU, Orlando','2011-03-11','f6f374b653fce8b6b84cea5f48fb85d713c0a992.pdf','2011-01-31 08:15:24','2011-05-09 09:43:54','2011-05-09 09:43:54'),(14,'Here Comes the Con (do do do do) Registration Form','Transition In','University UU, Orlando','2011-03-11','e36f5cecbe95b7bec5b1c387b1c795bfd6f0d50b.pdf','2011-02-21 13:40:53','2011-05-09 09:43:59','2011-05-09 09:43:59'),(15,'BaCON','Con Flyer for a','UU Church of Sarasota','2011-05-27','9c6298295f498b54c27ed096b358b2be2a3da795.pdf','2011-05-09 09:46:14','2011-06-30 11:20:36','2011-06-30 11:20:36'),(16,'BaCON','Permission Form for a ','UU Church of Sarasota','2011-05-27','42d9019bcfbf29789ac71f0567772ac29cd316ed.pdf','2011-05-11 08:20:26','2011-06-30 11:20:42','2011-06-30 11:20:42'),(17,'2011 Beacon Adviser Training','Adviser Training','Unitarian Universalist Fellowship of Gainesville','2011-08-26','6abb0a08a1cd9b1fe63d6e56900f5dda51d851c6.pdf','2011-06-30 11:23:24','2011-06-30 19:07:10','2011-06-30 19:07:10'),(18,'Adviser Training 2012','Adult','UU Church of Tallahassee','2012-02-17','be6a21deb93a43b93ca6be985c6ccb634682e56a.pdf','2011-07-02 19:16:22','2012-06-20 08:55:30','2012-06-20 08:55:30'),(19,'CON Dracula Flyer','Flyer for a','University UU, Orlando','2011-09-30','9e6cea957b79aac8dacd50fda9bcd70cef1ec88e.pdf','2011-09-13 08:17:46','2012-01-05 22:22:02','2012-01-05 22:22:02'),(20,'CON Dracula Form','all-age','University UU, Orlando','2011-09-30','af78a212544cdb237616217aba2fdd7ed032c755.pdf','2011-09-13 08:18:34','2012-01-05 22:22:07','2012-01-05 22:22:07'),(21,'CONcept 2.0','All-age','Buckman Bridge UU Church','2012-01-13','bbb80a62f35c34e2e147bda25fef71daa15665cc.pdf','2012-01-06 09:34:44','2012-04-27 06:57:12','2012-04-27 06:57:12'),(22,'CinCON de Mayo','all-age','UU Church of Tallahassee','2012-05-04','eff6fb4d1250ca526ae1ac7b339dc6ea0090d126.pdf','2012-04-27 06:56:48','2012-08-27 20:02:57','2012-08-27 20:02:57'),(23,'Adviser Training 2012','Adviser Training','UUUS','2012-08-10','776daaac7c20f649392d2c2e9716340f7a2583e3.pdf','2012-06-20 08:55:08','2012-08-27 20:03:02','2012-08-27 20:03:02'),(24,'ECONox Form','Leadership','University UU','2012-09-21','4ca447c475634103a0f7348e6fa5232a1a67a505.pdf','2012-08-27 20:00:37','2012-10-12 15:20:15','2012-10-12 15:20:15'),(25,'ECONox Flier','Leadership','University UU','2012-09-21','13effdf3149f5d723906f5c82b46ee0ac48b77ea.pdf','2012-08-27 20:02:19','2012-10-12 15:20:21','2012-10-12 15:20:21'),(26,'2012-13 calendar','Calendar for all','Florida District Beacon','2012-10-19','761cb96602bf8ab5a3b517dfb23d716ce1d2339d.pdf','2012-09-25 10:36:34','2013-08-11 21:26:42','2013-08-11 21:26:42'),(27,'International CONnections 2013','all-age','UU Fellowship of Gainesville','2013-01-18','3bd0f40576d142e940f23c63ec8cd6239784ccc2.pdf','2012-10-12 15:22:47','2013-01-26 12:05:26','2013-01-26 12:05:26'),(28,'First CONtact','all-age','BBUUC(Jax)','2012-10-19','c3b82879b4e5b7d61d7b16abf96adb17cf34243f.pdf','2012-10-12 15:23:39','2012-10-12 15:23:49','2012-10-12 15:23:49'),(29,'CONtemporary Art','all-age','UU Church of Tallahassee','2013-02-01','dee93c4447a764e376c20fb7294bec0cc5f5ed4c.pdf','2013-01-26 12:08:20','2013-02-22 12:03:30','2013-02-22 12:03:30'),(30,'Felines and CONines','All Age Social Action','River of Grass UU Congregaton','2013-03-01','16bed81baf64ac702ae22e4d8d6c78e9bb7e0387.pdf','2013-02-22 12:03:22','2013-04-23 08:26:27','2013-04-23 08:26:27'),(31,'Beacon Adviser Training','Adviser Training','University UUS','2013-05-03','b40791f015782777217993c92bface689f6f1bea.pdf','2013-03-11 12:21:43','2013-04-23 08:26:16','2013-04-23 08:26:16'),(32,'CONtamination','all-age','BBUUC','2013-05-17','1648f82a3c2b1a7fd44f3cce9325a0898c788096.pdf','2013-04-23 20:32:07','2013-05-24 23:22:38','2013-05-24 23:22:38'),(33,'2013-14 calendar','Calendar for all','Florida District Beacon','2013-01-02','a2cefb57dc290d1de668ab4d8d5a1253e3d16a62.pdf','2013-06-07 09:40:52','2013-09-21 19:11:12',NULL),(34,'CON form template','template for','Florida District Beacon. This is just a preview. To get the editable version, click the link inside the document','2013-01-01','bbedf3ea67290879364cf454d65ea9c482af9572.pdf','2013-06-07 10:01:21','2013-06-07 10:01:21',NULL),(35,'Youth Adviser Training','Youth Adviser Training','UUUS','2013-08-16','abc78cfdef9fe9f96e058a76ef10fbee8cae598d.pdf','2013-07-02 15:08:47','2013-07-02 15:09:13',NULL),(36,'DiaCON Alley','all ages','BBUUC','2013-09-06','7754d4599fb0f894af2445774c1c6748664f240b.pdf','2013-08-11 21:29:14','2013-10-03 22:34:42','2013-10-03 22:34:42'),(37,'PumpCON ','leadership','UUUS','2013-10-18','672a3b37ffbc193dca5d3f1b58e60b74c28b73a2.pdf','2013-10-03 22:35:48','2013-10-03 22:35:48',NULL);
/*!40000 ALTER TABLE `conference` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-06-29 14:20:27
