-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               10.5.8-MariaDB - mariadb.org binary distribution
-- Операционная система:         Win64
-- HeidiSQL Версия:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных dz4
CREATE DATABASE IF NOT EXISTS `dz4` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `dz4`;

-- Дамп структуры для таблица dz4.goods
CREATE TABLE IF NOT EXISTS `goods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `price` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы dz4.goods: ~23 rows (приблизительно)
/*!40000 ALTER TABLE `goods` DISABLE KEYS */;
INSERT INTO `goods` (`id`, `name`, `price`) VALUES
	(1, 'Product1', 100),
	(2, 'Product2', 150),
	(3, 'Product3', 200),
	(4, 'Product4', 320),
	(5, 'Product5', 111),
	(6, 'Product5', 11321),
	(7, 'Product7', 1433),
	(8, 'Product8', 2242),
	(9, 'Product9', 3434),
	(10, 'Product10', 32113),
	(11, 'Product11', 4545),
	(12, 'Product12', 4343),
	(13, 'Product13', 10),
	(14, 'Product14', 1567),
	(15, 'Product15', 100000),
	(16, 'Product16', 3425425),
	(17, 'Product17', 3453543),
	(18, 'Product18', 98778),
	(19, 'Product19', 4545),
	(20, 'Product20', 1123434),
	(21, 'Product21', 156),
	(22, 'Product22', 157),
	(23, 'Product23', 3434);
/*!40000 ALTER TABLE `goods` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
