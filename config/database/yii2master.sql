-- --------------------------------------------------------
-- Хост:                         127.0.0.1
-- Версия сервера:               8.0.30 - MySQL Community Server - GPL
-- Операционная система:         Win64
-- HeidiSQL Версия:              12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Дамп структуры базы данных yii2master
CREATE DATABASE IF NOT EXISTS `yii2master` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `yii2master`;

-- Дамп структуры для таблица yii2master.mytable
CREATE TABLE IF NOT EXISTS `mytable` (
  `id` mediumint unsigned NOT NULL AUTO_INCREMENT,
  `address` varchar(255) DEFAULT NULL,
  `list` varchar(255) DEFAULT NULL,
  `alphanumeric` varchar(255) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `region` varchar(50) DEFAULT NULL,
  `numberrange` mediumint DEFAULT NULL,
  `text` text,
  `postalZip` varchar(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Дамп данных таблицы yii2master.mytable: ~5 rows (приблизительно)
DELETE FROM `mytable`;
INSERT INTO `mytable` (`id`, `address`, `list`, `alphanumeric`, `currency`, `country`, `email`, `phone`, `region`, `numberrange`, `text`, `postalZip`, `name`) VALUES
	(1, '596-7884 Convallis Road', '7', 'TFH89EPP5AQ', '$60.62', 'France', 'in@outlook.net', '1-606-157-7021', 'FATA', 5, 'pulvinar arcu et pede. Nunc sed orci lobortis augue scelerisque', '224827', 'Whoopi Jefferson'),
	(2, 'Ap #380-7213 At Av.', '15', 'KVD02NNY5XN', '$59.30', 'Netherlands', 'ultricies.ornare.elit@hotmail.edu', '(290) 677-6918', 'Bình Định', 10, 'In lorem. Donec elementum, lorem ut aliquam iaculis, lacus pede', '30517', 'Micah Prince'),
	(3, '363-1825 Eu, St.', '1', 'TYX83QFQ6YZ', '$7.26', 'South Korea', 'a.sollicitudin@outlook.couk', '1-777-584-4552', 'Nizhny Novgorod Oblast', 4, 'id ante dictum cursus. Nunc mauris elit, dictum eu, eleifend', '36957', 'Harper Knapp'),
	(4, '435-143 Id, Street', '13', 'SSF64BOI4SC', '$2.23', 'Peru', 'tincidunt@protonmail.com', '1-754-218-9117', 'Rivne oblast', 2, 'ipsum. Curabitur consequat, lectus sit amet luctus vulputate, nisi sem', '5628', 'Cameron Clements'),
	(5, '908-4643 Erat, Rd.', '13', 'OSQ43STI9YG', '$93.57', 'Australia', 'bibendum@protonmail.com', '(542) 356-2583', 'Huádōng', 1, 'turpis vitae purus gravida sagittis. Duis gravida. Praesent eu nulla', '1656', 'Warren Best');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
