CREATE TABLE `products` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `name` VARCHAR(255),
  `description` TEXT NULL,
  `price` DECIMAL(10, 2) UNSIGNED,
  `category` INT UNSIGNED,
  PRIMARY KEY (`id`)
);

CREATE TABLE `my_table` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `data` TEXT NULL,
  PRIMARY KEY (`id`)
);