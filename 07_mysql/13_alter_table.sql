ALTER TABLE `products` ADD `test_row` VARCHAR (25) DEFAULT 'def_value';

ALTER TABLE `products` CHANGE COLUMN `test_row` `tr` TEXT;

ALTER TABLE `products` DROP COLUMN `tr`;