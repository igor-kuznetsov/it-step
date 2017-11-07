SELECT
  `products`.`name` as `product`,
  `categories`.`name` as `category`
FROM `products`, `categories`;

SELECT
  `products`.`name` as `product`,
  `categories`.`name` as `category`
FROM `products`, `categories`
WHERE `products`.`category_id` = `categories`.`id`;
