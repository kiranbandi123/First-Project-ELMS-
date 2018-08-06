-- MySQL dump 10.13  Distrib 5.7.23, for Linux (x86_64)
--
-- Host: localhost    Database: Leaves
-- ------------------------------------------------------
-- Server version	5.7.23-0ubuntu0.16.04.1

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (1,'kiran','cb872f03b78c0ec21706c242ae4aca24','2018-07-21 06:37:09');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sign`
--

DROP TABLE IF EXISTS `sign`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sign` (
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Country` varchar(150) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sign`
--

LOCK TABLES `sign` WRITE;
/*!40000 ALTER TABLE `sign` DISABLE KEYS */;
INSERT INTO `sign` VALUES ('Anuj','kumar','anuj@gmail.com','f925916e2754e5e03f75dd58a5733251','Male','New Delhi','Delhi','India','9857555555','2017-11-10 11:29:59'),('Amit','kumar','test@gmail.com','f925916e2754e5e03f75dd58a5733251','Male','New Delhi','Delhi','India','8587944255','2017-11-10 13:40:02'),('abhi','abhi','abhi@gmail.com','cb872f03b78c0ec21706c242ae4aca24','Male','yanam','hyd','india','9010272413','2018-07-21 06:34:28'),('Sr! ','Bh@rg@v!','sribhargavi50@gmail.com','8314a84be99633f8e27e05dfba3a547f','Female','Nandigama','Nandigama','India','8464826907','2018-07-21 08:50:49'),('k','ku','k@gmail.com','cb872f03b78c0ec21706c242ae4aca24','Male','y','s','i','9010272413','2018-07-21 09:21:37');
/*!40000 ALTER TABLE `sign` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tail`
--

DROP TABLE IF EXISTS `tail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EmpId` varchar(100) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Dob` varchar(100) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Country` varchar(150) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `Status` int(1) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tail`
--

LOCK TABLES `tail` WRITE;
/*!40000 ALTER TABLE `tail` DISABLE KEYS */;
INSERT INTO `tail` VALUES (1,'EMP10806121','Anuj','kumar','anuj@gmail.com','f925916e2754e5e03f75dd58a5733251','Male','3 February, 1990','Human Resource','New Delhi','Delhi','India','9857555555',1,'2017-11-10 11:29:59'),(2,'DEMP2132','Amit','kumar','test@gmail.com','f925916e2754e5e03f75dd58a5733251','Male','3 February, 1990','Information Technology','New Delhi','Delhi','India','8587944255',1,'2017-11-10 13:40:02'),(3,'Abhi','abhi','abhi','abhi@gmail.com','cb872f03b78c0ec21706c242ae4aca24','Male','2 February, 2018','Human Resource','yanam','hyd','india','9010272413',1,'2018-07-21 06:34:28'),(4,'Sr! Bh@rg@v!','Sr! ','Bh@rg@v!','sribhargavi50@gmail.com','8314a84be99633f8e27e05dfba3a547f','Female','21 July, 2018','Information Technology','Nandigama','Nandigama','India','8464826907',1,'2018-07-21 08:50:49'),(5,'1','kiran','kumar','k@gmail.com','3a40b44fb0d67ce65ff596264ffe001a','Male','','Information Technology','yellour','s','India','9010272413',1,'2018-07-21 09:21:37'),(6,'E12','abhi','kumar','kumar@gmail.com','3a40b44fb0d67ce65ff596264ffe001a','Male','2018-07-11','Information Technology','yanam','kakinada','India','901027',1,'2018-07-31 06:20:01'),(7,'E13','bar','sri','sri@gmail.com','991764efb54f943949376326c2d02c22','Female','1997-12-01','Information Technology','nandigama','vijawada','india','90102724',1,'2018-07-31 06:23:20'),(8,'E14','Kiran','kumar','kiran@gmail.com','cfca875af8f6742c515863628cf0bd35','Male','2018-09-12','Information Technology','yanam','kakinada','India','9010272413',1,'2018-07-31 06:37:08'),(9,'e123','nani','dangeti','nani@simpleskills.co','681853833a7182841dafd90f84f2bea7','Female','1998-07-26','Information Technology','SRIKAKULAM','PONDURU','INDIA','7893422353',1,'2018-07-31 12:50:39'),(10,'A4','madhu','kumar','madhuk@simpleskills.co','ee1e0227ee247eb1adfd9aff1556955a','Male','1990-05-05','Information Technology','E.madhukumar ,s/o E.stayanarayana ','komaragiri','India','9398417455',1,'2018-08-02 07:30:08'),(11,'E124','gupta','grln','gupta@simpleskills.co','17dea3a8eb3d67a1903a79f217809f41','Male','1995-08-30','Information Technology','17-4-39,pedagantayada, gajuwaka','vishakapatnam','India','7799062744',1,'2018-08-03 12:46:45');
/*!40000 ALTER TABLE `tail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl`
--

DROP TABLE IF EXISTS `tbl`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `first` char(20) DEFAULT NULL,
  `last` char(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `phone` int(20) DEFAULT NULL,
  `address` varchar(40) DEFAULT NULL,
  `gender` char(20) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl`
--

LOCK TABLES `tbl` WRITE;
/*!40000 ALTER TABLE `tbl` DISABLE KEYS */;
/*!40000 ALTER TABLE `tbl` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbldepartments`
--

DROP TABLE IF EXISTS `tbldepartments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbldepartments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `DepartmentName` varchar(150) DEFAULT NULL,
  `DepartmentShortName` varchar(100) NOT NULL,
  `DepartmentCode` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbldepartments`
--

LOCK TABLES `tbldepartments` WRITE;
/*!40000 ALTER TABLE `tbldepartments` DISABLE KEYS */;
INSERT INTO `tbldepartments` VALUES (1,'Human Resource','HR','HR001','2017-11-01 07:16:25'),(2,'Information Technology','IT','IT001','2017-11-01 07:19:37'),(3,'Operations','OP','OP1','2017-12-02 21:28:56');
/*!40000 ALTER TABLE `tbldepartments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblemployees`
--

DROP TABLE IF EXISTS `tblemployees`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblemployees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `EmpId` varchar(100) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Dob` varchar(100) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Country` varchar(150) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `Status` int(1) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblemployees`
--

LOCK TABLES `tblemployees` WRITE;
/*!40000 ALTER TABLE `tblemployees` DISABLE KEYS */;
INSERT INTO `tblemployees` VALUES (1,'EMP10806121','Anuj','kumar','anuj@gmail.com','f925916e2754e5e03f75dd58a5733251','Male','3 February, 1990','Human Resource','New Delhi','Delhi','India','9857555555',1,'2017-11-10 11:29:59'),(2,'DEMP2132','Amit','kumar','test@gmail.com','f925916e2754e5e03f75dd58a5733251','Male','3 February, 1990','Information Technology','New Delhi','Delhi','India','8587944255',1,'2017-11-10 13:40:02'),(3,'Abhi','abhi','abhi','abhi@gmail.com','cb872f03b78c0ec21706c242ae4aca24','Male','2 February, 2018','Human Resource','yanam','hyd','india','9010272413',1,'2018-07-21 06:34:28'),(4,'Sr! Bh@rg@v!','Sr! ','Bh@rg@v!','sribhargavi50@gmail.com','8314a84be99633f8e27e05dfba3a547f','Female','21 July, 2018','Information Technology','Nandigama','Nandigama','India','8464826907',1,'2018-07-21 08:50:49'),(5,'1','kiran','kumar','k@gmail.com','cb872f03b78c0ec21706c242ae4aca24','Male','1 December, 2017','Information Technology','yellour','s','India','9010272413',1,'2018-07-21 09:21:37');
/*!40000 ALTER TABLE `tblemployees` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblleaves`
--

DROP TABLE IF EXISTS `tblleaves`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblleaves` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LeaveType` varchar(110) NOT NULL,
  `ToDate` varchar(120) NOT NULL,
  `FromDate` varchar(120) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `AdminRemark` mediumtext,
  `AdminRemarkDate` varchar(120) DEFAULT NULL,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `empid` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `UserEmail` (`empid`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblleaves`
--

LOCK TABLES `tblleaves` WRITE;
/*!40000 ALTER TABLE `tblleaves` DISABLE KEYS */;
INSERT INTO `tblleaves` VALUES (7,'Casual Leave','30/11/2017','29/10/2017','test description test descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest description','2017-11-19 13:11:21','Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n','2017-12-02 23:26:27 ',2,1,1),(8,'Medical Leave test','21/10/2017','25/10/2017','test description test descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest descriptiontest description','2017-11-20 11:14:14','Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2017-12-02 23:24:39 ',1,1,1),(9,'Medical Leave test','08/12/2017','12/12/2017','Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.\r\n','2017-12-02 18:26:01','but be in the time ','2018-07-21 12:16:54 ',1,1,2),(10,'Restricted Holiday(RH)','25/12/2017','25/12/2017','Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.','2017-12-03 08:29:07','Lorem Ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.','2017-12-03 14:06:12 ',1,1,1),(11,'Casual Leave','21/07/2018','31/12/2018','na estam','2018-07-21 08:53:30','na esta','2018-07-21 14:25:51 ',1,1,4),(12,'Casual Leave','28/07/2018','30/07/2018','Marriage','2018-07-27 09:59:38',NULL,NULL,0,0,NULL),(13,'Casual Leave','2018-07-06','2018-07-04','feeling sick','2018-08-01 06:01:22','be in time','2018-08-02 14:25:21 ',1,1,5),(14,'Casual Leave','2018-07-12','2018-08-22','Normally','2018-08-01 06:02:14',NULL,NULL,0,1,5),(15,'Casual Leave','2018-07-12','2018-08-22','Normally','2018-08-01 06:06:44','edd','2018-08-03 19:15:57 ',1,1,5),(16,'Casual Leave','2018-07-12','2018-08-22','Normally','2018-08-01 06:07:46','dsd','2018-08-03 19:12:25 ',1,1,5),(17,'Casual Leave','2018-07-12','2018-08-22','Normally','2018-08-01 06:08:00','come early','2018-08-03 19:10:39 ',1,1,5),(18,'Casual Leave','2018-07-12','2018-08-22','Normally','2018-08-01 06:08:39','es','2018-08-03 10:28:56 ',1,1,5),(19,'Casual Leave','2018-07-12','2018-08-22','Normally','2018-08-01 06:09:27','yes','2018-08-02 15:39:30 ',1,1,5),(20,'Casual Leave','2018-07-12','2018-08-22','Normally','2018-08-01 06:09:49','yes','2018-08-02 14:50:08 ',1,1,5),(21,'Casual Leave','2018-08-30','2018-09-13','na estam nekem kastam','2018-08-01 06:38:50',NULL,NULL,0,0,7),(22,'Casual Leave','2018-08-30','2018-09-13','na estam nekem kastam','2018-08-01 06:39:14',NULL,NULL,0,0,7),(23,'Casual Leave','2018-08-30','2018-09-13','na estam nekem kastam','2018-08-01 06:39:22',NULL,NULL,0,0,7),(24,'Restricted Holiday(RH)','2018-08-10','2018-08-11','ndfgbnfgnbfgnbn','2018-08-02 11:50:08','you already taken so many leaves','2018-08-03 10:28:28 ',2,1,5),(25,'Restricted Holiday(RH)','1996-08-31','2018-08-04','nothing','2018-08-03 12:51:39',NULL,NULL,0,0,11),(26,'Casual Leave','4325-03-12','4546-05-31','srytreb','2018-08-03 14:22:53',NULL,NULL,0,0,7),(27,'','0434-03-12','0001-03-12','awf','2018-08-03 14:23:26',NULL,NULL,0,0,7),(28,'','0434-03-12','0001-03-12','awf','2018-08-03 14:25:31',NULL,NULL,0,0,7),(29,'Casual Leave','0067-05-04','0001-01-01','jhbkjh','2018-08-03 14:25:58',NULL,NULL,0,0,7),(30,'Casual Leave','0067-05-04','0001-01-01','jhbkjh','2018-08-03 14:26:31',NULL,NULL,0,0,7),(31,'Casual Leave','0067-05-04','0001-01-01','jhbkjh','2018-08-03 14:27:19',NULL,NULL,0,0,7),(32,'Medical Leave test','0989-07-09','275760-08-08','bvhgjhg','2018-08-03 14:27:37',NULL,NULL,0,0,7),(33,'Medical Leave test','0989-07-09','275760-08-08','bvhgjhg','2018-08-03 14:27:59',NULL,NULL,0,0,7),(34,'Medical Leave test','0989-07-09','275760-08-08','bvhgjhg','2018-08-03 14:28:21',NULL,NULL,0,0,7);
/*!40000 ALTER TABLE `tblleaves` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tblleavetype`
--

DROP TABLE IF EXISTS `tblleavetype`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tblleavetype` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LeaveType` varchar(200) DEFAULT NULL,
  `Description` mediumtext,
  `CreationDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tblleavetype`
--

LOCK TABLES `tblleavetype` WRITE;
/*!40000 ALTER TABLE `tblleavetype` DISABLE KEYS */;
INSERT INTO `tblleavetype` VALUES (1,'Casual Leave','Casual Leave ','2017-11-01 12:07:56'),(2,'Medical Leave test','Medical Leave  test','2017-11-06 13:16:09'),(3,'Restricted Holiday(RH)','Restricted Holiday(RH)','2017-11-06 13:16:38');
/*!40000 ALTER TABLE `tblleavetype` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-08-03 20:36:03
