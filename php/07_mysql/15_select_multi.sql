SELECT
  `products`.`name` as `product`,
  `categories`.`name` as `category`
FROM `products`, `categories`;

SELECT
  `products`.`name` as `product name`,
  `products`.`category_id` as `category_id`,
  `categories`.`name` as `category name`
FROM `products`, `categories`
WHERE `products`.`category_id` = `categories`.`id`;
