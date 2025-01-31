-- MySQL dump 10.13  Distrib 9.1.0, for macos15.1 (arm64)
--
-- Host: localhost    Database: gsb
-- ------------------------------------------------------
-- Server version	9.1.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `affectation`
--

DROP TABLE IF EXISTS `affectation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `affectation` (
  `aUtilisateur` varchar(4) NOT NULL,
  `aDate` datetime NOT NULL,
  `aRegion` smallint NOT NULL,
  `aStatut` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`aUtilisateur`,`aDate`),
  KEY `rCode` (`aRegion`),
  CONSTRAINT `affectation_ibfk_1` FOREIGN KEY (`aUtilisateur`) REFERENCES `utilisateur` (`uId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `affectation`
--

LOCK TABLES `affectation` WRITE;
/*!40000 ALTER TABLE `affectation` DISABLE KEYS */;
INSERT INTO `affectation` VALUES ('a131','2009-12-11 00:00:00',28,'1'),('a131','2013-05-27 00:00:00',53,'1'),('a17','2008-08-26 00:00:00',84,'1'),('a17','2014-09-19 00:00:00',84,'3'),('a55','2004-07-17 00:00:00',76,'1'),('a55','2012-05-19 00:00:00',76,'1'),('a55','2016-08-21 00:00:00',76,'3'),('a93','2016-01-02 00:00:00',75,'1'),('b13','2013-03-11 00:00:00',44,'1'),('b16','2014-03-21 00:00:00',53,'1'),('b19','2016-01-31 00:00:00',52,'1'),('b25','2011-07-03 00:00:00',52,'1'),('b25','2017-01-01 00:00:00',52,'3'),('b28','2017-08-02 00:00:00',76,'1'),('b34','2010-12-06 00:00:00',24,'3'),('b34','2016-06-18 00:00:00',24,'2'),('b4','2014-09-25 00:00:00',75,'1'),('b50','2015-01-18 00:00:00',93,'1'),('b59','2012-10-21 00:00:00',84,'1'),('bp','2019-12-12 00:00:00',27,'0'),('c14','2006-02-01 00:00:00',93,'1'),('c14','2014-02-01 00:00:00',93,'3'),('c14','2018-03-03 00:00:00',93,'2'),('c3','2009-05-05 00:00:00',44,'1'),('c54','2008-04-09 00:00:00',44,'1'),('d13','2008-12-05 00:00:00',52,'1'),('d51','2014-11-18 00:00:00',27,'3'),('d51','2019-03-20 00:00:00',27,'2'),('e22','2006-03-24 00:00:00',44,'1'),('e24','2010-05-17 00:00:00',44,'3'),('e24','2017-02-28 00:00:00',44,'2'),('e39','2005-04-26 00:00:00',11,'1'),('e49','2013-02-19 00:00:00',76,'1'),('e5','2007-11-27 00:00:00',76,'1'),('e5','2012-11-27 00:00:00',76,'3'),('e5','2017-11-27 00:00:00',75,'2'),('e52','2008-10-31 00:00:00',28,'1'),('f21','2010-06-08 00:00:00',84,'1'),('f39','2014-02-15 00:00:00',84,'1'),('f4','2011-05-03 00:00:00',76,'1'),('g19','2013-01-18 00:00:00',11,'1'),('g30','2016-03-27 00:00:00',32,'3'),('g30','2017-10-31 00:00:00',32,'2'),('g53','2002-10-02 00:00:00',53,'1'),('g7','2013-01-13 00:00:00',75,'1'),('h13','2010-05-08 00:00:00',75,'1'),('h30','2015-04-26 00:00:00',11,'1'),('h35','2010-08-26 00:00:00',84,'1'),('h40','2009-11-01 00:00:00',44,'1'),('j45','2015-02-25 00:00:00',44,'2'),('j50','2009-12-16 00:00:00',32,'1'),('j8','2015-06-18 00:00:00',11,'2'),('k4','2013-11-21 00:00:00',76,'1'),('k53','2000-03-23 00:00:00',44,'1'),('k53','2009-04-03 00:00:00',44,'3'),('l14','2012-02-02 00:00:00',52,'1'),('l23','2012-06-05 00:00:00',75,'1'),('l46','2014-01-24 00:00:00',52,'1'),('l56','2013-02-27 00:00:00',27,'1'),('m35','2004-10-06 00:00:00',76,'1'),('m45','2007-10-13 00:00:00',44,'1'),('m45','2016-04-08 00:00:00',44,'3'),('n42','2013-03-06 00:00:00',28,'1'),('n58','2009-08-30 00:00:00',24,'1'),('n59','2011-12-19 00:00:00',32,'1'),('o26','2012-01-05 00:00:00',76,'1'),('p32','2009-12-24 00:00:00',11,'1'),('p40','2009-12-14 00:00:00',28,'3'),('p40','2016-07-17 00:00:00',28,'2'),('p41','2015-07-27 00:00:00',75,'1'),('p42','2011-12-12 00:00:00',32,'1'),('p49','1994-10-03 00:00:00',24,'1'),('p6','2014-03-30 00:00:00',75,'1'),('p7','2007-03-01 00:00:00',76,'1'),('p8','2008-06-23 00:00:00',27,'1'),('q17','2014-09-06 00:00:00',28,'1'),('r24','2001-07-29 00:00:00',28,'1'),('r24','2015-05-25 00:00:00',28,'2'),('r58','2007-06-30 00:00:00',53,'1'),('s10','2012-11-14 00:00:00',27,'1'),('s21','2009-09-25 00:00:00',75,'1'),('t43','2012-03-09 00:00:00',27,'1'),('t47','2014-08-29 00:00:00',32,'1'),('t55','2011-11-29 00:00:00',76,'1'),('t60','2008-03-29 00:00:00',24,'1');
/*!40000 ALTER TABLE `affectation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `famille`
--

DROP TABLE IF EXISTS `famille`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `famille` (
  `fCode` varchar(3) NOT NULL,
  `fLibelle` varchar(83) DEFAULT NULL,
  PRIMARY KEY (`fCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `famille`
--

LOCK TABLES `famille` WRITE;
/*!40000 ALTER TABLE `famille` DISABLE KEYS */;
INSERT INTO `famille` VALUES ('AA','Antalgiques en association'),('AAA','Antalgiques antipyrétiques en association'),('AAC','Antidépresseur d\'action centrale'),('AAH','Antivertigineux antihistaminique H1'),('ABA','Antibiotique antituberculeux'),('ABC','Antibiotique antiacnéique local'),('ABP','Antibiotique de la famille des béta-lactamines pénicilline A'),('AFC','Antibiotique de la famille des cyclines'),('AFM','Antibiotique de la famille des macrolides'),('AH','Antihistaminique H1 local'),('AIM','Antidépresseur imipraminique tricyclique'),('AIN','Antidépresseur inhibiteur sélectif de la recapture de la sérotonine'),('ALO','Antibiotique local ORL'),('ANS','Antidépresseur IMAO non sélectif'),('AO','Antibiotique ophtalmique'),('AP','Antipsychotique normothymique'),('AUM','Antibiotique urinaire minute'),('CRT','Corticoïde, antibiotique et antifongique à  usage local'),('HYP','Hypnotique antihistaminique'),('PSA','Psychostimulant, antiasthénique');
/*!40000 ALTER TABLE `famille` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `labo`
--

DROP TABLE IF EXISTS `labo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `labo` (
  `lCode` varchar(2) NOT NULL,
  `lNom` varchar(50) DEFAULT NULL,
  `lChefVentes` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`lCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `labo`
--

LOCK TABLES `labo` WRITE;
/*!40000 ALTER TABLE `labo` DISABLE KEYS */;
INSERT INTO `labo` VALUES ('BC','Bichat','Suzanne Terminus'),('GY','Gyverny','Marcel MacDouglas'),('SW','Swiss Kane','Alain Poutre');
/*!40000 ALTER TABLE `labo` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medicament`
--

DROP TABLE IF EXISTS `medicament`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `medicament` (
  `mDepotLegal` varchar(10) NOT NULL,
  `mNomCommercial` varchar(25) DEFAULT NULL,
  `mComposition` varchar(255) DEFAULT NULL,
  `mEffets` varchar(255) DEFAULT NULL,
  `mContreIndications` varchar(255) DEFAULT NULL,
  `mPrix` float DEFAULT NULL,
  `fCode` varchar(3) NOT NULL,
  PRIMARY KEY (`mDepotLegal`),
  KEY `fCode` (`fCode`),
  CONSTRAINT `medicament_ibfk_1` FOREIGN KEY (`fCode`) REFERENCES `famille` (`fCode`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medicament`
--

LOCK TABLES `medicament` WRITE;
/*!40000 ALTER TABLE `medicament` DISABLE KEYS */;
INSERT INTO `medicament` VALUES ('3MYC7','TRIMYCINE','Triamcinolone (acétonide) + Néomycine + Nystatine','Ce médicament est un corticoïde à  activité forte ou très forte associé à  un antibiotique et un antifongique, utilisé en application locale dans certaines atteintes cutanées surinfectées.','Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'infections de la peau ou de parasitisme non traités, d\'acné. Ne pas appliquer sur une plaie, ni sous un pansement occlusif.',NULL,'CRT'),('ADIMOL9','ADIMOL','Amoxicilline + Acide clavulanique','Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.','Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines ou aux céphalosporines.',NULL,'ABP'),('AMOPIL7','AMOPIL','Amoxicilline','Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.','Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.',NULL,'ABP'),('AMOX45','AMOXAR','Amoxicilline','Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.','La prise de ce médicament peut rendre positifs les tests de dépistage du dopage.',NULL,'ABP'),('AMOXIG12','AMOXI Gé','Amoxicilline','Ce médicament, plus puissant que les pénicillines simples, est utilisé pour traiter des infections bactériennes spécifiques.','Ce médicament est contre-indiqué en cas d\'allergie aux pénicillines. Il doit être administré avec prudence en cas d\'allergie aux céphalosporines.',NULL,'ABP'),('APATOUX22','APATOUX Vitamine C','Tyrothricine + Tétracaïne + Acide ascorbique (Vitamine C)','Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.','Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, en cas de phénylcétonurie et chez l\'enfant de moins de 6 ans.',NULL,'ALO'),('BACTIG10','BACTIGEL','Erythromycine','Ce médicament est utilisé en application locale pour traiter l\'acné et les infections cutanées bactériennes associées.','Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques de la famille des macrolides ou des lincosanides.',NULL,'ABC'),('BACTIV13','BACTIVIL','Erythromycine','Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.','Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).',NULL,'AFM'),('BITALV','BIVALIC','Dextropropoxyphène + Paracétamol','Ce médicament est utilisé pour traiter les douleurs d\'intensité modérée ou intense.','Ce médicament est contre-indiqué en cas d\'allergie aux médicaments de cette famille, d\'insuffisance hépatique ou d\'insuffisance rénale.',NULL,'AAA'),('CARTION6','CARTION','Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol','Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.','Ce médicament est contre-indiqué en cas de troubles de la coagulation (tendances aux hémorragies), d\'ulcère gastroduodénal, maladies graves du foie.',NULL,'AAA'),('CLAZER6','CLAZER','Clarithromycine','Ce médicament est utilisé pour traiter des infections bactériennes spécifiques. Il est également utilisé dans le traitement de l\'ulcère gastro-duodénal, en association avec d\'autres médicaments.','Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).',NULL,'AFM'),('DEPRIL9','DEPRAMIL','Clomipramine','Ce médicament est utilisé pour traiter les épisodes dépressifs sévères, certaines douleurs rebelles, les troubles obsessionnels compulsifs et certaines énurésies chez l\'enfant.','Ce médicament est contre-indiqué en cas de glaucome ou d\'adénome de la prostate, d\'infarctus récent, ou si vous avez reà§u un traitement par IMAO durant les 2 semaines précédentes ou en cas d\'allergie aux antidépresseurs imipraminiques.',NULL,'AIM'),('DIMIRTAM6','DIMIRTAM','Mirtazapine','Ce médicament est utilisé pour traiter les épisodes dépressifs sévères.','La prise de ce produit est contre-indiquée en cas de d\'allergie à  l\'un des constituants.',NULL,'AAC'),('DOLRIL7','DOLORIL','Acide acétylsalicylique (aspirine) + Acide ascorbique (Vitamine C) + Paracétamol','Ce médicament est utilisé dans le traitement symptomatique de la douleur ou de la fièvre.','Ce médicament est contre-indiqué en cas d\'allergie au paracétamol ou aux salicylates.',NULL,'AAA'),('DORNOM8','NORMADOR','Doxylamine','Ce médicament est utilisé pour traiter l\'insomnie chez l\'adulte.','Ce médicament est contre-indiqué en cas de glaucome, de certains troubles urinaires (rétention urinaire) et chez l\'enfant de moins de 15 ans.',NULL,'HYP'),('EQUILARX6','EQUILAR','Méclozine','Ce médicament est utilisé pour traiter les vertiges et pour prévenir le mal des transports.','Ce médicament ne doit pas être utilisé en cas d\'allergie au produit, en cas de glaucome ou de rétention urinaire.',NULL,'AAH'),('EVILR7','EVEILLOR','Adrafinil','Ce médicament est utilisé pour traiter les troubles de la vigilance et certains symptomes neurologiques chez le sujet agé.','Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.',NULL,'PSA'),('INSXT5','INSECTIL','Diphénydramine','Ce médicament est utilisé en application locale sur les piqûres d\'insecte et l\'urticaire.','Ce médicament est contre-indiqué en cas d\'allergie aux antihistaminiques.',NULL,'AH'),('JOVAI8','JOVENIL','Josamycine','Ce médicament est utilisé pour traiter des infections bactériennes spécifiques.','Ce médicament est contre-indiqué en cas d\'allergie aux macrolides (dont le chef de file est l\'érythromycine).',NULL,'AFM'),('LIDOXY23','LIDOXYTRACINE','Oxytétracycline +Lidocaïne','Ce médicament est utilisé en injection intramusculaire pour traiter certaines infections spécifiques.','Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants. Il ne doit pas être associé aux rétinoïdes.',NULL,'AFC'),('LITHOR12','LITHORINE','Lithium','Ce médicament est indiqué dans la prévention des psychoses maniaco-dépressives ou pour traiter les états maniaques.','Ce médicament ne doit pas être utilisé si vous êtes allergique au lithium. Avant de prendre ce traitement, signalez à  votre médecin traitant si vous souffrez d\'insuffisance rénale, ou si vous avez un régime sans sel.',NULL,'AP'),('PARMOL16','PARMOCODEINE','Codéine + Paracétamol','Ce médicament est utilisé pour le traitement des douleurs lorsque des antalgiques simples ne sont pas assez efficaces.','Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, chez l\'enfant de moins de 15 Kg, en cas d\'insuffisance hépatique ou respiratoire, d\'asthme, de phénylcétonurie et chez la femme qui allaite.',NULL,'AA'),('PHYSOI8','PHYSICOR','Sulbutiamine','Ce médicament est utilisé pour traiter les baisses d\'activité physique ou psychique, souvent dans un contexte de dépression.','Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants.',NULL,'PSA'),('PIRIZ8','PIRIZAN','Pyrazinamide','Ce médicament est utilisé, en association à  d\'autres antibiotiques, pour traiter la tuberculose.','Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants, d\'insuffisance rénale ou hépatique, d\'hyperuricémie ou de porphyrie.',NULL,'ABA'),('POMDI20','POMADINE','Bacitracine','Ce médicament est utilisé pour traiter les infections oculaires de la surface de l\'oeil.','Ce médicament est contre-indiqué en cas d\'allergie aux antibiotiques appliqués localement.',NULL,'AO'),('TROXT21','TROXADET','Paroxétine','Ce médicament est utilisé pour traiter la dépression et les troubles obsessionnels compulsifs. Il peut également être utilisé en prévention des crises de panique avec ou sans agoraphobie.','Ce médicament est contre-indiqué en cas d\'allergie au produit.',NULL,'AIN'),('TXISOL22','TOUXISOL Vitamine C','Tyrothricine + Acide ascorbique (Vitamine C)','Ce médicament est utilisé pour traiter les affections de la bouche et de la gorge.','Ce médicament est contre-indiqué en cas d\'allergie à  l\'un des constituants et chez l\'enfant de moins de 6 ans.',NULL,'ALO'),('URIEG6','URIREGUL','Fosfomycine trométamol','Ce médicament est utilisé pour traiter les infections urinaires simples chez la femme de moins de 65 ans.','La prise de ce médicament est contre-indiquée en cas d\'allergie à  l\'un des constituants et d\'insuffisance rénale.',NULL,'AUM');
/*!40000 ALTER TABLE `medicament` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `observation`
--

DROP TABLE IF EXISTS `observation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `observation` (
  `oNum` int NOT NULL,
  `pNum` int NOT NULL,
  `mDepotLegal` varchar(10) NOT NULL,
  `oRemarque` varchar(32) DEFAULT NULL,
  `oDate` datetime DEFAULT NULL,
  PRIMARY KEY (`oNum`),
  KEY `mDepotLegal` (`mDepotLegal`),
  KEY `pNum` (`pNum`),
  CONSTRAINT `observation_ibfk_1` FOREIGN KEY (`mDepotLegal`) REFERENCES `medicament` (`mDepotLegal`) ON UPDATE CASCADE,
  CONSTRAINT `observation_ibfk_2` FOREIGN KEY (`pNum`) REFERENCES `praticien` (`pNum`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `observation`
--

LOCK TABLES `observation` WRITE;
/*!40000 ALTER TABLE `observation` DISABLE KEYS */;
INSERT INTO `observation` VALUES (1,57,'AMOXIG12','bla bla bla','2020-01-02 00:00:00'),(2,9,'AMOPIL7','bla bla bla','2020-01-03 00:00:00'),(3,67,'PHYSOI8','bla bla bla','2020-01-03 00:00:00'),(4,80,'TXISOL22','bla bla bla','2020-01-03 00:00:00'),(5,68,'TROXT21','bla bla bla','2020-01-04 00:00:00'),(6,42,'DIMIRTAM6','bla bla bla','2020-01-04 00:00:00'),(7,39,'DORNOM8','bla bla bla','2020-01-05 00:00:00'),(8,70,'CARTION6','bla bla bla','2020-01-05 00:00:00'),(9,80,'POMDI20','bla bla bla','2020-01-06 00:00:00'),(10,53,'BITALV','bla bla bla','2020-01-06 00:00:00'),(11,82,'DIMIRTAM6','bla bla bla','2020-01-06 00:00:00'),(12,74,'AMOPIL7','bla bla bla','2020-01-08 00:00:00'),(13,43,'DEPRIL9','bla bla bla','2020-01-08 00:00:00'),(14,69,'ADIMOL9','bla bla bla','2020-01-08 00:00:00'),(15,78,'3MYC7','bla bla bla','2020-01-08 00:00:00'),(16,19,'INSXT5','bla bla bla','2020-01-10 00:00:00'),(17,59,'AMOX45','bla bla bla','2020-01-10 00:00:00'),(18,5,'CLAZER6','bla bla bla','2020-01-10 00:00:00'),(19,81,'EQUILARX6','bla bla bla','2020-01-10 00:00:00'),(20,10,'EVILR7','bla bla bla','2020-01-11 00:00:00'),(21,10,'DEPRIL9','bla bla bla','2020-01-11 00:00:00'),(22,9,'INSXT5','bla bla bla','2020-01-12 00:00:00'),(23,65,'ADIMOL9','bla bla bla','2020-01-12 00:00:00'),(24,81,'PIRIZ8','bla bla bla','2020-01-12 00:00:00'),(25,23,'AMOXIG12','bla bla bla','2020-01-13 00:00:00'),(26,23,'BACTIV13','bla bla bla','2020-01-13 00:00:00'),(27,2,'BACTIV13','bla bla bla','2020-01-13 00:00:00'),(28,45,'CLAZER6','bla bla bla','2020-01-14 00:00:00'),(29,49,'AMOX45','bla bla bla','2020-01-15 00:00:00'),(30,50,'DIMIRTAM6','bla bla bla','2020-01-15 00:00:00'),(31,8,'DEPRIL9','bla bla bla','2020-01-16 00:00:00'),(32,77,'EVILR7','bla bla bla','2020-01-16 00:00:00'),(33,34,'AMOX45','bla bla bla','2020-01-16 00:00:00'),(34,21,'APATOUX22','bla bla bla','2020-01-16 00:00:00'),(35,33,'DEPRIL9','bla bla bla','2020-01-16 00:00:00'),(36,58,'INSXT5','bla bla bla','2020-01-17 00:00:00'),(37,3,'ADIMOL9','bla bla bla','2020-01-17 00:00:00'),(38,48,'BITALV','bla bla bla','2020-01-17 00:00:00'),(39,20,'AMOX45','bla bla bla','2020-01-17 00:00:00'),(40,35,'DEPRIL9','bla bla bla','2020-01-17 00:00:00'),(41,84,'POMDI20','bla bla bla','2020-01-18 00:00:00'),(42,65,'URIEG6','bla bla bla','2020-01-18 00:00:00'),(43,79,'ADIMOL9','bla bla bla','2020-01-18 00:00:00'),(44,44,'PHYSOI8','bla bla bla','2020-01-19 00:00:00'),(45,6,'PHYSOI8','bla bla bla','2020-01-19 00:00:00'),(46,42,'BITALV','bla bla bla','2020-01-19 00:00:00'),(47,61,'AMOPIL7','bla bla bla','2020-01-20 00:00:00'),(48,29,'LIDOXY23','bla bla bla','2020-01-20 00:00:00'),(49,64,'BACTIV13','bla bla bla','2020-01-22 00:00:00'),(50,52,'PARMOL16','bla bla bla','2020-01-22 00:00:00'),(51,39,'DEPRIL9','bla bla bla','2020-01-22 00:00:00'),(52,70,'BACTIG10','bla bla bla','2020-01-22 00:00:00'),(53,85,'TXISOL22','bla bla bla','2020-01-23 00:00:00'),(54,60,'URIEG6','bla bla bla','2020-01-24 00:00:00'),(55,31,'BITALV','bla bla bla','2020-01-24 00:00:00'),(56,84,'AMOXIG12','bla bla bla','2020-01-25 00:00:00'),(57,69,'CARTION6','bla bla bla','2020-01-25 00:00:00'),(58,36,'TROXT21','bla bla bla','2020-01-26 00:00:00'),(59,73,'INSXT5','bla bla bla','2020-01-27 00:00:00'),(60,25,'PARMOL16','bla bla bla','2020-01-28 00:00:00'),(61,4,'BACTIV13','bla bla bla','2020-01-28 00:00:00'),(62,24,'3MYC7','bla bla bla','2020-01-30 00:00:00'),(63,12,'DIMIRTAM6','bla bla bla','2020-01-30 00:00:00'),(64,33,'LITHOR12','bla bla bla','2020-01-30 00:00:00'),(65,17,'BACTIG10','bla bla bla','2020-01-31 00:00:00'),(66,6,'CLAZER6','bla bla bla','2020-01-31 00:00:00'),(67,60,'3MYC7','bla bla bla','2020-02-01 00:00:00'),(68,78,'JOVAI8','bla bla bla','2020-02-01 00:00:00'),(69,71,'PARMOL16','bla bla bla','2020-02-01 00:00:00'),(70,55,'BACTIV13','bla bla bla','2020-02-02 00:00:00'),(71,5,'BITALV','bla bla bla','2020-02-02 00:00:00'),(72,28,'AMOX45','bla bla bla','2020-02-02 00:00:00'),(73,57,'DORNOM8','bla bla bla','2020-02-02 00:00:00'),(74,76,'PHYSOI8','bla bla bla','2020-02-02 00:00:00'),(75,37,'PIRIZ8','bla bla bla','2020-02-03 00:00:00'),(76,26,'TXISOL22','bla bla bla','2020-02-05 00:00:00'),(77,41,'3MYC7','bla bla bla','2020-02-05 00:00:00'),(78,11,'JOVAI8','bla bla bla','2020-02-06 00:00:00'),(79,27,'TROXT21','bla bla bla','2020-02-06 00:00:00'),(80,69,'TXISOL22','bla bla bla','2020-02-06 00:00:00'),(81,84,'LIDOXY23','bla bla bla','2020-02-07 00:00:00'),(82,32,'JOVAI8','bla bla bla','2020-02-08 00:00:00'),(83,30,'ADIMOL9','bla bla bla','2020-02-08 00:00:00'),(84,71,'PHYSOI8','bla bla bla','2020-02-08 00:00:00'),(85,7,'PARMOL16','bla bla bla','2020-02-10 00:00:00'),(86,36,'DORNOM8','bla bla bla','2020-02-10 00:00:00'),(87,46,'TROXT21','bla bla bla','2020-02-10 00:00:00'),(88,26,'AMOPIL7','bla bla bla','2020-02-11 00:00:00'),(89,86,'EVILR7','bla bla bla','2020-02-11 00:00:00'),(90,81,'PHYSOI8','bla bla bla','2020-02-11 00:00:00'),(91,65,'POMDI20','bla bla bla','2020-02-11 00:00:00'),(92,16,'DOLRIL7','bla bla bla','2020-02-12 00:00:00'),(93,15,'BACTIV13','bla bla bla','2020-02-12 00:00:00'),(94,50,'BACTIG10','bla bla bla','2020-02-12 00:00:00'),(95,62,'TROXT21','bla bla bla','2020-02-13 00:00:00'),(96,60,'CARTION6','bla bla bla','2020-02-13 00:00:00'),(97,22,'PHYSOI8','bla bla bla','2020-02-15 00:00:00'),(98,47,'DOLRIL7','bla bla bla','2020-02-15 00:00:00'),(99,53,'DOLRIL7','bla bla bla','2020-02-15 00:00:00'),(100,79,'LITHOR12','bla bla bla','2020-02-15 00:00:00'),(101,29,'PARMOL16','bla bla bla','2020-02-15 00:00:00'),(102,48,'EVILR7','bla bla bla','2020-02-16 00:00:00'),(103,46,'LIDOXY23','bla bla bla','2020-02-16 00:00:00'),(104,73,'LIDOXY23','bla bla bla','2020-02-17 00:00:00'),(105,72,'3MYC7','bla bla bla','2020-02-18 00:00:00'),(106,58,'CARTION6','bla bla bla','2020-02-18 00:00:00'),(107,52,'APATOUX22','bla bla bla','2020-02-18 00:00:00'),(108,45,'POMDI20','bla bla bla','2020-02-18 00:00:00'),(109,38,'ADIMOL9','bla bla bla','2020-02-18 00:00:00'),(110,63,'DEPRIL9','bla bla bla','2020-02-19 00:00:00'),(111,28,'URIEG6','bla bla bla','2020-02-19 00:00:00'),(112,14,'LIDOXY23','bla bla bla','2020-02-19 00:00:00'),(113,34,'APATOUX22','bla bla bla','2020-02-20 00:00:00'),(114,76,'URIEG6','bla bla bla','2020-02-20 00:00:00'),(115,83,'EQUILARX6','bla bla bla','2020-02-21 00:00:00'),(116,8,'DOLRIL7','bla bla bla','2020-02-21 00:00:00'),(117,54,'EVILR7','bla bla bla','2020-02-21 00:00:00'),(118,78,'3MYC7','bla bla bla','2020-02-21 00:00:00'),(119,19,'DIMIRTAM6','bla bla bla','2020-02-22 00:00:00'),(120,20,'LITHOR12','bla bla bla','2020-02-22 00:00:00'),(121,57,'AMOPIL7','bla bla bla','2020-02-23 00:00:00'),(122,37,'LITHOR12','bla bla bla','2020-02-24 00:00:00'),(123,77,'DEPRIL9','bla bla bla','2020-02-24 00:00:00'),(124,85,'URIEG6','bla bla bla','2020-02-24 00:00:00'),(125,77,'PARMOL16','bla bla bla','2020-02-24 00:00:00'),(126,13,'URIEG6','bla bla bla','2020-02-25 00:00:00'),(127,61,'DORNOM8','bla bla bla','2020-02-25 00:00:00'),(128,30,'CLAZER6','bla bla bla','2020-02-26 00:00:00'),(129,11,'3MYC7','bla bla bla','2020-02-26 00:00:00'),(130,40,'DOLRIL7','bla bla bla','2020-02-27 00:00:00'),(131,31,'LITHOR12','bla bla bla','2020-02-27 00:00:00'),(132,83,'TXISOL22','bla bla bla','2020-02-27 00:00:00'),(133,18,'APATOUX22','bla bla bla','2020-02-28 00:00:00'),(134,53,'BACTIV13','bla bla bla','2020-02-28 00:00:00'),(135,75,'DIMIRTAM6','bla bla bla','2020-02-29 00:00:00'),(136,55,'DOLRIL7','bla bla bla','2020-02-29 00:00:00'),(137,72,'TROXT21','bla bla bla','2020-03-02 00:00:00'),(138,64,'LITHOR12','bla bla bla','2020-03-02 00:00:00'),(139,24,'EVILR7','bla bla bla','2020-03-03 00:00:00'),(140,27,'POMDI20','bla bla bla','2020-03-03 00:00:00'),(141,51,'CARTION6','bla bla bla','2020-03-03 00:00:00'),(142,82,'LITHOR12','bla bla bla','2020-03-04 00:00:00'),(143,74,'DIMIRTAM6','bla bla bla','2020-03-04 00:00:00'),(144,12,'INSXT5','bla bla bla','2020-03-05 00:00:00'),(145,56,'TROXT21','bla bla bla','2020-03-05 00:00:00'),(146,17,'ADIMOL9','bla bla bla','2020-03-06 00:00:00'),(147,66,'AMOXIG12','bla bla bla','2020-03-06 00:00:00'),(148,32,'DOLRIL7','bla bla bla','2020-03-07 00:00:00'),(149,85,'LIDOXY23','bla bla bla','2020-03-07 00:00:00'),(150,67,'AMOPIL7','bla bla bla','2020-03-08 00:00:00'),(151,47,'BITALV','bla bla bla','2020-03-08 00:00:00'),(152,73,'3MYC7','bla bla bla','2020-03-08 00:00:00'),(153,21,'PHYSOI8','bla bla bla','2020-03-09 00:00:00'),(154,25,'BACTIG10','bla bla bla','2020-03-10 00:00:00'),(155,40,'DEPRIL9','bla bla bla','2020-03-10 00:00:00'),(156,54,'BACTIG10','bla bla bla','2020-03-11 00:00:00'),(157,44,'PIRIZ8','bla bla bla','2020-03-11 00:00:00'),(158,59,'DEPRIL9','bla bla bla','2020-03-11 00:00:00'),(159,14,'INSXT5','bla bla bla','2020-03-11 00:00:00'),(160,72,'AMOPIL7','bla bla bla','2020-03-11 00:00:00'),(161,63,'BACTIV13','bla bla bla','2020-03-12 00:00:00'),(162,76,'DOLRIL7','bla bla bla','2020-03-12 00:00:00'),(163,51,'AMOXIG12','bla bla bla','2020-03-14 00:00:00'),(164,63,'LITHOR12','bla bla bla','2020-03-14 00:00:00'),(165,67,'DOLRIL7','bla bla bla','2020-03-14 00:00:00'),(166,61,'LIDOXY23','bla bla bla','2020-03-15 00:00:00'),(167,49,'URIEG6','bla bla bla','2020-03-15 00:00:00'),(168,71,'APATOUX22','bla bla bla','2020-03-17 00:00:00'),(169,43,'EVILR7','bla bla bla','2020-03-17 00:00:00'),(170,55,'AMOXIG12','bla bla bla','2020-03-18 00:00:00'),(171,41,'CLAZER6','bla bla bla','2020-03-18 00:00:00'),(172,64,'URIEG6','bla bla bla','2020-03-19 00:00:00'),(173,16,'DIMIRTAM6','bla bla bla','2020-03-19 00:00:00'),(174,15,'BACTIG10','bla bla bla','2020-03-19 00:00:00'),(175,83,'AMOX45','bla bla bla','2020-03-20 00:00:00'),(176,52,'INSXT5','bla bla bla','2020-03-20 00:00:00'),(177,66,'EVILR7','bla bla bla','2020-03-20 00:00:00'),(178,38,'BITALV','bla bla bla','2020-03-20 00:00:00'),(179,86,'DOLRIL7','bla bla bla','2020-03-21 00:00:00'),(180,80,'DEPRIL9','bla bla bla','2020-03-21 00:00:00'),(181,1,'EQUILARX6','bla bla bla','2020-03-22 00:00:00'),(182,1,'TXISOL22','bla bla bla','2020-03-22 00:00:00'),(183,68,'ADIMOL9','bla bla bla','2020-03-22 00:00:00'),(184,22,'LIDOXY23','bla bla bla','2020-03-25 00:00:00'),(185,82,'BITALV','bla bla bla','2020-03-25 00:00:00'),(186,3,'EQUILARX6','bla bla bla','2020-03-25 00:00:00'),(187,56,'EVILR7','bla bla bla','2020-03-25 00:00:00'),(188,13,'DOLRIL7','bla bla bla','2020-03-25 00:00:00'),(189,59,'ADIMOL9','bla bla bla','2020-03-27 00:00:00'),(190,54,'BITALV','bla bla bla','2020-03-27 00:00:00'),(191,70,'LITHOR12','bla bla bla','2020-03-27 00:00:00'),(192,75,'3MYC7','bla bla bla','2020-03-30 00:00:00'),(193,74,'APATOUX22','bla bla bla','2020-03-31 00:00:00'),(194,62,'EVILR7','bla bla bla','2020-04-01 00:00:00'),(195,58,'DIMIRTAM6','bla bla bla','2020-04-01 00:00:00'),(196,75,'EVILR7','bla bla bla','2020-04-02 00:00:00'),(197,2,'BITALV','bla bla bla','2020-04-02 00:00:00'),(198,68,'CARTION6','bla bla bla','2020-04-03 00:00:00'),(199,7,'BACTIG10','bla bla bla','2020-04-04 00:00:00'),(200,66,'TROXT21','bla bla bla','2020-04-04 00:00:00'),(201,62,'POMDI20','bla bla bla','2020-04-04 00:00:00'),(202,18,'AMOPIL7','bla bla bla','2020-04-05 00:00:00'),(203,79,'DOLRIL7','bla bla bla','2020-04-05 00:00:00'),(204,4,'POMDI20','bla bla bla','2020-04-07 00:00:00'),(205,56,'TROXT21','bla bla bla','2020-04-08 00:00:00'),(206,35,'LITHOR12','bla bla bla','2020-04-09 00:00:00'),(207,41,'JOVAI8','bla bla bla','2020-03-23 00:00:00'),(208,23,'PARMOL16','bla bla bla','2020-04-10 00:00:00'),(209,4,'DORNOM8','bla bla bla','2020-04-10 00:00:00');
/*!40000 ALTER TABLE `observation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `offrir`
--

DROP TABLE IF EXISTS `offrir`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `offrir` (
  `uId` varchar(4) NOT NULL,
  `vNum` smallint NOT NULL,
  `mDepotLegal` varchar(10) NOT NULL,
  `OFF_QTE` smallint DEFAULT NULL,
  PRIMARY KEY (`uId`,`vNum`,`mDepotLegal`),
  KEY `mDepotLegal` (`mDepotLegal`),
  CONSTRAINT `offrir_ibfk_1` FOREIGN KEY (`mDepotLegal`) REFERENCES `medicament` (`mDepotLegal`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `offrir_ibfk_2` FOREIGN KEY (`uId`, `vNum`) REFERENCES `visite` (`uId`, `vNum`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `offrir`
--

LOCK TABLES `offrir` WRITE;
/*!40000 ALTER TABLE `offrir` DISABLE KEYS */;
INSERT INTO `offrir` VALUES ('a131',1,'PHYSOI8',3),('a131',2,'LIDOXY23',1),('a131',3,'JOVAI8',1),('a131',4,'PARMOL16',1),('a17',1,'PIRIZ8',3),('a17',2,'EQUILARX6',2),('a17',3,'LITHOR12',4),('a17',4,'LITHOR12',4),('a17',5,'AMOX45',1),('a17',6,'BITALV',1),('a55',1,'AMOPIL7',4),('a55',2,'PHYSOI8',1),('a55',3,'INSXT5',4),('a55',4,'3MYC7',4),('a55',5,'TROXT21',3),('a55',6,'AMOPIL7',3),('a93',1,'PARMOL16',3),('a93',2,'TXISOL22',1),('a93',4,'DOLRIL7',3),('a93',5,'BITALV',3),('a93',6,'BACTIG10',2),('b13',1,'DEPRIL9',4),('b13',2,'DOLRIL7',2),('b13',4,'EVILR7',2),('b16',1,'AMOXIG12',1),('b16',2,'BACTIV13',2),('b16',3,'PARMOL16',2),('b16',5,'BACTIG10',1),('b16',6,'AMOPIL7',1),('b19',1,'INSXT5',3),('b25',2,'INSXT5',2),('b25',4,'CARTION6',4),('b25',5,'DIMIRTAM6',2),('b25',6,'EVILR7',4),('b25',7,'DOLRIL7',1),('b25',8,'EQUILARX6',3),('b25',9,'TXISOL22',4),('b25',10,'TROXT21',3),('b28',1,'EVILR7',4),('b28',2,'BACTIV13',1),('b28',3,'BACTIG10',3),('b28',5,'ADIMOL9',1),('b28',6,'URIEG6',3),('b34',1,'3MYC7',1),('b34',4,'DEPRIL9',4),('b4',1,'TXISOL22',3),('b4',2,'JOVAI8',2),('b4',4,'DOLRIL7',4),('b50',2,'DIMIRTAM6',4),('b59',1,'DOLRIL7',1),('bp',1,'ADIMOL9',2),('bp',2,'PARMOL16',3),('bp',3,'ADIMOL9',1),('bp',4,'APATOUX22',1),('bp',5,'CLAZER6',2),('c14',1,'AMOPIL7',1),('c14',2,'AMOX45',4),('c14',3,'BACTIV13',1),('c14',5,'BACTIG10',2),('c14',6,'ADIMOL9',1),('c3',1,'TXISOL22',1),('c3',2,'POMDI20',4),('c3',3,'AMOX45',2),('c3',4,'DIMIRTAM6',1),('c3',5,'JOVAI8',1),('c3',6,'PHYSOI8',1),('c3',7,'APATOUX22',2),('c3',10,'BACTIG10',4),('c54',1,'BITALV',2),('c54',2,'URIEG6',1),('c54',3,'3MYC7',1),('c54',4,'TROXT21',1),('c54',5,'EVILR7',4),('c54',6,'DEPRIL9',3),('c54',8,'BACTIV13',2),('d13',2,'CARTION6',1),('d13',4,'AMOXIG12',3),('d51',1,'DORNOM8',3),('d51',2,'DEPRIL9',1),('e22',1,'EVILR7',4),('e24',1,'BACTIV13',4),('e39',1,'AMOXIG12',1),('e39',2,'BITALV',3),('e39',3,'AMOPIL7',2),('e39',4,'BACTIV13',2),('e49',1,'TROXT21',3),('e49',2,'CLAZER6',1),('e49',3,'ADIMOL9',4),('e49',4,'POMDI20',2),('e49',6,'AMOXIG12',1),('e49',7,'INSXT5',4),('e49',8,'BITALV',1),('e49',9,'3MYC7',3),('e49',10,'ADIMOL9',3),('e5',1,'CARTION6',3),('e5',2,'CLAZER6',1),('e5',3,'DEPRIL9',2),('e5',4,'AMOX45',4),('e5',5,'BACTIG10',4),('e5',7,'LITHOR12',1),('e5',8,'TXISOL22',3),('e5',9,'POMDI20',4),('e5',11,'DOLRIL7',3),('e5',12,'AMOXIG12',2),('e52',1,'TROXT21',2),('e52',4,'3MYC7',1),('f21',2,'PHYSOI8',3),('f39',1,'TROXT21',3),('f39',2,'ADIMOL9',2),('f39',6,'EVILR7',4),('f4',1,'TROXT21',4),('g19',1,'BITALV',3),('g19',2,'TROXT21',2),('g19',3,'LIDOXY23',4),('g30',1,'BACTIV13',2),('g30',2,'LITHOR12',4),('g30',3,'DOLRIL7',1),('g30',4,'POMDI20',2),('g53',1,'PHYSOI8',3),('g53',3,'URIEG6',1),('g7',1,'DORNOM8',4),('h30',2,'DOLRIL7',2),('h35',1,'DEPRIL9',2),('h40',1,'CARTION6',4),('j45',1,'DORNOM8',4),('j50',1,'EVILR7',2),('j50',2,'DEPRIL9',1),('k4',1,'LITHOR12',2),('k53',1,'LITHOR12',2),('l14',1,'POMDI20',2),('l23',1,'BACTIV13',2),('l23',3,'LIDOXY23',4),('l23',5,'LIDOXY23',4),('l46',1,'AMOXIG12',1),('l56',1,'AMOX45',2),('l56',3,'PARMOL16',2),('l56',4,'URIEG6',1),('m45',1,'CARTION6',4),('n42',2,'URIEG6',4),('n58',1,'DEPRIL9',1),('n59',1,'ADIMOL9',3),('n59',1,'DEPRIL9',1),('n59',3,'CLAZER6',4),('n59',5,'CLAZER6',4),('o26',1,'ADIMOL9',4),('p32',1,'LITHOR12',1),('p40',1,'DIMIRTAM6',3),('p40',2,'DIMIRTAM6',2),('p40',3,'BITALV',4),('p40',4,'BACTIG10',4),('p41',1,'PARMOL16',1),('p42',1,'AMOPIL7',2),('p49',1,'LIDOXY23',2),('p6',1,'APATOUX22',1),('p7',1,'3MYC7',4),('p8',1,'DOLRIL7',3),('r24',1,'3MYC7',1),('r58',1,'ADIMOL9',1),('s10',1,'DEPRIL9',3),('s21',1,'PIRIZ8',4),('t43',1,'DIMIRTAM6',4),('t47',1,'TXISOL22',2),('t55',1,'LIDOXY23',1);
/*!40000 ALTER TABLE `offrir` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `parametre`
--

DROP TABLE IF EXISTS `parametre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `parametre` (
  `pType` varchar(7) NOT NULL,
  `pIndice` smallint NOT NULL,
  `pLibelle` varchar(110) DEFAULT NULL,
  `pCategorie` varchar(1) DEFAULT NULL,
  `pPlancher` smallint DEFAULT NULL,
  `pPlafond` smallint DEFAULT NULL,
  PRIMARY KEY (`pType`,`pIndice`),
  CONSTRAINT `parametre_ibfk_1` FOREIGN KEY (`pType`) REFERENCES `typeParametre` (`tlId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `parametre`
--

LOCK TABLES `parametre` WRITE;
/*!40000 ALTER TABLE `parametre` DISABLE KEYS */;
INSERT INTO `parametre` VALUES ('catProf',0,'valeur à déterminer …',NULL,NULL,NULL),('catProf',1,'Agent commercial','a',NULL,NULL),('catProf',2,'Agriculteurs exploitants','a',NULL,NULL),('catProf',3,'Artisans','a',NULL,NULL),('catProf',4,'Artiste','a',NULL,NULL),('catProf',5,'Cadres et professions intellectuelles supérieures','a',NULL,NULL),('catProf',6,'Colporteurs de presse','a',NULL,NULL),('catProf',7,'Commerçants','a',NULL,NULL),('catProf',8,'Commerçants ambulants','a',NULL,NULL),('catProf',9,'Conjoint collaborateur','a',NULL,NULL),('catProf',10,'Créateurs','a',NULL,NULL),('catProf',11,'Employé','a',NULL,NULL),('catProf',12,'Ouvrier','a',NULL,NULL),('catProf',13,'Professions intermédiaires','a',NULL,NULL),('catProf',14,'Professions libérales','a',NULL,NULL),('catProf',15,'Retraité','a',NULL,NULL),('catProf',16,'Sans activité professionelle','a',NULL,NULL),('catProf',17,'Travailleur Indépendant','a',NULL,NULL),('catProf',18,'Vendeur à domicile indépendant','a',NULL,NULL),('emploi',1,'Analyste programmeur',NULL,NULL,NULL),('emploi',2,'Technicien analyste de réseau GSM',NULL,NULL,NULL),('emploi',3,'Gestionnaire de fichiers informatiques',NULL,NULL,NULL),('emploi',4,'Analyste d\'exploitation',NULL,NULL,NULL),('emploi',5,'Développeur d\'application',NULL,NULL,NULL),('emploi',6,'Web master',NULL,NULL,NULL),('emploi',7,'Informaticien d\'exploitation',NULL,NULL,NULL),('emploi',8,'Animatrice de nouvelles technologies',NULL,NULL,NULL),('emploi',9,'Ingénieur conception développement logiciel',NULL,NULL,NULL),('emploi',10,'Ingénieur sécurité réseaux',NULL,NULL,NULL),('emploi',11,'Technicien de maintenance',NULL,NULL,NULL),('emploi',12,'Animatrice',NULL,NULL,NULL),('etudes',0,'Aucune',NULL,NULL,NULL),('etudes',1,'Ingénieur sécurité réseau',NULL,NULL,NULL),('etudes',2,'Ingénieur coception développement logiciel',NULL,NULL,NULL),('etudes',3,'DIADEME (IUT DIJON)',NULL,NULL,NULL),('etudes',4,'Cours du soir CNAM paris',NULL,NULL,NULL),('etudes',5,'DNTS vente de solution informatique',NULL,NULL,NULL),('etudes',6,'Ingénieur informatique à la Gestion des Entreprises',NULL,NULL,NULL),('MotifVi',1,'Rapport annuel','0',0,1),('MotifVi',2,'Actualisation annuelle',NULL,NULL,NULL),('MotifVi',3,'Demande du praticien',NULL,NULL,NULL),('MotifVi',4,'Baisse activité',NULL,NULL,NULL),('regFisc',0,'_','a',NULL,NULL),('regFisc',1,'Auto Entrepreneur','a',NULL,NULL),('regFisc',2,'Forfait agricole','a',NULL,NULL),('regFisc',3,'??????','a',NULL,NULL),('regFisc',4,'Récépissé','a',NULL,NULL),('regFisc',5,'bic / reel','a',NULL,NULL),('regFisc',6,'bic / micro','a',NULL,NULL),('regFisc',7,'bnc / reel','a',NULL,NULL),('regFisc',8,'bnc / micro','a',NULL,NULL),('region',1,'GUADELOUPE','1',NULL,NULL),('region',2,'MARTINIQUE','1',NULL,NULL),('region',3,'GUYANE','1',NULL,NULL),('region',4,'LA REUNION','1',NULL,NULL),('region',6,'MAYOTTE','1',NULL,NULL),('region',11,'ILE-DE-FRANCE','1',NULL,NULL),('region',24,'CENTRE-VAL DE LOIRE','1',NULL,NULL),('region',27,'BOURGOGNE-FRANCHE-COMTE','3',NULL,NULL),('region',28,'NORMANDIE','5',NULL,NULL),('region',32,'HAUTS-DE-FRANCE','2',NULL,NULL),('region',44,'ALSACE-CHAMPAGNE-ARDENNE-LORRAINE','3',NULL,NULL),('region',52,'PAYS DE LA LOIRE','5',NULL,NULL),('region',53,'BRETAGNE','5',NULL,NULL),('region',75,'AQUITAINE-LIMOUSIN-POITOU-CHARENTES','4',NULL,NULL),('region',76,'LANGUEDOC-ROUSSILLON-MIDI-PYRENEES','4',NULL,NULL),('region',84,'AUVERGNE-RHONE-ALPES','3',NULL,NULL),('region',93,'PROVENCE-ALPES-COTE D\'AZUR','4',NULL,NULL),('region',94,'CORSE','4',NULL,NULL),('secteur',1,'Paris centre','1',NULL,NULL),('secteur',2,'Nord','2',NULL,NULL),('secteur',3,'Est','3',NULL,NULL),('secteur',4,'Sud','4',NULL,NULL),('secteur',5,'Ouest','5',NULL,NULL),('sexe',0,'Femme','u',NULL,NULL),('sexe',1,'Homme','u',NULL,NULL),('sitFami',0,'valeur à déterminer …','a',NULL,NULL),('sitFami',1,'Célibataire','a',NULL,NULL),('sitFami',2,'Divorcé','a',NULL,NULL),('sitFami',3,'Isolé après vie maritale','u',NULL,NULL),('sitFami',4,'Marié','a',NULL,NULL),('sitFami',5,'Pacsé','a',NULL,NULL),('sitFami',6,'Séparé','a',NULL,NULL),('sitFami',7,'Veuf','a',NULL,NULL),('sitFami',8,'Vie maritale','a',NULL,NULL),('staEmpl',0,'_','u',NULL,NULL),('staEmpl',1,'Actifs non indépendants (salariés)','u',NULL,NULL),('staEmpl',2,'Actifs indépendants (artisans, commerçants, entrepreneurs, artistes, …)','u',NULL,NULL),('staEmpl',3,'Chômeurs (hors longue durée)','u',NULL,NULL),('staEmpl',4,'Chômeurs de longue durée (inscrits depuis plus de 12 mois)','u',NULL,NULL),('staEmpl',5,'Conjoint collaborateur','u',NULL,NULL),('staEmpl',6,'Inactifs (hors \"en formation\"), scolaires, retraités','u',NULL,NULL),('staEmpl',7,'Inactifs en formation','u',NULL,NULL),('statJur',0,'valeur à déterminer …','a',NULL,NULL),('statJur',1,'Auto-entrepreneur','a',NULL,NULL),('statJur',2,'EARL (exploitation Agricole à Responsabilité limitée)','a',NULL,NULL),('statJur',3,'EIRL (Entrepreneur Individuel à Responsabilité Limité)','a',NULL,NULL),('statJur',4,'Entreprise Individuelle','a',NULL,NULL),('statJur',5,'EURL (entreprise unipersonnelle à responsabilité limitée)','a',NULL,NULL),('statJur',6,'SARL (société à responsabilité limitée)','a',NULL,NULL),('statJur',7,'SAS (société par actions simplifiée)','a',NULL,NULL),('statJur',8,'SNC (société en nom collectif)','a',NULL,NULL),('statJur',9,'Société de Fait','a',NULL,NULL),('statJur',10,'Profession Intermédiaire','a',NULL,NULL),('statJur',11,'Artiste','a',NULL,NULL),('statJur',12,'Profession libérale','a',NULL,NULL),('statUti',0,'Super administrateur',NULL,NULL,NULL),('statUti',1,'visiteur',NULL,NULL,NULL),('statUti',2,'responsable de secteur',NULL,NULL,NULL),('statUti',3,'délégué régional',NULL,NULL,NULL);
/*!40000 ALTER TABLE `parametre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `praticien`
--

DROP TABLE IF EXISTS `praticien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `praticien` (
  `pNum` int NOT NULL,
  `pNom` varchar(25) DEFAULT NULL,
  `pPrenom` varchar(30) DEFAULT NULL,
  `pRue` varchar(50) DEFAULT NULL,
  `pCP` varchar(5) DEFAULT NULL,
  `pVille` varchar(32) DEFAULT NULL,
  `pCoefNotoriete` float DEFAULT NULL,
  `tCode` varchar(2) NOT NULL,
  `region` smallint DEFAULT NULL,
  PRIMARY KEY (`pNum`),
  KEY `tCode` (`tCode`),
  CONSTRAINT `praticien_ibfk_1` FOREIGN KEY (`tCode`) REFERENCES `type_praticien` (`tCode`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `praticien`
--

LOCK TABLES `praticien` WRITE;
/*!40000 ALTER TABLE `praticien` DISABLE KEYS */;
INSERT INTO `praticien` VALUES (1,'Notini','Alain','114 rue Authie','85000','LA ROCHE SUR YON',290.03,'MH',52),(2,'Gosselin','Albert','13 rue Devon','41000','BLOIS',307.49,'MV',24),(3,'Delahaye','André','36 av 6 Juin','25000','BESANCON',185.79,'PS',27),(4,'Leroux','André','47 av Robert Schuman','60000','BEAUVAIS',172.04,'PH',32),(5,'Desmoulins','Anne','31 rue St Jean','30000','NIMES',94.75,'PO',76),(6,'Mouel','Anne','27 rue Auvergne','80000','AMIENS',45.2,'MH',32),(7,'Desgranges-Lentz','Antoine','1 rue Albert de Mun','29000','MORLAIX',20.07,'MV',53),(8,'Marcouiller','Arnaud','31 rue St Jean','68000','MULHOUSE',396.52,'PS',44),(9,'Dupuy','Benoit','9 rue Demolombe','34000','MONTPELLIER',395.66,'PH',76),(10,'Lerat','Bernard','31 rue St Jean','59000','LILLE',257.79,'PO',32),(11,'Marçais-Lefebvre','Bertrand','86Bis rue Basse','67000','STRASBOURG',450.96,'MH',44),(12,'Boscher','Bruno','94 rue Falaise','10000','TROYES',356.14,'MV',44),(13,'Morel','Catherine','21 rue Chateaubriand','75000','PARIS',379.57,'PS',11),(14,'Guivarch','Chantal','4 av Gén Laperrine','45000','ORLEANS',114.56,'PH',24),(15,'Bessin-Grosdoit','Christophe','92 rue Falaise','6000','NICE',222.06,'PO',93),(16,'Rossa','Claire','14 av Thiès','6000','NICE',529.78,'MH',93),(17,'Cauchy','Denis','5 av Ste Thérèse','11000','NARBONNE',458.82,'MV',76),(18,'Gaffé','Dominique','9 av 1ère Armée Française','35000','RENNES',213.4,'PS',53),(19,'Guenon','Dominique','98 bd Mar Lyautey','44000','NANTES',175.89,'PH',52),(20,'Prévot','Dominique','29 rue Lucien Nelle','87000','LIMOGES',151.36,'PO',75),(21,'Houchard','Eliane','9 rue Demolombe','49100','ANGERS',436.96,'MH',52),(22,'Desmons','Elisabeth','51 rue Bernières','29000','QUIMPER',281.17,'MV',53),(23,'Flament','Elisabeth','11 rue Pasteur','35000','RENNES',315.6,'PS',53),(24,'Goussard','Emmanuel','9 rue Demolombe','41000','BLOIS',40.72,'PH',24),(25,'Desprez','Eric','9 rue Vaucelles','33000','BORDEAUX',406.85,'PO',75),(26,'Coste','Evelyne','29 rue Lucien Nelle','19000','TULLE',441.87,'MH',75),(27,'Lefebvre','Frédéric','2 pl Wurzburg','55000','VERDUN',573.63,'MV',44),(28,'Lemée','Frédéric','29 av 6 Juin','56000','VANNES',326.4,'PS',53),(29,'Martin','Frédéric','Bât A 90 rue Bayeux','70000','VESOUL',506.06,'PH',27),(30,'Marie','Frédérique','172 rue Caponière','70000','VESOUL',313.31,'PO',27),(31,'Rosenstech','Geneviève','27 rue Auvergne','75000','PARIS',366.82,'MH',11),(32,'Pontavice','Ghislaine','8 rue Gaillon','86000','POITIERS',265.58,'MV',75),(33,'Leveneur-Mosquet','Guillaume','47 av Robert Schuman','64000','PAU',184.97,'PS',75),(34,'Blanchais','Guy','30 rue Authie','8000','SEDAN',502.48,'PH',44),(35,'Leveneur','Hugues','7 pl St Gilles','62000','ARRAS',7.39,'PO',32),(36,'Mosquet','Isabelle','22 rue Jules Verne','76000','ROUEN',77.1,'MH',28),(37,'Giraudon','Jean-Christophe','1 rue Albert de Mun','38100','VIENNE',92.62,'MV',84),(38,'Marie','Jean-Claude','26 rue Hérouville','69000','LYON',120.1,'PS',84),(39,'Maury','Jean-François','5 rue Pierre Girard','71000','CHALON SUR SAONE',13.73,'PH',27),(40,'Dennel','Jean-Louis','7 pl St Gilles','28000','CHARTRES',550.69,'PO',24),(41,'Ain','Jean-Pierre','4 résid Olympia','2000','LAON',5.59,'MH',32),(42,'Chemery','Jean-Pierre','51 pl Ancienne Boucherie','14000','CAEN',396.58,'MV',28),(43,'Comoz','Jean-Pierre','35 rue Auguste Lechesne','18000','BOURGES',340.35,'PS',24),(44,'Desfaudais','Jean-Pierre','7 pl St Gilles','29000','BREST',71.76,'PH',53),(45,'Phan','JérÃ´me','9 rue Clos Caillet','79000','NIORT',451.61,'PO',75),(46,'Riou','Line','43 bd Gén Vanier','77000','MARNE LA VALLEE',193.25,'MH',11),(47,'Chubilleau','Louis','46 rue Eglise','17000','SAINTES',202.07,'MV',75),(48,'Lebrun','Lucette','178 rue Auge','54000','NANCY',410.41,'PS',44),(49,'Goessens','Marc','6 av 6 Juin','39000','DOLE',548.57,'PH',27),(50,'Laforge','Marc','5 résid Prairie','50000','SAINT LO',265.05,'PO',28),(51,'Millereau','Marc','36 av 6 Juin','72000','LA FERTE BERNARD',430.42,'MH',52),(52,'Dauverne','Marie-Christine','69 av Charlemagne','21000','DIJON',281.05,'MV',27),(53,'Vittorio','Myriam','3 pl Champlain','94000','BOISSY SAINT LEGER',356.23,'PS',11),(54,'Lapasset','Nhieu','31 av 6 Juin','52000','CHAUMONT',107,'PH',44),(55,'Plantet-Besnier','Nicole','10 av 1ère Armée Française','86000','CHATELLEREAULT',369.94,'PO',75),(56,'Chubilleau','Pascal','3 rue Hastings','15000','AURRILLAC',290.75,'MH',84),(57,'Robert','Pascal','31 rue St Jean','93000','BOBIGNY',162.41,'MV',11),(58,'Jean','Pascale','114 rue Authie','49100','SAUMUR',375.52,'PS',52),(59,'Chanteloube','Patrice','14 av Thiès','13000','MARSEILLE',478.01,'PH',93),(60,'Lecuirot','Patrice','résid St Pères 55 rue Pigacière','54000','NANCY',239.66,'PO',44),(61,'Gandon','Patrick','47 av Robert Schuman','37000','TOURS',599.06,'MH',24),(62,'Mirouf','Patrick','22 rue Puits Picard','74000','ANNECY',458.42,'MV',84),(63,'Boireaux','Philippe','14 av Thiès','10000','CHALON EN CHAMPAGNE',454.48,'PS',44),(64,'Cendrier','Philippe','7 pl St Gilles','12000','RODEZ',164.16,'PH',76),(65,'Duhamel','Philippe','114 rue Authie','34000','MONTPELLIER',98.62,'PO',76),(66,'Grigy','Philippe','15 rue Mélingue','44000','CLISSON',285.1,'MH',52),(67,'Linard','Philippe','1 rue Albert de Mun','81000','ALBI',486.3,'MV',76),(68,'Lozier','Philippe','8 rue Gaillon','31000','TOULOUSE',48.4,'PS',76),(69,'Dechâtre','Pierre','63 av Thiès','23000','MONTLUCON',253.75,'PH',75),(70,'Goessens','Pierre','22 rue Jean Romain','40000','MONT DE MARSAN',426.19,'PO',75),(71,'Leménager','Pierre','39 av 6 Juin','57000','METZ',118.7,'MH',44),(72,'Née','Pierre','39 av 6 Juin','82000','MONTAUBAN',72.54,'MV',76),(73,'Guyot','Pierre-Laurent','43 bd Gén Vanier','48000','MENDE',352.31,'PS',76),(74,'Chauchard','Roger','9 rue Vaucelles','13000','MARSEILLE',552.19,'PH',93),(75,'Mabire','Roland','11 rue Boutiques','67000','STRASBOURG',422.39,'PO',44),(76,'Leroy','Soazig','45 rue Boutiques','61000','ALENCON',570.67,'MH',28),(77,'Guyot','Stéphane','26 rue Hérouville','46000','FIGEAC',28.85,'MV',76),(78,'Delposen','Sylvain','39 av 6 Juin','27000','DREUX',292.01,'PS',28),(79,'Rault','Sylvie','15 bd Richemond','2000','SOISSON',526.6,'PH',32),(80,'Renouf','Sylvie','98 bd Mar Lyautey','88000','EPINAL',425.24,'PO',44),(81,'Alliet-Grach','Thierry','14 av Thiès','7000','PRIVAS',451.31,'MH',84),(82,'Bayard','Thierry','92 rue Falaise','42000','SAINT ETIENNE',271.71,'MV',84),(83,'Gauchet','Thierry','7 rue Desmoueux','38100','GRENOBLE',406.1,'PS',84),(84,'Bobichon','Tristan','219 rue Caponière','9000','FOIX',218.36,'PH',76),(85,'Duchemin-Laniel','Véronique','130 rue St Jean','33000','LIBOURNE',265.61,'PO',75),(86,'Laurent','Younès','34 rue Demolombe','53000','MAYENNE',496.1,'MH',52);
/*!40000 ALTER TABLE `praticien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `type_praticien`
--

DROP TABLE IF EXISTS `type_praticien`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `type_praticien` (
  `tCode` varchar(2) NOT NULL,
  `tLibelle` varchar(31) DEFAULT NULL,
  `tLieu` varchar(31) DEFAULT NULL,
  PRIMARY KEY (`tCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `type_praticien`
--

LOCK TABLES `type_praticien` WRITE;
/*!40000 ALTER TABLE `type_praticien` DISABLE KEYS */;
INSERT INTO `type_praticien` VALUES ('MH','Médecin Hospitalier','Hopital ou clinique'),('MV','Médecine de Ville','Cabinet'),('PH','Pharmacien Hospitalier','Hopital ou clinique'),('PO','Pharmacien Officine','Pharmacie'),('PS','Personnel de santé','Centre paramédical');
/*!40000 ALTER TABLE `type_praticien` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `typeParametre`
--

DROP TABLE IF EXISTS `typeParametre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `typeParametre` (
  `tlId` varchar(7) NOT NULL,
  `tlLibelle` varchar(70) DEFAULT NULL,
  `tlBooleen` tinyint(1) DEFAULT NULL,
  `tlChoixMultiple` tinyint(1) DEFAULT NULL,
  `tlCumul` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`tlId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `typeParametre`
--

LOCK TABLES `typeParametre` WRITE;
/*!40000 ALTER TABLE `typeParametre` DISABLE KEYS */;
INSERT INTO `typeParametre` VALUES ('catProf','Catégorie Socioprofessionnelle',1,1,1),('emploi','emploi',0,1,1),('etudes','formation complémentaire',0,1,1),('MotifVi','Motif des visites',0,0,1),('regFisc','régime fiscal',1,1,1),('region','région',1,1,1),('secteur','secteur géographique',1,1,1),('sexe','sexe',1,1,1),('sitFami','situation de famille',0,1,1),('staEmpl','Statut sur le marché de l\'emploi',0,1,1),('statJur','statut juridique',0,1,1),('statUti','Statut de l\'utilisateur',1,1,1);
/*!40000 ALTER TABLE `typeParametre` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `utilisateur`
--

DROP TABLE IF EXISTS `utilisateur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `utilisateur` (
  `uId` varchar(4) NOT NULL,
  `uNom` varchar(25) DEFAULT NULL,
  `uPrenom` varchar(25) DEFAULT NULL,
  `uLogin` varchar(12) DEFAULT NULL,
  `uMdp` varchar(125) NOT NULL,
  `uAdresse` varchar(50) DEFAULT NULL,
  `uCP` varchar(5) DEFAULT NULL,
  `uVille` varchar(32) DEFAULT NULL,
  `uDateEmbauche` datetime DEFAULT NULL,
  `uSecteur` smallint DEFAULT NULL,
  `uLabo` varchar(2) NOT NULL,
  `uStatut` smallint DEFAULT NULL,
  `uRegion` smallint DEFAULT NULL,
  `uDateEnreg` datetime NOT NULL,
  `uDateModif` datetime NOT NULL,
  PRIMARY KEY (`uId`),
  KEY `uLabo` (`uLabo`),
  KEY `uSecteur` (`uSecteur`),
  CONSTRAINT `utilisateur_ibfk_1` FOREIGN KEY (`uLabo`) REFERENCES `labo` (`lCode`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `utilisateur`
--

LOCK TABLES `utilisateur` WRITE;
/*!40000 ALTER TABLE `utilisateur` DISABLE KEYS */;
INSERT INTO `utilisateur` VALUES ('a131','Villechalane','Louis','vl','vl','8 cours Lafontaine','29000','BREST','1992-12-11 00:00:00',5,'SW',1,53,'1992-12-11 00:00:00','2024-12-18 19:25:25'),('a17','Andre','David','ad','$2y$12$YRMZY61ATrnOl.smVnNHUeWlxPqTEitpV50QTT9JNlPrbPU5WzN.e','1 rue Aimon de Chissée','38100','GRENOBLE','1991-08-26 00:00:00',3,'GY',1,84,'1991-08-26 00:00:00','2024-12-11 01:44:08'),('a55','Bedos','Christian','bc','bc','1 rue Bénédictins','65000','TARBES','1987-07-17 00:00:00',4,'GY',1,76,'1987-07-17 00:00:00','1987-07-17 00:00:00'),('a93','Tusseau','Louis','tl','tl','22 rue Renou','86000','POITIERS','1999-01-02 00:00:00',4,'SW',1,75,'1999-01-02 00:00:00','1999-01-02 00:00:00'),('b13','Bentot','Aline','ba','ba','11 av 6 Juin','67000','STRASBOURG','1996-03-11 00:00:00',3,'GY',1,44,'1996-03-11 00:00:00','1996-03-11 00:00:00'),('b16','Bioret','Luc','bl','bl','1 rue Line Renaud','35000','RENNES','1997-03-21 00:00:00',5,'SW',1,53,'1997-03-21 00:00:00','1997-03-21 00:00:00'),('b19','Bunisset','Francis','bf','bf','10 rue Nicolas Chorier','85000','LA ROCHE SUR YON','1999-01-31 00:00:00',5,'GY',1,52,'1999-01-31 00:00:00','1999-01-31 00:00:00'),('b25','Bunisset','Denise','bd','bd','1 rue de la Lionne','49100','ANGERS','1994-07-03 00:00:00',5,'SW',1,52,'1994-07-03 00:00:00','1994-07-03 00:00:00'),('b28','Cacheux','Bernard','cb','cb','114 rue Authie','34000','MONTPELLIER','2000-08-02 00:00:00',4,'GY',1,76,'2000-08-02 00:00:00','2000-08-02 00:00:00'),('b34','Cadic','Eric','ce','ce','123 rue Caponière','41000','BLOIS','1993-12-06 00:00:00',1,'SW',1,24,'1993-12-06 00:00:00','1993-12-06 00:00:00'),('b4','Charoze','Lucile','cl','cl','100 pl Géants','33000','BORDEAUX','1997-09-25 00:00:00',4,'SW',1,75,'1997-09-25 00:00:00','1997-09-25 00:00:00'),('b50','Clepkens','Christophe','cc','cc','12 rue Fédérico Garcia Lorca','13000','MARSEILLE','1998-01-18 00:00:00',4,'SW',1,93,'1998-01-18 00:00:00','1998-01-18 00:00:00'),('b59','Cottin','Vincenne','cv','cv','36 sq Capucins','5000','GAP','1995-10-21 00:00:00',4,'GY',1,93,'1995-10-21 00:00:00','1995-10-21 00:00:00'),('bp','Blain','Pascal','bp','bp','Rue du Mortier','39290','MENOTEY','2012-12-12 00:00:00',3,'SW',0,27,'2012-12-12 00:00:00','2012-12-12 00:00:00'),('c14','Daburon','Louis','dl','dl','13 rue Champs Elysées','6000','NICE','1989-02-01 00:00:00',4,'SW',1,93,'1989-02-01 00:00:00','1989-02-01 00:00:00'),('c3','De','Philippe','dp','dp','13 rue Charles Peguy','10000','TROYES','1992-05-05 00:00:00',3,'SW',1,44,'1992-05-05 00:00:00','1992-05-05 00:00:00'),('c54','Debelle','Michel','dm','dm','181 rue Caponière','88000','EPINAL','1991-04-09 00:00:00',3,'SW',1,44,'1991-04-09 00:00:00','1991-04-09 00:00:00'),('d13','Debelle','Jeanne','dj','dj','134 rue Stalingrad','44000','NANTES','1991-12-05 00:00:00',5,'SW',1,52,'1991-12-05 00:00:00','1991-12-05 00:00:00'),('d51','Debroise','Odon','do','do','2 av 6 Juin','70000','VESOUL','1997-11-18 00:00:00',3,'GY',1,27,'1997-11-18 00:00:00','1997-11-18 00:00:00'),('e22','Desmarquest','Nathalie','dn','dn','14 rue Fédérico Garcia Lorca','54000','NANCY','1989-03-24 00:00:00',3,'GY',1,44,'1989-03-24 00:00:00','1989-03-24 00:00:00'),('e24','Desnost','Robert','dr','dr','16 rue Barral de Montferrat','55000','VERDUN','1993-05-17 00:00:00',3,'SW',1,44,'1993-05-17 00:00:00','1993-05-17 00:00:00'),('e39','Dudouit','Frédéric','df','df','18 quai Xavier Jouvin','75000','PARIS','1988-04-26 00:00:00',1,'GY',1,11,'1988-04-26 00:00:00','1988-04-26 00:00:00'),('e49','Duncombe','Claude','dc','dc','19 av Alsace Lorraine','9000','FOIX','1996-02-19 00:00:00',4,'GY',1,76,'1996-02-19 00:00:00','1996-02-19 00:00:00'),('e5','Enault-Pascreau','Céline','ec','ec','25B rue Stalingrad','40000','MONT DE MARSAN','1990-11-27 00:00:00',4,'GY',1,75,'1990-11-27 00:00:00','1990-11-27 00:00:00'),('e52','Eynde','Valérie','ev','ev','3 rue Henri Moissan','76000','ROUEN','1991-10-31 00:00:00',5,'GY',1,28,'1991-10-31 00:00:00','1991-10-31 00:00:00'),('f21','Finck','Jacques','fj','fj','rte Montreuil Bellay','74000','ANNECY','1993-06-08 00:00:00',3,'SW',1,84,'1993-06-08 00:00:00','1993-06-08 00:00:00'),('f39','Frémont','Fernande','ff','ff','4 rue Jean Giono','69000','LYON','1997-02-15 00:00:00',3,'GY',1,84,'1997-02-15 00:00:00','1997-02-15 00:00:00'),('f4','Gest','Alain','ga','ga','30 rue Authie','46000','FIGEAC','1994-05-03 00:00:00',4,'GY',1,76,'1994-05-03 00:00:00','1994-05-03 00:00:00'),('g19','Gheysen','Galassus','gg','gg','32 bd Mar Foch','75000','PARIS','1996-01-18 00:00:00',1,'SW',1,11,'1996-01-18 00:00:00','1996-01-18 00:00:00'),('g30','Girard','Yvon','gy','gy','31 av 6 Juin','80000','AMIENS','1999-03-27 00:00:00',2,'GY',1,32,'1999-03-27 00:00:00','1999-03-27 00:00:00'),('g53','Gombert','Luc','gl','gl','32 rue Emile Gueymard','56000','VANNES','1985-10-02 00:00:00',5,'GY',1,53,'1985-10-02 00:00:00','1985-10-02 00:00:00'),('g7','Guindon','Caroline','gc','gc','40 rue Mar Montgomery','87000','LIMOGES','1996-01-13 00:00:00',4,'GY',1,75,'1996-01-13 00:00:00','1996-01-13 00:00:00'),('h13','Guindon','François','gf','gf','44 rue Picotière','19000','TULLE','1993-05-08 00:00:00',4,'SW',1,75,'1993-05-08 00:00:00','1993-05-08 00:00:00'),('h30','Igigabel','Guy','ig','ig','33 gal Arlequin','94000','CRETEIL','1998-04-26 00:00:00',1,'SW',1,11,'1998-04-26 00:00:00','1998-04-26 00:00:00'),('h35','Jourdren','Jacques','jj','jj','34 av Jean Perrot','15000','AURRILLAC','1993-08-26 00:00:00',3,'GY',1,84,'1993-08-26 00:00:00','1993-08-26 00:00:00'),('h40','Juttard','Pierre-Raoul','jp','jp','34 cours Jean Jaurès','8000','SEDAN','1992-11-01 00:00:00',3,'GY',1,44,'1992-11-01 00:00:00','1992-11-01 00:00:00'),('j45','Labouré-Morel','Imane','li','li','38 cours Berriat','52000','CHAUMONT','1998-02-25 00:00:00',3,'SW',1,44,'1998-02-25 00:00:00','1998-02-25 00:00:00'),('j50','Landré','Philippe','lp','lp','4 av Gén Laperrine','59000','LILLE','1992-12-16 00:00:00',2,'GY',1,32,'1992-12-16 00:00:00','1992-12-16 00:00:00'),('j8','Langeard','Hugues','lh','lh','39 av Jean Perrot','93000','BAGNOLET','1998-06-18 00:00:00',1,'GY',1,11,'1998-06-18 00:00:00','1998-06-18 00:00:00'),('k4','Lanne','Bernard','lb','lb','4 rue Bayeux','30000','NIMES','1996-11-21 00:00:00',4,'SW',1,76,'1996-11-21 00:00:00','1996-11-21 00:00:00'),('k53','Le','Noël','ln','ln','4 av Beauvert','68000','MULHOUSE','1983-03-23 00:00:00',3,'SW',1,44,'1983-03-23 00:00:00','1983-03-23 00:00:00'),('l14','Le','Rémi','lr','lr','39 rue Raspail','53000','LAVAL','1995-02-02 00:00:00',5,'SW',1,52,'1995-02-02 00:00:00','1995-02-02 00:00:00'),('l23','Leclercq','Toinette','lt','lt','11 rue Quinconce','18000','BOURGES','1995-06-05 00:00:00',1,'SW',1,24,'1995-06-05 00:00:00','1995-06-05 00:00:00'),('l46','Lecornu','Jean-Bernard','lj','lj','4 bd Mar Foch','72000','LA FERTE BERNARD','1997-01-24 00:00:00',5,'GY',1,52,'1997-01-24 00:00:00','1997-01-24 00:00:00'),('l56','Lecornu','Ludovic','ll','ll','4 rue Abel Servien','25000','BESANCON','1996-02-27 00:00:00',3,'SW',1,27,'1996-02-27 00:00:00','1996-02-27 00:00:00'),('m35','Lejard','Agnès','la','la','4 rue Anthoard','82000','MONTAUBAN','1987-10-06 00:00:00',4,'SW',1,76,'1987-10-06 00:00:00','1987-10-06 00:00:00'),('m45','Lesaulnier','Charlotte','lc','lc','47 rue Thiers','57000','METZ','1990-10-13 00:00:00',3,'SW',1,44,'1990-10-13 00:00:00','1990-10-13 00:00:00'),('n42','Letessier','Stéphane','ls','ls','5 chem Capuche','27000','EVREUX','1996-03-06 00:00:00',5,'GY',1,28,'1996-03-06 00:00:00','1996-03-06 00:00:00'),('n58','Loirat','Didier','ld','ld','Les Pêchers cité Bourg la Croix','45000','ORLEANS','1992-08-30 00:00:00',1,'GY',1,24,'1992-08-30 00:00:00','1992-08-30 00:00:00'),('n59','Maffezzoli','Thibaud','mt','mt','5 rue Chateaubriand','2000','LAON','1994-12-19 00:00:00',2,'SW',1,32,'1994-12-19 00:00:00','1994-12-19 00:00:00'),('o26','Mancini','Anne','ma','ma','5 rue D’Agier','48000','MENDE','1995-01-05 00:00:00',4,'GY',1,76,'1995-01-05 00:00:00','1995-01-05 00:00:00'),('p32','Marcouiller','Gérard','mg','mg','7 pl St Gilles','91000','ISSY LES MOULINEAUX','1992-12-24 00:00:00',1,'GY',1,11,'1992-12-24 00:00:00','1992-12-24 00:00:00'),('p40','Michel','Jean-Claude','mj','mj','5 rue Gabriel Péri','61000','FLERS','1992-12-14 00:00:00',5,'SW',1,28,'1992-12-14 00:00:00','1992-12-14 00:00:00'),('p41','Montecot','Françoise','mf','mf','6 rue Paul Valéry','17000','SAINTES','1998-07-27 00:00:00',4,'GY',1,75,'1998-07-27 00:00:00','1998-07-27 00:00:00'),('p42','Notini','Veronique','nv','nv','5 rue Lieut Chabal','60000','BEAUVAIS','1994-12-12 00:00:00',2,'SW',1,32,'1994-12-12 00:00:00','1994-12-12 00:00:00'),('p49','Onfroy','Den','od','od','5 rue Sidonie Jacolin','37000','TOURS','1977-10-03 00:00:00',1,'GY',1,24,'1977-10-03 00:00:00','1977-10-03 00:00:00'),('p6','Pascreau','Bernard','pb','pb','57 bd Mar Foch','64000','PAU','1997-03-30 00:00:00',4,'SW',1,75,'1997-03-30 00:00:00','1997-03-30 00:00:00'),('p7','Pernot','Claude-Noël','pc','pc','6 rue Alexandre 1 de Yougoslavie','11000','NARBONNE','1990-03-01 00:00:00',4,'SW',1,76,'1990-03-01 00:00:00','1990-03-01 00:00:00'),('p8','Perrier','Maître','pm','pm','6 rue Aubert Dubayet','71000','CHALON SUR SAONE','1991-06-23 00:00:00',3,'GY',1,27,'1991-06-23 00:00:00','1991-06-23 00:00:00'),('q17','Petit','Jean-Louis','pj','pj','7 rue Ernest Renan','50000','SAINT LO','1997-09-06 00:00:00',5,'GY',1,28,'1997-09-06 00:00:00','1997-09-06 00:00:00'),('r24','Piquery','Patrick','pp','pp','9 rue Vaucelles','14000','CAEN','1984-07-29 00:00:00',5,'GY',1,28,'1984-07-29 00:00:00','1984-07-29 00:00:00'),('r58','Quiquandon','Joël','qj','qj','7 rue Ernest Renan','29000','QUIMPER','1990-06-30 00:00:00',5,'GY',1,53,'1990-06-30 00:00:00','1990-06-30 00:00:00'),('s10','Retailleau','Josselin','rj','rj','88Bis rue Saumuroise','39000','DOLE','1995-11-14 00:00:00',3,'SW',1,27,'1995-11-14 00:00:00','1995-11-14 00:00:00'),('s21','Retailleau','Pascal','rp','rp','32 bd Ayrault','23000','MONTLUCON','1992-09-25 00:00:00',4,'SW',1,75,'1992-09-25 00:00:00','1992-09-25 00:00:00'),('t43','Souron','Maryse','sm','sm','7B rue Gay Lussac','21000','DIJON','1995-03-09 00:00:00',3,'SW',1,27,'1995-03-09 00:00:00','1995-03-09 00:00:00'),('t47','Tiphagne','Patrick','tp','tp','7B rue Gay Lussac','62000','ARRAS','1997-08-29 00:00:00',2,'SW',1,32,'1997-08-29 00:00:00','1997-08-29 00:00:00'),('t55','Tréhet','Alain','ta','ta','7D chem Barral','12000','RODEZ','1994-11-29 00:00:00',4,'SW',1,76,'1994-11-29 00:00:00','1994-11-29 00:00:00'),('t60','Tusseau','Josselin','tj','tj','63 rue Bon Repos','28000','CHARTRES','1991-03-29 00:00:00',1,'GY',1,24,'1991-03-29 00:00:00','1991-03-29 00:00:00');
/*!40000 ALTER TABLE `utilisateur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `visite`
--

DROP TABLE IF EXISTS `visite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `visite` (
  `uId` varchar(4) NOT NULL,
  `vNum` smallint NOT NULL,
  `pNum` int NOT NULL,
  `vDate` datetime DEFAULT NULL,
  `vRapport` varchar(255) DEFAULT NULL,
  `vMotif` varchar(255) DEFAULT NULL,
  `Medicament1` varchar(255) DEFAULT NULL,
  `Medicament2` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`uId`,`vNum`),
  KEY `pNum` (`pNum`),
  KEY `FK_M` (`Medicament1`),
  KEY `FK_M2` (`Medicament2`),
  CONSTRAINT `FK_M` FOREIGN KEY (`Medicament1`) REFERENCES `medicament` (`mDepotLegal`),
  CONSTRAINT `FK_M2` FOREIGN KEY (`Medicament2`) REFERENCES `medicament` (`mDepotLegal`),
  CONSTRAINT `visite_ibfk_1` FOREIGN KEY (`pNum`) REFERENCES `praticien` (`pNum`) ON UPDATE CASCADE,
  CONSTRAINT `visite_ibfk_2` FOREIGN KEY (`uId`) REFERENCES `utilisateur` (`uId`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `visite`
--

LOCK TABLES `visite` WRITE;
/*!40000 ALTER TABLE `visite` DISABLE KEYS */;
INSERT INTO `visite` VALUES ('a131',1,22,'2020-02-15 00:00:00','RAS.','2',NULL,NULL),('a131',2,22,'2020-04-10 00:00:00','à recontacter pour réunion','2',NULL,NULL),('a131',3,41,'2020-04-10 00:00:00','RAS. Changement de tel : 05 89 89 89 89','1',NULL,NULL),('a131',4,23,'2020-04-10 00:00:00','Médecin curieux, à recontacter en décembre pour réunion','2',NULL,NULL),('a17',1,37,'2020-02-03 00:00:00','à recontacter pour réunion','2',NULL,NULL),('a17',2,83,'2020-02-21 00:00:00','à recontacter pour réunion','2',NULL,NULL),('a17',3,37,'2020-02-24 00:00:00','RAS.','2',NULL,NULL),('a17',4,82,'2020-03-04 00:00:00','RAS.','2',NULL,NULL),('a17',5,83,'2020-03-20 00:00:00','RAS.','2',NULL,NULL),('a17',6,82,'2020-03-25 00:00:00','RAS.','2',NULL,NULL),('a17',7,4,'2020-03-21 00:00:00','Changement de direction, redéfinition de la politique médicamenteuse, recours au générique','4',NULL,NULL),('a55',1,9,'2020-01-03 00:00:00','RAS.','2',NULL,NULL),('a55',2,67,'2020-01-03 00:00:00','RAS.','2',NULL,NULL),('a55',3,9,'2020-01-12 00:00:00','RAS.','2',NULL,NULL),('a55',4,72,'2020-02-18 00:00:00','RAS.','2',NULL,NULL),('a55',5,72,'2020-03-02 00:00:00','RAS.','2',NULL,NULL),('a55',6,67,'2020-03-08 00:00:00','à recontacter pour réunion','2',NULL,NULL),('a93',1,25,'2020-01-28 00:00:00','à recontacter pour réunion','2',NULL,NULL),('a93',2,26,'2020-02-05 00:00:00','RAS.','2',NULL,NULL),('a93',3,26,'2020-02-11 00:00:00','RAS.','2',NULL,NULL),('a93',4,47,'2020-02-15 00:00:00','RAS.','2',NULL,NULL),('a93',5,47,'2020-03-08 00:00:00','RAS.','2',NULL,NULL),('a93',6,25,'2020-03-10 00:00:00','à recontacter pour réunion','2',NULL,NULL),('b13',1,8,'2020-01-16 00:00:00','RAS.','2',NULL,NULL),('b13',2,8,'2020-02-21 00:00:00','RAS.','2',NULL,NULL),('b13',3,75,'2020-02-29 00:00:00','RAS.','2',NULL,NULL),('b13',4,75,'2020-04-02 00:00:00','RAS.','2',NULL,NULL),('b16',1,23,'2020-01-13 00:00:00','RAS.','2',NULL,NULL),('b16',2,23,'2020-01-13 00:00:00','RAS.','2',NULL,NULL),('b16',3,7,'2020-02-10 00:00:00','RAS.','2',NULL,NULL),('b16',4,18,'2020-02-28 00:00:00','RAS.','2',NULL,NULL),('b16',5,7,'2020-04-04 00:00:00','RAS.','2',NULL,NULL),('b16',6,18,'2020-04-05 00:00:00','RAS.','2',NULL,NULL),('b19',1,52,'2020-03-20 00:00:00','RAS.','2',NULL,NULL),('b25',1,19,'2020-01-10 00:00:00','RAS.','2',NULL,NULL),('b25',2,58,'2020-01-17 00:00:00','RAS.','2',NULL,NULL),('b25',3,86,'2020-02-11 00:00:00','RAS.','2',NULL,NULL),('b25',4,58,'2020-02-18 00:00:00','RAS.','2',NULL,NULL),('b25',5,19,'2020-02-22 00:00:00','RAS.','2',NULL,NULL),('b25',6,66,'2020-03-20 00:00:00','RAS.','2',NULL,NULL),('b25',7,86,'2020-03-21 00:00:00','RAS.','2',NULL,NULL),('b25',8,1,'2020-03-22 00:00:00','RAS.','2',NULL,NULL),('b25',9,1,'2020-03-22 00:00:00','RAS.','2',NULL,NULL),('b25',10,66,'2020-04-04 00:00:00','RAS.','2',NULL,NULL),('b28',1,77,'2020-01-16 00:00:00','RAS.','2',NULL,NULL),('b28',2,64,'2020-01-22 00:00:00','RAS.','2',NULL,NULL),('b28',3,17,'2020-01-31 00:00:00','RAS.','2',NULL,NULL),('b28',4,77,'2020-02-24 00:00:00','RAS.','2',NULL,NULL),('b28',5,17,'2020-03-06 00:00:00','RAS.','2',NULL,NULL),('b28',6,64,'2020-03-19 00:00:00','à recontacter pour réunion','2',NULL,NULL),('b34',1,24,'2020-01-30 00:00:00','RAS.','2',NULL,NULL),('b34',2,40,'2020-02-27 00:00:00','à recontacter pour réunion','2',NULL,NULL),('b34',3,24,'2020-03-03 00:00:00','RAS.','2',NULL,NULL),('b34',4,40,'2020-03-10 00:00:00','RAS.','2',NULL,NULL),('b4',1,85,'2020-01-23 00:00:00','RAS.','2',NULL,NULL),('b4',2,32,'2020-02-08 00:00:00','RAS.','2',NULL,NULL),('b4',3,85,'2020-02-24 00:00:00','RAS.','2',NULL,NULL),('b4',4,32,'2020-03-07 00:00:00','RAS.','2',NULL,NULL),('b50',1,16,'2020-02-12 00:00:00','à recontacter pour réunion','2',NULL,NULL),('b50',2,16,'2020-03-19 00:00:00','RAS.','2',NULL,NULL),('b59',1,53,'2020-02-15 00:00:00','RAS.','2',NULL,NULL),('bp',1,3,'2020-01-17 00:00:00','RAS.','2',NULL,NULL),('bp',2,52,'2020-01-22 00:00:00','RAS.','2',NULL,NULL),('bp',3,30,'2020-02-08 00:00:00','RAS.','2',NULL,NULL),('bp',4,52,'2020-02-18 00:00:00','RAS.','2',NULL,NULL),('bp',5,30,'2020-02-26 00:00:00','RAS.','2',NULL,NULL),('bp',6,3,'2020-03-25 00:00:00','RAS.','2',NULL,NULL),('c14',1,74,'2020-01-08 00:00:00','RAS.','2',NULL,NULL),('c14',2,59,'2020-01-10 00:00:00','RAS.','2',NULL,NULL),('c14',3,15,'2020-02-12 00:00:00','RAS.','2',NULL,NULL),('c14',4,74,'2020-03-04 00:00:00','RAS.','2',NULL,NULL),('c14',5,15,'2020-03-19 00:00:00','RAS.','2',NULL,NULL),('c14',6,59,'2020-03-27 00:00:00','RAS.','2',NULL,NULL),('c3',1,80,'2020-01-03 00:00:00','à recontacter pour réunion','2',NULL,NULL),('c3',2,80,'2020-01-06 00:00:00','RAS.','2',NULL,NULL),('c3',3,34,'2020-01-16 00:00:00','RAS.','2',NULL,NULL),('c3',4,12,'2020-01-30 00:00:00','RAS.','2',NULL,NULL),('c3',5,11,'2020-02-06 00:00:00','à recontacter pour réunion','2',NULL,NULL),('c3',6,71,'2020-02-08 00:00:00','RAS.','2',NULL,NULL),('c3',7,34,'2020-02-20 00:00:00','à recontacter pour réunion','2',NULL,NULL),('c3',8,11,'2020-02-26 00:00:00','RAS.','2',NULL,NULL),('c3',9,12,'2020-03-05 00:00:00','RAS.','2',NULL,NULL),('c3',10,54,'2020-03-11 00:00:00','RAS.','2',NULL,NULL),('c3',11,71,'2020-03-17 00:00:00','RAS.','2',NULL,NULL),('c3',12,54,'2020-03-27 00:00:00','RAS.','2',NULL,NULL),('c54',1,48,'2020-01-17 00:00:00','RAS.','2',NULL,NULL),('c54',2,60,'2020-01-24 00:00:00','RAS.','2',NULL,NULL),('c54',3,60,'2020-02-01 00:00:00','RAS.','2',NULL,NULL),('c54',4,27,'2020-02-06 00:00:00','RAS.','2',NULL,NULL),('c54',5,48,'2020-02-16 00:00:00','RAS.','2',NULL,NULL),('c54',6,63,'2020-02-19 00:00:00','RAS.','2',NULL,NULL),('c54',7,27,'2020-03-03 00:00:00','RAS.','2',NULL,NULL),('c54',8,63,'2020-03-12 00:00:00','RAS.','2',NULL,NULL),('d13',1,21,'2020-01-16 00:00:00','RAS.','2',NULL,NULL),('d13',2,51,'2020-03-03 00:00:00','RAS.','2',NULL,NULL),('d13',3,21,'2020-03-09 00:00:00','RAS.','2',NULL,NULL),('d13',4,51,'2020-03-14 00:00:00','RAS.','2',NULL,NULL),('d51',1,39,'2020-01-05 00:00:00','à recontacter pour réunion','2',NULL,NULL),('d51',2,39,'2020-01-22 00:00:00','RAS.','2',NULL,NULL),('e22',1,54,'2020-02-21 00:00:00','RAS.','2',NULL,NULL),('e24',1,55,'2020-02-02 00:00:00','RAS.','2',NULL,NULL),('e39',1,57,'2020-01-02 00:00:00','Médecin curieux, à recontacter pour réunion','2',NULL,NULL),('e39',2,53,'2020-01-06 00:00:00','RAS.','2',NULL,NULL),('e39',3,57,'2020-02-23 00:00:00','RAS.','2',NULL,NULL),('e39',4,53,'2020-02-28 00:00:00','RAS.','2',NULL,NULL),('e49',1,68,'2020-01-04 00:00:00','RAS.','2',NULL,NULL),('e49',2,5,'2020-01-10 00:00:00','RAS.','2',NULL,NULL),('e49',3,65,'2020-01-12 00:00:00','RAS.','2',NULL,NULL),('e49',4,84,'2020-01-18 00:00:00','RAS.','2',NULL,NULL),('e49',5,65,'2020-01-18 00:00:00','RAS.','2',NULL,NULL),('e49',6,84,'2020-01-25 00:00:00','RAS.','2',NULL,NULL),('e49',7,73,'2020-01-27 00:00:00','RAS.','2',NULL,NULL),('e49',8,5,'2020-02-02 00:00:00','RAS.','2',NULL,NULL),('e49',9,73,'2020-03-08 00:00:00','RAS.','2',NULL,NULL),('e49',10,68,'2020-03-22 00:00:00','RAS.','2',NULL,NULL),('e5',1,70,'2020-01-05 00:00:00','RAS.','2',NULL,NULL),('e5',2,45,'2020-01-14 00:00:00','RAS.','2',NULL,NULL),('e5',3,33,'2020-01-16 00:00:00','RAS.','2',NULL,NULL),('e5',4,20,'2020-01-17 00:00:00','RAS.','2',NULL,NULL),('e5',5,70,'2020-01-22 00:00:00','RAS.','2',NULL,NULL),('e5',6,69,'2020-01-25 00:00:00','à recontacter pour réunion','2',NULL,NULL),('e5',7,33,'2020-01-30 00:00:00','RAS.','2',NULL,NULL),('e5',8,69,'2020-02-06 00:00:00','RAS.','2',NULL,NULL),('e5',9,45,'2020-02-18 00:00:00','RAS.','2',NULL,NULL),('e5',10,20,'2020-02-22 00:00:00','RAS.','2',NULL,NULL),('e5',11,55,'2020-02-29 00:00:00','RAS.','2',NULL,NULL),('e5',12,55,'2020-03-18 00:00:00','RAS.','2',NULL,NULL),('e52',1,36,'2020-01-26 00:00:00','RAS.','2',NULL,NULL),('e52',2,78,'2020-02-01 00:00:00','RAS.','2',NULL,NULL),('e52',3,36,'2020-02-10 00:00:00','RAS.','2',NULL,NULL),('e52',4,78,'2020-02-21 00:00:00','RAS.','2',NULL,NULL),('f21',1,81,'2020-01-10 00:00:00','RAS.','2',NULL,NULL),('f21',2,81,'2020-02-11 00:00:00','RAS.','2',NULL,NULL),('f39',1,62,'2020-02-13 00:00:00','RAS.','2',NULL,NULL),('f39',2,38,'2020-02-18 00:00:00','RAS.','2',NULL,NULL),('f39',3,56,'2020-03-05 00:00:00','RAS.','2',NULL,NULL),('f39',4,38,'2020-03-20 00:00:00','RAS.','2',NULL,NULL),('f39',5,56,'2020-03-25 00:00:00','RAS.','2',NULL,NULL),('f39',6,62,'2020-04-01 00:00:00','RAS.','2',NULL,NULL),('f4',1,56,'2020-04-08 00:00:00','RAS.','2',NULL,NULL),('g19',1,31,'2020-01-24 00:00:00','RAS.','2',NULL,NULL),('g19',2,46,'2020-02-10 00:00:00','RAS.','2',NULL,NULL),('g19',3,46,'2020-02-16 00:00:00','RAS.','2',NULL,NULL),('g19',4,31,'2020-02-27 00:00:00','RAS.','2',NULL,NULL),('g30',1,4,'2020-01-28 00:00:00','RAS.','2',NULL,NULL),('g30',2,79,'2020-02-15 00:00:00','à recontacter pour réunion','2',NULL,NULL),('g30',3,79,'2020-04-05 00:00:00','RAS.','2',NULL,NULL),('g30',4,4,'2020-04-07 00:00:00','RAS.','2',NULL,NULL),('g53',1,44,'2020-01-19 00:00:00','RAS.','2',NULL,NULL),('g53',2,28,'2020-02-02 00:00:00','RAS.','2',NULL,NULL),('g53',3,28,'2020-02-19 00:00:00','RAS.','2',NULL,NULL),('g53',4,44,'2020-03-11 00:00:00','RAS.','2',NULL,NULL),('g7',1,57,'2020-02-02 00:00:00','RAS.','2',NULL,NULL),('h13',1,58,'2020-04-01 00:00:00','RAS.','2',NULL,NULL),('h30',1,13,'2020-02-25 00:00:00','RAS.','2',NULL,NULL),('h30',2,13,'2020-03-25 00:00:00','RAS.','2',NULL,NULL),('h35',1,59,'2020-03-11 00:00:00','RAS.','2',NULL,NULL),('h40',1,60,'2020-02-13 00:00:00','RAS.','2',NULL,NULL),('j45',1,61,'2020-02-25 00:00:00','RAS.','2',NULL,NULL),('j50',1,10,'2020-01-11 00:00:00','à recontacter pour réunion','2',NULL,NULL),('j50',2,10,'2020-01-11 00:00:00','RAS.','2',NULL,NULL),('j8',1,62,'2020-04-04 00:00:00','RAS.','2',NULL,NULL),('k4',1,63,'2020-03-14 00:00:00','RAS.','2',NULL,NULL),('k53',1,64,'2020-03-02 00:00:00','RAS.','2',NULL,NULL),('l14',1,65,'2020-02-11 00:00:00','RAS.','2',NULL,NULL),('l23',1,2,'2020-01-13 00:00:00','RAS.','2',NULL,NULL),('l23',2,61,'2020-01-20 00:00:00','RAS.','2',NULL,NULL),('l23',3,14,'2020-02-19 00:00:00','RAS.','2',NULL,NULL),('l23',4,14,'2020-03-11 00:00:00','RAS.','2',NULL,NULL),('l23',5,61,'2020-03-15 00:00:00','RAS.','2',NULL,NULL),('l23',6,2,'2020-04-02 00:00:00','RAS.','2',NULL,NULL),('l46',1,66,'2020-03-06 00:00:00','RAS.','2',NULL,NULL),('l56',1,49,'2020-01-15 00:00:00','RAS.','2',NULL,NULL),('l56',2,29,'2020-01-20 00:00:00','RAS.','2',NULL,NULL),('l56',3,29,'2020-02-15 00:00:00','RAS.','2',NULL,NULL),('l56',4,49,'2020-03-15 00:00:00','RAS.','2',NULL,NULL),('m35',1,67,'2020-03-14 00:00:00','RAS.','2',NULL,NULL),('m45',1,68,'2020-04-03 00:00:00','RAS.','2',NULL,NULL),('n42',1,76,'2020-02-02 00:00:00','RAS.','2',NULL,NULL),('n42',2,76,'2020-02-20 00:00:00','RAS.','2',NULL,NULL),('n58',1,43,'2020-01-08 00:00:00','RAS.','2',NULL,NULL),('n58',2,43,'2020-03-17 00:00:00','à recontacter pour réunion','2',NULL,NULL),('n59',1,35,'2020-01-17 00:00:00','à recontacter pour réunion','2',NULL,NULL),('n59',2,6,'2020-01-19 00:00:00','RAS.','2',NULL,NULL),('n59',3,6,'2020-01-31 00:00:00','RAS.','2',NULL,NULL),('n59',4,41,'2020-02-05 00:00:00','RAS.','2',NULL,NULL),('n59',5,41,'2020-03-18 00:00:00','RAS.','2',NULL,NULL),('n59',6,35,'2020-04-09 00:00:00','RAS.','2',NULL,NULL),('o26',1,69,'2020-01-08 00:00:00','RAS.','2',NULL,NULL),('p32',1,70,'2020-03-27 00:00:00','RAS.','2',NULL,NULL),('p40',1,42,'2020-01-04 00:00:00','RAS.','2',NULL,NULL),('p40',2,50,'2020-01-15 00:00:00','à recontacter pour réunion','2',NULL,NULL),('p40',3,42,'2020-01-19 00:00:00','RAS.','2',NULL,NULL),('p40',4,50,'2020-02-12 00:00:00','RAS.','2',NULL,NULL),('p41',1,71,'2020-02-01 00:00:00','RAS.','2',NULL,NULL),('p42',1,72,'2020-03-11 00:00:00','RAS.','2',NULL,NULL),('p49',1,73,'2020-02-17 00:00:00','RAS.','2',NULL,NULL),('p6',1,74,'2020-01-02 00:00:00','à recontacter pour réunion','2',NULL,NULL),('p7',1,75,'2020-03-30 00:00:00','RAS.','2',NULL,NULL),('p8',1,76,'2020-03-12 00:00:00','RAS.','2',NULL,NULL),('q17',1,77,'2020-02-24 00:00:00','RAS.','2',NULL,NULL),('r24',1,78,'2020-01-08 00:00:00','RAS.','2',NULL,NULL),('r58',1,79,'2020-01-18 00:00:00','RAS.','2',NULL,NULL),('s10',1,80,'2020-03-21 00:00:00','RAS.','2',NULL,NULL),('s21',1,81,'2020-01-12 00:00:00','RAS.','2',NULL,NULL),('t43',1,82,'2020-01-06 00:00:00','RAS.','2',NULL,NULL),('t47',1,83,'2020-02-27 00:00:00','RAS.','2',NULL,NULL),('t55',1,84,'2020-02-07 00:00:00','RAS.','2',NULL,NULL),('t60',1,85,'2020-03-07 00:00:00','RAS.','2',NULL,NULL);
/*!40000 ALTER TABLE `visite` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2025-01-31  2:04:03
