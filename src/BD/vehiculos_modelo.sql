-- MySQL dump 10.13  Distrib 8.0.27, for Win64 (x86_64)
--
-- Host: localhost    Database: vehiculos
-- ------------------------------------------------------
-- Server version	8.0.27

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
-- Table structure for table `modelo`
--

-- DROP TABLE IF EXISTS `modelo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `modelo` (
  `idmodelo` int NOT NULL AUTO_INCREMENT,
  `nameModelo` varchar(100) DEFAULT NULL,
  `descripcion` text,
  PRIMARY KEY (`idmodelo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modelo`
--

LOCK TABLES `modelo` WRITE;
/*!40000 ALTER TABLE `modelo` DISABLE KEYS */;
INSERT INTO `modelo` VALUES (1,'Supa','Esto significa que la potencia del Supra proviene del 3.0 litros de seis cilindros en línea de BMW'),(2,'Aston Martin DB11','El DB11 es el primer diseño “de hoja limpia”'),(3,'Huracán Evo','El Lamborghini Huracán Evo combina un aspecto de un póster con la mejor tecnología. '),(4,'H2 SX','En Akashi han tomado la decisión de ofrecer un modelo para el área de sport-turismo con la propuesta de la Kawasaki H2 SX.'),(5,'Gold Wing','La Honda GL 1800 Gold Wing lleva más de cuarenta años sobre sus ruedas, es la generación Nº 5 de un modelo que se diseñó para recorrer largas distancias sin descansar.'),(6,'Ford T(1908)','Henry Ford no solo revolucionó el mundo del transporte con su famoso prototipo, el modelo T, sino que influyó en el proceso general de la industrialización'),(7,'Phantom (1925)','l interior de los fastuosos autos era confeccionado por carroceros especialmente contratados, que se atenían a los deseos individuales de cada propietario. Sobre todo en India eso era muy apreciado.');
/*!40000 ALTER TABLE `modelo` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-02-13 18:59:49
