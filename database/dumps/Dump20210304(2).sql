-- MySQL dump 10.13  Distrib 8.0.23, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: ftp
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.17-MariaDB

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
-- Table structure for table `config`
--

DROP TABLE IF EXISTS `config`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `config` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valor` int(11) DEFAULT NULL,
  `descConfig` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `config`
--

LOCK TABLES `config` WRITE;
/*!40000 ALTER TABLE `config` DISABLE KEYS */;
INSERT INTO `config` VALUES (1,1,'verificar se ja houve primeiro acesso no sistema');
/*!40000 ALTER TABLE `config` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `contato`
--

DROP TABLE IF EXISTS `contato`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `contato` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `telefone` varchar(60) DEFAULT NULL,
  `texto` varchar(255) DEFAULT NULL,
  `excluido` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `contato`
--

LOCK TABLES `contato` WRITE;
/*!40000 ALTER TABLE `contato` DISABLE KEYS */;
INSERT INTO `contato` VALUES (1,'guilherme silva','a@a','xxx-xxxx','asdasdads','1'),(2,'guilherme silva','a@a','xxx-xxxx','asdasdasd','1'),(3,'guilherme silva','a@a','xxx-xxxx','123qweasdzxc','1'),(4,'guilherme silva','a@a','xxx-xxxx','teste de texto\r\n','1'),(5,'guilherme silva','a@a','xxx-xxxx','teste\r\nteste\r\n!@#$%¨&*()1234567890_+-=ç?w/ã~ew~ds','1'),(6,'guilherme silva','a@a','xxx-xxxx','qweqwwq','1'),(7,'guilherme silva','a@a','xxx-xxxx','teste de texto\r\n','1'),(8,'guilherme silva','a@a','xxx-xxxx','precisa arruma essa <table>, pois não ta quebrando linha, saca só: ###################################################################','1'),(9,'guilherme silva','a@a','xxx-xxxx','precisa arruma essa , pois não ta quebrando linha, saca só: ###################################################################################################################################################################################################','0');
/*!40000 ALTER TABLE `contato` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `user` varchar(60) DEFAULT NULL,
  `pass` varchar(60) DEFAULT NULL,
  `permissao` varchar(1) DEFAULT NULL,
  `status` varchar(1) DEFAULT NULL,
  `tempo` int(11) DEFAULT NULL,
  `telefone` varchar(32) DEFAULT NULL,
  `dataCadastro` varchar(64) DEFAULT NULL,
  `dataCadastroUnix` varchar(64) DEFAULT NULL,
  `idAdm` int(11) DEFAULT NULL,
  `excluido` varchar(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuarios`
--

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` VALUES (1,'guilherme silva','a@a','admin','21232f297a57a5a743894a0e4a801fc3','3','1',1,'xxx-xxxx',NULL,NULL,NULL,'0'),(2,'teste temporario','1@1','adminteste','21232f297a57a5a743894a0e4a801fc3','3','2',1615037933,'123123','20210304103853','1614865133',1,'1'),(3,'teste','a@a','teste2222','21232f297a57a5a743894a0e4a801fc3','3','2',1614869223,'13123123','20210304104703','1614865623',1,'1'),(4,'asdasdasd@sadasd','sasd@sadasd','admincsadsad','21232f297a57a5a743894a0e4a801fc3','3','2',1614955656,'1223123','20210304104736','1614865656',1,'1'),(5,'seu zé','seuze@hamburguinho.com','ze','98b456a0723fa616284a632d9d31821b','1','2',1614887762,'8888-8888','20210304145602','1614880562',1,'1');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'ftp'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-03-04 17:34:47
