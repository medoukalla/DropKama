-- MySQL dump 10.13  Distrib 8.0.36, for Linux (x86_64)
--
-- Host: localhost    Database: laravel
-- ------------------------------------------------------
-- Server version	8.0.32

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
-- Table structure for table `data_rows`
--

DROP TABLE IF EXISTS `data_rows`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_rows` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `data_type_id` int unsigned NOT NULL,
  `field` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `order` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `data_rows_data_type_id_foreign` (`data_type_id`),
  CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=159 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_rows`
--

LOCK TABLES `data_rows` WRITE;
/*!40000 ALTER TABLE `data_rows` DISABLE KEYS */;
INSERT INTO `data_rows` VALUES (1,1,'id','number','ID',1,0,0,0,0,0,NULL,1),(2,1,'name','text','Name',1,1,1,1,1,1,NULL,2),(3,1,'email','text','Email',1,1,1,1,1,1,NULL,3),(4,1,'password','password','Password',1,0,0,1,1,0,NULL,4),(5,1,'remember_token','text','Remember Token',0,0,0,0,0,0,NULL,5),(6,1,'created_at','timestamp','Created At',0,1,1,0,0,0,NULL,6),(7,1,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,7),(8,1,'avatar','image','Avatar',0,1,1,1,1,1,NULL,8),(9,1,'user_belongsto_role_relationship','relationship','Role',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":0}',10),(10,1,'user_belongstomany_role_relationship','relationship','Roles',0,1,1,1,1,0,'{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}',11),(11,1,'settings','hidden','Settings',0,0,0,0,0,0,NULL,12),(12,2,'id','number','ID',1,0,0,0,0,0,NULL,1),(13,2,'name','text','Name',1,1,1,1,1,1,NULL,2),(14,2,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(15,2,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(16,3,'id','number','ID',1,0,0,0,0,0,NULL,1),(17,3,'name','text','Name',1,1,1,1,1,1,NULL,2),(18,3,'created_at','timestamp','Created At',0,0,0,0,0,0,NULL,3),(19,3,'updated_at','timestamp','Updated At',0,0,0,0,0,0,NULL,4),(20,3,'display_name','text','Display Name',1,1,1,1,1,1,NULL,5),(21,1,'role_id','text','Role',1,1,1,1,1,1,NULL,9),(87,13,'id','text','Id',1,0,0,0,0,0,'{}',1),(88,13,'title','text','Title',1,1,1,1,1,1,'{}',3),(89,13,'body','rich_text_box','Body',0,0,1,1,1,1,'{}',8),(90,13,'image','image','Image',0,0,0,0,0,0,'{}',2),(91,13,'slug','text','Slug',1,1,1,1,1,1,'{\"slugify\":{\"origin\":\"title\",\"forceUpdate\":true}}',4),(92,13,'meta_description','text_area','Meta Description',0,0,1,1,1,1,'{}',5),(93,13,'meta_keywords','text_area','Meta Keywords',0,0,1,1,1,1,'{}',6),(94,13,'active','select_dropdown','Active',1,1,1,1,1,1,'{\"default\":\"1\",\"options\":{\"0\":\"Inactive\",\"1\":\"Active\"}}',7),(95,13,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',9),(96,13,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',10),(109,15,'id','text','Id',1,0,0,0,0,0,'{}',1),(110,15,'name','text','Name',0,1,1,1,1,1,'{}',2),(111,15,'url','text','Url',0,0,0,0,0,0,'{}',3),(112,15,'created_at','timestamp','Created At',0,1,1,1,0,1,'{}',4),(113,15,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',5),(114,16,'id','text','Id',1,0,0,0,0,0,'{}',1),(115,16,'name','text','Name',1,1,1,1,1,1,'{}',5),(117,16,'price','number','Price($)',1,1,1,1,1,1,'{\"step\":0.001,\"min\":0,\"default\":0.001}',7),(118,16,'image','image','Image',1,1,1,1,1,1,'{}',2),(119,16,'map_id','hidden','Map Id',0,1,1,1,1,1,'{}',3),(120,16,'price_mad','hidden','Price Mad',1,0,0,0,0,0,'{\"step\":0.01,\"min\":0,\"default\":0.01}',8),(121,16,'price_usd','number','Price ( Usd )',1,0,1,1,1,1,'{\"step\":0.001,\"min\":0,\"default\":0.001}',9),(122,16,'price_buy','number','Price Buy',1,0,1,1,1,1,'{\"step\":0.001,\"min\":0,\"default\":0.001}',10),(123,16,'min','number','Min Quantity',0,0,1,1,1,1,'{\"min\":1,\"default\":1}',11),(124,16,'max','number','Max Qauntity',0,0,1,1,1,1,'{\"min\":1,\"default\":10}',12),(125,16,'active','checkbox','Status',1,1,1,1,1,1,'{\"on\":\"Disponible\",\"off\":\"Indisponible\",\"checked\":true}',13),(126,16,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',14),(127,16,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',15),(128,16,'server_belongsto_map_relationship','relationship','Map',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Map\",\"table\":\"maps\",\"type\":\"belongsTo\",\"column\":\"map_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',4),(129,17,'id','text','Id',1,0,0,0,0,0,'{}',1),(130,17,'name','text','Name',1,1,1,1,1,1,'{}',5),(131,17,'active','checkbox','Status',1,1,1,1,1,1,'{\"on\":\"Disponible\",\"off\":\"Indisponible\",\"checked\":true}',13),(132,17,'price','number','Price',0,1,1,1,1,1,'{\"step\":0.001,\"min\":0,\"default\":0.001}',6),(133,17,'paypal_price','number','Price (Paypal)',1,0,1,1,1,1,'{\"step\":0.001,\"min\":0,\"default\":0.001}',7),(134,17,'skrill_price','number','Price (Skrill)',1,0,1,1,1,1,'{\"step\":0.001,\"min\":0,\"default\":0.001}',8),(135,17,'cih_price','hidden','Cih Price',1,0,1,1,1,1,'{\"step\":0.01,\"min\":0,\"default\":0.01}',9),(136,17,'stripe_price','number','Price (Stripe)',0,0,1,1,1,1,'{\"step\":0.001,\"min\":0,\"default\":0.001}',10),(137,17,'min','number','Min Quantity',1,1,1,1,1,1,'{\"min\":1,\"default\":1}',11),(138,17,'max','number','Max Qauntity',1,1,1,1,1,1,'{\"min\":1,\"default\":10}',12),(139,17,'map_id','hidden','Map Id',0,1,1,1,1,1,'{}',3),(140,17,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',14),(141,17,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',15),(142,17,'offer_server_belongsto_map_relationship','relationship','Map',0,1,1,1,1,1,'{\"model\":\"App\\\\Models\\\\Map\",\"table\":\"maps\",\"type\":\"belongsTo\",\"column\":\"map_id\",\"key\":\"id\",\"label\":\"name\",\"pivot_table\":\"data_rows\",\"pivot\":\"0\",\"taggable\":\"0\"}',4),(143,17,'image','image','Image',1,1,1,1,1,1,'{}',2),(144,18,'id','text','Id',1,0,0,0,0,0,'{}',1),(145,18,'name','text','Name',1,1,1,1,1,1,'{}',3),(146,18,'job','text','Job title',0,1,1,1,1,1,'{}',4),(147,18,'avatar','image','Picture / Avatar',1,1,1,1,1,1,'{}',2),(148,18,'testimonial','text_area','Testimonial',1,0,1,1,1,1,'{}',5),(149,18,'active','checkbox','Status',1,1,1,1,1,1,'{\"on\":\"Disponible\",\"off\":\"Indisponible\",\"checked\":true}',6),(150,18,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',7),(151,18,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',8),(152,19,'id','text','Id',1,0,0,0,0,0,'{}',1),(153,19,'name','text','Name',1,1,1,1,1,1,'{}',2),(154,19,'active','checkbox','Status',1,1,1,1,1,1,'{\"on\":\"Disponible\",\"off\":\"Indisponible\",\"checked\":true}',5),(155,19,'svg_name','text','Svg file  Name',1,0,1,1,1,1,'{}',3),(156,19,'fees','number','Fees %',1,1,1,1,1,1,'{\"step\":0.01,\"min\":0,\"default\":0.01}',4),(157,19,'created_at','timestamp','Created At',0,0,0,0,0,0,'{}',6),(158,19,'updated_at','timestamp','Updated At',0,0,0,0,0,0,'{}',7);
/*!40000 ALTER TABLE `data_rows` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `data_types`
--

DROP TABLE IF EXISTS `data_types`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `data_types` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint NOT NULL DEFAULT '0',
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `data_types_name_unique` (`name`),
  UNIQUE KEY `data_types_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `data_types`
--

LOCK TABLES `data_types` WRITE;
/*!40000 ALTER TABLE `data_types` DISABLE KEYS */;
INSERT INTO `data_types` VALUES (1,'users','users','User','Users','voyager-person','TCG\\Voyager\\Models\\User','TCG\\Voyager\\Policies\\UserPolicy','TCG\\Voyager\\Http\\Controllers\\VoyagerUserController','',1,0,NULL,'2024-05-16 19:49:29','2024-05-16 19:49:29'),(2,'menus','menus','Menu','Menus','voyager-list','TCG\\Voyager\\Models\\Menu',NULL,'','',1,0,NULL,'2024-05-16 19:49:29','2024-05-16 19:49:29'),(3,'roles','roles','Role','Roles','voyager-lock','TCG\\Voyager\\Models\\Role',NULL,'TCG\\Voyager\\Http\\Controllers\\VoyagerRoleController','',1,0,NULL,'2024-05-16 19:49:29','2024-05-16 19:49:29'),(13,'pages','pages','Page','Pages',NULL,'TCG\\Voyager\\Models\\Page',NULL,NULL,NULL,1,0,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2024-05-23 21:54:40','2024-05-23 22:00:36'),(15,'maps','maps','Map','Maps',NULL,'App\\Models\\Map',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2024-07-01 11:39:14','2024-07-03 17:00:03'),(16,'servers','servers','Server','Servers',NULL,'App\\Models\\Server',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2024-07-01 12:47:39','2024-07-01 19:45:04'),(17,'offer_servers','servers-vendre','Server vendre','Servers vendre',NULL,'App\\Models\\OfferServer',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2024-07-01 18:53:34','2024-07-01 19:19:34'),(18,'testimonials','testimonials','Testimonial','Testimonials',NULL,'App\\Models\\Testimonial',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}','2024-07-01 20:05:38','2024-07-01 20:05:38'),(19,'payments','payments','Payment','Payments',NULL,'App\\Models\\Payment',NULL,NULL,NULL,1,1,'{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}','2024-07-03 16:17:14','2024-07-03 17:23:03');
/*!40000 ALTER TABLE `data_types` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `exchanges`
--

DROP TABLE IF EXISTS `exchanges`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `exchanges` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `from_server` int unsigned NOT NULL,
  `to_server` int unsigned NOT NULL,
  `quantity` int unsigned NOT NULL,
  `from_name` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `to_name` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` char(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity_get` char(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `orderId` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `exchanges_user_id_foreign` (`user_id`),
  CONSTRAINT `exchanges_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `exchanges`
--

LOCK TABLES `exchanges` WRITE;
/*!40000 ALTER TABLE `exchanges` DISABLE KEYS */;
/*!40000 ALTER TABLE `exchanges` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `maps`
--

DROP TABLE IF EXISTS `maps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `maps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'NULL',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `maps`
--

LOCK TABLES `maps` WRITE;
/*!40000 ALTER TABLE `maps` DISABLE KEYS */;
INSERT INTO `maps` VALUES (1,'Classique','NULL','2024-07-01 12:29:49','2024-07-01 12:29:49'),(2,'Touch','NULL','2024-07-01 12:34:51','2024-07-01 12:34:51'),(3,'Retro','NULL','2024-07-01 12:35:44','2024-07-01 12:35:44');
/*!40000 ALTER TABLE `maps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menu_items`
--

DROP TABLE IF EXISTS `menu_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menu_items` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int unsigned DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int DEFAULT NULL,
  `order` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `menu_items_menu_id_foreign` (`menu_id`),
  CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menu_items`
--

LOCK TABLES `menu_items` WRITE;
/*!40000 ALTER TABLE `menu_items` DISABLE KEYS */;
INSERT INTO `menu_items` VALUES (1,1,'Dashboard','','_self','smart-home',NULL,NULL,1,'2024-05-16 19:49:30','2024-06-22 19:40:21','voyager.dashboard',NULL),(3,1,'Users','','_self','users',NULL,NULL,3,'2024-05-16 19:49:30','2024-05-16 19:49:30','voyager.users.index',NULL),(4,1,'Roles','','_self','lock',NULL,NULL,2,'2024-05-16 19:49:30','2024-06-22 19:40:21','voyager.roles.index',NULL),(5,1,'Tools','','_self','toggle-left',NULL,NULL,4,'2024-05-16 19:49:30','2024-05-23 18:54:48',NULL,NULL),(6,1,'Menu Builder','','_self','settings','#000000',5,1,'2024-05-16 19:49:30','2024-06-26 13:47:45','voyager.menus.index','null'),(7,1,'Database','','_self','layout-grid',NULL,5,2,'2024-05-16 19:49:30','2024-05-23 18:54:48','voyager.database.index',NULL),(8,1,'Compass','','_self','layout-navbar',NULL,5,3,'2024-05-16 19:49:30','2024-05-23 18:54:48','voyager.compass.index',NULL),(9,1,'BREAD','','_self','settings','#000000',5,4,'2024-05-16 19:49:30','2024-06-26 13:41:25','voyager.bread.index','null'),(10,1,'Settings','','_self','settings','#000000',NULL,5,'2024-05-16 19:49:30','2024-06-22 15:24:10','voyager.settings.index','null'),(15,1,'Plugins store','','_self','brand-tabler','#000000',NULL,6,'2024-05-23 18:51:33','2024-06-22 00:05:44',NULL,''),(18,1,'Media','','_self','components','#000000',5,5,'2024-05-23 21:12:43','2024-06-26 13:47:00','voyager.media.index','null'),(23,1,'Maps','','_self','hexagons','#000000',NULL,8,'2024-07-01 11:39:14','2024-07-01 11:40:59','voyager.maps.index','null'),(24,1,'Servers ( Achat )','','_self','server-2','#000000',NULL,9,'2024-07-01 12:47:40','2024-07-01 16:59:54','voyager.servers.index','null'),(25,1,'Servers ( Vendre )','','_self','server','#000000',NULL,10,'2024-07-01 18:53:35','2024-07-01 18:55:50','voyager.servers-vendre.index','null'),(26,1,'Testimonials','','_self','quote','#000000',NULL,11,'2024-07-01 20:05:38','2024-07-01 20:08:13','voyager.testimonials.index','null'),(27,1,'Payments','','_self','wallet','#000000',NULL,12,'2024-07-03 16:17:14','2024-07-03 17:25:32','voyager.payments.index','null');
/*!40000 ALTER TABLE `menu_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `menus` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `menus_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `menus`
--

LOCK TABLES `menus` WRITE;
/*!40000 ALTER TABLE `menus` DISABLE KEYS */;
INSERT INTO `menus` VALUES (1,'admin','2024-05-16 19:49:30','2024-05-16 19:49:30');
/*!40000 ALTER TABLE `menus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2016_01_01_000000_add_voyager_user_fields',1),(4,'2016_01_01_000000_create_data_types_table',1),(5,'2016_05_19_173453_create_menu_table',1),(6,'2016_10_21_190000_create_roles_table',1),(7,'2016_10_21_190000_create_settings_table',1),(8,'2016_11_30_135954_create_permission_table',1),(9,'2016_11_30_141208_create_permission_role_table',1),(10,'2016_12_26_201236_data_types__add__server_side',1),(11,'2017_01_13_000000_add_route_to_menu_items_table',1),(12,'2017_01_14_005015_create_translations_table',1),(13,'2017_01_15_000000_make_table_name_nullable_in_permissions_table',1),(14,'2017_03_06_000000_add_controller_to_data_types_table',1),(15,'2017_04_21_000000_add_order_to_data_rows_table',1),(16,'2017_07_05_210000_add_policyname_to_data_types_table',1),(17,'2017_08_05_000000_add_group_to_settings_table',1),(18,'2017_11_26_013050_add_user_role_relationship',1),(19,'2017_11_26_015000_create_user_roles_table',1),(20,'2018_03_11_000000_add_user_settings',1),(21,'2018_03_14_000000_add_details_to_data_types_table',1),(22,'2018_03_16_000000_make_settings_value_nullable',1),(23,'2019_08_19_000000_create_failed_jobs_table',1),(24,'2019_12_14_000001_create_personal_access_tokens_table',1),(25,'2024_05_23_214211_create_pages_table',2),(26,'2024_06_16_072156_create_servers_table',3),(27,'2024_06_27_1719484087_create_maps_table',4),(28,'2024_06_27_1719484144_create_servers_table',5),(29,'2024_06_27_1719484195_create_offer_servers_table',5),(30,'2024_06_27_1719484215_create_exchanges_table',5),(31,'2024_06_27_1719484273_create_notifications_table',5),(32,'2024_06_27_1719484314_create_offers_table',5),(33,'2024_06_27_1719484339_create_orders_table',5),(34,'2024_06_27_1719484507_create_skrill_payments_table',5),(35,'2024_06_27_1719484532_create_subscription_items_table',5),(36,'2024_06_27_1719484553_create_subscriptions_table',5),(37,'2024_06_27_1719484568_create_testimonials_table',5),(38,'2024_07_03_161218_create_payments_table',6);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notifications` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint unsigned NOT NULL,
  `data` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offer_servers`
--

DROP TABLE IF EXISTS `offer_servers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `offer_servers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint NOT NULL DEFAULT '0',
  `price` decimal(8,3) DEFAULT NULL,
  `paypal_price` decimal(8,3) NOT NULL,
  `skrill_price` decimal(8,3) NOT NULL,
  `cih_price` decimal(8,2) NOT NULL,
  `stripe_price` decimal(8,3) DEFAULT NULL,
  `min` int unsigned NOT NULL DEFAULT '15',
  `max` int unsigned NOT NULL DEFAULT '150',
  `map_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_server.png',
  PRIMARY KEY (`id`),
  KEY `offer_servers_map_id_foreign` (`map_id`),
  CONSTRAINT `offer_servers_map_id_foreign` FOREIGN KEY (`map_id`) REFERENCES `maps` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offer_servers`
--

LOCK TABLES `offer_servers` WRITE;
/*!40000 ALTER TABLE `offer_servers` DISABLE KEYS */;
INSERT INTO `offer_servers` VALUES (1,'Oshimo',1,1.300,1.350,1.500,0.01,1.455,10,100,1,'2024-07-01 19:05:04','2024-07-01 19:05:04','offer-servers/July2024/ZNMBXhJV2Bl0dJd8p6cG.jpg');
/*!40000 ALTER TABLE `offer_servers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offers`
--

DROP TABLE IF EXISTS `offers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `offers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `server_id` bigint unsigned NOT NULL,
  `orderId` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` decimal(10,3) DEFAULT NULL,
  `total` decimal(8,3) DEFAULT NULL,
  `game_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_info` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `discord` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('en cours','paye','annule') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'en cours',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `offers_server_id_foreign` (`server_id`),
  KEY `offers_user_id_foreign` (`user_id`),
  CONSTRAINT `offers_server_id_foreign` FOREIGN KEY (`server_id`) REFERENCES `offer_servers` (`id`),
  CONSTRAINT `offers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offers`
--

LOCK TABLES `offers` WRITE;
/*!40000 ALTER TABLE `offers` DISABLE KEYS */;
/*!40000 ALTER TABLE `offers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `orders` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `orderId` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `total` decimal(8,3) DEFAULT NULL,
  `bonus` int DEFAULT NULL,
  `type` enum('buy','sell') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'buy',
  `game_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payed` tinyint NOT NULL DEFAULT '0',
  `payment_verified` tinyint NOT NULL DEFAULT '0',
  `facturer` tinyint NOT NULL DEFAULT '0',
  `liviser` tinyint NOT NULL DEFAULT '0',
  `delivered` tinyint NOT NULL DEFAULT '0',
  `order_completed` tinyint NOT NULL DEFAULT '0',
  `facturation_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_discrod` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_code` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facturation_agree` tinyint NOT NULL DEFAULT '0',
  `server_id` bigint unsigned DEFAULT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_server_id_foreign` (`server_id`),
  KEY `orders_user_id_foreign` (`user_id`),
  CONSTRAINT `orders_server_id_foreign` FOREIGN KEY (`server_id`) REFERENCES `servers` (`id`),
  CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pages`
--

DROP TABLE IF EXISTS `pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `author_id` int DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `pages_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pages`
--

LOCK TABLES `pages` WRITE;
/*!40000 ALTER TABLE `pages` DISABLE KEYS */;
INSERT INTO `pages` VALUES (1,'First page title','<p>sjknqkwjsnsqiushuiqshiquwshiquwshiuqhwsiuqwhsuqhsiuqhsiuqhsuiqhsuiqhwsui</p><ol><li>ajnjknwd</li><li>wkjdnwked</li><li>dkwjendkjwned</li></ol><p>&nbsp;</p><h2>Headline here</h2><p>&nbsp;</p><figure class=\"table\"><table><tbody><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></figure><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><figure class=\"media\"><oembed url=\"https://www.youtube.com/watch?v=dAT6l6IobkA&amp;ab_channel=LaravelDaily\"></oembed></figure>',NULL,'firts-page-title','Meta description for seo','Keywords,for,seo',1,'2024-05-23 22:29:39','2024-05-23 22:29:39',1);
/*!40000 ALTER TABLE `pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('admin@ecom.com','$2y$10$uU5PP4Arx9FAdch8Z.HnNeUFDlStAqWSXSuBMtBMYfDOpWfZYGlsu','2024-06-26 22:49:19');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` char(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `svg_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fees` decimal(5,2) NOT NULL DEFAULT '0.00',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `payments_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments`
--

LOCK TABLES `payments` WRITE;
/*!40000 ALTER TABLE `payments` DISABLE KEYS */;
INSERT INTO `payments` VALUES (1,'Stripe',1,'stripe',2.00,'2024-07-03 17:15:00','2024-07-03 17:15:00'),(2,'Lydia',1,'lydia',1.50,'2024-07-03 17:16:17','2024-07-03 17:17:06'),(3,'Revolut',1,'revolute',2.40,'2024-07-03 17:16:43','2024-07-03 17:17:21'),(4,'Mastercard',1,'mastercard',2.20,'2024-07-03 17:17:50','2024-07-03 17:17:50'),(5,'Visa',1,'visa',2.20,'2024-07-03 17:18:12','2024-07-03 17:18:12'),(6,'Giropay',1,'giropay',1.90,'2024-07-03 17:19:32','2024-07-03 17:19:32'),(7,'Ideal',1,'ideal',1.90,'2024-07-03 17:20:01','2024-07-03 17:20:01'),(8,'Bancontact',1,'bancontact',2.40,'2024-07-03 17:20:20','2024-07-03 17:20:20'),(9,'Paypal',1,'paypal',3.00,'2024-07-03 17:20:46','2024-07-03 17:20:46'),(10,'Wise',1,'wise',2.90,'2024-07-03 17:20:59','2024-07-03 17:20:59'),(11,'Skrill',1,'skrill',3.20,'2024-07-03 17:21:15','2024-07-03 17:21:15'),(12,'Usdt',1,'usdt',1.00,'2024-07-03 17:21:33','2024-07-03 17:21:33'),(13,'Bitcoin',1,'crypto',1.00,'2024-07-03 17:22:12','2024-07-03 17:22:12'),(14,'Bank transfer',1,'bank-transfer',0.00,'2024-07-03 17:22:39','2024-07-03 17:22:39');
/*!40000 ALTER TABLE `payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permission_role`
--

DROP TABLE IF EXISTS `permission_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_permission_id_index` (`permission_id`),
  KEY `permission_role_role_id_index` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permission_role`
--

LOCK TABLES `permission_role` WRITE;
/*!40000 ALTER TABLE `permission_role` DISABLE KEYS */;
INSERT INTO `permission_role` VALUES (1,1),(1,3),(2,1),(3,1),(4,1),(5,1),(6,1),(7,1),(8,1),(9,1),(10,1),(11,1),(12,1),(13,1),(14,1),(15,1),(16,1),(17,1),(18,1),(19,1),(20,1),(21,1),(22,1),(23,1),(24,1),(25,1),(56,1),(57,1),(58,1),(59,1),(60,1),(66,1),(67,1),(68,1),(69,1),(70,1),(71,1),(72,1),(73,1),(74,1),(75,1),(76,1),(77,1),(78,1),(79,1),(80,1),(81,1),(82,1),(83,1),(84,1),(85,1),(86,1),(87,1),(88,1),(89,1),(90,1);
/*!40000 ALTER TABLE `permission_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `permissions_key_index` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=91 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `permissions`
--

LOCK TABLES `permissions` WRITE;
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
INSERT INTO `permissions` VALUES (1,'browse_admin',NULL,'2024-05-16 19:49:30','2024-05-16 19:49:30'),(2,'browse_bread',NULL,'2024-05-16 19:49:30','2024-05-16 19:49:30'),(3,'browse_database',NULL,'2024-05-16 19:49:30','2024-05-16 19:49:30'),(4,'browse_media',NULL,'2024-05-16 19:49:30','2024-05-16 19:49:30'),(5,'browse_compass',NULL,'2024-05-16 19:49:30','2024-05-16 19:49:30'),(6,'browse_menus','menus','2024-05-16 19:49:30','2024-05-16 19:49:30'),(7,'read_menus','menus','2024-05-16 19:49:30','2024-05-16 19:49:30'),(8,'edit_menus','menus','2024-05-16 19:49:30','2024-05-16 19:49:30'),(9,'add_menus','menus','2024-05-16 19:49:30','2024-05-16 19:49:30'),(10,'delete_menus','menus','2024-05-16 19:49:30','2024-05-16 19:49:30'),(11,'browse_roles','roles','2024-05-16 19:49:30','2024-05-16 19:49:30'),(12,'read_roles','roles','2024-05-16 19:49:30','2024-05-16 19:49:30'),(13,'edit_roles','roles','2024-05-16 19:49:30','2024-05-16 19:49:30'),(14,'add_roles','roles','2024-05-16 19:49:30','2024-05-16 19:49:30'),(15,'delete_roles','roles','2024-05-16 19:49:30','2024-05-16 19:49:30'),(16,'browse_users','users','2024-05-16 19:49:30','2024-05-16 19:49:30'),(17,'read_users','users','2024-05-16 19:49:30','2024-05-16 19:49:30'),(18,'edit_users','users','2024-05-16 19:49:30','2024-05-16 19:49:30'),(19,'add_users','users','2024-05-16 19:49:30','2024-05-16 19:49:30'),(20,'delete_users','users','2024-05-16 19:49:30','2024-05-16 19:49:30'),(21,'browse_settings','settings','2024-05-16 19:49:30','2024-05-16 19:49:30'),(22,'read_settings','settings','2024-05-16 19:49:30','2024-05-16 19:49:30'),(23,'edit_settings','settings','2024-05-16 19:49:30','2024-05-16 19:49:30'),(24,'add_settings','settings','2024-05-16 19:49:30','2024-05-16 19:49:30'),(25,'delete_settings','settings','2024-05-16 19:49:30','2024-05-16 19:49:30'),(56,'browse_pages','pages','2024-05-23 21:54:40','2024-05-23 21:54:40'),(57,'read_pages','pages','2024-05-23 21:54:40','2024-05-23 21:54:40'),(58,'edit_pages','pages','2024-05-23 21:54:40','2024-05-23 21:54:40'),(59,'add_pages','pages','2024-05-23 21:54:40','2024-05-23 21:54:40'),(60,'delete_pages','pages','2024-05-23 21:54:40','2024-05-23 21:54:40'),(66,'browse_maps','maps','2024-07-01 11:39:14','2024-07-01 11:39:14'),(67,'read_maps','maps','2024-07-01 11:39:14','2024-07-01 11:39:14'),(68,'edit_maps','maps','2024-07-01 11:39:14','2024-07-01 11:39:14'),(69,'add_maps','maps','2024-07-01 11:39:14','2024-07-01 11:39:14'),(70,'delete_maps','maps','2024-07-01 11:39:14','2024-07-01 11:39:14'),(71,'browse_servers','servers','2024-07-01 12:47:39','2024-07-01 12:47:39'),(72,'read_servers','servers','2024-07-01 12:47:39','2024-07-01 12:47:39'),(73,'edit_servers','servers','2024-07-01 12:47:39','2024-07-01 12:47:39'),(74,'add_servers','servers','2024-07-01 12:47:39','2024-07-01 12:47:39'),(75,'delete_servers','servers','2024-07-01 12:47:39','2024-07-01 12:47:39'),(76,'browse_offer_servers','offer_servers','2024-07-01 18:53:34','2024-07-01 18:53:34'),(77,'read_offer_servers','offer_servers','2024-07-01 18:53:35','2024-07-01 18:53:35'),(78,'edit_offer_servers','offer_servers','2024-07-01 18:53:35','2024-07-01 18:53:35'),(79,'add_offer_servers','offer_servers','2024-07-01 18:53:35','2024-07-01 18:53:35'),(80,'delete_offer_servers','offer_servers','2024-07-01 18:53:35','2024-07-01 18:53:35'),(81,'browse_testimonials','testimonials','2024-07-01 20:05:38','2024-07-01 20:05:38'),(82,'read_testimonials','testimonials','2024-07-01 20:05:38','2024-07-01 20:05:38'),(83,'edit_testimonials','testimonials','2024-07-01 20:05:38','2024-07-01 20:05:38'),(84,'add_testimonials','testimonials','2024-07-01 20:05:38','2024-07-01 20:05:38'),(85,'delete_testimonials','testimonials','2024-07-01 20:05:38','2024-07-01 20:05:38'),(86,'browse_payments','payments','2024-07-03 16:17:14','2024-07-03 16:17:14'),(87,'read_payments','payments','2024-07-03 16:17:14','2024-07-03 16:17:14'),(88,'edit_payments','payments','2024-07-03 16:17:14','2024-07-03 16:17:14'),(89,'add_payments','payments','2024-07-03 16:17:14','2024-07-03 16:17:14'),(90,'delete_payments','payments','2024-07-03 16:17:14','2024-07-03 16:17:14');
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `personal_access_tokens`
--

LOCK TABLES `personal_access_tokens` WRITE;
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `roles`
--

LOCK TABLES `roles` WRITE;
/*!40000 ALTER TABLE `roles` DISABLE KEYS */;
INSERT INTO `roles` VALUES (1,'admin','Administrator','2024-05-16 19:49:30','2024-05-16 19:49:30'),(2,'user','Normal User','2024-05-16 19:49:30','2024-05-16 19:49:30'),(3,'Developer','Developer','2024-05-17 12:09:59','2024-05-17 12:09:59');
/*!40000 ALTER TABLE `roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `servers`
--

DROP TABLE IF EXISTS `servers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `servers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(12,3) NOT NULL,
  `image` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default_server.png',
  `map_id` bigint unsigned DEFAULT NULL,
  `price_mad` decimal(12,2) NOT NULL DEFAULT '0.00',
  `price_usd` decimal(12,3) NOT NULL,
  `price_buy` decimal(12,3) NOT NULL DEFAULT '0.000',
  `min` int DEFAULT NULL,
  `max` int DEFAULT NULL,
  `active` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `servers_map_id_foreign` (`map_id`),
  CONSTRAINT `servers_map_id_foreign` FOREIGN KEY (`map_id`) REFERENCES `maps` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `servers`
--

LOCK TABLES `servers` WRITE;
/*!40000 ALTER TABLE `servers` DISABLE KEYS */;
INSERT INTO `servers` VALUES (7,'Tiliwan',4.990,'servers/July2024/AXJq0xcwIasx7DGjblaO.webp',2,0.00,5.390,4.000,10,100,1,'2024-07-03 10:45:46','2024-07-03 10:45:46'),(8,'Herdegrize',4.950,'servers/July2024/N32U5o2OeMAtnp9Qb7cj.webp',2,0.00,5.350,3.900,11,111,0,'2024-07-03 10:46:35','2024-07-03 13:16:12'),(9,'Tiliwan-2',5.900,'servers/July2024/ICIKAsOjoeKaPMQNB4SZ.webp',1,0.00,6.350,5.000,12,120,1,'2024-07-03 10:47:31','2024-07-03 10:47:31'),(10,'Terre-cogita',5.000,'servers/July2024/mDLQEGrnaRzU2YhbIOD5.png',1,0.00,5.300,4.300,13,130,1,'2024-07-03 10:48:17','2024-07-03 10:48:17'),(11,'Talkasha',9.000,'servers/July2024/xf7aczdeXYvfKjgoIWG8.png',3,0.00,9.700,8.000,15,150,0,'2024-07-03 10:49:10','2024-07-03 13:15:50'),(12,'Tylezia',9.000,'servers/July2024/xDM1clfeMuE1HBq96dxo.png',3,0.00,10.000,8.000,16,160,1,'2024-07-03 10:49:47','2024-07-03 10:49:47');
/*!40000 ALTER TABLE `servers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `details` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int NOT NULL DEFAULT '1',
  `group` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `settings_key_unique` (`key`)
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'site.title','Site Title','Site Title','','text',1,'Site'),(2,'site.description','Site Description','Site Description','','text',2,'Site'),(3,'site.logo','Site Logo','','','image',3,'Site'),(4,'site.google_analytics_tracking_id','Google Analytics Tracking ID',NULL,'','text',27,'Site'),(5,'admin.bg_image','Admin Background Image','','','image',5,'Admin'),(6,'admin.title','Admin Title','DropKamas','','text',1,'Admin'),(7,'admin.description','Admin Description','Welcome to your dashboard','','text',2,'Admin'),(8,'admin.loader','Admin Loader','','','image',3,'Admin'),(9,'admin.icon_image','Admin Icon Image','settings/July2024/qAj5LrvZ12VszJbMKfmV.png','','image',4,'Admin'),(10,'admin.google_analytics_client_id','Google Analytics Client ID (used for admin dashboard)',NULL,'','text',1,'Admin'),(13,'methodes-de-payement.stripe','Stripe :','option1','{\n    \"default\" : \"option1\",\n    \"options\" : {\n        \"option1\": \"Disponible\",\n        \"option2\": \"Indisponible\"\n    }\n}','select_dropdown',7,'Methodes de payement'),(14,'methodes-de-payement.paypal','Paypal :','option1','{\n    \"default\" : \"option1\",\n    \"options\" : {\n        \"option1\": \"Disponible\",\n        \"option2\": \"Indisponible\"\n    }\n}','select_dropdown',8,'Methodes de payement'),(15,'methodes-de-payement.mastercard','Mastercard :','option1','{\n    \"default\" : \"option1\",\n    \"options\" : {\n        \"option1\": \"Disponible\",\n        \"option2\": \"Indisponible\"\n    }\n}','select_dropdown',9,'Methodes de payement'),(16,'methodes-de-payement.wise','Wise :','option1','{\r\n    \"default\" : \"option1\",\r\n    \"options\" : {\r\n        \"option1\": \"Disponible\",\r\n        \"option2\": \"Indisponible\"\r\n    }\r\n}','select_dropdown',10,'Methodes de payement'),(17,'methodes-de-payement.skrill','Skrill :','option1','{\r\n    \"default\" : \"option1\",\r\n    \"options\" : {\r\n        \"option1\": \"Disponible\",\r\n        \"option2\": \"Indisponible\"\r\n    }\r\n}','select_dropdown',11,'Methodes de payement'),(18,'methodes-de-payement.usdt','USDT :','option1','{\r\n    \"default\" : \"option1\",\r\n    \"options\" : {\r\n        \"option1\": \"Disponible\",\r\n        \"option2\": \"Indisponible\"\r\n    }\r\n}','select_dropdown',12,'Methodes de payement'),(19,'methodes-de-payement.visa','Visa :','option1','{\r\n    \"default\" : \"option1\",\r\n    \"options\" : {\r\n        \"option1\": \"Disponible\",\r\n        \"option2\": \"Indisponible\"\r\n    }\r\n}','select_dropdown',13,'Methodes de payement'),(20,'methodes-de-payement.lydia','Lydia :','option1','{\r\n    \"default\" : \"option1\",\r\n    \"options\" : {\r\n        \"option1\": \"Disponible\",\r\n        \"option2\": \"Indisponible\"\r\n    }\r\n}','select_dropdown',14,'Methodes de payement'),(21,'methodes-de-payement.revolut','Revolut :','option1','{\r\n    \"default\" : \"option1\",\r\n    \"options\" : {\r\n        \"option1\": \"Disponible\",\r\n        \"option2\": \"Indisponible\"\r\n    }\r\n}','select_dropdown',15,'Methodes de payement'),(22,'methodes-de-payement.bitcoin','Bitcoin :','option1','{\r\n    \"default\" : \"option1\",\r\n    \"options\" : {\r\n        \"option1\": \"Disponible\",\r\n        \"option2\": \"Indisponible\"\r\n    }\r\n}','select_dropdown',16,'Methodes de payement'),(23,'methodes-de-payement.giropay','Giropay :','option1','{\r\n    \"default\" : \"option1\",\r\n    \"options\" : {\r\n        \"option1\": \"Disponible\",\r\n        \"option2\": \"Indisponible\"\r\n    }\r\n}','select_dropdown',17,'Methodes de payement'),(24,'methodes-de-payement.ideal','Ideal :','option1','{\r\n    \"default\" : \"option1\",\r\n    \"options\" : {\r\n        \"option1\": \"Disponible\",\r\n        \"option2\": \"Indisponible\"\r\n    }\r\n}','select_dropdown',18,'Methodes de payement'),(25,'methodes-de-payement.bancontact','Bancontact :','option1','{\r\n    \"default\" : \"option1\",\r\n    \"options\" : {\r\n        \"option1\": \"Disponible\",\r\n        \"option2\": \"Indisponible\"\r\n    }\r\n}','select_dropdown',19,'Methodes de payement'),(26,'methodes-de-payement-infos.paypal-email','Paypal email :',NULL,'{\r\n    \"validation\": {\r\n        \"rule\": \"email\"\r\n    }\r\n}','text',20,'Methodes de payement infos'),(27,'methodes-de-payement-infos.usdt-address','USDT wallet :',NULL,NULL,'text',21,'Methodes de payement infos'),(28,'methodes-de-payement-infos.btc-address','BTC wallet :',NULL,NULL,'text',22,'Methodes de payement infos'),(29,'methodes-de-payement.virement-bancaire','Virement bancaire','option1','{     \"default\" : \"option1\",     \"options\" : {         \"option1\": \"Disponible\",         \"option2\": \"Indisponible\"     } }','select_dropdown',23,'Methodes de payement'),(30,'methodes-de-payement-infos.bank-name','Virement bancaire - nom du bank :',NULL,NULL,'text',24,'Methodes de payement infos'),(31,'methodes-de-payement-infos.bank-compte-name','Virement bancaire - nom du compte :',NULL,NULL,'text',25,'Methodes de payement infos'),(32,'methodes-de-payement-infos.bank-compte-number','Virement bancaire - numéro de compte :',NULL,NULL,'text',26,'Methodes de payement infos'),(33,'site.facebook','Facebook link :',NULL,NULL,'text',28,'Site'),(34,'site.instagram','Instagram link :',NULL,NULL,'text',29,'Site'),(35,'site.twitter','Twitter (x) link :',NULL,NULL,'text',30,'Site'),(36,'site.discord','Discord link :',NULL,NULL,'text',50,'Site'),(37,'plus-de-reglages.bonus-echange','Bonus d\'echange % :','0','{\r\n    \"default\" : \"0\" }','text',31,'Plus de réglages'),(39,'plus-de-reglages.bonus-achat','Bonus d\'achat % :','0',NULL,'text',33,'Plus de réglages'),(40,'localisation-dans-le-jeu.echange-localisation-first','Localisation d\'échange - Rendez-vous à :','4/-22',NULL,'text',34,'Localisation dans le jeu'),(41,'localisation-dans-le-jeu.echange-localisation-second','Localisation d\'échange - Attendez le livreur à :','4/-22',NULL,'text',35,'Localisation dans le jeu'),(42,'localisation-dans-le-jeu.localisation-vendre','Localisation de vendre - Rendez-vous à :','4/-22',NULL,'text',36,'Localisation dans le jeu'),(43,'localisation-dans-le-jeu.localisation-achat','Localisation d\'achat - Rendez-vous à :','4/-22',NULL,'text',37,'Localisation dans le jeu'),(44,'titres-des-pages-seo.default','Default pages title :','Achetez, Vendez et Échangez des Kamas sur DropKamas.com | Votre Source Fiable de Kamas',NULL,'text',38,'Titres des pages (SEO)'),(45,'titres-des-pages-seo.index','Index page :','Achetez, Vendez et Échangez des Kamas Dofus | DropKamas.com - La Plateforme Fiable de Kamas',NULL,'text',39,'Titres des pages (SEO)'),(46,'titres-des-pages-seo.vendre','Vendre page :','Vendez Vos Kamas Dofus Rapidement et Facilement | DropKamas.com',NULL,'text',40,'Titres des pages (SEO)'),(47,'titres-des-pages-seo.echange','Echange page :','Echangez vos kamas sur Dofus / Dofus Retro / Dofus Touch au meilleur Prix',NULL,'text',41,'Titres des pages (SEO)'),(48,'titres-des-pages-seo.achat','Achat page :','Acheter des Kamas Dofus en Toute Sécurité | Offres Exclusives sur DropKamas.com',NULL,'text',42,'Titres des pages (SEO)'),(49,'titres-des-pages-seo.payment','Payment page :','Paiement',NULL,'text',43,'Titres des pages (SEO)'),(50,'titres-des-pages-seo.confirmation','Confirmation page :','Procedure Achat Kamas - DropKamas - Livraison sur place',NULL,'text',44,'Titres des pages (SEO)'),(51,'titres-des-pages-seo.finish-order','Finish order page :','Etapes Achat Kamas',NULL,'text',45,'Titres des pages (SEO)'),(52,'titres-des-pages-seo.order-details','Order details page :','Détails de la commande',NULL,'text',46,'Titres des pages (SEO)'),(53,'titres-des-pages-seo.cgu','CGU page :','Conditions générales',NULL,'text',47,'Titres des pages (SEO)'),(54,'titres-des-pages-seo.cgv','CGV page :','Conditions générales de vente',NULL,'text',48,'Titres des pages (SEO)'),(55,'titres-des-pages-seo.after-vendre','After vendre page :','Vendez vos kamas sur Dofus / Dofus Retro / Dofus Touch au meilleur Prix',NULL,'text',49,'Titres des pages (SEO)'),(56,'site.header-image','Curseur d\'image d\'accueil :','',NULL,'image',4,'Site');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `skrill_payments`
--

DROP TABLE IF EXISTS `skrill_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `skrill_payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `mb_transaction_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `invoice_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_from` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `biller_email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `currency` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `skrill_payments`
--

LOCK TABLES `skrill_payments` WRITE;
/*!40000 ALTER TABLE `skrill_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `skrill_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscription_items`
--

DROP TABLE IF EXISTS `subscription_items`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscription_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `subscription_id` bigint unsigned NOT NULL,
  `stripe_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_product` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscription_items`
--

LOCK TABLES `subscription_items` WRITE;
/*!40000 ALTER TABLE `subscription_items` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscription_items` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `subscriptions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_price` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` int DEFAULT NULL,
  `trial_ends_at` timestamp NULL DEFAULT NULL,
  `ends_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subscriptions`
--

LOCK TABLES `subscriptions` WRITE;
/*!40000 ALTER TABLE `subscriptions` DISABLE KEYS */;
/*!40000 ALTER TABLE `subscriptions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `testimonials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `job` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `testimonial` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (1,'John doe','Ceo of Company','testimonials/July2024/xZlqqX4LW70fvwSWPMLH.jpg','Testimonial about dropKamas services i used for long time ago Testimonial about dropKamas services i used for long time ago Testimonial about dropKamas services i used for long time ago Testimonial about dropKamas services i used for long time ago',1,'2024-07-01 20:10:07','2024-07-01 20:10:07');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `translations`
--

DROP TABLE IF EXISTS `translations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `translations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `table_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int unsigned NOT NULL,
  `locale` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `translations`
--

LOCK TABLES `translations` WRITE;
/*!40000 ALTER TABLE `translations` DISABLE KEYS */;
/*!40000 ALTER TABLE `translations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user_roles`
--

DROP TABLE IF EXISTS `user_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user_roles` (
  `user_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`),
  KEY `user_roles_user_id_index` (`user_id`),
  KEY `user_roles_role_id_index` (`role_id`),
  CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user_roles`
--

LOCK TABLES `user_roles` WRITE;
/*!40000 ALTER TABLE `user_roles` DISABLE KEYS */;
/*!40000 ALTER TABLE `user_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `role_id` bigint unsigned DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`),
  KEY `users_role_id_foreign` (`role_id`),
  CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Admin','admin@ecom.com','users/default.png',NULL,'$2y$10$mr0UFOCqBAtZukdZ4hU6BOokfWe6z8QRqbeAMsbqVorb8IV/X5FJ6','OD5pMIag1tEK0jvkkeIMszCAXxYjbL807SwB5PDPLccnVnUV5zO7j6bafQeh',NULL,'2024-05-16 19:50:27','2024-06-26 22:46:15','',NULL),(2,3,'Mohamed Oukalla','medoukalla@gmail.com','users/default.png',NULL,'$2y$10$0lpEZt49TmtqA8ml7lBz0OGTDOzZneifATYNCSSrmZv7vSfCZjOYa','qOAqCbB9f7OV5Of5LIrsFfEUryb2hRVKZ6UznARKMfd3l9yGRvPSkHqetX5z',NULL,'2024-05-17 17:08:13','2024-06-26 22:50:35','ouka','0616782839'),(3,2,'Ahmed','ahmed@gmail.com','users/default.png',NULL,'$2y$10$ovSLHRIZo6pr4oop5dMm1Olg7UPL2MZp.vkIbJiUOPx4lw4ez9XWm',NULL,NULL,'2024-05-17 17:09:12','2024-05-17 17:09:12','ahmed','06127162181'),(4,2,'Youssef','youssef@gmail.com','users/default.png',NULL,'$2y$10$uEC5Pb1VDcmx3cBiAJB9B.RY4prrPun5r3XKIec9aR/qAZqb0IFeC',NULL,NULL,'2024-05-17 17:11:10','2024-05-17 17:11:10','youssef','0177291928838'),(5,2,'Khalid','khalid@gmail.com','users/default.png',NULL,'$2y$10$R5iYME7XzcDTmxrgsaRDIOQ3Z4jKr0qIjFskRsoW2BZ3asJugJ0YS',NULL,NULL,'2024-05-17 21:19:47','2024-05-17 21:19:47','khalid','1777272727');
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

-- Dump completed on 2024-07-03 18:30:26
