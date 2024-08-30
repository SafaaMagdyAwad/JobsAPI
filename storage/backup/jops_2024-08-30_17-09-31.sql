-- MariaDB dump 10.19  Distrib 10.4.32-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: jops
-- ------------------------------------------------------
-- Server version	10.4.32-MariaDB

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
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache`
--

LOCK TABLES `cache` WRITE;
/*!40000 ALTER TABLE `cache` DISABLE KEYS */;
INSERT INTO `cache` VALUES ('356a192b7913b04c54574d18c28d46e6395428ab','i:1;',1724845411),('356a192b7913b04c54574d18c28d46e6395428ab:timer','i:1724845411;',1724845411),('engsafaamagdy1024@gmail.com|127.0.0.1','i:1;',1724954733),('engsafaamagdy1024@gmail.com|127.0.0.1:timer','i:1724954733;',1724954733),('monamagdg@123|192.168.1.3','i:2;',1724845809),('monamagdg@123|192.168.1.3:timer','i:1724845809;',1724845809);
/*!40000 ALTER TABLE `cache` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cache_locks`
--

LOCK TABLES `cache_locks` WRITE;
/*!40000 ALTER TABLE `cache_locks` DISABLE KEYS */;
/*!40000 ALTER TABLE `cache_locks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_category_unique` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'nam','2024-08-28 08:36:09','2024-08-28 08:36:09'),(2,'et','2024-08-28 08:36:09','2024-08-28 08:36:09'),(3,'soluta','2024-08-28 08:36:09','2024-08-28 08:36:09'),(4,'dolores','2024-08-28 08:36:09','2024-08-28 08:36:09'),(5,'molestiae','2024-08-28 08:36:09','2024-08-28 08:36:09'),(6,'atque','2024-08-28 08:36:09','2024-08-28 08:36:09'),(7,'voluptatem','2024-08-28 08:36:09','2024-08-28 08:36:09'),(8,'delectus','2024-08-28 08:36:09','2024-08-28 08:36:09'),(9,'minima','2024-08-28 08:36:10','2024-08-28 08:36:10'),(10,'fugit','2024-08-28 08:36:10','2024-08-28 08:36:10'),(11,'ipsam','2024-08-29 14:49:55','2024-08-29 14:49:55'),(12,'ipsum','2024-08-29 14:49:55','2024-08-29 14:49:55'),(13,'laborum','2024-08-29 14:49:55','2024-08-29 14:49:55'),(14,'mollitia','2024-08-29 14:49:55','2024-08-29 14:49:55'),(15,'eveniet','2024-08-29 14:49:55','2024-08-29 14:49:55'),(16,'provident','2024-08-29 14:49:55','2024-08-29 14:49:55'),(17,'rerum','2024-08-29 14:49:55','2024-08-29 14:49:55'),(18,'quis','2024-08-29 14:49:55','2024-08-29 14:49:55'),(19,'dignissimos','2024-08-29 14:49:55','2024-08-29 14:49:55'),(20,'natus','2024-08-29 14:49:55','2024-08-29 14:49:55');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `companies`
--

DROP TABLE IF EXISTS `companies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `companies` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `companies_company_unique` (`company`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `companies`
--

LOCK TABLES `companies` WRITE;
/*!40000 ALTER TABLE `companies` DISABLE KEYS */;
INSERT INTO `companies` VALUES (1,'Feil Group','2024-08-28 08:36:10','2024-08-28 08:36:10'),(2,'Konopelski, Beahan and Gibson','2024-08-28 08:36:10','2024-08-28 08:36:10'),(3,'Ritchie LLC','2024-08-28 08:36:10','2024-08-28 08:36:10'),(4,'Quigley LLC','2024-08-28 08:36:10','2024-08-28 08:36:10'),(5,'Harris-Hermann','2024-08-28 08:36:11','2024-08-28 08:36:11'),(6,'Runte, Lebsack and Bogan','2024-08-28 08:36:11','2024-08-28 08:36:11'),(7,'Stark-O\'Reilly','2024-08-28 08:36:11','2024-08-28 08:36:11'),(8,'Satterfield, Hill and Casper','2024-08-28 08:36:11','2024-08-28 08:36:11'),(9,'Sanford, Miller and Rippin','2024-08-28 08:36:11','2024-08-28 08:36:11'),(10,'Bartell-Nicolas','2024-08-28 08:36:12','2024-08-28 08:36:12'),(11,'Bartell, Kirlin and Will','2024-08-29 14:49:55','2024-08-29 14:49:55'),(12,'Boyer and Sons','2024-08-29 14:49:55','2024-08-29 14:49:55'),(13,'Kunde, Pfannerstill and Walter','2024-08-29 14:49:56','2024-08-29 14:49:56'),(14,'Ankunding-Maggio','2024-08-29 14:49:56','2024-08-29 14:49:56'),(15,'Doyle, Heidenreich and Herman','2024-08-29 14:49:56','2024-08-29 14:49:56'),(16,'Dare-Murphy','2024-08-29 14:49:56','2024-08-29 14:49:56'),(17,'Ledner-Bergnaum','2024-08-29 14:49:56','2024-08-29 14:49:56'),(18,'Glover-Harris','2024-08-29 14:49:56','2024-08-29 14:49:56'),(19,'Bartoletti Inc','2024-08-29 14:49:56','2024-08-29 14:49:56'),(20,'Stark, Harvey and Farrell','2024-08-29 14:49:56','2024-08-29 14:49:56');
/*!40000 ALTER TABLE `companies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contacts`
--

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_applications`
--

DROP TABLE IF EXISTS `job_applications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_applications` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `website` varchar(100) NOT NULL,
  `cv` varchar(30) NOT NULL,
  `cover_litter` varchar(500) DEFAULT NULL,
  `job_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `job_applications_job_id_foreign` (`job_id`),
  CONSTRAINT `job_applications_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_applications`
--

LOCK TABLES `job_applications` WRITE;
/*!40000 ALTER TABLE `job_applications` DISABLE KEYS */;
INSERT INTO `job_applications` VALUES (1,'صفاء','safaaAdmin@CSEAdmin','httbs//www ffgkch.com','1724847622.pdf','Cvfhvgdg',8,'2024-08-28 09:20:22','2024-08-28 09:20:22');
/*!40000 ALTER TABLE `job_applications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `responsability` varchar(255) NOT NULL,
  `job_nature` varchar(255) NOT NULL,
  `like` int(11) NOT NULL DEFAULT 0,
  `vacancy` int(11) NOT NULL,
  `salary_from` double NOT NULL,
  `salary_to` double NOT NULL,
  `qualification` varchar(255) NOT NULL,
  `date_line` date NOT NULL,
  `published` tinyint(1) NOT NULL,
  `category_id` bigint(20) unsigned NOT NULL,
  `company_id` bigint(20) unsigned NOT NULL,
  `location_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_category_id_foreign` (`category_id`),
  KEY `jobs_company_id_foreign` (`company_id`),
  KEY `jobs_location_id_foreign` (`location_id`),
  CONSTRAINT `jobs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  CONSTRAINT `jobs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  CONSTRAINT `jobs_location_id_foreign` FOREIGN KEY (`location_id`) REFERENCES `locations` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jobs`
--

LOCK TABLES `jobs` WRITE;
/*!40000 ALTER TABLE `jobs` DISABLE KEYS */;
INSERT INTO `jobs` VALUES (1,'Sociologist','172d851454d5796c06bbb256136248e3.png','Non amet ad enim tempora rem ea aliquam suscipit. Sunt a et aut ut pariatur enim. Similique dignissimos sed molestiae quisquam velit voluptatem.','Quia voluptatibus inventore aliquid magni. In omnis numquam et possimus in aut rem. Et ut quo excepturi id error dolor repellat. Atque perspiciatis dolorem explicabo rem non est assumenda qui.','Full Time',4,3,26115,41868,'Facilis ut quaerat recusandae omnis. Quo laboriosam dignissimos aut reiciendis. Doloremque voluptas cupiditate incidunt voluptatem.','1972-05-05',1,20,5,8,'2024-08-28 08:36:29','2024-08-29 15:07:22'),(2,'Biologist','b31eb291a8842019de68bc7dcdabb6fd.png','Rerum et aperiam tenetur quis et. Pariatur doloremque dolorum enim voluptates consequatur eveniet distinctio. Enim a aliquam cumque.','Vero eligendi eos et. Maiores dolor et aut facere veritatis magnam quia. Dolores neque repellendus expedita enim ut dolor sit. Cupiditate aspernatur ex et dolores eveniet.','Part Time',4,2,28582,53832,'Et nisi ex quidem laborum. Qui corporis ipsam ut laudantium. Accusamus officiis quis libero officia officiis consequuntur. Fugiat doloremque illum quibusdam nam voluptatum est tempora quo.','1976-08-23',1,14,1,3,'2024-08-28 08:36:31','2024-08-29 16:02:39'),(3,'Segmental Paver','d85d1c1508ec6c17584cd298e4cf3386.png','Eum omnis magnam commodi id nesciunt. Et dolor et doloribus aliquam minima. Harum doloribus consequatur eaque nam voluptatibus quia.','Quas libero libero atque omnis quia veniam sequi. Praesentium ut deleniti quo. Eveniet quis sed aut ea qui eum distinctio. Est rerum sapiente voluptatem laudantium veritatis perferendis.','Part Time',5,2,20222,54404,'Hic nam blanditiis et. Ut quo at reiciendis dolores inventore autem. Est rem id necessitatibus dolor.','1972-08-22',0,20,8,6,'2024-08-28 08:36:32','2024-08-29 15:08:13'),(4,'TSA','d194df7dbc428e1a9233866f90944b76.png','Mollitia deserunt reprehenderit dolor rem amet. Aut adipisci accusamus sit similique cum rerum ut. Aliquam consequatur nulla consequuntur veniam incidunt quis aut.','Illo laudantium ex unde natus neque. Unde rerum ut porro illo harum numquam sit. Quibusdam provident nobis et est quibusdam id.','Full Time',5,1,24052,53735,'Alias illum qui quod reiciendis. Voluptatem est repellat quasi ut. Possimus sint minima cum vel reprehenderit. Facilis et inventore adipisci voluptas corporis.','1971-01-10',1,11,9,7,'2024-08-28 08:36:32','2024-08-29 15:08:34'),(5,'Police Detective','524b709571e296e659d1b4f0a63a732d.png','Ab necessitatibus repellat nisi magni ut quas aut. Voluptas culpa aut sit et. Molestias deserunt voluptas sit odio non quis neque. Cupiditate quo iste voluptas aperiam.','Voluptas deleniti illo et voluptatem distinctio. Numquam culpa iusto nam. Dolorem dolores iusto accusamus et maxime.','Part Time',0,4,21326,42701,'Sunt soluta quod omnis laudantium omnis ipsum eum. Quia corrupti voluptatum nesciunt ducimus nam nisi. Suscipit itaque et culpa ullam. Et repellat vitae vel possimus quia nisi.','2002-08-05',1,13,3,8,'2024-08-28 08:36:32','2024-08-29 15:08:52'),(6,'Instrument Sales Representative','f9a7e4a9292c87ea4f9afdd576e022e8.png','Ipsa doloribus quia error sunt provident blanditiis nihil. Quo est distinctio eveniet. Quam hic beatae praesentium est est.','Illum omnis numquam rerum dolor dolorem adipisci commodi. Voluptas vel qui maiores nulla modi nesciunt. Qui qui quaerat in odio enim voluptatem.','Full Time',1,3,27124,51606,'Ipsam at sapiente est. Delectus consequuntur incidunt voluptatem aut ea et. Aut delectus tempora tempora et.','1990-04-29',0,4,4,3,'2024-08-28 08:36:32','2024-08-28 08:36:32'),(7,'Electrical and Electronic Inspector and Tester','7715f09677707f39bce2478790e075b0.png','Maiores ea quae officiis. Deleniti sint ipsum dolorem provident eligendi et. Velit et doloribus totam.','Modi ipsa facilis vel laborum officiis sed. Est qui quod non odio. Quae odit beatae non voluptas sint. Velit praesentium autem distinctio earum qui cum quo vel.','Full Time',3,1,22477,44220,'Dolor rerum odio natus reprehenderit est aut dignissimos nobis. Ut placeat consequatur consequatur aut occaecati. Dolorem nostrum et quo fugit. Voluptate at placeat iste autem hic inventore unde.','1993-09-14',1,9,7,7,'2024-08-28 08:36:32','2024-08-28 08:36:32'),(8,'Aircraft Engine Specialist','61c62143a35aafb625a3160461d90538.png','Et ratione quo beatae non et ut. Cum accusamus soluta dolor. Quod aspernatur et odit iste.','Perferendis distinctio non sed sint ut consequuntur rerum. Perspiciatis nihil fugiat repudiandae omnis ut animi. Voluptatem voluptas dolores sed earum.','Full Time',10,1,22678,57606,'Cumque tenetur quis fugit quasi illo. Sed magnam vitae dolorem et saepe. Aliquid quia modi fugiat doloribus.','2021-06-12',0,7,5,9,'2024-08-28 08:36:32','2024-08-28 08:36:32'),(9,'Appliance Repairer','ba85f353f043c22dadceb17704f7bc64.png','Omnis aut voluptatem voluptas incidunt in quia fuga. Voluptatem sint culpa molestias beatae assumenda velit.','A autem sit ducimus et consequatur adipisci. Minima ut ipsam eos et aut. Quia hic dignissimos nisi sequi.','Full Time',4,1,23328,58904,'Quia sit debitis sint distinctio alias iusto. Quasi a aut enim soluta sed facilis explicabo. Quia animi sed labore voluptas consequatur.','2017-01-28',0,5,6,9,'2024-08-28 08:36:32','2024-08-28 08:36:32'),(10,'Nursing Instructor','899098db59c70ec5c13e62bd2566b2b6.png','Ut voluptatum et sed illo sed sunt. Sequi quos harum vel voluptas eos est excepturi dolor. Velit qui et sapiente animi.','Maxime et voluptatem qui odio. In totam omnis minus veniam. Sint qui rerum sit enim tenetur. Harum laboriosam sapiente rerum maxime vel eligendi corporis. Quos ex ea nihil omnis nam architecto.','Part Time',2,4,20712,41366,'Officiis nesciunt consequatur aliquid enim voluptates aut. Perferendis quia impedit et. Enim numquam qui rerum similique quasi.','2019-11-11',0,7,10,1,'2024-08-28 08:36:33','2024-08-28 08:36:33'),(11,'Lay-Out Worker','','Aut dolore quam adipisci consequuntur. Quia ratione dolor earum est quo deserunt ut. Nobis cum eligendi aliquam rerum.','Est illum voluptatibus deleniti autem. Odit nemo porro odit blanditiis sunt. Adipisci perspiciatis recusandae reiciendis deserunt. Sint id dolorem distinctio explicabo sed.','Full Time',3,4,21542,57519,'Officiis enim magni quo eaque. Fugiat et et et doloribus ut nam voluptatem dolor. Iste voluptatum et ut perspiciatis. Quia optio et rerum sit ipsa quis.','2022-07-20',0,8,1,9,'2024-08-29 14:49:57','2024-08-29 14:49:57'),(12,'Record Clerk','','Eum quasi voluptatem veritatis aperiam. Incidunt soluta impedit est inventore iure. Odit illo perferendis iure inventore.','Ut aut provident aut dolor eaque. Aut repellendus itaque exercitationem et quo ea est totam. Sunt et voluptatibus expedita amet tempora est quo.','Part Time',3,4,22964,52471,'Unde perspiciatis autem et quis itaque. Possimus ullam minus illum. Et voluptatem minus illum est. Optio amet sed odit asperiores. Est fugit a voluptatem autem voluptatum nesciunt.','2011-03-28',1,7,3,4,'2024-08-29 14:49:57','2024-08-29 14:49:57'),(13,'Psychology Teacher','','Laborum mollitia voluptatibus ut odio vel. Debitis inventore facere sunt vero. Aperiam consequuntur voluptates eligendi illo iste molestiae et.','Rerum dolores totam est aliquam nobis eum. Sit id minima necessitatibus quia error. Tenetur optio inventore dolorem.','Full Time',0,4,25472,52659,'Quae est dolorem atque qui dolor. Maxime aut doloremque blanditiis neque. Nihil sapiente voluptates earum fugiat qui. Fugit et ut repellendus rerum minus voluptatem voluptates.','1977-09-09',1,6,10,7,'2024-08-29 14:49:58','2024-08-29 14:49:58'),(14,'Graphic Designer','','Consequuntur repellendus voluptas est dolor et sed. Sit nihil quia aut quis quas ut beatae nam. Praesentium amet fugiat aut aspernatur excepturi omnis.','Provident et molestiae id iste laboriosam quia labore. Nesciunt quia et omnis fugit rerum cumque quisquam. Pariatur debitis aspernatur vel repudiandae harum eligendi magni.','Full Time',10,4,23366,52332,'Sequi quasi tempore sapiente animi quia aliquid. Officiis nam deserunt dolor ut impedit iure eligendi. Dolorem aut rerum qui et dolor.','2000-06-25',0,4,10,6,'2024-08-29 14:49:58','2024-08-29 14:49:58'),(15,'Interviewer','','Debitis autem qui natus sunt adipisci. Eius voluptatibus aut sunt explicabo ut omnis. Minus veritatis dolores soluta in dolorem fuga totam.','At ex quia numquam at aperiam vel sed. Et vel assumenda nemo. Animi quia placeat est labore debitis sunt.','Part Time',5,4,24249,53057,'Consectetur dolores quidem voluptas. Rerum ut asperiores in sequi vero odio repudiandae. Sunt voluptate qui ut minus consectetur dicta et. Illo eum molestiae libero sint et.','2008-05-16',0,2,1,2,'2024-08-29 14:49:58','2024-08-29 14:49:58'),(16,'Maid','','Esse architecto est facilis quia necessitatibus. Expedita qui iusto sint voluptatem facere molestiae. Necessitatibus id non quaerat ex vero.','Facere est enim eligendi non ipsum quia. Ratione aut sit sunt ab ut qui magnam. Hic et optio quae sint.','Full Time',2,3,20957,54590,'Occaecati illum deleniti quasi deleniti. Et quae a est rerum quibusdam ipsum.','1992-11-05',0,8,8,5,'2024-08-29 14:49:58','2024-08-29 14:49:58'),(17,'Welding Machine Tender','','Dignissimos porro voluptatibus in cumque cumque in rerum. Esse et neque dolorem voluptas rerum. Aut in tempora animi fugit.','Fugiat voluptatum quos aut impedit. Ea voluptatem exercitationem ratione et qui est perspiciatis. Et voluptates fuga architecto nulla doloremque amet.','Part Time',10,1,28442,50538,'Rerum eum nemo mollitia est aliquam accusantium. Provident est aut necessitatibus aut. In autem quo aut nihil porro sed. Quo laudantium amet eum est autem neque.','1979-02-27',0,9,10,3,'2024-08-29 14:49:58','2024-08-29 14:49:58'),(18,'Logging Equipment Operator','','Totam sunt est consequatur corrupti ut. Est et exercitationem est repudiandae dicta. Et hic et molestiae dolorem. Aspernatur debitis repellat id dolorum velit iure voluptas eum.','Omnis nam quisquam illum omnis ut dolore aut corrupti. Quis quisquam doloribus fugiat. Tempora accusamus cupiditate expedita perferendis rerum.','Full Time',0,2,24338,46539,'Aut neque ex blanditiis voluptatem. Dolores et asperiores dolores vitae dolore sunt. Inventore dolorem itaque voluptatem ut soluta laboriosam nemo.','2021-03-13',0,8,2,8,'2024-08-29 14:49:58','2024-08-29 14:49:58'),(19,'Food Service Manager','','Eveniet eum eaque et aspernatur nihil beatae doloremque aliquid. Aut voluptates nulla corporis veritatis. Et nostrum possimus deleniti iure aut totam deserunt.','Voluptate error id laudantium repudiandae nulla natus dolor incidunt. Explicabo asperiores omnis in et qui dolores.','Part Time',1,2,23078,47236,'Expedita in velit delectus iusto praesentium. Esse dolore facilis omnis omnis et. Laudantium sed accusamus earum. Est est officia provident. Quia nihil delectus sequi est repellendus pariatur.','1997-03-25',1,8,3,5,'2024-08-29 14:49:58','2024-08-29 14:49:58'),(20,'Organizational Development Manager','','Voluptas non sint fuga est. Omnis ea omnis rerum et porro voluptates. Magni molestiae sunt non et exercitationem ea nemo. Nihil et molestiae est sint maiores pariatur numquam enim.','Quidem inventore consequatur iure ut. Impedit illum qui veniam minima. Voluptatem rem molestiae voluptatem voluptatem quidem. Qui voluptates inventore voluptate quo possimus.','Part Time',1,4,21270,58022,'Quia temporibus delectus quae sed sunt. Odio consequatur ea laborum doloremque nesciunt. Accusamus veniam quos dolor harum mollitia doloremque.','1984-01-17',0,2,10,7,'2024-08-29 14:49:58','2024-08-29 14:49:58'),(21,'job1','1724954764.jpg','sdassdsd','adadsd','Part Time',0,12,1212,121212,'sadsdada','2024-09-03',1,20,1,1,'2024-08-29 15:06:04','2024-08-29 15:06:04');
/*!40000 ALTER TABLE `jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `locations`
--

DROP TABLE IF EXISTS `locations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `locations` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `locations_location_unique` (`location`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `locations`
--

LOCK TABLES `locations` WRITE;
/*!40000 ALTER TABLE `locations` DISABLE KEYS */;
INSERT INTO `locations` VALUES (1,'38994 Rosalee Junction\nSpencerstad, CT 23371','2024-08-28 08:36:07','2024-08-28 08:36:07'),(2,'167 Kayla Crest\nPort Jeradstad, OK 85222-3135','2024-08-28 08:36:07','2024-08-28 08:36:07'),(3,'960 Rudy Courts Suite 196\nWest Kobyberg, WA 48599','2024-08-28 08:36:07','2024-08-28 08:36:07'),(4,'40854 Reinhold Gardens Suite 302\nTabithamouth, ID 26485','2024-08-28 08:36:08','2024-08-28 08:36:08'),(5,'661 Sister Locks\nSouth Nikitastad, ME 69712-4922','2024-08-28 08:36:08','2024-08-28 08:36:08'),(6,'71060 Jacobi Trace Suite 657\nWest Willa, CO 12983-7468','2024-08-28 08:36:08','2024-08-28 08:36:08'),(7,'48008 Heidenreich Mill\nEmmettstad, AK 51087-7378','2024-08-28 08:36:08','2024-08-28 08:36:08'),(8,'5441 Gibson Mall Suite 253\nNicolasstad, LA 26071-0356','2024-08-28 08:36:08','2024-08-28 08:36:08'),(9,'59709 Bashirian Circles\nAnahishire, AK 49171','2024-08-28 08:36:09','2024-08-28 08:36:09'),(10,'4002 Williamson Rapids\nPort Sigurdton, OH 13497-7254','2024-08-28 08:36:09','2024-08-28 08:36:09'),(11,'32333 Rohan Lodge\nPaucekmouth, UT 27572','2024-08-29 14:49:54','2024-08-29 14:49:54'),(12,'8140 Swaniawski Parks\nWalterberg, NM 32504','2024-08-29 14:49:54','2024-08-29 14:49:54'),(13,'38865 Kameron Lodge\nDarehaven, NH 66461','2024-08-29 14:49:54','2024-08-29 14:49:54'),(14,'43675 Josie Stravenue\nWest Tristianchester, IL 43554','2024-08-29 14:49:54','2024-08-29 14:49:54'),(15,'72482 Armando Prairie\nSouth Fredtown, KY 11436','2024-08-29 14:49:54','2024-08-29 14:49:54'),(16,'5117 Cremin Throughway\nGerholdton, CO 40393-8257','2024-08-29 14:49:54','2024-08-29 14:49:54'),(17,'990 Wolf Wells Suite 023\nO\'Keefeshire, TX 81864','2024-08-29 14:49:54','2024-08-29 14:49:54'),(18,'92993 Hansen Radial Suite 910\nFeestland, SC 07766-7748','2024-08-29 14:49:54','2024-08-29 14:49:54'),(19,'5903 Powlowski Crossing Apt. 258\nNorth Romaburgh, TX 21439','2024-08-29 14:49:55','2024-08-29 14:49:55'),(20,'2502 Adeline Trace Apt. 592\nEast Nicholaus, AK 91336','2024-08-29 14:49:55','2024-08-29 14:49:55');
/*!40000 ALTER TABLE `locations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (58,'0001_01_01_000000_create_users_table',1),(59,'0001_01_01_000001_create_cache_table',1),(60,'2024_08_21_105121_create_categories_table',1),(61,'2024_08_21_110701_create_locations_table',1),(62,'2024_08_21_120555_create_companies_table',1),(63,'2024_08_25_121823_create_jobs_table',1),(64,'2024_08_25_172412_create_testimonials_table',1),(65,'2024_08_25_205301_create_job_applications_table',1),(66,'2024_08_28_015356_create_contacts_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_reset_tokens`
--

LOCK TABLES `password_reset_tokens` WRITE;
/*!40000 ALTER TABLE `password_reset_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_reset_tokens` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('TIcATfANAl4jMk9vaRVoktYArwkm5zhgUoHBqnlM',1,'127.0.0.1','Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/128.0.0.0 Safari/537.36','YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMllPbmtUOWczRWV1eUlCb1h1d3pjWTdDRFozenJhdnl3VVhmNGxMVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbmRleCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czo0OiJhdXRoIjthOjE6e3M6MjE6InBhc3N3b3JkX2NvbmZpcm1lZF9hdCI7aToxNzI0OTU0NjkyO31zOjY6ImxvY2FsZSI7czoyOiJhciI7fQ==',1724958160);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `testimonials` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `testimonials`
--

LOCK TABLES `testimonials` WRITE;
/*!40000 ALTER TABLE `testimonials` DISABLE KEYS */;
INSERT INTO `testimonials` VALUES (2,'Mrs. Mallie Olson','Pipefitter','Est eveniet omnis et et iste quisquam. Quam voluptate et ut vero non aut. Quia quaerat ut sapiente quas fugit laborum.','f10be5d65178e9283327f78f7a7a41bb.png','2024-08-28 08:36:47','2024-08-28 08:36:47'),(3,'Mr. Bradford Greenfelder V','Education Teacher','Similique deserunt sint et molestiae. Cupiditate qui consectetur accusamus. Ut commodi voluptas aut rerum quod. Autem enim autem eveniet qui ut recusandae dolores fuga.','e92abfb2410bc820e966c61ef2889c6b.png','2024-08-28 08:36:47','2024-08-28 08:36:47'),(4,'Ted Goldner','Control Valve Installer','Rerum deleniti suscipit est nobis quod. Eligendi officiis praesentium ab debitis vitae veniam. Repellendus aliquid nesciunt molestias velit inventore assumenda eum.','18d8bfbf8c63d3f691d41ef9a971b538.png','2024-08-28 08:36:48','2024-08-28 08:36:48'),(5,'Hallie Lind Jr.','Mathematical Scientist','Minus illo quibusdam incidunt exercitationem et modi consectetur. Sunt aut libero reiciendis aut officiis ut dolor qui. Et et cupiditate et nihil minus optio dolore.','317813f7335c2b8ea1cee66c5de3cbc5.png','2024-08-28 08:36:48','2024-08-28 08:36:48'),(6,'Elsa Stark','Computer Security Specialist','Aut et assumenda voluptas rem sequi voluptatem. Dolor vel quis maiores. Dignissimos omnis sit qui quis. Rerum sit distinctio consequatur ut vitae ut explicabo.','68dd352da42920dd6d57f1c5a79e40d1.png','2024-08-28 08:36:48','2024-08-28 08:36:48'),(7,'Mrs. Elaina Hermiston','Valve Repairer OR Regulator Repairer','Aspernatur exercitationem debitis velit molestiae. Deleniti dolorem voluptas et rerum quisquam. Architecto voluptatem nam dolores velit quia ut dignissimos eveniet.','9d7068e6938cb64f0b549171b9016a95.png','2024-08-28 08:36:48','2024-08-28 08:36:48'),(8,'Karley Streich','Tire Builder','Qui eos quasi accusantium voluptates odit nisi adipisci. Error consectetur quia et est. Consectetur minima aut sint.','2e3d4ad5db46bff910d23e81086d1890.png','2024-08-28 08:36:49','2024-08-28 08:36:49'),(9,'Tanner Hills','Tire Changer','Sunt vitae dolores aut harum et veniam vel deleniti. Voluptatem vel possimus aliquid aperiam possimus molestiae. Ab sit et ex animi voluptatem. Aut esse atque et architecto quia dolore.','44154584814da829b912d760291b0163.png','2024-08-28 08:36:49','2024-08-28 08:36:49'),(10,'Arely Weimann','Training Manager OR Development Manager','Magni nihil quia sed qui sunt repellat eum. Cumque voluptas qui odit labore ut sit quia. Nesciunt expedita et ipsa consequatur.','127ac64e3a9404719d8b47ca892b996d.png','2024-08-28 08:36:49','2024-08-28 08:36:49'),(11,'صفاء','Job','Fgvcg','1724847884.jpg','2024-08-28 09:24:44','2024-08-28 09:24:44'),(12,'Mrs. Paige Carroll MD','Plant and System Operator','Tempore commodi nobis omnis sapiente repellendus maiores. Qui et porro explicabo debitis doloremque voluptate alias. Est sit a autem. Minus ut quo sunt laudantium.','','2024-08-29 14:49:58','2024-08-29 14:49:58'),(13,'Kianna Kerluke Jr.','Landscaping','At aut quisquam velit ratione magni. Alias doloremque voluptates animi in. Et tempora saepe laudantium eum qui suscipit voluptatibus.','','2024-08-29 14:49:58','2024-08-29 14:49:58'),(14,'Monique Greenfelder MD','Conveyor Operator','Et molestias fugit saepe alias provident. Excepturi mollitia eligendi sed temporibus.','','2024-08-29 14:49:59','2024-08-29 14:49:59'),(15,'Eve Rice','Board Of Directors','Voluptas sunt inventore assumenda quo in sed facilis. Numquam veritatis asperiores nostrum nesciunt aut nulla magni. Molestias non explicabo consequuntur at.','','2024-08-29 14:49:59','2024-08-29 14:49:59'),(16,'Jean Howell','Plasterer OR Stucco Mason','Hic libero non et consectetur quia sunt. Rem rem autem nihil.','','2024-08-29 14:49:59','2024-08-29 14:49:59'),(17,'Louie Marks','Orthotist OR Prosthetist','Eos debitis quaerat dignissimos possimus possimus aliquam distinctio. Nisi eaque eaque exercitationem suscipit. Temporibus aperiam officiis necessitatibus eligendi veniam.','','2024-08-29 14:49:59','2024-08-29 14:49:59'),(18,'Dr. Jamie Pollich IV','Metal Molding Operator','Nobis mollitia est tempora nesciunt. In itaque sit nihil vel. Nemo reprehenderit cum optio itaque. Et eius hic pariatur omnis.','','2024-08-29 14:49:59','2024-08-29 14:49:59'),(19,'Marielle Haley','Video Editor','Magnam quam id omnis porro. Quia debitis ab impedit culpa occaecati vero perferendis laudantium. Alias explicabo molestias cum cupiditate. Nisi et possimus ut veniam nihil aut.','','2024-08-29 14:49:59','2024-08-29 14:49:59'),(20,'Ms. Josie Klocko DDS','Landscaper','Sequi explicabo eum tempore cumque impedit dignissimos qui. Aut non qui iste dolore officiis distinctio officiis. Et ab est voluptatibus itaque.','','2024-08-29 14:49:59','2024-08-29 14:49:59'),(21,'Alberto Funk','Funeral Director','Dolorum eaque voluptatum ut quisquam commodi quod velit voluptatem. Corporis sit et necessitatibus dolorem. Quaerat nihil numquam quas minima incidunt dolorem. Magnam aut velit sed.','','2024-08-29 14:49:59','2024-08-29 14:49:59');
/*!40000 ALTER TABLE `testimonials` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'mona Magdy','monaMagdy@123','2024-08-28 08:42:31','$2y$12$9.WnF/K3WDTFSysv7KW.t.Uh/Qexg8S3VOwujw4bou2XJ9j/thTJi','hMGLpdgQKlLFn1GdraJ7YR7rAH1w8E5OU1qf9gRQUFTvO8nI3Oiwp0im3JYR','2024-08-28 08:40:41','2024-08-28 08:42:31');
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

-- Dump completed on 2024-08-30 20:09:33
