-- MySQL dump 10.13  Distrib 5.6.19, for osx10.7 (x86_64)
--
-- Host: localhost    Database: cyclefitness
-- ------------------------------------------------------
-- Server version	5.6.19

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
-- Table structure for table `bikes`
--

DROP TABLE IF EXISTS `bikes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bikes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `old_price` double(7,2) DEFAULT NULL,
  `sale_price` double(7,2) DEFAULT NULL,
  `text` varchar(1000) DEFAULT NULL,
  `image_url` varchar(255) DEFAULT NULL,
  `sizes` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bikes`
--

LOCK TABLES `bikes` WRITE;
/*!40000 ALTER TABLE `bikes` DISABLE KEYS */;
INSERT INTO `bikes` VALUES (1,'Trek Aeolus 5 Road Bike',289.99,229.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/bike-1.png','52cm,54cm,56cm','mens','road'),(2,'Chronic 98X BMX Series',NULL,389.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/BMX/Chronic 98X BMX Series.png',NULL,'mens','bmx'),(3,'Gt Bump X74',NULL,389.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/BMX/Gt Bump X74.png',NULL,'mens','bmx'),(4,'GT Power Series 24',NULL,389.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/BMX/GT Power Series 24.png',NULL,'mens','bmx'),(5,'Kenda Dema Hornet X Series',NULL,419.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/BMX/Kenda Dema Hornet X Series',NULL,'mens','bmx'),(6,'Maxxis Inceptor Series',NULL,419.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/BMX/Maxxis Inceptor Series',NULL,'mens','bmx'),(7,'Powerblock G13 BMX',NULL,429.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/BMX/Powerblock G13 BMX',NULL,'mens','bmx'),(8,'Razor Spot Polygon M50',NULL,429.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/BMX/Razor Spot Polygon M50 (Female).png',NULL,'womens','bmx'),(9,'Cannodale CX 21',NULL,529.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Cyclecross/Cannodale CX 21.png',NULL,'mens','cyclecross'),(10,'Canyon Infinite AL Series X',NULL,529.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Cyclecross/Canyon Infinite AL Series X.png',NULL,'mens','cyclecross'),(11,'Felt Cyclecross 4 Series',NULL,539.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Cyclecross/Felt Cyclecross 4 Series (Female).png',NULL,'womens','cyclecross'),(12,'Felt Zappino Series',NULL,539.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Cyclecross/Felt Zappino Series (Female).png',NULL,'womens','cyclecross'),(13,'Mares AX Focus',NULL,489.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Cyclecross/Mares AX Focus.png',NULL,'mens','cyclecross'),(14,'Marex AX 10',NULL,479.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Cyclecross/Marex AX 10 (Female).png',NULL,'womens','cyclecross'),(15,'Marex CX 20',NULL,499.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Cyclecross/Marex CX 20.png',NULL,'mens','cyclecross'),(16,'Trek Bontrager 700X',NULL,569.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Cyclecross/Trek Bontrager 700X.png',NULL,'mens','cyclecross'),(17,'Aggatu M Post 8',NULL,569.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Electric Assist/Aggatu M Post 8.png',NULL,'mens','electric_assist'),(18,'Catham M-20 Electric Bike',NULL,569.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Electric Assist/Catham M-20 Electric Bike.png',NULL,'mens','electric_assist'),(19,'Chandler Urban Arrow X12',NULL,719.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Electric Assist/Chandler Urban Arrow X12 (Female).png',NULL,'womens','electric_assist'),(20,'Kalkhoff Endeavour S11 Premium',NULL,709.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Electric Assist/Kalkhoff Endeavour S11 Premium.png',NULL,'mens','electric_assist'),(21,'Schwinn Searcher E8',NULL,709.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Electric Assist/Schwinn Searcher E8.png',NULL,'mens','electric_assist'),(22,'Schwinn Tailwind',NULL,709.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Electric Assist/Schwinn Tailwind (Female).png',NULL,'womens','electric_assist'),(23,'Trek Bontrager Electric Series',NULL,679.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Electric Assist/Trek Bontrager Electric Series (Female).png',NULL,'womens','electric_assist'),(24,'Trek CML Electric',NULL,649.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Electric Assist/Trek CML Electric.png',NULL,'mens','electric_assist'),(25,'Dahon Kja 3',NULL,639.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Folding/Dahon Kja 3.png',NULL,'mens','folding'),(26,'DASH D-18 Series',NULL,699.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Folding/DASH D-18 Series.png',NULL,'mens','folding'),(27,'Lkon Folding Series 6',NULL,679.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Folding/Lkon Folding Series 6.png',NULL,'mens','folding'),(28,'Moss F-1 Series 20',NULL,599.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Folding/Moss F-1 Series 20.png',NULL,'mens','folding'),(29,'Rhino Series Gold',NULL,724.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Folding/Rhino Series Gold.png',NULL,'mens','folding'),(30,'UF Polygon X',NULL,719.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Folding/UF Polygon X (Female).png',NULL,'womens','folding'),(31,'Venzo F-14',NULL,689.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Folding/Venzo F-14.png',NULL,'mens','folding'),(32,'Verge S11I',NULL,689.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Folding/Verge S11I (Female).png',NULL,'womens','folding'),(33,'Cannondale Adventure 2 Series',NULL,529.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Hybrid/Cannondale Adventure 2 Series (Female).png',NULL,'womens','hybrid'),(34,'Cannondale Quick CX3',NULL,529.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Hybrid/Cannondale Quick CX3.png',NULL,'mens','hybrid'),(35,'Cannondale Quick SL2',NULL,529.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Hybrid/Cannondale Quick SL2.png',NULL,'mens','hybrid'),(36,'Nomand GL13 Hybrid Series',NULL,499.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Hybrid/Nomand GL13 Hybrid Series (Female).png',NULL,'womens','hybrid'),(37,'Specialized Crosstrail 2014',NULL,549.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Hybrid/Specialized Crosstrail 2014.png',NULL,'mens','hybrid'),(38,'Trek Shimano Hybrid Series',NULL,569.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Hybrid/Trek Shimano Hybrid Series.png',NULL,'mens','hybrid'),(39,'Trek Verve 3 Hybrid',NULL,559.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Hybrid/Trek Verve 3 Hybrid (Female).png',NULL,'womens','hybrid'),(40,'Trek Verve Hybrid Series 9',NULL,559.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Hybrid/Trek Verve Hybrid Series 9 (Female).png',NULL,'womens','hybrid'),(41,'Bontrager LT3 Bike',NULL,629.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Mountain/Bontrager LT3 Bike.png',NULL,'mens','mountain'),(42,'Cannondale Road Series 6',NULL,629.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Mountain/Cannondale Road Series 6.png',NULL,'mens','mountain'),(43,'Enduro MTB Specialized',NULL,649.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Mountain/Enduro MTB Specialized (Female).png',NULL,'womens','mountain'),(44,'Felt T20 Series',NULL,599.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Mountain/Felt T20 Series.png',NULL,'mens','mountain'),(45,'GT Maxxis Blu Series',NULL,549.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Mountain/GT Maxxis Blu Series.png',NULL,'mens','mountain'),(46,'GT Maxxis Mountain Bike',NULL,549.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Mountain/GT Maxxis Mountain Bike.png',NULL,'mens','mountain'),(47,'Haibike Sleek S-29',NULL,849.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Mountain/Haibike Sleek S-29.png',NULL,'mens','mountain'),(48,'Whyte MTB X Composite',NULL,539.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Mountain/Whyte MTB X Composite (Female).png',NULL,'womens','mountain'),(49,'Cannondale SL-K',NULL,739.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Road/Cannondale SL-K (Female).png',NULL,'womens','road'),(50,'Felt Cross XO Road',NULL,619.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Road/Felt Cross XO Road.png',NULL,'mens','road'),(51,'Guru Evolve X',NULL,769.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Road/Guru Evolve X.png',NULL,'mens','road'),(52,'Helios Polygon 780 Series',NULL,519.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Road/Helios Polygon 780 Series.png',NULL,'mens','road'),(53,'Trek Alpha X Carbon',NULL,549.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Road/Trek Alpha X Carbon.png',NULL,'mens','road'),(54,'Trek Bontrager CF Road Series',NULL,589.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Road/Trek Bontrager CF Road Series (Female).png',NULL,'womens','road'),(55,'Trek Bontrager Domane 4',NULL,599.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Road/Trek Bontrager Domane 4.png',NULL,'mens','road'),(56,'Trek CVL Carbon Series',NULL,599.99,'The \"Classics killer\" Aeolus 5 D3 clincher road wheel offers the all-around performance of a 50mm carbon rim, while D3 shaping keeps the weight down and aero benefits up. Now everyone can race like a professional over rolling terrain and in varying crosswinds.','res/img/bikes/Road/Trek CVL Carbon Series (Female).png',NULL,'womens','road');
/*!40000 ALTER TABLE `bikes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contact_submissions`
--

DROP TABLE IF EXISTS `contact_submissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contact_submissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `inquiry` varchar(255) DEFAULT NULL,
  `text` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contact_submissions`
--

LOCK TABLES `contact_submissions` WRITE;
/*!40000 ALTER TABLE `contact_submissions` DISABLE KEYS */;
INSERT INTO `contact_submissions` VALUES (10,10,'Casual User','2015-02-18 05:32:40','Support','Gluten-free PBR four dollar toast, squid gentrify disrupt viral. Placeat freegan butcher Carles meh forage. Sint assumenda in, eiusmod PBR&B tempor Pitchfork sartorial. Esse organic normcore, before they sold out Marfa YOLO master cleanse hella meditation Pinterest in selfies health goth ennui dolor. Aesthetic banjo locavore, organic esse 8-bit meggings. Four dollar toast tofu cillum tilde trust fund stumptown messenger bag 3 wolf moon raw denim. Marfa bespoke aliqua 8-bit art party eiusmod.'),(11,10,'San Francisco Resident','2015-02-18 05:36:48','General Inquiry','Ad street art anim umami American Apparel. Commodo yr authentic, bespoke 3 wolf moon heirloom Pinterest mixtape id laboris narwhal. Assumenda iPhone pork belly tattooed umami, nihil shabby chic farm-to-table semiotics. DIY chambray in Etsy, Neutra bespoke meh cliche. Roof party hashtag est polaroid. Before they sold out est occaecat Vice, eu VHS direct trade you probably havent heard of them pour-over Pitchfork craft beer aliqua synth odio keffiyeh. Thundercats tempor reprehenderit aesthetic Odd Future High Life.'),(13,10,'Sam','2015-02-19 06:37:06','General Inquiry','Test Post Please Ignore'),(15,10,'m night shamlam','2015-02-23 03:54:23','General Inquiry','poop');
/*!40000 ALTER TABLE `contact_submissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_list`
--

DROP TABLE IF EXISTS `email_list`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_list` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email_address` varchar(255) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_address` (`email_address`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_list`
--

LOCK TABLES `email_list` WRITE;
/*!40000 ALTER TABLE `email_list` DISABLE KEYS */;
INSERT INTO `email_list` VALUES (1,'sammywinslow@gmail.com');
/*!40000 ALTER TABLE `email_list` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchases`
--

DROP TABLE IF EXISTS `purchases`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchases` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `amount` decimal(7,2) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchases`
--

LOCK TABLES `purchases` WRITE;
/*!40000 ALTER TABLE `purchases` DISABLE KEYS */;
INSERT INTO `purchases` VALUES (1,1,'2015-02-16 21:54:00',169.99),(3,1,'2015-02-18 08:57:03',229.99),(4,1,'2015-02-18 08:59:03',459.98),(5,1,'2015-02-18 09:00:25',459.98),(6,10,'2015-02-23 03:44:30',1289.97),(14,1,'2015-02-23 04:07:04',1289.97),(15,1,'2015-02-23 04:55:23',859.98),(16,1,'2015-02-23 04:56:23',3479.95);
/*!40000 ALTER TABLE `purchases` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email_address` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email_address` (`email_address`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'sammywinslow@gmail.com','fbla2015','Samuel','Winslow'),(10,'admin@example.com','password','Administrator','');
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

-- Dump completed on 2015-02-22 21:14:49
