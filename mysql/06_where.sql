SELECT * FROM `products` WHERE `name` = 'iPhone7';

SELECT * FROM `products` WHERE `name` != 'iPhone7';

SELECT * FROM `products` WHERE `name` LIKE '%iPhone%';

SELECT * FROM `products` WHERE `name` NOT LIKE '%iPhone_';

SELECT * FROM `products` WHERE `name` IN ('Test', 'Test2');

SELECT * FROM `products` WHERE `name` NOT IN ('Test', 'Test2');

SELECT * FROM `products` WHERE `description` IS NULL;

SELECT * FROM `products` WHERE `description` IS NOT NULL;

SELECT * FROM `products` WHERE `price` > 200;

SELECT * FROM `products` WHERE `price` >= 200;

SELECT * FROM `products` WHERE `price` < 200;

SELECT * FROM `products` WHERE `price` <= 200;

SELECT * FROM `products` WHERE `price` BETWEEN 100 AND 200;

SELECT * FROM `products` WHERE `price` > 200 AND `name` != 'iPhone7';

SELECT * FROM `products` WHERE `price` > 10000 OR `name` = 'iPhone7';