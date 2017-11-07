INSERT INTO `products` VALUES (NULL, 'iPhone7', NULL, 555.55, 1);

INSERT INTO `products` (`name`, `price`, `category_id`) VALUES ('Nokia', 5.55, 2) ;

INSERT INTO `products` (`name`, `price`, `category_id`)
VALUES ('Test', 999.99, 3), ('Test2', 23.66, 3);

INSERT INTO `products` (`name`, `price`, `category_id`, `description`)
VALUES ('iPhone6', 888.88, 1, 'dummy description for testing'),
  ('iPhone6 S', 888.88, 1, 'dummy description for testing'),
  ('iPhone6 XL', 888.88, 1, 'dummy description for testing'),
  ('Motorola', 777.77, 2, 'dummy description for testing'),
  ('Siemens', 777.77, 2, 'dummy description for testing');