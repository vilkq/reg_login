-- --------------------------------------------------------
-- Хост:                         localhost
-- Версия сервера:               8.0.15 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Дамп структуры базы данных test1
CREATE DATABASE IF NOT EXISTS `test1` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `test1`;

-- Дамп структуры для таблица test1.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned NOT NULL,
  `price` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы test1.orders: ~6 rows (приблизительно)
DELETE FROM `orders`;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` (`id`, `user_id`, `price`) VALUES
	(1, 2, 1),
	(2, 3, 2),
	(3, 7, 5),
	(4, 8, 1),
	(5, 9, 3),
	(6, 10, 0);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Дамп структуры для таблица test1.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(55) NOT NULL,
  `login` varchar(55) NOT NULL,
  `pass` varchar(55) NOT NULL,
  `name` varchar(92) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- Дамп данных таблицы test1.users: ~21 rows (приблизительно)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `email`, `login`, `pass`, `name`) VALUES
	(1, 'vilkpost@gmail.ru', '1', '1', 'Михаил Григорьев'),
	(2, 'vilkpost@gmail.com', '2', '1', 'Михаил Григорьев'),
	(3, 'gfvilkpost@gmail.ru', '3', '1', 'Михаил Григорьев'),
	(4, 'ytyyvilkpost@gmail.ru', '4', '1', 'Михаил Григорьев'),
	(5, 'hhhhvilkpost@gmail.ru', '5', '1', 'Михаил Григорьев'),
	(6, 'rvilkpost@gmail.ru', '6', '1', 'Михаил Григорьев'),
	(7, 'hghvilkpost@gmail.ru', '7', '1', 'Михаил Григорьев'),
	(8, 'vilkpost@gmail.ru', '8', '1', 'Михаил Григорьев'),
	(9, 'vilkpost@gmail.ru', '9', '1', 'Михаил Григорьев'),
	(10, '778vilkpost@gmail.ru', '10', '1', 'Михаил Григорьев'),
	(11, '7vilkpost@gmail.ru', '11', '1', 'Михаил Григорьев'),
	(12, 'ffsfsvilkpost@gmail.ru', '12', '1', 'Михаил Григорьев'),
	(13, 'vilkpost@gmail.ru', '13', '111', 'Михаил Григорьев'),
	(14, 'vilkpost@gmail.com', '14', '1', 'Михаил Григорьев'),
	(15, 'vilkpost@gmail.ru', '15', '1', 'Михаил Григорьев'),
	(16, 'vilkpost@gmail.ru', '16', '1', 'Михаил Григорьев'),
	(17, '000vilkpost@gmail.ru', '17', '1', 'Михаил Григорьев'),
	(18, '12121vilkpost@gmail.ru', '18', '1', 'Михаил Григорьев'),
	(19, 'hhvilkpost@gmail.ru', '19', '1', 'Михаил Григорьев');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
