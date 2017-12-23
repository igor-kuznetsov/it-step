CREATE TABLE `my_db2`.`products` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `name` VARCHAR(255) DEFAULT 'Vasya',
  `description` TEXT NULL,
  `price` DECIMAL(10, 2) UNSIGNED NOT NULL,
  `category_id` INT UNSIGNED NOT NULL ,
  PRIMARY KEY (`id`)
);

CREATE TABLE `my_table` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `data` TEXT NULL,
  PRIMARY KEY (`id`)
);