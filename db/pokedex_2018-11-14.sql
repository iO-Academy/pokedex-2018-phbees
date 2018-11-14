# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.41)
# Database: pokedex
# Generation Time: 2018-11-14 13:54:04 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table pokemon
# ------------------------------------------------------------

DROP TABLE IF EXISTS `pokemon`;

CREATE TABLE `pokemon` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `pokemon_name` varchar(250) NOT NULL DEFAULT '',
  `pokemon_type` varchar(250) DEFAULT NULL,
  `pokemon_type_2` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `pokemon` WRITE;
/*!40000 ALTER TABLE `pokemon` DISABLE KEYS */;

INSERT INTO `pokemon` (`id`, `pokemon_name`, `pokemon_type`, `pokemon_type_2`)
VALUES
	(1,'bulbasaur','poison','grass'),
	(2,'ivysaur','poison','grass'),
	(3,'venusaur','poison','grass'),
	(4,'charmander','fire',NULL),
	(5,'charmeleon','fire',NULL),
	(6,'charizard','flying','fire'),
	(7,'squirtle','water',NULL),
	(8,'wartortle','water',NULL),
	(9,'blastoise','water',NULL),
	(10,'caterpie','bug',NULL),
	(11,'metapod','bug',NULL),
	(12,'butterfree','flying','bug'),
	(13,'weedle','poison','bug'),
	(14,'kakuna','poison','bug'),
	(15,'beedrill','poison','bug'),
	(16,'pidgey','flying','normal'),
	(17,'pidgeotto','flying','normal'),
	(18,'pidgeot','flying','normal'),
	(19,'rattata','normal',NULL),
	(20,'raticate','normal',NULL),
	(21,'spearow','flying','normal'),
	(22,'fearow','flying','normal'),
	(23,'ekans','poison',NULL),
	(24,'arbok','poison',NULL),
	(25,'pikachu','electric',NULL),
	(26,'raichu','electric',NULL),
	(27,'sandshrew','ground',NULL),
	(28,'sandslash','ground',NULL),
	(29,'nidoran-f','poison',NULL),
	(30,'nidorina','poison',NULL),
	(31,'nidoqueen','ground','poison'),
	(32,'nidoran-m','poison',NULL),
	(33,'nidorino','poison',NULL),
	(34,'nidoking','ground','poison'),
	(35,'clefairy','fairy',NULL),
	(36,'clefable','fairy',NULL),
	(37,'vulpix','fire',NULL),
	(38,'ninetales','fire',NULL),
	(39,'jigglypuff','fairy','normal'),
	(40,'wigglytuff','fairy','normal'),
	(41,'zubat','flying','poison'),
	(42,'golbat','flying','poison'),
	(43,'oddish','poison','grass'),
	(44,'gloom','poison','grass'),
	(45,'vileplume','poison','grass'),
	(46,'paras','grass','bug'),
	(47,'parasect','grass','bug'),
	(48,'venonat','poison','bug'),
	(49,'venomoth','poison','bug'),
	(50,'diglett','ground',NULL),
	(51,'dugtrio','ground',NULL),
	(52,'meowth','normal',NULL),
	(53,'persian','normal',NULL),
	(54,'psyduck','water',NULL),
	(55,'golduck','water',NULL),
	(56,'mankey','fighting',NULL),
	(57,'primeape','fighting',NULL),
	(58,'growlithe','fire',NULL),
	(59,'arcanine','fire',NULL),
	(60,'poliwag','water',NULL),
	(61,'poliwhirl','water',NULL),
	(62,'poliwrath','fighting','water'),
	(63,'abra','psychic',NULL),
	(64,'kadabra','psychic',NULL),
	(65,'alakazam','psychic',NULL),
	(66,'machop','fighting',NULL),
	(67,'machoke','fighting',NULL),
	(68,'machamp','fighting',NULL),
	(69,'bellsprout','poison','grass'),
	(70,'weepinbell','poison','grass'),
	(71,'victreebel','poison','grass'),
	(72,'tentacool','poison','water'),
	(73,'tentacruel','poison','water'),
	(74,'geodude','ground','rock'),
	(75,'graveler','ground','rock'),
	(76,'golem','ground','rock'),
	(77,'ponyta','fire',NULL),
	(78,'rapidash','fire',NULL),
	(79,'slowpoke','psychic','water'),
	(80,'slowbro','psychic','water'),
	(81,'magnemite','steel','electric'),
	(82,'magneton','steel','electric'),
	(83,'farfetchd','flying','normal'),
	(84,'doduo','flying','normal'),
	(85,'dodrio','flying','normal'),
	(86,'seel','water',NULL),
	(87,'dewgong','ice','water'),
	(88,'grimer','poison',NULL),
	(89,'muk','poison',NULL),
	(90,'shellder','water',NULL),
	(91,'cloyster','ice','water'),
	(92,'gastly','poison','ghost'),
	(93,'haunter','poison','ghost'),
	(94,'gengar','poison','ghost'),
	(95,'onix','ground','rock'),
	(96,'drowzee','psychic',NULL),
	(97,'hypno','psychic',NULL),
	(98,'krabby','water',NULL),
	(99,'kingler','water',NULL),
	(100,'voltorb','electric',NULL),
	(101,'electrode','electric',NULL),
	(102,'exeggcute','psychic','grass'),
	(103,'exeggutor','psychic','grass'),
	(104,'cubone','ground',NULL),
	(105,'marowak','ground',NULL),
	(106,'hitmonlee','fighting',NULL),
	(107,'hitmonchan','fighting',NULL),
	(108,'lickitung','normal',NULL),
	(109,'koffing','poison',NULL),
	(110,'weezing','poison',NULL),
	(111,'rhyhorn','rock','ground'),
	(112,'rhydon','rock','ground'),
	(113,'chansey','normal',NULL),
	(114,'tangela','grass',NULL),
	(115,'kangaskhan','normal',NULL),
	(116,'horsea','water',NULL),
	(117,'seadra','water',NULL),
	(118,'goldeen','water',NULL),
	(119,'seaking','water',NULL),
	(120,'staryu','water',NULL),
	(121,'starmie','psychic','water'),
	(122,'mr-mime','fairy','psychic'),
	(123,'scyther','flying','bug'),
	(124,'jynx','psychic','ice'),
	(125,'electabuzz','electric',NULL),
	(126,'magmar','fire',NULL),
	(127,'pinsir','bug',NULL),
	(128,'tauros','normal',NULL),
	(129,'magikarp','water',NULL),
	(130,'gyarados','flying','water'),
	(131,'lapras','ice','water'),
	(132,'ditto','normal',NULL),
	(133,'eevee','normal',NULL),
	(134,'vaporeon','water',NULL),
	(135,'jolteon','electric',NULL),
	(136,'flareon','fire',NULL),
	(137,'porygon','normal',NULL),
	(138,'omanyte','water','rock'),
	(139,'omastar','water','rock'),
	(140,'kabuto','water','rock'),
	(141,'kabutops','water','rock'),
	(142,'aerodactyl','flying','rock'),
	(143,'snorlax','normal',NULL),
	(144,'articuno','flying','ice'),
	(145,'zapdos','flying','electric'),
	(146,'moltres','flying','fire'),
	(147,'dratini','dragon',NULL),
	(148,'dragonair','dragon',NULL),
	(149,'dragonite','flying','dragon'),
	(150,'mewtwo','psychic',NULL),
	(151,'mew','psychic',NULL);

/*!40000 ALTER TABLE `pokemon` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
