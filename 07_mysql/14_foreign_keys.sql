CREATE TABLE `categories` (
  `id` INT UNSIGNED AUTO_INCREMENT,
  `name` VARCHAR(255),
  PRIMARY KEY (`id`)
);

INSERT INTO `categories` (`name`)
VALUES ('Category 1'),('Category 2'),('Category 3'),('Category 4');

ALTER TABLE `products` ADD INDEX (`category_id`);

ALTER TABLE `products`
  ADD CONSTRAINT `c_category_id`
FOREIGN KEY (`category_id`)
REFERENCES `categories`(`id`)
  ON DELETE CASCADE
  ON UPDATE CASCADE;
