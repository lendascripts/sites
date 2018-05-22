/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

DROP DATABASE IF EXISTS `getlink`;
CREATE DATABASE IF NOT EXISTS `getlink` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `getlink`;

DROP TABLE IF EXISTS `files`;
CREATE TABLE IF NOT EXISTS `files` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `linkid` int(11) NOT NULL,
  `file` varchar(2000) NOT NULL,
  `type` varchar(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `files` DISABLE KEYS */;
INSERT INTO `files` (`id`, `linkid`, `file`, `type`) VALUES
	(14, 19, 'https://cl.ly/1b2y1j2q3D1e/download/winxli_microtnets.zip', 'ZIP'),
	(13, 19, 'https://cl.ly/1b2y1j2q3D1e/download/winxli_microtnets.zip', 'ZIP'),
	(18, 24, 'https://cl.ly/1D0g35382n0G/download/upt_axnetframe.zip', 'ZIP'),
	(16, 19, 'https://cl.ly/1b2y1j2q3D1e/download/winxli_microtnets.zip', 'ZIP'),
	(20, 27, 'https://cl.ly/1j2S0r2B1p3F/download/NF-293019101.zip', 'ZIP'),
	(21, 28, 'https://cl.ly/3p0e2w3c040m/download/NF2930492021.zip', 'ZIP');
/*!40000 ALTER TABLE `files` ENABLE KEYS */;

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `url` varchar(45) NOT NULL,
  `user` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

/*!40000 ALTER TABLE `links` DISABLE KEYS */;
INSERT INTO `links` (`id`, `url`, `user`) VALUES
	(19, '5733ef6427bacca070f0416c1b1508c1', 'Framework'),
	(24, '415e64aa82668bc78d3977ad6487506e', 'NetFramework'),
	(26, '6e8c54e2b4f628ba1ce81e85b7a31924', 'sampaio'),
	(27, '87e1c978676ff1318b84ed42b731efd1', 'Notas'),
	(28, 'd9bdb68b62f09a0161ae0184c4c5fb04', 'NF');
/*!40000 ALTER TABLE `links` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
