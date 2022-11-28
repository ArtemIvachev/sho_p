-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: localhost    Database: shop
-- ------------------------------------------------------
-- Server version	5.7.30

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
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category`
--

LOCK TABLES `category` WRITE;
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` VALUES (1,'Funko POP',1,1),(2,'LEGO',1,1),(3,'Comics',1,1),(4,'Hasbro\r\n',1,1),(5,'Marvel',1,1),(6,'Harry Potter',1,1);
/*!40000 ALTER TABLE `category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `sub_category_id` int(11) NOT NULL,
  `availability` int(11) NOT NULL,
  `is_featured` int(11) NOT NULL,
  `is_new` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product`
--

LOCK TABLES `product` WRITE;
/*!40000 ALTER TABLE `product` DISABLE KEYS */;
INSERT INTO `product` VALUES (1,'LEGO "Lamborghini"','34561','LEGO',30000,NULL,'Коллекционный набор ЛЕГО',1,1,1,1,1,NULL,1),
                             (2,'Funko POP "Spider Man"','23411','Funko POP',700,NULL,'Фигурка Funko Pop',1,1,1,1,1,NULL,1),
                             (3,'Comics "Старик Логан"','178375','Comics Marvel',565,NULL,'Комикс ТОМ 1',1,1,1,1,1,NULL,1),
                             (4,'Funko POP "Batman 80th"','28341','Funko Pop',2000,NULL,'Коллекционная фигурка',1,1,1,1,1,NULL,1),
                             (5,'Funko POP "Venom Groot"','234141','Funko POP',2500,NULL,'Фигурка Funko POP',1,1,1,1,1,NULL,1),
                             (6,'Funko POP "The Joker"','32424','Funko POP',1350,NULL,'Funko POP',1,1,1,1,1,NULL,1),
                             (7,'LEGO Star Wars AT-AT','23841','LEGO',19990,NULL,'LEGO-набор',1,1,1,1,1,NULL,1),
                             (8,'DC.Бэтмен.Comics','24324','DC',650,NULL,'DC Comics',1,2,1,1,1,NULL,1),
                             (9,'LEGO "Звезда Смерти"','23432','LEGO Star Wars',115000,NULL,'LEGO Star Wars',1,2,1,1,1,NULL,1),
                             (10,'Funko POP Deadpool','3848','Funko POP',2190,NULL,'Funko POP',1,2,1,1,1,NULL,1),
                             (11,'Comics "Майор Гром"','3844','Bubble',800,NULL,'Bubble Comics',1,2,1,1,1,NULL,1),
                             (12,'LEGO Infinity SAGA','37472','LEGO Marvel',15000,NULL,'LEGO Marvel',1,2,1,1,1,NULL,1),
                             (13,'LEGO Batmobile','388421','LEGO DC',4500,NULL,'LEGO 76119 DC',1,2,1,1,1,NULL,1),
                             (14,'Funko POP Джеф Картер','324235','Funko POP',1350,NULL,'Funko POP',1,2,1,1,1,NULL,1),
                             (15,'Funko POP Джек Воробей','34234','Funko POP',1200,NULL,'Funko POP',1,3,1,1,1,NULL,1),
                             (16,'Comics Человек-паук','34324','Marvel',800,NULL,'Marvel Comics',1,3,1,1,1,NULL,1),
                             (17,'Comics Мстители','342421','Marvel',850,NULL,'Marvel Comics',1,1,1,1,1,NULL,1),
                             (18,'Фигурка Гарри Поттер','34242','Wow Stuff',7500,NULL,'Фигурка Wow Stuff',1,3,1,1,1,NULL,1),
                             (19,'Игрушка-трансформер Бамблби','115543','Hasbro',8000,NULL,'Hasbro фигурка',1,3,1,1,1,NULL,1),
                             (20,'Фигурка Эластика','237415','Jakks Pacific',3500,NULL,'Jakks Pacific Суперсемейка-2',1,3,1,1,1,NULL,1),
                             (21,'Будильник Black Panther','3424','Marvel BulbBotz',3800,NULL,'Marvel BulbBotz',1,3,1,1,1,NULL,1),
                             (22,'Книга-раскраска Batman','2384','LEGO',299,NULL,'LEGO Batman книга-раскраска',1,1,1,1,1,NULL,1);
/*!40000 ALTER TABLE `product` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `product_order`
--

DROP TABLE IF EXISTS `product_order`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `product_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `product_order`
--

LOCK TABLES `product_order` WRITE;
/*!40000 ALTER TABLE `product_order` DISABLE KEYS */;
INSERT INTO `product_order` VALUES (1,'Artem','89519350666','В мск Фанко',0,'2022-11-18 15:25:17','{\"52\":3,\"51\":1}',3);
/*!40000 ALTER TABLE `product_order` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sub_category`
--

DROP TABLE IF EXISTS `sub_category`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sub_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sub_category`
--

LOCK TABLES `sub_category` WRITE;
/*!40000 ALTER TABLE `sub_category` DISABLE KEYS */;
INSERT INTO `sub_category` VALUES (1,'Эксклюзивные наборы',1,1,1),(2,'Обычные наборы',1,1,1),(3,'Наборы с Comic-Con',1,1,1),(5,'SuperHeroes',1,2,1),(6,'DC',1,2,1),(7,'Technic',1,2,1),(8,'City',1,2,1),(9,'Star Wars',1,2,1),(10,'Creator',1,2,1);
/*!40000 ALTER TABLE `sub_category` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(55) NOT NULL,
  `last_name` varchar(55) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `birth` varchar(55) NOT NULL,
  `company` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `postcode` int(11) NOT NULL,
  `country` varchar(255) NOT NULL,
  `additional_info` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '1',
  `role` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'admin','Rocket','admin@admin.web','123456','2002-08-27','RTU MIREA','street 23','Moscow','Moscow',2858285,'Russia','Additional information','3777777777773','2022-11-05 09:05:42',1,'admin'),
                          (3,'Test','Test','test@gmail.com','123456','2011-11-11','Test','test','Test','[\"1\"]',1341516,'[\"1\"]','test','12345678912','2022-11-06 14:49:46',1,NULL),
                          (5,'artem','Ivachev','artem-272002@mail.ru','123456','2002-08-27','dsdsdsdsd','sdsdsdsdsd','Moscow','Moscow',614065,'Russia','Дополнительная информация','1121212111','2022-11-20 13:23:58',1,NULL);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-03 19:06:00
