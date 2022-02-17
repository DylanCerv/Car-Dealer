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
-- Table structure for table `vehiculo`
--

DROP TABLE IF EXISTS `vehiculo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `vehiculo` (
  `idvehiculo` int NOT NULL AUTO_INCREMENT,
  `nameVehiculo` varchar(100) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `detalle` text,
  `foto` varchar(100) DEFAULT NULL,
  `modelo_idmodelo` int NOT NULL,
  PRIMARY KEY (`idvehiculo`),
  KEY `fk_vehiculo_modelo_idx` (`modelo_idmodelo`),
  CONSTRAINT `fk_vehiculo_modelo` FOREIGN KEY (`modelo_idmodelo`) REFERENCES `modelo` (`idmodelo`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehiculo`
--

LOCK TABLES `vehiculo` WRITE;
/*!40000 ALTER TABLE `vehiculo` DISABLE KEYS */;
INSERT INTO `vehiculo` VALUES (1,'Toyota Supra',50000,'Aquellos que quieren un deportivo divertido que puedan manejar todos los días.','toyotaSupra.jpg',1),(2,'Grand Tourer',250000,'Porque no te dejará con la espalda adolorida después de un largo viaje.','AstonMartin.jpg',1),(3,'Lamborghini',261000,'Por su combinación de inteligencia y locura.','LamboryiniHuracan.jpg',1),(4,'Kawasaki H2 SX',10000,'Balanced Supercharger y 200 caballos de fuerza, para andar cómodamente en carretera.','KawasakiNinja.jpg',2),(5,'Honda GL 1800',12000,'Con 50 Kg menos, se siente más manejable y se desempeña ágilmente. Tiene un motor bóxer con seis cilindros, capacidad de 1.833 cc y potencia de hasta 125 CV. El tren delantero cuenta con una horquilla tipo Hossack.','HONDAGL.jpg',2),(6,'Ford T',300000,'Henry Ford no solo revolucionó el mundo del transporte con su famoso prototipo, el modelo T, sino que influyó en el proceso general de la industrialización','FordT.jpg',3),(7,'Rolls Royce',290000,'En los dorados años 20, Rolls Royce lanzó al mercado un modelo de lujo, el Phantom. La marca todavía existe, pero los coches antiguos, con 40 caballos de fuerza, son únicos en muchos aspectos:','RollsRoycePhantom.jpg',3);
/*!40000 ALTER TABLE `vehiculo` ENABLE KEYS */;
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
