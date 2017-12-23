SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `mvc` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mvc`;

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

INSERT INTO `categories` (`id`, `name`) VALUES
  (1, 'Category 1'),
  (2, 'Category 2'),
  (3, 'Category 3'),
  (4, 'Category 4');

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `description` text,
  `price` decimal(10,2) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `category_id` (`category_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `description`, `price`, `category_id`) VALUES
  (1, 'iPhone7', NULL, '555.55', 1),
  (2, 'Nokia', NULL, '5.55', 2),
  (3, 'Test', NULL, '999.99', 3),
  (4, 'Test2', NULL, '23.66', 3),
  (5, 'iPhone6', 'dummy description for testing', '888.88', 1),
  (6, 'iPhone6 S', 'dummy description for testing', '888.88', 1),
  (7, 'iPhone6 XL', 'dummy description for testing', '888.88', 1),
  (8, 'Motorola', 'dummy description for testing', '777.77', 2),
  (9, 'Siemens', 'dummy description for testing', '777.77', 2);

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` char(32) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `about` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `login` (`login`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `login`, `password`, `name`, `about`) VALUES
  (1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'I am admin of this website.');


ALTER TABLE `products`
  ADD CONSTRAINT `c_category_id` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
