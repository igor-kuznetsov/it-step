CREATE TABLE `mywebsite`.`products` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  `description` TEXT NULL,
  `price` DECIMAL(10, 2) UNSIGNED NOT NULL,
  `category_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `mywebsite`.`products` (`name`, `price`, `category_id`, `description`)
VALUES ('iPhone6', 888.88, 1, 'dummy description for testing'),
  ('iPhone6 S', 888.88, 1, 'dummy description for testing'),
  ('iPhone6 XL', 888.88, 1, 'dummy description for testing'),
  ('Motorola', 777.77, 2, 'dummy description for testing'),
  ('Siemens', 777.77, 2, 'dummy description for testing');

INSERT INTO `mywebsite`.`products` (`name`, `price`, `category_id`)
VALUES ('Nokia', 5.55, 2),
  ('Test', 999.99, 3),
  ('Test2', 23.66, 3);

CREATE TABLE `mywebsite`.`categories` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `name` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`)
);

INSERT INTO `mywebsite`.`categories` (`name`)
VALUES ('Category 1'),('Category 2'),('Category 3'),('Category 4');

ALTER TABLE `mywebsite`.`products` ADD INDEX (`category_id`);

ALTER TABLE `mywebsite`.`products`
  ADD CONSTRAINT `c_category_id`
FOREIGN KEY (`category_id`)
REFERENCES `mywebsite`.`categories`(`id`)
  ON DELETE CASCADE
  ON UPDATE NO ACTION;
