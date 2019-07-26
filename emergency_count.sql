-- MySQL dump 10.13  Distrib 8.0.15, for Win64 (x86_64)
--
-- Host: localhost    Database: emergency_count
-- ------------------------------------------------------
-- Server version	8.0.15

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
 SET NAMES utf8 ;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_01_19_035640_create_level_users',1),(4,'2019_01_20_142020_create_t_group_menu',1),(5,'2019_01_20_142240_create_t_sub_menu',1),(6,'2019_01_21_032636_create_t_controller',1),(7,'2019_01_21_032705_create_t_method',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('handrisaeputra@gmail.com','$2y$10$W2tGM0sg0ifz2WYNnOf6LOL1ycvoA2F31gCiB6kNNSXMtgeogNAIa','2019-04-10 06:08:21');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_area`
--

DROP TABLE IF EXISTS `tb_area`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `area_name` varchar(255) DEFAULT NULL,
  `id_parent_area` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_area`
--

LOCK TABLES `tb_area` WRITE;
/*!40000 ALTER TABLE `tb_area` DISABLE KEYS */;
INSERT INTO `tb_area` VALUES (3,'Assembly Point 1',2),(4,'Assembly point 2',2),(5,'Assembly Point 3',2),(6,'Assembly Point 4',2);
/*!40000 ALTER TABLE `tb_area` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_area_parent`
--

DROP TABLE IF EXISTS `tb_area_parent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_area_parent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_area_parent`
--

LOCK TABLES `tb_area_parent` WRITE;
/*!40000 ALTER TABLE `tb_area_parent` DISABLE KEYS */;
INSERT INTO `tb_area_parent` VALUES (1,'Main Gate'),(2,'Savoury Factory');
/*!40000 ALTER TABLE `tb_area_parent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_contractor`
--

DROP TABLE IF EXISTS `tb_contractor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_contractor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` varchar(45) DEFAULT NULL,
  `visitor_id` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `card_no` varchar(45) DEFAULT NULL,
  `birth_date` varchar(45) DEFAULT NULL,
  `company` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` longtext,
  `induction_date` date DEFAULT NULL,
  `block` varchar(45) DEFAULT NULL,
  `uli_pic` varchar(45) DEFAULT NULL,
  `company_pic` varchar(45) DEFAULT NULL,
  `dept_name` varchar(45) DEFAULT NULL,
  `phone_pic` varchar(45) DEFAULT NULL,
  `reason` longtext,
  `ptw_start` datetime DEFAULT NULL,
  `ptw_end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_contractor`
--

LOCK TABLES `tb_contractor` WRITE;
/*!40000 ALTER TABLE `tb_contractor` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_contractor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_department`
--

DROP TABLE IF EXISTS `tb_department`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_department` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_department`
--

LOCK TABLES `tb_department` WRITE;
/*!40000 ALTER TABLE `tb_department` DISABLE KEYS */;
INSERT INTO `tb_department` VALUES (2,'Engineering'),(3,'Finance Business Partnering'),(4,'Financial Control'),(5,'HR Business Partering'),(6,'Logistics');
/*!40000 ALTER TABLE `tb_department` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_device`
--

DROP TABLE IF EXISTS `tb_device`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_device` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serial_number` varchar(255) DEFAULT NULL,
  `device_name` varchar(255) DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `gateway` varchar(45) DEFAULT NULL,
  `area_id` int(11) DEFAULT NULL,
  `user_qty` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_device`
--

LOCK TABLES `tb_device` WRITE;
/*!40000 ALTER TABLE `tb_device` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_employee`
--

DROP TABLE IF EXISTS `tb_employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_employee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `personel_id` int(11) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `card_no` int(11) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` text,
  `birth_date` date DEFAULT NULL,
  `hired_date` date DEFAULT NULL,
  `resign_date` date DEFAULT NULL,
  `block` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_employee`
--

LOCK TABLES `tb_employee` WRITE;
/*!40000 ALTER TABLE `tb_employee` DISABLE KEYS */;
/*!40000 ALTER TABLE `tb_employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tb_visitor`
--

DROP TABLE IF EXISTS `tb_visitor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `tb_visitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_type` varchar(45) DEFAULT NULL,
  `visitor_id` varchar(45) DEFAULT NULL,
  `name` varchar(45) DEFAULT NULL,
  `card_no` varchar(45) DEFAULT NULL,
  `birth_date` varchar(45) DEFAULT NULL,
  `company` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `address` longtext,
  `induction_date` date DEFAULT NULL,
  `block` varchar(45) DEFAULT NULL,
  `uli_pic` varchar(45) DEFAULT NULL,
  `company_pic` varchar(45) DEFAULT NULL,
  `dept_name` varchar(45) DEFAULT NULL,
  `phone_pic` varchar(45) DEFAULT NULL,
  `reason` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tb_visitor`
--

LOCK TABLES `tb_visitor` WRITE;
/*!40000 ALTER TABLE `tb_visitor` DISABLE KEYS */;
INSERT INTO `tb_visitor` VALUES (1,'KTP','1 ','Handri ','3671102603960001 ','1996-03-26','Transmetatech ','081808784785 ','handrisaeputra@gmail.com','Kp. Cilangkap ','2019-07-26',NULL,'Ujang ','Savoury ','IT ','081281212 ','Instalasi ');
/*!40000 ALTER TABLE `tb_visitor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
 SET character_set_client = utf8mb4 ;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `real_password` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `active` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` int(11) DEFAULT NULL,
  `token_api` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `adddate` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addby` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Admin','admin@admin.com','hhandri26','$2y$10$YS4/pCZ7wjF8Uc1.JR9dreSMV0LoiOB9C66pFO4lPTPL0iQ8Bbcw2','123456789','081808784785    ',NULL,'1','iyyBF3w87deigCI8hByMkBZ3OF71wmP799iLWlPclBjHvIjiW4BCPPWbrSIL','2019-01-30 19:51:38','2019-02-25 19:31:19',1,'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJzdWIiOjEsImlzcyI6Imh0dHA6Ly9sb2NhbGhvc3Qvc2V0dXBfbGFyYXZlbC9hcGkvYXV0aC9zaWduaW4iLCJpYXQiOjE1NTQwODQyMDYsImV4cCI6MTU1NDA4NzgwNiwibmJmIjoxNTU0MDg0MjA2LCJqdGkiOiI0QVN6Ujdaa3ZzNVZrc09rIn0.XuC-fLJYgMu_hQ2KPly87em9yPVtv59UlXpz9LEXrVM',NULL,NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'emergency_count'
--

--
-- Dumping routines for database 'emergency_count'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-26 20:06:12
