CREATE DATABASE  IF NOT EXISTS `mydb` /*!40100 DEFAULT CHARACTER SET utf8 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `mydb`;
-- MySQL dump 10.13  Distrib 8.0.24, for Win64 (x86_64)
--
-- Host: localhost    Database: mydb
-- ------------------------------------------------------
-- Server version	8.0.24

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `admin` (
  `Admin_ID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  PRIMARY KEY (`Admin_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'ADMIN','Password'),(2,'billy','coolbeans'),(3,'frank','dick');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anime`
--

DROP TABLE IF EXISTS `anime`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anime` (
  `Anime_ID` int NOT NULL AUTO_INCREMENT,
  `Name_ENG` varchar(45) NOT NULL,
  `AirDate` date DEFAULT NULL,
  `Name_JPN` varchar(45) DEFAULT NULL,
  `Maturity` varchar(45) DEFAULT NULL,
  `Director_ID` int DEFAULT NULL,
  `Studio_ID` int DEFAULT NULL,
  PRIMARY KEY (`Anime_ID`),
  KEY `Director_idx` (`Director_ID`),
  KEY `Studio_idx` (`Studio_ID`),
  CONSTRAINT `Director` FOREIGN KEY (`Director_ID`) REFERENCES `director` (`Director_ID`),
  CONSTRAINT `Studio` FOREIGN KEY (`Studio_ID`) REFERENCES `studio` (`Studio_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anime`
--

LOCK TABLES `anime` WRITE;
/*!40000 ALTER TABLE `anime` DISABLE KEYS */;
INSERT INTO `anime` VALUES (1,'Naruto','2002-10-03','Naruto','PG13',1,1),(2,'One Piece ','1999-10-20','One Piece ',' PG-13',2,2),(3,'Your lie in april','2015-05-15','Shigatsu wa kimi no uso','PG-13',3,3),(4,'Melancholy of haruhi zuzumiya','2006-04-02','Suzumiya Haruhi no Yuuutsu','PG-13',4,4),(5,'Bakemonogatari','2009-07-03','Bakemonogatari','R-17',7,7),(6,'Akame ga kill','2014-07-04','Akame Ga Kill','R-17',9,8),(7,'Kono subarashi','2019-01-15','Kono Subarashii Sekai ni Shukufuku wo!','PG-13',11,10),(8,'Inter-species reviews','2020-01-11','Ishuzoku Reviewers','R+',12,11),(9,'Fate Zero','2011-10-01','Fate zero','R- 17',14,13),(10,'Tatami Galaaxy','2010-04-22','Yojo-Han Shinwa Taikei','R-17+',17,16),(11,'Devil Man crybaby','2018-01-05','Devil Man crybaby','R+',17,18),(12,'Gurren lagann','2007-04-01','Gurren lagann','PG-13',18,17),(13,'Mysterious girl friend X','2012-08-23','Nazo no Kanojo X','R-17',16,15),(14,'A sister is all you need','2017-10-08','Imouto sae Ireba Ii','PG-13',15,14),(15,'Usagi drop','2011-07-07','Usagi Drop','PG-13',13,12),(16,'My hero Academia','2016-04-03','Boku no hero academia','PG-13',10,9),(17,'Katanagatari','2010-01-25','Katanagatari','R-17',8,8),(18,'March comess in like a lion','2016-10-08','San gatsu no lion','PG-13',7,7),(19,'Attack on Titan','2013-04-07','Shingeki no Kyojin','PG-13',6,6),(20,'Hunter x hunter','2011-10-02','Hunter x Hunter','PG-13',5,5),(21,'World Trigger','2014-10-05','Hepburn: Wārudo Torigā','Tv-17',20,20);
/*!40000 ALTER TABLE `anime` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anime_genre`
--

DROP TABLE IF EXISTS `anime_genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anime_genre` (
  `Anime_Genre_ID` int NOT NULL AUTO_INCREMENT,
  `Anime` int NOT NULL,
  `Genre` int NOT NULL,
  PRIMARY KEY (`Anime_Genre_ID`),
  KEY `Anime_idx` (`Anime`),
  KEY `Genre_idx` (`Genre`),
  CONSTRAINT `Anime_GID` FOREIGN KEY (`Anime`) REFERENCES `anime` (`Anime_ID`),
  CONSTRAINT `Genre` FOREIGN KEY (`Genre`) REFERENCES `genre` (`Genre_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=71 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anime_genre`
--

LOCK TABLES `anime_genre` WRITE;
/*!40000 ALTER TABLE `anime_genre` DISABLE KEYS */;
INSERT INTO `anime_genre` VALUES (1,1,1),(2,1,2),(3,1,3),(4,1,4),(5,2,1),(6,2,2),(7,2,3),(8,2,4),(9,2,5),(10,2,6),(11,3,4),(12,3,6),(13,3,7),(14,4,3),(15,4,8),(16,4,7),(17,4,10),(18,5,7),(19,5,8),(20,5,11),(21,6,1),(22,6,2),(23,6,4),(24,6,5),(25,6,6),(26,7,2),(27,7,3),(28,7,5),(29,7,11),(30,8,3),(31,8,5),(32,9,1),(33,9,5),(34,9,11),(35,10,3),(36,10,7),(37,10,8),(38,11,1),(39,11,11),(40,11,12),(41,12,1),(42,12,2),(43,12,3),(44,12,9),(45,12,13),(46,13,7),(47,13,14),(49,14,3),(50,14,7),(51,15,10),(52,16,1),(53,16,3),(54,16,14),(55,17,1),(56,17,2),(57,17,7),(58,18,6),(60,18,10),(61,19,1),(62,19,8),(63,19,12),(64,19,6),(65,20,1),(66,20,2),(67,20,6),(70,21,1);
/*!40000 ALTER TABLE `anime_genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `anime_stream`
--

DROP TABLE IF EXISTS `anime_stream`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `anime_stream` (
  `Anime_Stream_ID` int NOT NULL AUTO_INCREMENT,
  `Anime` int DEFAULT NULL,
  `Stream` int DEFAULT NULL,
  PRIMARY KEY (`Anime_Stream_ID`),
  KEY `Anime_idx` (`Anime`),
  KEY `Stream_idx` (`Stream`),
  CONSTRAINT `Anime_SID` FOREIGN KEY (`Anime`) REFERENCES `anime` (`Anime_ID`),
  CONSTRAINT `Stream` FOREIGN KEY (`Stream`) REFERENCES `streaming_service` (`Stream_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `anime_stream`
--

LOCK TABLES `anime_stream` WRITE;
/*!40000 ALTER TABLE `anime_stream` DISABLE KEYS */;
INSERT INTO `anime_stream` VALUES (1,1,1),(2,1,2),(3,2,2),(4,3,1),(5,5,4),(6,6,1),(7,6,2),(8,7,5),(9,9,1),(10,9,2),(11,11,2),(12,12,2),(13,13,4),(14,16,1),(15,18,2),(16,19,1),(17,20,1),(18,20,2),(19,20,5);
/*!40000 ALTER TABLE `anime_stream` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `director`
--

DROP TABLE IF EXISTS `director`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `director` (
  `Director_ID` int NOT NULL AUTO_INCREMENT,
  `Director_Name` varchar(45) NOT NULL,
  PRIMARY KEY (`Director_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `director`
--

LOCK TABLES `director` WRITE;
/*!40000 ALTER TABLE `director` DISABLE KEYS */;
INSERT INTO `director` VALUES (1,'Osamu Kobayashi'),(2,'Konosuke Uda'),(3,'Takehiko Shinjo'),(4,'Yasuhiro Takemoto'),(5,'Hiroshi Kojina'),(6,'Tetsuro Araki'),(7,'Akiyuki Shinbo'),(8,'Keitaro Motonaga'),(9,'Tomoki Kobayashi'),(10,'Kenji Nagasaki'),(11,'Kanyasaki Takaomi'),(12,'Yuki Ogawa'),(13,'Sabu'),(14,'Ei Aoki'),(15,'Shin Oonuma'),(16,'Ayumu Watanabe'),(17,'Masaaki Yuasa'),(18,'Hiroyuki Imaishi'),(20,'Daisuke Ashihara');
/*!40000 ALTER TABLE `director` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `genre`
--

DROP TABLE IF EXISTS `genre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `genre` (
  `Genre_ID` int NOT NULL AUTO_INCREMENT,
  `Genre_Name` varchar(45) NOT NULL,
  PRIMARY KEY (`Genre_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `genre`
--

LOCK TABLES `genre` WRITE;
/*!40000 ALTER TABLE `genre` DISABLE KEYS */;
INSERT INTO `genre` VALUES (1,'Action'),(2,'Adeventure'),(3,'comedy'),(4,'Shounen'),(5,'Fantasy'),(6,'Drama'),(7,'Romance'),(8,'Mystery'),(9,'Sci-Fi'),(10,'Slice of life'),(11,'Supernatural'),(12,'Horror'),(13,'Mecha'),(14,'School'),(15,'Shoujo'),(18,'Vampire');
/*!40000 ALTER TABLE `genre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `streaming_service`
--

DROP TABLE IF EXISTS `streaming_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `streaming_service` (
  `Stream_ID` int NOT NULL AUTO_INCREMENT,
  `Stream_Name` varchar(45) NOT NULL,
  PRIMARY KEY (`Stream_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `streaming_service`
--

LOCK TABLES `streaming_service` WRITE;
/*!40000 ALTER TABLE `streaming_service` DISABLE KEYS */;
INSERT INTO `streaming_service` VALUES (1,'Hulu'),(2,'Netflix'),(3,'Amazon Prime'),(4,'Crunchyroll'),(5,'HBO Max'),(6,'Funimation'),(7,'Funimation');
/*!40000 ALTER TABLE `streaming_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `studio`
--

DROP TABLE IF EXISTS `studio`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `studio` (
  `Studio_ID` int NOT NULL AUTO_INCREMENT,
  `Studio_Name` varchar(45) NOT NULL,
  PRIMARY KEY (`Studio_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `studio`
--

LOCK TABLES `studio` WRITE;
/*!40000 ALTER TABLE `studio` DISABLE KEYS */;
INSERT INTO `studio` VALUES (1,'Studio Pierrot'),(2,'Toei Animation'),(3,'A-1 Pictures'),(4,'Kyoto Animation'),(5,'Nippon TV '),(6,'Wit Studio'),(7,'Shaft'),(8,'White Fox'),(9,'Bones'),(10,'Studio Deen'),(11,'Passione'),(12,'Production I.G'),(13,'Ufotable'),(14,'Silver Link'),(15,'Hoods Entertainment '),(16,'Mad house'),(17,'Gainax'),(18,'Science SARU'),(19,'Ghbli'),(20,'Viz media');
/*!40000 ALTER TABLE `studio` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-25 18:39:18
