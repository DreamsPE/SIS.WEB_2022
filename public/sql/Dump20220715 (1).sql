CREATE DATABASE  IF NOT EXISTS `sisweb2022` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `sisweb2022`;
-- MySQL dump 10.13  Distrib 8.0.29, for Win64 (x86_64)
--
-- Host: localhost    Database: sisweb2022
-- ------------------------------------------------------
-- Server version	8.0.29

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
-- Table structure for table `aula`
--

DROP TABLE IF EXISTS `aula`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `aula` (
  `Id_Aula` int NOT NULL AUTO_INCREMENT,
  `Id_Grado` int DEFAULT NULL,
  `NumeroSalon` char(10) DEFAULT NULL,
  `NumeroPiso` char(2) DEFAULT NULL,
  `Pabellon` char(3) DEFAULT NULL,
  PRIMARY KEY (`Id_Aula`),
  KEY `R_10` (`Id_Grado`),
  CONSTRAINT `R_10` FOREIGN KEY (`Id_Grado`) REFERENCES `grado` (`Id_Grado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aula`
--

LOCK TABLES `aula` WRITE;
/*!40000 ALTER TABLE `aula` DISABLE KEYS */;
/*!40000 ALTER TABLE `aula` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `curso`
--

DROP TABLE IF EXISTS `curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `curso` (
  `Id_Curso` char(6) NOT NULL,
  `Id_Grado` int DEFAULT NULL,
  `nombreCurso` varchar(20) DEFAULT NULL,
  `Detalle` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`Id_Curso`),
  KEY `R_2` (`Id_Grado`),
  CONSTRAINT `R_2` FOREIGN KEY (`Id_Grado`) REFERENCES `grado` (`Id_Grado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `curso`
--

LOCK TABLES `curso` WRITE;
/*!40000 ALTER TABLE `curso` DISABLE KEYS */;
INSERT INTO `curso` VALUES ('COMPR2',2,'Comunicación','Curso de comunicación, 1° Grado de Primaria (Se comunica oralmente en lengua materna)'),('MATPR1',1,'Matemática','Resuelve problemas de cantidad'),('PERPR1',1,'Personal Social','Construye su identidad'),('TTT40',2,'Matemática','.'),('TTT44',1,'Arte y cultura','.'),('TTT45',2,'comun','Hola Mundo'),('TTT47',4,'cientec','.'),('TTT89',2,'Personal Social','.');
/*!40000 ALTER TABLE `curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estado`
--

DROP TABLE IF EXISTS `estado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estado` (
  `Id_Estado` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`Id_Estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estado`
--

LOCK TABLES `estado` WRITE;
/*!40000 ALTER TABLE `estado` DISABLE KEYS */;
/*!40000 ALTER TABLE `estado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudiante` (
  `Id_Estudiante` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) DEFAULT NULL,
  `Apellidos` varchar(30) DEFAULT NULL,
  `Dni` int DEFAULT NULL,
  `Fecha_Nac` datetime DEFAULT NULL,
  `Direccion` varchar(50) DEFAULT NULL,
  `Telefono` int DEFAULT NULL,
  `Id_Nivel` int NOT NULL,
  `Sexo` char(1) DEFAULT NULL,
  `Correo` varchar(50) DEFAULT NULL,
  `Id_Grado` int DEFAULT NULL,
  PRIMARY KEY (`Id_Estudiante`),
  KEY `R_4` (`Id_Nivel`),
  KEY `R_66` (`Id_Grado`),
  CONSTRAINT `R_4` FOREIGN KEY (`Id_Nivel`) REFERENCES `nivel` (`Id_Nivel`),
  CONSTRAINT `R_66` FOREIGN KEY (`Id_Grado`) REFERENCES `grado` (`Id_Grado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiante`
--

LOCK TABLES `estudiante` WRITE;
/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;
/*!40000 ALTER TABLE `estudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `grado`
--

DROP TABLE IF EXISTS `grado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `grado` (
  `Id_Grado` int NOT NULL AUTO_INCREMENT,
  `Grado` varchar(25) DEFAULT NULL,
  `Seccion` char(10) DEFAULT NULL,
  `Detalle` varchar(30) DEFAULT NULL,
  `Id_Nivel` int DEFAULT NULL,
  PRIMARY KEY (`Id_Grado`),
  KEY `R_67` (`Id_Nivel`),
  CONSTRAINT `R_67` FOREIGN KEY (`Id_Nivel`) REFERENCES `nivel` (`Id_Nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `grado`
--

LOCK TABLES `grado` WRITE;
/*!40000 ALTER TABLE `grado` DISABLE KEYS */;
INSERT INTO `grado` VALUES (1,'1° Grado','A','1° Grado de Primaria',1),(2,'2° Grado','A','2° Grado de Primaria',1),(3,'3° Grado','A','3° Grado de Primaria',1),(4,'4° Grado','A','4° Grado de Primaria',1),(5,'5° Grado','A','5° Grado de Primaria',1);
/*!40000 ALTER TABLE `grado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nivel`
--

DROP TABLE IF EXISTS `nivel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `nivel` (
  `Id_Nivel` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) DEFAULT NULL,
  `Detalle` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id_Nivel`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nivel`
--

LOCK TABLES `nivel` WRITE;
/*!40000 ALTER TABLE `nivel` DISABLE KEYS */;
INSERT INTO `nivel` VALUES (1,'Primaria','Alumnos de Primaria.'),(2,'Secundaria','Alumnos de Secundaria.');
/*!40000 ALTER TABLE `nivel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notas_bim`
--

DROP TABLE IF EXISTS `notas_bim`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `notas_bim` (
  `Cod_Nota` char(18) NOT NULL,
  `Id_Curso` char(6) DEFAULT NULL,
  `Id_Estudiante` int DEFAULT NULL,
  `Nota1` decimal(3,1) DEFAULT NULL,
  `Nota2` decimal(3,1) DEFAULT NULL,
  `Nota3` decimal(3,1) DEFAULT NULL,
  `Nota4` decimal(3,1) DEFAULT NULL,
  `Promedio` decimal(3,1) DEFAULT NULL,
  `Unidad` varchar(15) DEFAULT NULL,
  `Observarciones` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Cod_Nota`),
  KEY `R_8` (`Id_Curso`),
  KEY `R_63` (`Id_Estudiante`),
  CONSTRAINT `R_63` FOREIGN KEY (`Id_Estudiante`) REFERENCES `estudiante` (`Id_Estudiante`),
  CONSTRAINT `R_8` FOREIGN KEY (`Id_Curso`) REFERENCES `curso` (`Id_Curso`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notas_bim`
--

LOCK TABLES `notas_bim` WRITE;
/*!40000 ALTER TABLE `notas_bim` DISABLE KEYS */;
/*!40000 ALTER TABLE `notas_bim` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pagos_pensiones`
--

DROP TABLE IF EXISTS `pagos_pensiones`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pagos_pensiones` (
  `Detalle` varchar(50) DEFAULT NULL,
  `Monto` decimal(5,2) DEFAULT NULL,
  `Mora` decimal(5,2) DEFAULT NULL,
  `Id_Estudiante` int NOT NULL,
  `Id_Pension` int NOT NULL,
  `Fecha` datetime DEFAULT NULL,
  `Id_Pago` int DEFAULT NULL,
  PRIMARY KEY (`Id_Estudiante`,`Id_Pension`),
  KEY `R_26` (`Id_Pension`),
  CONSTRAINT `R_25` FOREIGN KEY (`Id_Estudiante`) REFERENCES `estudiante` (`Id_Estudiante`),
  CONSTRAINT `R_26` FOREIGN KEY (`Id_Pension`) REFERENCES `pension` (`Id_Pension`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pagos_pensiones`
--

LOCK TABLES `pagos_pensiones` WRITE;
/*!40000 ALTER TABLE `pagos_pensiones` DISABLE KEYS */;
/*!40000 ALTER TABLE `pagos_pensiones` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pension`
--

DROP TABLE IF EXISTS `pension`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pension` (
  `Id_Pension` int NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) DEFAULT NULL,
  `Fecha_Venc` datetime DEFAULT NULL,
  `Costo` decimal(5,2) DEFAULT NULL,
  `Id_Nivel` int NOT NULL,
  `Id_Estado` int DEFAULT NULL,
  PRIMARY KEY (`Id_Pension`),
  KEY `R_21` (`Id_Nivel`),
  KEY `R_22` (`Id_Estado`),
  CONSTRAINT `R_21` FOREIGN KEY (`Id_Nivel`) REFERENCES `nivel` (`Id_Nivel`),
  CONSTRAINT `R_22` FOREIGN KEY (`Id_Estado`) REFERENCES `estado` (`Id_Estado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pension`
--

LOCK TABLES `pension` WRITE;
/*!40000 ALTER TABLE `pension` DISABLE KEYS */;
/*!40000 ALTER TABLE `pension` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor`
--

DROP TABLE IF EXISTS `profesor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profesor` (
  `Id_Profesor` char(18) NOT NULL,
  `NombreProfesor` varchar(20) DEFAULT NULL,
  `ApellidoProfesor` varchar(20) DEFAULT NULL,
  `DNIProfesor` int DEFAULT NULL,
  `TelefonoProfesor` int DEFAULT NULL,
  `DireccionProfesor` varchar(25) DEFAULT NULL,
  `Especialidad` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Id_Profesor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor`
--

LOCK TABLES `profesor` WRITE;
/*!40000 ALTER TABLE `profesor` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor_curso`
--

DROP TABLE IF EXISTS `profesor_curso`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profesor_curso` (
  `Id_Profesor` char(18) NOT NULL,
  `Id_Curso` char(6) NOT NULL,
  `FechaAsignacion` datetime DEFAULT NULL,
  `Asignacion` varchar(20) DEFAULT NULL,
  `FechaFinalizacion` datetime DEFAULT NULL,
  `Horas` int DEFAULT NULL,
  PRIMARY KEY (`Id_Profesor`,`Id_Curso`),
  KEY `R_16` (`Id_Curso`),
  CONSTRAINT `R_16` FOREIGN KEY (`Id_Curso`) REFERENCES `curso` (`Id_Curso`),
  CONSTRAINT `R_5` FOREIGN KEY (`Id_Profesor`) REFERENCES `profesor` (`Id_Profesor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor_curso`
--

LOCK TABLES `profesor_curso` WRITE;
/*!40000 ALTER TABLE `profesor_curso` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesor_curso` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profesor_grado`
--

DROP TABLE IF EXISTS `profesor_grado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `profesor_grado` (
  `Id_Profesor` char(18) NOT NULL,
  `Id_Grado` int NOT NULL,
  `Detalle` varchar(50) DEFAULT NULL,
  `Fecha` datetime DEFAULT NULL,
  PRIMARY KEY (`Id_Profesor`,`Id_Grado`),
  KEY `R_18` (`Id_Grado`),
  CONSTRAINT `R_18` FOREIGN KEY (`Id_Grado`) REFERENCES `grado` (`Id_Grado`),
  CONSTRAINT `R_6` FOREIGN KEY (`Id_Profesor`) REFERENCES `profesor` (`Id_Profesor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profesor_grado`
--

LOCK TABLES `profesor_grado` WRITE;
/*!40000 ALTER TABLE `profesor_grado` DISABLE KEYS */;
/*!40000 ALTER TABLE `profesor_grado` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-07-16  2:32:37
