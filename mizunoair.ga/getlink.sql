/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DROP DATABASE IF EXISTS `getlink`;
CREATE DATABASE IF NOT EXISTS `getlink` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `getlink`;

CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkid` int(11) NOT NULL,
  `file` varchar(2000) NOT NULL,
  `type` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` (`id`, `linkid`, `file`, `type`) VALUES
	(14, 19, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(13, 19, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(18, 24, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(16, 19, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(20, 27, 'https://cl.ly/0I2p0W3Z3K3c/download/NetMicrosoftx6463is.zip', 'ZIP'),
	(21, 28, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(24, 30, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(25, 30, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(26, 30, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(27, 30, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(28, 30, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(29, 31, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(30, 31, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP'),
	(31, 31, 'https://cl.ly/2z361A2R1j2s/download/Nts293901920190123.zip', 'ZIP');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(45) NOT NULL,
  `user` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` (`id`, `url`, `user`) VALUES
	(19, '5733ef6427bacca070f0416c1b1508c1', 'Framework'),
	(24, '415e64aa82668bc78d3977ad6487506e', 'NetFramework'),
	(26, '6e8c54e2b4f628ba1ce81e85b7a31924', 'sampaio'),
	(27, '87e1c978676ff1318b84ed42b731efd1', 'Notas'),
	(28, 'd9bdb68b62f09a0161ae0184c4c5fb04', 'NF'),
	(29, '297a463ade2c8082daa40cc1e63ec06b', 'sampaio'),
	(30, 'a618f65637075239c25312b21f574565', 'Faturamento'),
	(31, '38358bac3cc2848d2dfb10d268e7e252', 'FT2'),
	(32, '98e8c6a9d5acb85b4d981e21f478e791', 'FT2');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
