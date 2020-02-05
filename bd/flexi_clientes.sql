-- MySQL dump 10.13  Distrib 5.6.23, for Win64 (x86_64)
--
-- Host:     Database: flexi_clientes
-- ------------------------------------------------------
-- Server version	5.1.33-community

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
-- Table structure for table `banco`
--

DROP TABLE IF EXISTS `banco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `banco` (
  `id_banco` int(11) NOT NULL AUTO_INCREMENT,
  `clave_banco` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `nombre` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `RFC` varchar(45) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`id_banco`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `banco`
--

LOCK TABLES `banco` WRITE;
/*!40000 ALTER TABLE `banco` DISABLE KEYS */;
INSERT INTO `banco` VALUES (1,'B1','ABC Capital','RFCB1'),(2,'B2','Accendo Banco','RFCB2'),(3,'B3','American Express Bank','RFCB3'),(4,'B4','Banca Afirme','RFCB4'),(5,'B5','Banca Mifel','RFCB5'),(6,'B6','Banco Actinver','RFCB6'),(7,'B7','Banco Ahorro Famsa','RFCB7'),(8,'B8','Banco Autofin México','RFCB8'),(9,'B9','Banco Azteca','RFCB9'),(10,'B10','Banco Bancrea','RFCB10'),(11,'B11','Banco Base','RFCB11'),(12,'B12','Banco Compartamos','RFCB12'),(13,'B13','Banco Credit Suisse','RFCB13'),(14,'B14','Banco de Inversión Afirme','RFCB14'),(15,'B15','Banco del Bajío','RFCB15'),(16,'B16','Banco Finterra','RFCB16'),(17,'B17','Banco Forjadores','RFCB17'),(18,'B18','Banco Inbursa','RFCB18'),(19,'B19','Banco Inmobiliario Mexicano','RFCB19'),(20,'B20','Banco Invex','RFCB20'),(21,'B21','Banco JP Morgan','RFCB21'),(22,'B22','Banco KEB Hana México','RFCB22'),(23,'B23','Banco Monex','RFCB23'),(24,'B24','Banco Multiva','RFCB24'),(25,'B25','Banco Nacional de México','RFCB25'),(26,'B26','Banco PagaTodo','RFCB26'),(27,'B27','Banco Regional de Monterrey','RFCB27'),(28,'B28','Banco S3 México','RFCB28'),(29,'B29','Banco Sabadell','RFCB29'),(30,'B30','Banco Santander','RFCB30'),(31,'B31','Banco Shinhan de México','RFCB31'),(32,'B32','Banco Ve por Más','RFCB32'),(33,'B33','BanCoppel','RFCB33'),(34,'B34','Bank of America Mexico','RFCB34'),(35,'B35','Bank of China Mexico','RFCB35'),(36,'B36','Bankaool','RFCB36'),(37,'B37','Banorte','RFCB37'),(38,'B38','Bansí','RFCB38'),(39,'B39','Barclays Bank México','RFCB39'),(40,'B40','BBVA','RFCB40'),(41,'B41','CIBanco','RFCB41'),(42,'B42','Consubanco','RFCB42'),(43,'B43','Deutsche Bank México','RFCB43'),(44,'B44','Fundación Dondé Banco','RFCB44'),(45,'B45','HSBC México','RFCB45'),(46,'B46','Industrial and Commercial Bank of China','RFCB46'),(47,'B47','Intercam Banco','RFCB47'),(48,'B48','Mizuho Bank','RFCB48'),(49,'B49','MUFG Bank Mexico','RFCB49'),(50,'B50','Scotiabank','RFCB50');
/*!40000 ALTER TABLE `banco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(120) COLLATE latin1_general_cs NOT NULL,
  `razon_social` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `rfc` varchar(120) COLLATE latin1_general_cs NOT NULL,
  `fecha_alta` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `categoria` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `estado` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `ciudad` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `calle` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `colonia` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `numero` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `activo` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `vendedor` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `zona` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `user_login` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `password` varchar(45) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Cesar','cesar y asociados','CHT1234TM256','2020-01-01','VIP','JAL','Zapopan','Rio tomatlan 1076','Las aguilas','1076','1','00002','centro','admin','admin');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pago`
--

DROP TABLE IF EXISTS `pago`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `monto` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `fecha` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `hora` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `aprobado` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `moneda` varchar(45) COLLATE latin1_general_cs NOT NULL,
  `banco` varchar(45) COLLATE latin1_general_cs NOT NULL,
  PRIMARY KEY (`id_pago`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs COMMENT='talba de pagos';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pago`
--

LOCK TABLES `pago` WRITE;
/*!40000 ALTER TABLE `pago` DISABLE KEYS */;
INSERT INTO `pago` VALUES (1,'1','5000','2020-02-05','12:00','1','MXN','B40'),(2,'1','500','2020-02-05','14:50','1','DLL','B4'),(3,'1','500','2020-02-05','14:51','1','DLL','B4'),(4,'1','600','2020-02-05','14:51','1','DLL','B4'),(5,'1','600','2020-02-05','14:51','1','DLL','B4'),(6,'1','900','2020-02-05','14:55','1','MXN','B6');
/*!40000 ALTER TABLE `pago` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-05 17:13:12
