SELECT
  `products`.`name` as `product`,
  `categories`.`name` as `category`
FROM `products`
  INNER JOIN `categories`
    ON `products`.`category_id` = `categories`.`id`;


SELECT
  `products`.`name` as `product`,
  `categories`.`name` as `category`
FROM `products`
  RIGHT JOIN `categories`
    ON `products`.`category_id` = `categories`.`id`;